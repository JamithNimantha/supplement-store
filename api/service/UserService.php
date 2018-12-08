<?php
/**
 * Created by PhpStorm.
 * User: bossmanlk
 * Date: 12/8/18
 * Time: 8:55 PM
 */
require_once __DIR__."/../business/impl/UserBusinessImpl.php";
require_once __DIR__."/../core/User.php";

$userBO= new UserBusinessImpl();
$method=$_SERVER["REQUEST_METHOD"];
switch ($method){
    case "GET":
        break;
    case "POST":
        $email =$_POST['email'];
        $password=$_POST['password'];

        $resp=$userBO->loginUser($email,$password);
        echo $resp;

        break;

}
