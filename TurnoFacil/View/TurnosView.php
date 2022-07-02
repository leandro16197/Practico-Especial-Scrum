<?php

require_once('libs/smarty-3.1.39/libs/Smarty.class.php');

class TurnosView
{
    function __construct()
    {
    }
    function turnos($turnos)
    {
        $smarty = new Smarty();
        $smarty->assign('titulo', 'Administracion de Turnos');
        $smarty->assign('turnos', $turnos);
        $smarty->display('Template/secretaria.tpl');
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

    function showConfirmTurn($medicalName, $medicalSpeciality, $date, $id_turno, $imagen = null){
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
