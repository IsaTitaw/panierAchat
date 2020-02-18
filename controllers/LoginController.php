<?php
require_once('./controllers/BaseController.php');//sert à charger la classe parent dont on a besoin
require_once ('./classes/User.php');

class LoginController extends BaseController {
    protected $name = "login";


    public function __construct()

    {
        $this->smarty = new SmartyLoader();
        if(isset ($_POST["email"]) && isset($_POST["mdp"])){
            $this->checkLogin();
        }else {
            $this->renderView();
        }
    }
    // comme on hérite de renderview de basecontroller, c'est ici qu'il faut modifier la logique du constructeur




   public function checkLogin(){
       $con = Db::getInstance();
       $stmt = $con->prepare("select * from users where email = :email and mdp = :mdp");
       $stmt->bindParam(":email", $_POST["email"]);
       $stmt->bindParam(":mdp", $_POST["mdp"]);
       $stmt->execute();

       if ($stmt->rowCount() == 0) {
           // ça a foiré, retour à la page de login
           $this->renderView();
           return;
       }

       $_SESSION["currentUser"] = User::fromRow(new User(), $stmt->fetch())->getEmail();
       new HomeController();
   }




}