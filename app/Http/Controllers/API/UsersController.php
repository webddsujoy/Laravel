<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
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
        try {
            $per_page=10;
            if($request->has('per_page')) $per_page=$request->per_page;
            $userData = User::when($request->search, function ($query, $search) {
                $query->where('id', $search);
            })->orderBy('id', 'desc')->paginate($per_page);
            foreach ($userData as $key => &$user) {
                $user['image'] = '<img src="'. Storage::disk('public')->url($user->image) .'" class="" alt="User Image" style="width: 40px;">';
                $user['action'] = '<div class="btn-group">'.
                                        '<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.
                                            '<i class="fa fa-cog" aria-hidden="true"></i>'.
                                        '</button>'.
                                        '<div class="dropdown-menu">'.
                                            '<a class="dropdown-item user_edit" data-user-edit="'.$user->id.'" href="#"><i class="fas fa-edit"></i> Edit</a>'.
                                            '<a class="dropdown-item user_delete" data-user-delete="'.$user->id.'" href="#"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>'.
                                        '</div>'.
                                    '</div>';
            }
            return $this->sendResponse($userData, 'User List.');
        } catch (\Throwable $e) {
            return $this->sendError('Something went wrong!');
        }
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

    public function country_list()
    {
        return $this->sendResponse(Country::all(), 'Country list fetched successfully!');
    }

    public function state_list($country_id)
    {
        return $this->sendResponse(State::where('country_id',$country_id)->get(), 'State list fetched successfully!');
    }

    public function city_list($state_id)
    {
        return $this->sendResponse(City::where('state_id',$state_id)->get(), 'City list fetched successfully!');
    }
    
}
