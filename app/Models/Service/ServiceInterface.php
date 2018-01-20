<?php

namespace Apaa\Models\Service;

use Apaa\Models\User\User;

interface ServiceInterface
{
    public function create(array $serviceData);

    public function get(int $serviceId);

    public function getUserService(User $user);
}
