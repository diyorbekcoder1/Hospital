<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Repositories\Page\PageInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class PageController extends Controller
{
    protected $page;

    public function __construct(PageInterface $page){

        $this->page=$page;
    }

    public function show($slug){

        $page = $this->page->getBySlug($slug, true);

        if ($page === null) {
            return Response::view('errors.missing', array(), 404);
        }

        return view('front.page.show', compact('page'));
    }
}
