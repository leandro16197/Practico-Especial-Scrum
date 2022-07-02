<?php
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
  function getViewTurnos()
  {
    $turnos=$this->model->getTurnsOfMedical();
    $medicos=$this->model->getAllMedicals();
    $this->view->turnos($turnos, $medicos);
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

  function showConfirmTurn()
  {

    if (
      !empty($_POST['medicalName']) && !empty($_POST['medicalSpeciality']) && !empty($_POST['date']) &&
      !empty($_POST['id_turno']) && !empty($_POST['mail']) && !empty($_POST['nombre_paciente']) && !empty($_POST['apellido_paciente'])
    ) {
      $medicalName = $_POST['medicalName'];
      $medicalSpeciality = $_POST['medicalSpeciality'];
      $date = $_POST['date'];
      $id_turno = $_POST['id_turno'];
      $imagen = $_POST['imagen'];

      $mailPaciente = $_POST['mail'];
      $nombrePaciente = $_POST['nombre_paciente'];
      $apellidoPaciente = $_POST['apellido_paciente'];

      $to = $mailPaciente;
      $subject = "Confirmacion de turno medico";
      $message = "Sr/a " . "$nombrePaciente " . "$apellidoPaciente" . ". Usted tiene un turno para la fecha " . "$date" . " con el profesional " . "$medicalName";
      $headers = "From: turnofaciltandil@gmail.com";
      mail($to, $subject, $message, $headers);

      $this->view->showConfirmTurn($medicalName, $medicalSpeciality, $date, $id_turno, $imagen);
    }
  }
}
