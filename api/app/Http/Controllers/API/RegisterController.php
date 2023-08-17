<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

    // public function resetPassword(Request $request)
    // {
    //     $data = [];

    //     $validator = Validator::make($request->all(), [
    //         'email' => 'required|email|exists:users',
    //         'password' => 'required|string|min:6|confirmed',
    //         'password_confirmation' => 'required',
    //         'token' => 'required'
    //     ]);

    //     if ($validator->fails()) {
    //         return $this->sendError($validator->errors()->first(), $validator->errors(), 400);
    //     }

    //     $updatePassword = DB::table('password_resets')
    //                         ->where(['email' => $request->email, 'token' => $request->token])->first();

    //     if (!$updatePassword) {
    //         return $this->sendError('Invalid token!', ['Invalid token!'], 400);
    //     }

    //     // $user = User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);

    //     $user = User::where('email', $request->email)->first();
    //     $user->password =  Hash::make($request->password);
    //     $user->save();
    //     DB::table('password_resets')->where(['email' => $request->email])->delete();

    //     $user->notify(new UpdatePasswordNotification());
    //     return $this->sendResponse($data, 'Your password has been changed.');
    // }
}
