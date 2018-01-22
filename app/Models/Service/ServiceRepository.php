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

    /**
     * create service for the current user.
     *
     * @param array $serviceData
     * @param User  $user
     */
    public function save(array $serviceData, User $user)
    {
        return $user->services()->create($serviceData);
    }

    public function get(int $serviceId)
    {
        return $this->service->find($serviceId);
    }

    public function getUserService(User $user)
    {
        return $user->services()->with('category');
    }

    public function update(array $serviceData, int $id)
    {
        return $this->service->find($id)->update($serviceData);
    }

    public function delete(int $id)
    {
        return $this->service->find($id)->delete();
    }

    public function getRandomServices()
    {
        return $this->service->with('user')->inRandomOrder();
    }

    public function searchService($searchWord)
    {
        return $this->service->where('service_name', 'Like', '%'.$searchWord.'%')
                            ->orWhere('description', 'Like', '%'.$searchWord.'%');
    }
}
