<?php

namespace Apaa\Http\Controllers;

use Apaa\Models\Service\ServiceInterface;
use Apaa\Models\Category\CategoryInterface;
use Apaa\Http\Requests\SearchRequest;

class SearchController extends Controller
{
    private $category;
    private $service;

    public function __construct(
        CategoryInterface $category,
        ServiceInterface $service
    ) {
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

    public function search(SearchRequest $searchWord)
    {
        if (!$searchWord) {
            return $this->index();
        }

        $searchHits = $this->service->searchService($searchWord->search);

        if (!$searchHits->count()) {
            $searchWord->session()->flash('warn', $searchWord->search.' does not match any service. You can explore the services below or filter by category');

            return $this->index();
        }

        return view('search', [
            'categories' => $this->category->getAll(),
            'services' => $searchHits->paginate(10),
        ]);
    }

    public function searchByCategory(int $categoryId)
    {
        return view('search', [
            'categories' => $this->category->getAll(),
            'services' => $this->category->getServices($categoryId)->paginate(10),
        ]);
    }
}
