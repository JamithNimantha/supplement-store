<?php
/**
 * Created by PhpStorm.
 * User: bossmanlk
 * Date: 12/8/18
 * Time: 1:38 AM
 */

$file =__DIR__."/../Supplement-Store/api/business/impl/ProductBusinessImpl.php";

require_once __DIR__."/../business/impl/ProductBusinessImpl.php";
require_once __DIR__."/../core/Product.php";

$productBO= new ProductBusinessImpl();
//$operation=$_GET("operation");
$method=$_SERVER["REQUEST_METHOD"];
switch ($method){
    case "GET":
        //echo json_encode($productBO->getAllProducts());
        break;
    case "POST":
        $id=$_POST["ProductID"];
        $name=$_POST["ProductName"];
        $description=$_POST["ProductDescription"];
        $qty=$_POST["ProductQTY"];
        $price=$_POST["UnitPrice"];
        $path= null;
       // $path=$_POST["ProductImage"];

        $tempProduct= new Product($id,$name,$description,$qty,$price,$path);
        $resp=$productBO->addProduct($tempProduct);
        echo $resp;

//        switch ($operation){
//            case "add":
//                $tempProduct= new Product($id,$name,$description,$qty,$price,$path);
//                $resp=$productBO->addProduct($tempProduct);
//                echo $resp;
//                break;
//            case "update":
//                $tempProduct= new Product($id,$name,$description,$qty,$price,$path);
//                $rep=$productBO->updateProduct($tempProduct);
//                echo $resp;
//                break;
//        }

        break;

}