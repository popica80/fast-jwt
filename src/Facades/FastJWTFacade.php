<?php

namespace Popica80\FastJWT\Facades;

use Illuminate\Support\Facades\Facade;

class FastJWTFacade extends Facade
{

  protected function getFacadeAccessor()
  {
    return 'fast-jwt';
  }
}
