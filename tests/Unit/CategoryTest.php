<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_should_get_category_by_id()
    {   
        $category = resolve('Apaa\Models\Category\CategoryRepository');
        $this->assertEquals(1, $category->get(1));
    }
}
