<?php
/**
 * Created by PhpStorm.
 * User: bossmanlk
 * Date: 12/8/18
 * Time: 7:46 PM
 */

require_once  __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../core/User.php";
require_once __DIR__."/../UserBusiness.php";
require_once  __DIR__."/../../repo/impl/UserRepoImpl.php";

class UserBusinessImpl implements UserBusiness
{

    public function addUser(User $user): bool
    {
        // TODO: Implement addUser() method.
    }

    public function updateUser(User $user): bool
    {
        // TODO: Implement updateUser() method.
    }

    public function deleteUser(String $id): bool
    {
        // TODO: Implement deleteUser() method.
    }

    public function loginUser(String $email, String $password)
    {
        $connectin =(new DBConnection())->getDBConnection();
        $userRepo=new UserRepoImpl();
        $userRepo->setConnection($connectin);
        return $userRepo->loginUser($email,$password);
    }

    public function searchUser(String $id): array
    {
        // TODO: Implement searchUser() method.
    }

    public function getAllUser(): array
    {
        // TODO: Implement getAllUser() method.
    }
}