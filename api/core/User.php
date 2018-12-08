<?php
/**
 * Created by PhpStorm.
 * User: bossmanlk
 * Date: 12/8/18
 * Time: 5:05 PM
 */

class User
{
    private $id;
    private $fullName;
    private $email;
    private $address;
    private $zip;
    private $city;
    private $password;
    private $type;

    /**
     * User constructor.
     * @param $id
     * @param $fullName
     * @param $email
     * @param $address
     * @param $zip
     * @param $city
     * @param $password
     * @param $type
     */
    public function __construct($id, $fullName, $email, $address, $zip, $city, $password, $type)
    {
        $this->id = $id;
        $this->fullName = $fullName;
        $this->email = $email;
        $this->address = $address;
        $this->zip = $zip;
        $this->city = $city;
        $this->password = $password;
        $this->type = $type;
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
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @param mixed $fullName
     */
    public function setFullName($fullName): void
    {
        $this->fullName = $fullName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param mixed $zip
     */
    public function setZip($zip): void
    {
        $this->zip = $zip;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }




}