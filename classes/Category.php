<?php


class Category extends BaseEntity
{
    protected $id;
    protected $name;
    protected $price;
    protected $long_description;
    protected $short_description;
    protected $stock;
    protected $category;

    public static $definition= array(
        "table" => "products",
        "primary" => "id",
        "fields"=> array(
            "id",
            "long_description",
            "name",
            "price",
            "short_description",
            "stock",
            "category")
    );

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }



}