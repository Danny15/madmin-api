<?php namespace App\Models;

class User extends BaseModel
{
    protected $table = 'users';

    public function attribute()
    {
        return $this->hasOne('\App\Models\UserAttribute', 'internalKey');
    }
}