<?php namespace App\Models;

class UserAttribute extends BaseModel
{
    protected $table = 'user_attributes';

    public function user()
    {
        return $this->belongsTo('\App\Models\User', 'internalKey', 'id');
    }
}