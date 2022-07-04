<?php

require_once('libs/smarty-3.1.39/libs/Smarty.class.php');

class TurnosView
{
    function __construct()
    {
    }

    public function DisplayLogin()
    {
        $smarty = new Smarty();
        $smarty->assign('titulo', "Login");
        $smarty->display('Template/login.tpl');
    }

    function showTurnsSecretary($turnos, $medicos)
    {
        $smarty = new Smarty();
        $smarty->assign('titulo', 'Administracion de Turnos');
        $smarty->assign('turnos', $turnos);
        $smarty->assign('medicos', $medicos);
        $smarty->display('Template/secretaria.tpl');
    }
    function showTurnosPacient($Turnos, $Medicos)
    {
        $smarty = new Smarty();
        $smarty->assign('titulo', 'Turno Disponibles');
        $smarty->assign('lista', $Turnos);
        $smarty->assign('medicos', $Medicos);
        $smarty->display('Template/turnos.tpl');
    }

    function showTurnosByMedic($turnos, $medicos)
    {
        $smarty = new Smarty();
        $smarty->assign('titulo', 'Turnos De Medico');
        $smarty->assign('lista', $turnos);
        $smarty->assign('medicos', $medicos);
        $smarty->display('Template/turnosByMedico.tpl');
    }

    // Esta funcion "showTurnosByMedicoOfSecretary($Turnos, $Medicos)"
    // carga el template que muestra los turnos del medico filtrado
    // sin retorno

    function showTurnosByMedicOfSecretary($turnos, $medicos)
    {
        $smarty = new Smarty();
        $smarty->assign('titulo', 'Administracion de Turnos');
        $smarty->assign('turnos', $turnos);
        $smarty->assign('medicos', $medicos);
        $smarty->display('Template/medicoOfSecretaria.tpl');
    }

    function renderError($error)
    {
        $smarty = new Smarty();
        $smarty->assign('error', $error);
        $smarty->display('Template/error.tpl');
    }
    //Esta función, "showConfirmTurn($medicalName, $medicalSpeciality, $date, $id_turno, $imagen = null)"
    //carga el template que muestra la pantalla del turno confirmado
    //Paráetros que recibe: nombre del médico, especialidad del médico, fecha del turno, imagen del médico.
    //sin retorno.
    function showConfirmTurn($medicalName, $medicalSpeciality, $date, $id_turno, $imagen = null)
    {
        $smarty = new Smarty();
        $smarty->assign('titulo', 'Turno Confirmado');
        $smarty->assign('medico', $medicalName);
        $smarty->assign('especialidad', $medicalSpeciality);
        $smarty->assign('date', $date);
        $smarty->assign('id_turno', $id_turno);
        $smarty->assign('imagen', $imagen);
        $smarty->display('Template/turnoConfirmado.tpl');
    }
}
