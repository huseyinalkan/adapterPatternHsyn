<?php

namespace App\Currency\Providers;

interface ProviderInterface
{
    public function getData();

    public function saveData();

}
