<?php

namespace Apaa\Models\Service;

use Apaa\Models\User\User;

class ServiceRepository implements ServiceInterface
{
    private $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function create(array $serviceDate)
    {
        return $this->service->create($serviceDate);
    }

    public function get(int $serviceId)
    {
        return $this->service->find($serviceId);
    }

    public function getUserService(User $user)
    {
        return $user->services();
    }
}
