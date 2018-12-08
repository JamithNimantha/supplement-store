<?php
/**
 * Created by PhpStorm.
 * User: bossmanlk
 * Date: 12/8/18
 * Time: 5:28 PM
 */

require_once __DIR__."/../UserRepo.php";
require_once __DIR__."/../../core/User.php";

class UserRepoImpl implements UserRepo
{
        private $connection;

    /**
     * UserRepoImpl constructor.
     */
    public function __construct()
    {
        $this->connection=(new DBConnection())->getDBConnection();

    }


    public function setConnection(mysqli $connection): void
    {
        $this->connection=$connection;
    }

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
        $result=$this->connection->query("SELECT * FROM users WHERE user_email='{$email}' AND user_password='{$password}' AND permission_type='admin';");
        if (mysqli_num_rows($result)==1){
            return true;
        }else{
            return false;
        }
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