<?php

define("DB_DSN", "mysql:dbname=marcwepika;host=localhost");
define("DB_USER", "root");
define("DB_PASS", "Gistoux23");


class DB
{
    private static $instance;

    private function __construct() {}    //on rend le constructeur private pour empêcher qu'on puisse appeler plusieurs fois et créer plusieurs connections

    private function __clone() {}       //on empêche la fonction clone de PHp pour empêcher qu'on puisse cloner la connection

    public static function getInstance(  ) {

        if(!self::$instance){       //si $instance est vide alors on crée la connection à la DB via PDO
            self::$instance = new PDO(DB_DSN, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND,false);
        }

        return self::$instance;
    }



}