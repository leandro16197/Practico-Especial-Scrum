<?php
class TurnModel
{
    private $db;
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=turnofacil;charset=utf8', 'root', '');
    }

    function getTurnsByPatientId($id)
    {
        $queryString = "SELECT * FROM turno WHERE dni_paciente = $id GROUP BY id_turno";
        $query = $this->db->prepare($queryString);
        $query->execute();
        $turns = $query->fetchAll(PDO::FETCH_OBJ);
        return $turns;
    }
}