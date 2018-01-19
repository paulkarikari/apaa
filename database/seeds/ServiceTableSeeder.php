<?php

use Illuminate\Database\Seeder;
use Apaa\Models\Service\Service;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        factory(Service::class, 50)->create()->each(function ($service) {
            $service->posts()->save(factory(App\Post::class)->make());
        });
    }
}
