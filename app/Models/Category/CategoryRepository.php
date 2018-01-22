<?php

namespace Apaa\Models\Category;

class CategoryRepository implements CategoryInterface
{
    private $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function getAll()
    {
        return $this->category->all();
    }

    public function getServices(int $categoryId)
    {
        return $this->category->find($categoryId)->services();
    }
}
