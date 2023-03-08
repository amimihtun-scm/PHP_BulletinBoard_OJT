<?php

namespace App\Dao\User;

use App\Contracts\Dao\User\UserDaoInterface;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

/**
 * Data accessing object for User
 */
class UserDao implements UserDaoInterface
{
    /**
     * To show User detail by id
     * @param string $id User id
     */
    public function show($id)
    {
        
    }
    
    /**
     * To edit User by id
     * @param string $id User id
     * * @return Object $User saved User
     */
    public function edit($id)
    {
        
    }

    /**
     * To update User by id
     * @param UpdateUserRequest $request request with inputs
     * @param string $id User id
     * @return Object $User User Object
     */
    public function update($request, $id)
    {
        
    }

    /**
     * To delete User by id
     * @param string $id User id
     * @param string $id deleted User id
     */
    public function destroy($id)
    {
        
    }

    /**
     * To submit User login 
     * @param $request
     * @return View Users 
     */
    public function login($request)
    {
        // $user = User::where('email', $request->email)->first();
        // if (collect($user)->isNotEmpty()) {
        //     if (Hash::check($request->password, $user->password)) {
        //         return $request->only('email', 'password');
        //     }
        // }
        $credentials = $request->only('email', 'password');
        return $credentials;
    }
}
