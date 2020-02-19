<?php
require_once('./controllers/BaseController.php');//sert à charger la classe parent dont on a besoin
require_once ('./classes/Product.php');

class ProductController extends BaseController
{
    protected $name = 'product';
    protected $id;


    public function __construct($idDeIndexPhp)
    {
        $this->smarty = new SmartyLoader();
        $this->id = $idDeIndexPhp;
        $this->renderView();
    }

    protected function getTemplateVars()
    {
        return array(
            "controller" => $this->name,
            "product" => new Product($this->id)

        );
    }

    public function getAllProducts(){
        $pdo = DB::getInstance();
        $sql="Select * FROM products";

        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $rows = $stmt->fetchAll();
        $products = [];
        var_dump($products);
        foreach ($rows as $key => $row) {
            $products[] = Product::fromRow(new Product(), $row);
        }

        return $products;
    }

}