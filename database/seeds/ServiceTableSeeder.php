<?php

use Apaa\User;
use Illuminate\Database\Seeder;
use Apaa\Models\Service\Service;
use Apaa\Models\Category\Category;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        factory(User::class)->create([
            'email' => 'paulkarikari1@gmail.com',
            'user_type' => 2,
        ]);

        factory(User::class)->create([
            'email' => 'client@gmail.com',
            'user_type' => 1,
        ]);
        factory(User::class, 2)->create([
            'user_type' => 2,
        ]);

        factory(User::class, 2)->create([
            'user_type' => 1,
        ]);

        factory(Category::class)->create([
            'category_name' => 'Construction',
        ]);

        factory(Category::class)->create([
            'category_name' => 'Mechanic',
        ]);

        factory(Service::class, 10)->create([
            'category_id' => 1,
            'user_id' => 2,
        ]);
        factory(Service::class, 10)->create([
            'category_id' => 2,
            'user_id' => 2,
        ]);
    }
}
