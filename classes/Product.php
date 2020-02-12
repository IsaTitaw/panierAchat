<?php
require_once ('./classes/BaseEntity.php');


class Product extends BaseEntity{
    protected $id;
    protected $name;
    protected $price;
    protected $long_description;
    protected $short_description;
    protected $stock;

    public static $definition= array(
        "table" => "products",
        "primary" => "id",
        "fields"=> array(
            "id",
            "long_description",
            "name",
            "price",
            "short_description",
            "stock")
    );

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
    public function setId($id)
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
    public function setName($name)
    {
        $this->name = $name;
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
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getLongDescription()
    {
        return $this->long_description;
    }

    /**
     * @param mixed $long_description
     */
    public function setLongDescription($long_description)
    {
        $this->long_description = $long_description;
    }

    /**
     * @return mixed
     */
    public function getShortDescription()
    {
        return $this->short_description;
    }

    /**
     * @param mixed $short_description
     */
    public function setShortDescription($short_description)
    {
        $this->short_description = $short_description;
    }

    /**
     * @return mixed
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param mixed $stock
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
    }


}











//    static function getAllProducts(){
//        $pdo = DB::getInstance();
//        $sql="Select * FROM products";
//        $stmt = $pdo->prepare($sql);
//        $stmt->execute();
//        return $stmt->fetchAll();
//    }