<?php
/**
 * This class extends legacy Smarty class and contains all the tools methods to render views of the website.
 */

require_once('./vendors/smarty/Smarty.class.php');

define("JS_DIR", "./views/js/");
define("CSS_DIR", "./views/css/");

class SmartyLoader extends Smarty
{
    public function __construct()
    {
        parent::__construct();
        /**
         * Smarty config
         */
        $this->template_dir = './views/templates';
        $this->compile_dir = './views/templates_c';
        $this->config_dir = './views/configs/';
        $this->cache_dir = './views/cache/';
    }

    /**
     * Compile and render header template.
     * @param $title : page title
     * @throws SmartyException
     */
    public function getHeader($assets = array("css" => array(), "js" => array()),$title, $bootstrap=true)
    {
//        [] == array push (nouvel élément a la fin du tableau)
        $assets['css'][] = "./views/css/global.css";
        $this->assign(array(
            'title' => $title,
            'assets'=>$assets,
            'bootstrap'=>$bootstrap,
            'userEmail'=>isset($_SESSION["currentUser"]) ? $_SESSION["currentUser"] : null
        ));

        $this->display('header.tpl');
    }

    /**
     * Compile and render footer template.
     * @throws SmartyException
     */
    public function getFooter()
    {
        $this->display('footer.tpl');
    }
}