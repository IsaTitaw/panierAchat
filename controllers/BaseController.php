<?php
require_once('./classes/SmartyLoader.php');
require_once ('./classes/Product.php');



abstract class BaseController
{
    protected $name = 'base';
    protected $smarty; //correspond à l'instance de Smarty


    public function __construct()

    {
        $pdo = DB::getInstance(); //créer la connection à la db
//        var_dump(Db::getInstance()->query("SELECT * FROM marcwepika.products;")->fetchAll(PDO::FETCH_ASSOC));
        $this->smarty = new SmartyLoader();
        $this->renderView();


    }


    protected function renderView()
    {
        $this->smarty->getHeader($this->getAssets(), $this->name,true);
        $this->smarty->assign($this->getTemplateVars());
        $this->smarty->display(strtolower($this->name).'.tpl');
        $this->smarty->getFooter();
    }

     protected function getAssets()
    {
        return $assets = array("css" => array(), "js" => array());
    }

    protected function getTemplateVars()
    {
        return array(
            "controller" => $this->name,
        );
    }
}
