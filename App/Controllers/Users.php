<?php namespace App\Controllers;
use App\Models\User;
use App\Services\UserTransformer;

class Users extends ApiController
{
    public function index()
    {
        $user = User::with('attribute')->limit(10)->get();
        $this->respondWithCollection($user, new UserTransformer);
    }
}