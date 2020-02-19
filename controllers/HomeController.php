<?php


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

