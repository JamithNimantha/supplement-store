<?php
/**
 * Created by PhpStorm.
 * User: bossmanlk
 * Date: 12/8/18
 * Time: 7:44 PM
 */

require_once __DIR__."/../core/User.php";

interface UserBusiness
{
    public function addUser(User $user):bool ;

    public function updateUser(User $user):bool ;

    public function deleteUser(String  $id):bool ;

    public function loginUser(String $email, String $password);

    public function searchUser(String $id):array ;

    public function getAllUser():array ;

}