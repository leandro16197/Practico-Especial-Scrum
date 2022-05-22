<?php
require_once('./Helper/AuthHelper.php');
require_once('./Model/TurnModel.php');
require_once('./View/TurnosView.php');

class TurnosController
{
  private $model;
  private $view;

  function __construct()
  {
    $this->model = new TurnModel();
    $this->view = new TurnosView();
  }

  function getHome()
  {
    $Turno = $this->model->getTurnsByPatientId(11223344);
    $Medicos = $this->model->getMedicalsByPatientId(11223344);
    $this->view->showTurnos($Turno, $Medicos);
  }

  function getTurnsOfMedical()
  {
    $idMedical = $_POST['medico'];
    if (!isset($idMedical) || empty($idMedical)) {
      $this->view->renderError("Error! medico no especificado");
      return;
    }
    $Turno = $this->model->getTurnsByMedicalId($idMedical);
    $Medico = $this->model->getMedicalById($idMedical);
    $this->view->showTurnosByMedico($Turno, $Medico);
  }
}
