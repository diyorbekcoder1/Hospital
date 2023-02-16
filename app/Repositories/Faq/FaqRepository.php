<?php

namespace App\Repositories\Faq;

use Config;
use App\Models\Faq;
use App\Repositories\RepositoryAbstract;
use App\Repositories\CrudableInterface;
use App\Exceptions\Validation\ValidationException;

/**
 * Class FaqRepository.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
class FaqRepository extends RepositoryAbstract implements FaqInterface, CrudableInterface
{

    protected $perPage;
    protected $faq;
    protected static $rules = [
        'question' => 'required',
        'answer' => 'required',
    ];


    public function __construct(Faq $faq)
    {
        $this->faq = $faq;
        $config = Config::get('fully');
        $this->perPage = $config['per_page'];
    }

    public function all()
    {
        return $this->faq->where('lang', $this->getLang())->get();
    }


    public function paginate($page = 1, $limit = 10, $all = false)
    {
        $result = new \StdClass();
        $result->page = $page;
        $result->limit = $limit;
        $result->totalItems = 0;
        $result->items = array();

        $query = $this->faq->orderBy('created_at', 'DESC')->where('lang', $this->getLang());

        $faqs = $query->skip($limit * ($page - 1))->take($limit)->get();

        $result->totalItems = $this->totalFaqs();
        $result->items = $faqs->all();

        return $result;
    }


    public function find($id)
    {
        return $this->faq->findOrFail($id);
    }


    public function create($attributes)
    {
        if ($this->isValid($attributes)) {
            $this->faq->lang = $this->getLang();
            $this->faq->fill($attributes)->save();

            return true;
        }

        throw new ValidationException('Faq validation failed', $this->getErrors());
    }


    public function update($id, $attributes)
    {
        $this->faq = $this->find($id);

        if ($this->isValid($attributes)) {
            $this->faq->fill($attributes)->save();

            return true;
        }

        throw new ValidationException('Faq validation failed', $this->getErrors());
    }


    public function delete($id)
    {
        $this->faq->find($id)->delete();
    }


    protected function totalFaqs()
    {
        return $this->faq->where('lang', $this->getLang())->count();
    }
}
