<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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
            // create user image full path
            $userData->image = Storage::disk('public')->url($userData->image);
            return $this->sendResponse($userData, 'User List.');
        } catch (\Throwable $e) {
            return $this->sendError('User List.');
        }
    }

    public function profileimgUpdate(Request  $request)
    {
        $user = Auth::user();
        $path = '/uploads/profile_images/';
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image');
            $imageName = uniqid().'_'.$imagePath->getClientOriginalName();
            Storage::disk('public')->put($path . $imageName, file_get_contents($request->file('image')));
        }

        $user->image = $path.$imageName;
        if($user->save()){
            return $this->sendResponse([], 'Profile Image Updated successfully!');
        }
        return $this->sendError('Something went wrong!');
    }

    public function userRoles(Request  $request)
    {
        return 'user roles';
    }
}
