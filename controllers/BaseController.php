<?php
require_once('./classes/SmartyLoader.php');
require_once ('./classes/Product.php');



abstract class BaseController
{
    protected $name = 'base';
    protected $smarty; //correspond à l'instance de Smarty


    public function __construct()

    {
        $this->smarty = new SmartyLoader();
        $this->renderView();

    }


    protected function renderView()
    {
        $this->smarty->getHeader($this->getAssets(), true, $this->name); //va chercher le header
        $this->smarty->assign($this->getTemplateVars());  //récupère les données que je veux envoyer et utiliser dans mon template
        $this->smarty->display(strtolower($this->name).'.tpl'); //display la bonne page en fct du name
        $this->smarty->getFooter(); //va chercher le footer
    }

    protected function getAssets()
    {
        return $assets = array("css" => array(), "js" => array());  //il va chercher le tableau avec les css et les js
    }

    protected function getTemplateVars()
    {
        return array(
            "controller" => $this->name,

        );
    }
}