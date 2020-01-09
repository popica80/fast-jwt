<?php

namespace Popica80\FastJWT;

use Illuminate\Support\Facades\Auth;

class FastJWT
{
  public static function login($email, $password)
  {
    if (Auth::attempt(['email' => $email, 'password' => $password])) {
      return 'token';
    }
    return false;
  }
}
