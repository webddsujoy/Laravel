<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends BaseController
{
    public function index(Request $request)
    {
        return 'Index';
    }

    public function getUsers(Request $request)
    {
        $userData = User::get();
        return $this->sendResponse($userData, 'User List.');
    }
}
