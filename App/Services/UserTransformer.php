<?php namespace App\Services;
use App\Models\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    public function transform(User $user)
    {
        return [
            'id' => (int) $user->id,
            'fullname' => $user->attribute->fullname,
            'email' => $user->attribute->email,
            'phone' => $user->attribute->phone,
            'mobile' => $user->attribute->mobilephone,
            'blocked' => (int) $user->attribute->blocked,
            'logincount' => (int) $user->attribute->logincount,
            'dob' => (int) $user->attribute->dob,
            'gender' => (int) $user->attribute->gender,
            'address' => $user->attribute->address,
            'country' => $user->attribute->country,
            'username' => $user->username,
            'active' => $user->active,
            'remote_key' => $user->remote_key,
            'remote_data' => $user->remote_data,
            'primary_group' => (int) $user->primary_group,
            'session_stale' => $user->session_stale,
            'sudo' => (int) $user->sudo,
        ];
    }
}