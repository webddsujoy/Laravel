<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends BaseController
{
    public function index(Request $request)
    {
        return 'Index';
    }

    public function getUsers(Request $request)
    {
        $userData = User::orderBy('id', 'desc')->get();
        return $this->sendResponse($userData, 'User List.');
    }

    public function userProfile(Request $request)
    {
        try {
            $userData = User::find(Auth::user()->id);
            return $this->sendResponse($userData, 'User List.');
        } catch (\Throwable $e) {
            return $this->sendError('User List.');
        }
    }
}
