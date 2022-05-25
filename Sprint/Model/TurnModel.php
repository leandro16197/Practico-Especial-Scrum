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
        $queryString = "SELECT * FROM turno t INNER JOIN medico m ON m.id_medico = t.id_doctor WHERE t.dni_paciente = ? GROUP BY id_turno ORDER BY t.fecha";
        $query = $this->db->prepare($queryString);
        $query->execute(array($id));
        $turns = $query->fetchAll(PDO::FETCH_OBJ);
        return $turns;
    }

    function getTurnsByMedicalId($id)
    {
        $queryString = "SELECT * FROM turno t INNER JOIN medico m ON m.id_medico = t.id_doctor WHERE m.id_medico = ? GROUP BY id_turno ORDER BY t.fecha";
        $query = $this->db->prepare($queryString);
        $query->execute(array($id));
        $turns = $query->fetchAll(PDO::FETCH_OBJ);
        return $turns;
    }

    function getMedicalsByPatientId($id)
    {
        $queryString = "SELECT DISTINCT m.nombre, t.id_doctor FROM turno t INNER JOIN medico m ON m.id_medico = t.id_doctor WHERE t.dni_paciente = ? GROUP BY id_turno ORDER BY m.nombre";
        $query = $this->db->prepare($queryString);
        $query->execute(array($id));
        $turns = $query->fetchAll(PDO::FETCH_OBJ);
        return $turns;
    }

    function getTurnsById($id){
        $queryString = "SELECT t.id_turno, t.fecha, m.Nombre, m.Imagen, p.Email, m.Especialidad, p.Nombre as nombre_paciente, p.apellido as apellido_paciente
                        FROM turno t INNER JOIN medico m ON m.id_medico = t.id_doctor 
                        INNER JOIN paciente p ON t.dni_paciente = p.DNI WHERE id_turno = ?";
        $query = $this->db->prepare($queryString);
        $query->execute(array($id));
        $turns = $query->fetchAll(PDO::FETCH_OBJ);
        return $turns;
    }

    function getMedicalById($id)
    {
        $queryString = "SELECT * FROM medico m WHERE m.id_medico = ?";
        $query = $this->db->prepare($queryString);
        $query->execute(array($id));
        $turns = $query->fetchAll(PDO::FETCH_OBJ);
        return $turns;
    }

    function confirmTurn($id)
    {
        $queryString = "UPDATE turno SET confirmado = ? WHERE id_turno = ?";
        $query = $this->db->prepare($queryString);
        $query->execute(array(1, $id));
    }
}
