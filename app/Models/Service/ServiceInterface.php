<?php

namespace Apaa\Models\Service;

interface ServiceInterface
{
    public function create(array $serviceData);

    public function get(int $serviceId);
}
