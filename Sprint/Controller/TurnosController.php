<?php
require_once ('./Helper/AuthHelper.php');
require_once('./Model/TurnModel.php');
require_once('./View/TurnosView.php');

class TurnosController{
    private $model;
    private $view;

    function __construct(){
      $this->model=new TurnModel();
      $this->view=new TurnosView();
    }

    function getHome(){
        $Turno=$this->model->getTurnsByPatientId(11223344);
        $this->view->showTurnos($Turno);
    }

    function createTurno(){
      $this->view->createTurno();
    }

}