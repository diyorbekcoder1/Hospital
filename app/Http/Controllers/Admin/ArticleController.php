<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Article\ArticleRepository;
use App\Repositories\Category\CategoryRepository;
use App\Services\Pagination;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    protected $article;
    protected $category;
    protected $perPage;

    public function __construct(ArticleRepository $article, CategoryRepository $category)
    {
//        View::share('active', 'blog');
        $this->article = $article;
        $this->category = $category;
        $this->perPage = config('cms.modules.article.per_page');
    }

    public function index()
    {
        $pagiData = $this->article->paginate(request()->get('page', 1), $this->perPage, true);
        $articles = Pagination::makeLengthAware($pagiData->items, $pagiData->totalItems, $this->perPage);
        return view('backend.article.index', compact('articles'));
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
