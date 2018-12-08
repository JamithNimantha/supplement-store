<?php
/**
 * Created by PhpStorm.
 * User: bossmanlk
 * Date: 12/7/18
 * Time: 4:49 PM
 */

interface ProductBusiness
{
    public  function  addProduct(Product $product):bool ;

    public  function  updateProduct(Product $product):bool ;

    public  function  deleteProduct(String $id):bool ;

    public  function  searchProduct(String $id):array ;

    public  function  getAllProducts():array ;

}