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
            $datas = Db::getInstance()->query("SELECT * FROM ".static::$definition["table"]." WHERE ".static::$definition["primary"]."=$id;")->fetch(PDO::FETCH_ASSOC);
//            var_dump($datas);
            static::fromRow($this, $datas);
        }

    }

    public static function fromRow($entity, $row) {
        foreach (static::$definition["fields"] as $field){
            if(isset($row[$field])){
                $entity->{$field}= $row[$field];  //{} pour utiliser la variable qui porte le nom contenu dans le str $field
                // i.e. si $field = "image" -> $entity->image = $row["image"];
            }
        }
        return $entity;
    }
}