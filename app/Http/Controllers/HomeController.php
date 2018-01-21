<?php

namespace Apaa\Http\Controllers;

use Apaa\Models\Category\CategoryInterface;
use Apaa\Models\Service\ServiceInterface;

class HomeController extends Controller
{
    private $category;
    private $service;

    public function __construct(
        CategoryInterface $category,
        ServiceInterface $service
    ) {
        $this->middleware('auth');
        $this->category = $category;
        $this->service = $service;
    }

    /**
     * Shows authenticated user the search with random services.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('search', [
            'categories' => $this->category->getAll(),
            'services' => $this->service->getRandomServices()->paginate(10),
        ]);
    }
}
