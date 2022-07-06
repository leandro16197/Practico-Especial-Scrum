<?php
require_once("./Model/TurnModel.php");
require_once("./api/apiView.php");

class ApiTurnController
{

    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new TurnModel();
        $this->view = new ApiView();
        $this->data = file_get_contents("php://input");
    }

    public function  getTurnsByPatientId($params = null)
    {
        $id_paciente = $params[':ID_PACIENTE'];
        $turns = $this->model->getTurnsByPatientId($id_paciente);
        $this->view->response($turns, 200);
    }

    public function  getTurnsByMedicalId($params = null)
    {
        $id_medico = $params[':ID_MEDICO'];
        $turns = $this->model->getTurnsByMedicalId($id_medico);
        $this->view->response($turns, 200);
    }

    public function confirmTurn($params = null)
    {
        $id_turno = $params[':ID_TURNO'];
        $turns = $this->model->confirmTurn($id_turno);
        $this->view->response($turns, 200);
    }

    //esta función, "createTurnBySecretary()", crea un turno en la base de datos segun los datos enviados por el form
    //sin retorno

    public function createTurnBySecretary()
    {
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $formData = json_decode($this->data);
        $id_medico = $formData->id_medico;
        $fecha = $formData->fecha;
        $inicio = $formData->fecha_inicio;
        $fin = $formData->fecha_fin;

        $fechaTurno = "$fecha $inicio";
        $aux = 0;
        $time1 = explode(':', $inicio);
        $hours1 = intval($time1[0]);
        $time2 = explode(':', $fin);
        $hours2 = intval($time2[0]);
        $cant = $hours2 - $hours1;

        for ($i = 0; $i < $cant; $i++) {
            $hours1++;
            $increment = "$hours1:$time1[1]";
            $fechaTurno = "$fecha $increment";
            $this->model->createTurnBySecretary($id_medico, $fechaTurno);
        }
    }
}
