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
  function getLogin()
  {
    $this->view->DisplayLogin();
  }

  //esta función, "getViewTurnos()", muestra en pantalla de la secreataria todos los turno y formulario para crear un turno
  //no recibe parámetros
  //sin
  function getViewTurnos()
  {
    $turnos=$this->model->getTurnsOfMedical();
    //Busca todos los médicos guardados en la base de datos, para mostrar opciones en formulario para crear un nuevo turno
    $medicos=$this->model->getAllMedicals();
    //llama al view para que lo muestre por pantalla
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
  function eliminarTurno($id){
    $this->model->deleteTurn($id);
    $this->getViewTurnos();
  }

  //Esta finción, "showConfirmTurn()", completa dos tareas
  //carga la pantalla donde se muestra el turno que fue confirmado
  //envia un email al paciente con los datos del turno que fué confirmado
  //parametro que recibe: recibe los datos del turno confirmado
      //nombre del médico, especialidad del médico, id del turno, imagen del médico, fecha del turno
      //email del paciente, nombre del paciente, apellido del paciente y estado de confirmación delturno.
  //sin retorno
  function showConfirmTurn()
  {

    if (
      !empty($_POST['medicalName']) && !empty($_POST['medicalSpeciality']) && !empty($_POST['date']) &&
      !empty($_POST['id_turno']) && !empty($_POST['mail']) && !empty($_POST['nombre_paciente']) && !empty($_POST['apellido_paciente'])
    ) {
      //guardo datos para pasarselos al view
      $medicalName = $_POST['medicalName'];
      $medicalSpeciality = $_POST['medicalSpeciality'];
      $date = $_POST['date'];
      $id_turno = $_POST['id_turno'];
      $imagen = $_POST['imagen'];
      //guardo datos necesarios para enviar el email
      $mailPaciente = $_POST['mail'];
      $nombrePaciente = $_POST['nombre_paciente'];
      $apellidoPaciente = $_POST['apellido_paciente'];
      //preparación de parámetros para enviar email
      $to = $mailPaciente;
      $subject = "Confirmacion de turno medico";
      $message = "Sr/a " . "$nombrePaciente " . "$apellidoPaciente" . ". Usted tiene un turno para la fecha " . "$date" . " con el profesional " . "$medicalName";
      $headers = "From: turnofaciltandil@gmail.com";
      //envio del email
      mail($to, $subject, $message, $headers);
      //carga de template con datos del turno confirmado para mostrarlos por pantalla
      $this->view->showConfirmTurn($medicalName, $medicalSpeciality, $date, $id_turno, $imagen);
    }
  }
}
