<?php
/**
 * Created by PhpStorm.
 * User: bossmanlk
 * Date: 12/7/18
 * Time: 2:41 PM
 */

require_once __DIR__."/../ProductRepo.php";
require_once __DIR__."/../../core/Product.php";

class ProductRepoImpl implements ProductRepo

{
    private $connection;

    /**
     * ProductRepoImpl constructor.
     */
    public function __construct()
    {
        $this->connection=(new DBConnection())->getDBConnection();
    }

    /**
     * @param mysqli $connection
     */
    public function setConnection(mysqli $connection): void
    {
        $this->connection = $connection;
    }


    public function addProduct(Product $product): bool
    {
        $result=$this->connection->query(
            "INSERT INTO products(product_name,product_description,product_qty,product_price,product_image_path) VALUES(
                      '{$product->getName()}',
                      '{$product->getDescription()}',
                       {$product->getQty()},
                       {$product->getPrice()},
                      '{$product->getPath()}'
                    )");
        echo mysqli_error($this->connection);

        return $result;

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
       $resultSet= $this->connection->query("SELECT * FROM products");
       return $resultSet->fetch_all();
    }
}