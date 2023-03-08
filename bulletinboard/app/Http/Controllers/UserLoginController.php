<?php

namespace App\Http\Controllers;

use App\Contracts\Services\User\UserServiceInterface;
use App\Http\Requests\UserLoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use function PHPUnit\Framework\isEmpty;

class UserLoginController extends Controller
{
    private $userInterface;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserServiceInterface $userServiceInterface)
    {
        $this->userInterface = $userServiceInterface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.login');
    }

    /**
     * Show the form for user login.
     * @param  \App\Http\Requests\UserLoginRequest $request
     * @return \Illuminate\Http\Response
     */
    public function login(UserLoginRequest $request)
    {
        $remember_me = $request->has('remember') ? true : false;
        $credentials = $this->userInterface->login($request);
        if (Auth::attempt($credentials, $remember_me)) {
            return redirect()->intended('post')
                ->with('info', 'You have successfully logged in to your account.');
        } elseif (!Hash::check($request->password, $credentials['password'])) {
            return redirect()->back()->withInput($request->only('email'))
                ->with('wrongPwd', 'Incorrect Password.');
        }
    }

    /**
     * Logout user.
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('login');
    }
}
