<?php

namespace App\Services\User;

use App\Contracts\Dao\User\UserDaoInterface;
use App\Contracts\Services\User\UserServiceInterface;

/**
 * Service class for User
 */
class UserServices implements UserServiceInterface
{
    /**
     * User dao
     */
    private $userDao;

    /**
     * Class Constructor
     * @param UserDaoInterface
     * @return void
     */
    public function __construct(UserDaoInterface $userDao)
    {
        $this->userDao = $userDao;
    }

    /**
     * To show User detail by id
     * @param int $id User id
     */
    public function show($id)
    {
        //
    }

    /**
     * To edit User by id
     * @param int $id User id
     * @return Object $User saved User
     */
    public function edit($id)
    {
        //
    }

    /**
     * To update User by id
     * @param Request $request request with inputs
     * @param int $id User id
     * @return Object $User User Object
     */
    public function update($request, $id)
    {
        //
    }

    /**
     * To delete User by id
     * @param int $id deleted User id
     */
    public function destroy($id)
    {
        //
    }

    /**
     * To submit User login 
     * @param Request $request
     * @return Object $credentials
     */
    public function login($request)
    {
        return $this->userDao->login($request);
    }
}
