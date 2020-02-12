<?php

require_once('./classes/SmartyLoader.php');
require_once('./classes/DB.php');

foreach (glob(__DIR__."/controllers/*.php") as $filename)
{
    include_once $filename;
}


$request = explode('/', $_SERVER['REQUEST_URI'])[3];


switch ($request) {
    case '' :
        $controller = new HomeController();
        break;
    default:
        http_response_code(404);
        //        require __DIR__ . '/views/404.php';
        echo '404';
        break;

}




