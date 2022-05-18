<?php
require_once ('./Helper/AuthHelper.php');
require_once('./Model/TurnosModel.php');
require_once('./View/TurnosView.php');

class TurnosController{
    private $model;
    private $view;
    function __construct(){
      $this->model=new TurnosModel();
      $this->view=new TurnosView();
    }

    function getHome(){
        $Turno=$this->model->getTurno();
        $this->view->showTurnos($Turno);
    }

}