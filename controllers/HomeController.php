<?php
require_once('./controllers/BaseController.php');//sert à charger la classe parent dont on a besoin
require_once ('./classes/Product.php');

class HomeController extends BaseController
{
    protected $name = 'home';

    protected function getTemplateVars()
    {

        return array(
            "controller" => $this->name,
//            "products" => array(new Product(3)),
            "products" => ProductController::getAllProducts(),
        );
    }








}

