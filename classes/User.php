<?php


class User extends BaseEntity
{
    protected $id;
    protected $email;
    protected $mdp;

    public static $definition= array(
        "table" => "users",
        "primary" => "id",
        "fields"=> array(
            "id",
            "email",
            "mdp")
    );

    public function getEmail() {
        return $this->email;
    }
}