<?php
/**
 * Created by PhpStorm.
 * User: bossmanlk
 * Date: 12/7/18
 * Time: 7:23 PM
 */

require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../core/Product.php";
require_once __DIR__."/../ProductBusiness.php";
require_once __DIR__."/../../repo/impl/ProductRepoImpl.php";
class ProductBusinessImpl implements ProductBusiness
{

    public function addProduct(Product $product): bool
    {
        $connection=(new DBConnection())->getDBConnection();
        $productRepo = new ProductRepoImpl();
        $productRepo->setConnection($connection);
//        $connection->autocommit(false);

//        $connection->commit();
//        $connection->rollback();
//        $connection->autocommit(true);
        return $productRepo->addProduct($product);
    }

    public function updateProduct(Product $product): bool
    {
        // TODO: Implement updateProduct() method.
    }

    public function deleteProduct(String $id): bool
    {
        // TODO: Implement deleteProduct() method.
    }

    public function searchProduct(String $id): array
    {
        // TODO: Implement searchProduct() method.
    }

    public function getAllProducts(): array
    {
        $connection=(new DBConnection())->getDBConnection();
        $productRepo= new ProductRepoImpl();
        $productRepo->setConnection($connection);
        return $productRepo->getAllProducts();
    }
}