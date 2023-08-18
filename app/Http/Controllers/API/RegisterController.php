<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Validator;
use Laravel\Passport\Token as AuthTokensModel;

class RegisterController extends BaseController
{
    
    public function register(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required',
                'c_password' => 'required|same:password',
            ]);

            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }

            $input = $request->all();
            $input['password'] = bcrypt($input['password']);
            $user = User::create($input);
            $success['token'] =  $user->createToken('MyApp')->accessToken;
            $success['name'] =  $user->name;
            
            return $this->sendResponse($success, 'User register successfully.'); 
        } catch (\Throwable $e) {
            return $this->sendError('Something went wrong!', $e);
        }
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')->accessToken;
            $success['name'] =  $user->name;
            return $this->sendResponse($success, 'User login successfully.');
        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        }
    }

    public function logout(Request $request)
    {
        if (Auth::user()) {
            Auth::user()->token()->revoke();
            return $this->sendResponse([], 'You have been successfully logged out!');
        }
        return $this->sendError('Unable to Logout');
    }

    // public function forgotPassword(Request $request)
    // {
    //     $data2 = [];

    //     $validator = Validator::make($request->all(), [
    //         'email' => 'required|email|exists:users',
    //     ]);

    //     if ($validator->fails()) {
    //         return $this->sendError($validator->errors()->first(), $validator->errors(), 400);
    //     }

    //     $token = Str::random(6);

    //     DB::table('password_resets')->insert([
    //         'email' => $request->email,
    //         'token' => $token,
    //         'created_at' => Carbon::now()
    //     ]);
    //     $data['token'] = $token;

    //     $mailData = [
    //         'subject' => 'Reset Password',
    //         'token' => $token,
    //         'email' => $request->email,
    //         'from' => env('MAIL_FROM_ADDRESS'),
    //     ];

    //     $user =  User::where('email', $request->input('email'))->first();

    //     $user->notify(new ForgotPasswordNotification($mailData));

    //     return $this->sendResponse($data2, 'We have e-mailed your password reset link.');
    // }

    public function resetPassword(Request $request)
    {
        try {
            $data = [];
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|exists:users',
                'password' => 'required|string|min:6|confirmed',
                'password_confirmation' => 'required',
            ]);

            if ($validator->fails()) {
                return $this->sendError($validator->errors()->first(), $validator->errors(), 400);
            }

            $user = User::where('email', $request->email)->first();
            $user->password =  Hash::make($request->password);
            $user->save();
            
            return $this->sendResponse($data, 'Your password has been changed.');
        } catch (\Throwable $e) {
            return $this->sendError('Something went wrong!');
        }
    }

    public function passwordUpdate(Request $request)
    {
        try {
            $data = [];
            $validator = Validator::make($request->all(), [
                'old_password' => 'required',
                'password' => 'required|string|min:6|confirmed',
                'password_confirmation' => 'required',
            ]);
    
            if ($validator->fails()) {
                return $this->sendError($validator->errors()->first(), $validator->errors());
            }
    
            $user = Auth::user();

            if (!Hash::check($request->old_password, $user->password)) {
                return $this->sendError('Old password does not match!');
            }
    
            $user->password = Hash::make($request->input('password'));
    
            if ($user->save()) {
                return $this->sendResponse($data, 'Password changed successfully!');
            }
            return $this->sendError('Something went wrong!');
        } catch (\Throwable $e) {
            return $this->sendError('Something went wrong!');
        }
    }
}
