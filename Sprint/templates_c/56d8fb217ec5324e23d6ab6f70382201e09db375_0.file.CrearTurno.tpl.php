<?php
/* Smarty version 3.1.39, created on 2022-05-22 18:01:10
  from 'C:\xampp\htdocs\TPE\TPEMetodologiaGrupo3\Sprint\Template\CrearTurno.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_628a5e46199e16_99512950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56d8fb217ec5324e23d6ab6f70382201e09db375' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\TPEMetodologiaGrupo3\\Sprint\\Template\\CrearTurno.tpl',
      1 => 1653234951,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628a5e46199e16_99512950 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <BASE href="<?php echo BASE_URL;?>
">
        <title>Turnos</title>
        <link type="text/css" rel="stylesheet" href="Publico\css\style.css">
    </head>
    <body>
        <nav>
            <ul>
               <button>Sacar Turno</button>
               <button>Ver Turno</button>
               <button>Cancelar Turno</button>
           
            </ul>
            <img src="Publico\img\user_image.png" alt="">
        </nav>
        <section class="form">
            <form>
                <label>Seleccionar fecha del turno</label>
                <input type="date" placeholder="Seleccionar fecha del turno">
            </form>
            <div class="medicostyle">
                <input type="text" placeholder="Medico">  
                <div class="interiorDiv">
                <img src="Publico\img\user_image.png" alt="" class="imgMedico">
                <h3>Medico -- </h3>
                <h3>- Especialidad</h3>
            </div>  
           
        </section>

        <div class="turnosDisponibles">
            <h2>Turnos Disponibles</h1>
        </div>
        <section>
            <ul class="listHoras">
                <div class="divHoras">
                    <label>Hora</label>
                    <input type="checkbox">
                </div>
                <div class="divHoras">
                    <label>Hora</label>
                    <input type="checkbox">
                </div>
                <div class="divHoras">
                    <label>Hora</label>
                    <input type="checkbox">
                </div>
            
             </ul>
        </section>
        <div class="confirmButton">
            <button class="button">Confirmar</button>
        </div>
      
        

    </body>
    
</html><?php }
}
