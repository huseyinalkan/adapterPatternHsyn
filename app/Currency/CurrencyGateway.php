<?php

namespace App\Currency;

use App\Currency\Providers\ProviderInterface;

class CurrencyGateway
{

   public function __construct(ProviderInterface $provider)
   {
       $this->provider=$provider;
   }

   public $provider =null;


}
