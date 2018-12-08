<?php
/**
 * Created by PhpStorm.
 * User: bossmanlk
 * Date: 12/7/18
 * Time: 12:32 PM
 */

class Product
{
    private $id;
    private $name;
    private $description;
    private $qty;
    private $price;
    private $path;

    /**
     * Product constructor.
     * @param $id
     * @param $name
     * @param $description
     * @param $qty
     * @param $price
     * @param $path
     */
    public function __construct($id, $name, $description, $qty, $price, $path)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->qty = $qty;
        $this->price = $price;
        $this->path = $path;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @param mixed $qty
     */
    public function setQty($qty): void
    {
        $this->qty = $qty;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    public function setPath($path): void
    {
        $this->path = $path;
    }

}