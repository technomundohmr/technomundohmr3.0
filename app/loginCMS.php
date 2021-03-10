<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;

class loginCMS extends Model implements AuthenticatableContract 
{ 
    use Authenticatable;
    //
}
