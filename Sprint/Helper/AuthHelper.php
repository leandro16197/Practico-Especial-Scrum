
<?php


class AuthHelper{



    public function __construct() {
        
    }

    public function checkLogginIn(){
        session_start();
        if(!isset($_SESSION['user'])=="123"){
            header("Location: " . BASE_URL);
            die();
        }

    }

}
