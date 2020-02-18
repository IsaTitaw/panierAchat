<?php

require_once('./classes/SmartyLoader.php');
require_once('./classes/DB.php');

foreach (glob(__DIR__."/controllers/*.php") as $filename)
{
    include_once $filename;
}

session_start();
$request = explode('/', $_SERVER['REQUEST_URI'])[3];

switch ($request) {
    case '' :
        $controller = new HomeController();
        break;

    case 'product':
        $id = explode('/', $_SERVER['REQUEST_URI'])[4];
        $controller = new ProductController($id);
        break;

    case 'search':
        $controller = new SearchController();
        break;

    case 'login':
        $controller = new LoginController();
        break;

    case 'logout':
        session_unset();
        $controller = new HomeController();
        break;

    default:
        http_response_code(404);
        //        require __DIR__ . '/views/404.php';
        echo '404';
        break;

}




