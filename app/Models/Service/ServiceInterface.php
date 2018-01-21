<?php

namespace Apaa\Models\Service;

use Apaa\Models\User\User;

interface ServiceInterface
{
    public function save(array $serviceData, User $user);

    public function get(int $serviceId);

    public function getUserService(User $user);
}
