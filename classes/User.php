<?php


class User extends BaseEntity
{
    protected $id;
    protected $email;
    protected $mdp;
    protected $name;

    public static $definition= array(
        "table" => "users",
        "primary" => "id",
        "fields"=> array(
            "id",
            "email",
            "mdp",
            "name")
    );

    public function getEmail() {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }




}