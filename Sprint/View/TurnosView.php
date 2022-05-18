<?php

require_once('libs/smarty-3.1.39/libs/Smarty.class.php');

class TurnosView{
    function __construct(){}

    function showTurnos($Turnos){
        $smarty=new Smarty();
        $smarty->assign('titulo','Turno Disponibles');
        $smarty->assign('lista',$Turnos);
        $smarty->display('Template/turnos.tpl');
    }

<<<<<<< HEAD
=======
    function createTurno(){
        $smarty=new Smarty();
        $smarty->display('Template/CrearTurno.tpl');
    }

>>>>>>> TM-29
}