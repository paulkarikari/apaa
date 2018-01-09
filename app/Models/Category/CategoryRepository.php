<?php
namespace Apaa\Models\Category;



class CategoryRepository  implements CategoryInterface
{   
    private $category;
    public function __construct(Category $category) {
        $this->category = $category;
    }

    public function get(int $categoryId) {
        return $categoryId;
    }
}
