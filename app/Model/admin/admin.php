<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    public function getRememberToken()
{
    return $this->remember_token;
}

public function setRememberToken($value)
{
    $this->remember_token = $value;
}

public function getRememberTokenName()
{
    return 'remember_token';
}
}
