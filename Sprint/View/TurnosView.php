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
}
