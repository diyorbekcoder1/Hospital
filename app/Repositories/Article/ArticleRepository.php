<?php
namespace App\Repositories\Article;

use App\Models\Article;
use App\Repositories\RepositoryAbstract;
use Illuminate\Support\Facades\Config;
use StdClass;

class ArticleRepository extends RepositoryAbstract {
    protected $width;
    protected $height;
    protected $thumbWidth;
    protected $thumbHeight;
    protected $imgDir;
    protected $perPage;
    protected $article;

    public function __construct(Article $article)
    {
        $config = Config::get('cms');
        $this->perPage = $config['per_page'];
        $this->width = $config['modules']['article']['image_size']['width'];
        $this->height = $config['modules']['article']['image_size']['height'];
        $this->thumbWidth = $config['modules']['article']['thumb_size']['width'];
        $this->thumbHeight = $config['modules']['article']['thumb_size']['height'];
        $this->imgDir = $config['modules']['article']['image_dir'];
        $this->article = $article;
    }

    public function all()
    {
        return $this->article->with('tags')->orderBy('created_at', 'DESC')->where('is_published', 1)->where('lang', $this->getLang())->get();
    }

    public function getLastArticle($limit)
    {
        return $this->article->orderBy('created_at', 'desc')->where('lang', $this->getLang())->take($limit)->offset(0)->get();
    }

    public function lists()
    {
        return $this->article->get()->where('lang', $this->getLang())->pluck('title', 'id');
    }

    public function paginate($page = 1, $limit = 10, $all = false)
    {
        $result = new StdClass();
        $result->page = $page;
        $result->limit = $limit;
        $result->totalItems = 0;
        $result->items = array();

        $query = $this->article->with('tags')->orderBy('created_at', 'DESC')->where('lang', $this->getLang());

        if (!$all) {
            $query->where('is_published', 1);
        }

        $articles = $query->skip($limit * ($page - 1))->take($limit)->get();

        $result->totalItems = $this->totalArticles($all);
        $result->items = $articles->all();

        return $result;
    }

    public function find($id)
    {
        return $this->article->with(['tags', 'category'])->findOrFail($id);
    }

    public function getBySlug($slug)
    {
        return $this->article->with(['tags', 'category'])->where('slug', $slug)->first();
    }
    protected function totalArticles($all = false)
    {
        if (!$all) {
            return $this->article->where('is_published', 1)->where('lang', $this->getLang())->count();
        }

        return $this->article->where('lang', $this->getLang())->count();
    }
}
