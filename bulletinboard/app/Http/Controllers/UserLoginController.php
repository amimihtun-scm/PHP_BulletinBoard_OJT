<?php

namespace App\Http\Controllers;

use App\Contracts\Services\User\UserServiceInterface;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
     * @return view Login
     */
    public function index()
    {
        if (!Auth::check()) {
            return view('users.login');
        }
        return redirect()->route('post.index');
    }

    /**
     * Show the form for user login.
     * @param UserLoginRequest $request
     * @return \Illuminate\Http\Response
     */
    public function login(UserLoginRequest $request)
    {
        $remember_me = $request->has('remember') ? true : false;
        $credentials = $this->userInterface->login($request);
        if (Auth::attempt($credentials, $remember_me)) {
            setcookie('remember', $remember_me, time()+(60*60));
            return redirect()->intended('post')
                ->with('info', 'You have successfully logged in to your account.');
        }

        return redirect()->back()->withInput($request->only('email', 'password'))
            ->with('info', 'Incorrect Username and Password');
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
