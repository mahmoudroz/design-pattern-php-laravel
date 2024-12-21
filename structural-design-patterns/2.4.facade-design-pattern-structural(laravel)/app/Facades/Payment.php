<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Payment extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \App\Services\PaymentGateway::class;
    }
}