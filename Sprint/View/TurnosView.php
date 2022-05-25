<?php

require_once('libs/smarty-3.1.39/libs/Smarty.class.php');

class TurnosView
{
    function __construct()
    {
    }

    function showTurnos($Turnos, $Medicos)
    {
        $smarty = new Smarty();
        $smarty->assign('titulo', 'Turno Disponibles');
        $smarty->assign('lista', $Turnos);
        $smarty->assign('medicos', $Medicos);
        $smarty->display('Template/turnos.tpl');
    }

    function showTurnosByMedico($Turnos, $Medicos)
    {
        $smarty = new Smarty();
        $smarty->assign('titulo', 'Turnos De Medico');
        $smarty->assign('lista', $Turnos);
        $smarty->assign('medicos', $Medicos);
        $smarty->display('Template/turnosByMedico.tpl');
    }

    function renderError($error)
    {
        $smarty = new Smarty();
        $smarty->assign('error', $error);
        $smarty->display('Template/error.tpl');
    }

    function showConfirmTurn($medicalName, $medicalSpeciality, $date){
        $smarty = new Smarty();
        $smarty->assign('titulo', 'Turno Confirmado');
        $smarty->assign('medico', $medicalName);
        $smarty->assign('especialidad', $medicalSpeciality);
        $smarty->assign('date', $date);
        $smarty->display('Template/turnoConfirmado.tpl');
    }
}
