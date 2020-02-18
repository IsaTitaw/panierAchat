<?php


class SearchController extends BaseController
{
    protected $name = "search";


    public function getProductsByName()
    {

        $result = Db::getInstance()->query("SELECT * FROM products  WHERE name like '%" . $_POST["productName"] . "%'")->fetchAll();
        $products = [];

        foreach ($result as $key => $row) {
            $products[] = Product::fromRow(new Product(), $row); //on crée un nouvel objet product dans lequel on vient injecter la valeur contenue dans $row

        }

        return $products;
    }

    protected function getTemplateVars()
    {
        return array(
            "controller" => $this->name,
            "products" => $this->getProductsByName()    //"" = nom des variables qui seront utilisées dans le template

        );
    }
}



