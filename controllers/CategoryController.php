<?php
require_once('./controllers/BaseController.php');
require_once ('./classes/Category.php');

class CategoryController extends BaseController
{
    protected $name= 'category';


    public function getProductsByCategory($categorie)
    {

        switch ($categorie){
            case '':
                $result = Db::getInstance()->query("SELECT * FROM products")->fetchAll();
             
            break;
            
            case 'animaux':
             $result = Db::getInstance()->query("SELECT * FROM products WHERE category = 'animaux'")->fetchAll();
             
            break;
            
            case 'travail':
                $result = Db::getInstance()->query("SELECT * FROM products  WHERE category ='travail'")->fetchAll();
             
            break;
            
             case 'maison':
                $result = Db::getInstance()->query("SELECT * FROM products  WHERE category ='maison'")->fetchAll();
            
            break;
        }
        
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
            "products" => $this->getProductsByCategory()    //"" = nom des variables qui seront utilisées dans le template

        );
    }
}
