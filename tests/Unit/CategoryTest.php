<?php

namespace Tests\Unit;

use Tests\TestCase;

class CategoryTest extends TestCase
{
    public function test_should_get_categories()
    {
        $category = resolve('Apaa\Models\Category\CategoryRepository');
        $this->assertTrue(true);
    }
}
