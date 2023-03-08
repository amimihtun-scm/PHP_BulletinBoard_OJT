<?php

namespace App\Contracts\Dao\User;

use App\Http\Requests\UpdateUserRequest;

/**
 * Interface for Data Accessing Object of User
 */
interface UserDaoInterface
{
    /**
     * To show User detail by id
     * @param string $id User id
     */
    public function show($id);

    /**
     * To edit User by id
     * @param string $id User id
     * * @return Object $User saved User
     */
    public function edit($id);
    
    /**
     * To update User by id
     * @param UpdateUserRequest $request request with inputs
     * @param string $id User id
     * @return Object $User User Object
     */
    public function update($request, $id);

    /**
     * To delete User by id
     * @param string $id User id
     * @param string $id deleted User id
     */
    public function destroy($id);

    /**
     * To submit User login 
     * @param $request
     * @return View Users 
     */
    public function login($request);
}
