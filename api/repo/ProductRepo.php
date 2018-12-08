<?php
/**
 * Created by PhpStorm.
 * User: bossmanlk
 * Date: 12/7/18
 * Time: 2:31 PM
 */

require_once __DIR__."/../core/Product.php";

interface ProductRepo
{
    public function setConnection(mysqli $connection):void ;
    public function addProduct(Product $product):bool ;
    public function updateProduct(Product $product):bool ;
    public function deleteProduct(String $id):bool ;
    public function searchProduct(String $id): array ;
    public function getAllProducts(): array ;

}