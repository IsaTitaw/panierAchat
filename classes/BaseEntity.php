<?php


class BaseEntity{

    public static $definition;

    /**
     * BaseEntity constructor.
     * @param $id
     */
    public function __construct($id=NULL)
    {
        if (!is_null($id)){
            $datas = Db::getInstance()->query("SELECT * FROM ".static::$definition["table"].";")->fetch(PDO::FETCH_ASSOC);
            var_dump($datas);
            foreach (static::$definition["fields"] as $field){
                if(isset($datas[$field])){
                    $this->{$field}= $datas[$field];
                }
            }
        }

    }


}