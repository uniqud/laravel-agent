<?php

namespace Uniqud\LaravelAgent\Http\Controllers;

use Uniqud\LaravelAgent\Http\Resources\Auth as AuthResource;

class AuthController extends Controller
{
    /**
     * Get token.
     * 
     * @return \Uniqud\LaravelAgent\Http\Resources\Auth
     */
    public function getToken()
    {
        return new AuthResource([
            'token' => sha1(env('UNIQUD_APP_TOKEN', ''))
        ]);
    }
}
