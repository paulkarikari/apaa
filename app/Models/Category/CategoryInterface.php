<?php

namespace Apaa\Models\Category;

interface CategoryInterface
{
    public function getAll();

    public function getServices(int $categoryId);
}
