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

    public function getTurnsById($params = null){
        $id_turno = $params[':ID_TURNO'];
        $turns = $this->model->getTurnsById($id_turno);
        $this->view->response($turns, 200);
    }
}
