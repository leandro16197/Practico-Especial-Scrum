<?php
require_once ('./Helper/AuthHelper.php');
<<<<<<< HEAD
require_once('./Model/TurnModel.php');
=======
require_once('./Model/TurnosModel.php');
>>>>>>> TM-29
require_once('./View/TurnosView.php');

class TurnosController{
    private $model;
    private $view;
    function __construct(){
<<<<<<< HEAD
      $this->model=new TurnModel();
=======
      $this->model=new TurnosModel();
>>>>>>> TM-29
      $this->view=new TurnosView();
    }

    function getHome(){
<<<<<<< HEAD
        $Turno=$this->model->getTurnsByPatientId(11223344);
        $this->view->showTurnos($Turno);
    }
    
=======
        $Turno=$this->model->getTurno();
        $this->view->showTurnos($Turno);
    }
    
    function createTurno(){
      $this->view->createTurno();
    }

>>>>>>> TM-29
}