<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ServiceTest extends TestCase
{
    use RefreshDatabase;

    public function setUp()
    {
        parent::setUp();
        $this->service = resolve('Apaa\Models\Service\ServiceRepository');
    }

    public function test_should_create_service()
    {
        $serviceData = factory(\Apaa\Models\Service\Service::class)->make();
        $createdService = $this->service->create($serviceData->toArray());
        $this->assertEquals($serviceData->service_name, $createdService->service_name);
    }

    public function test_should_get_service_by_id()
    {
        $serviceData = factory(\Apaa\Models\Service\Service::class)->create();
        $serviceItem = $this->service->get($serviceData->id);
        $this->assertEquals($serviceData->service_name, $serviceItem->service_name);
    }
}
