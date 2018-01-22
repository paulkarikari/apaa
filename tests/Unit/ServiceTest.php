<?php

namespace Tests\Unit;

use Tests\TestCase;
use Apaa\Models\User\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ServiceTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();
        $this->service = resolve('Apaa\Models\Service\ServiceRepository');
    }

    public function test_should_create_service()
    {
        $user = factory(User::class)->create(['user_type' => 2]);
        $serviceData = factory(\Apaa\Models\Service\Service::class)->make();
        $createdService = $this->service->save($serviceData->toArray(), $user);
        $this->assertEquals($serviceData->service_name, $createdService->service_name);
    }

    public function test_should_get_service_by_id()
    {
        $serviceData = factory(\Apaa\Models\Service\Service::class)->create();
        $serviceItem = $this->service->get($serviceData->id);
        $this->assertEquals($serviceData->service_name, $serviceItem->service_name);
    }
}
