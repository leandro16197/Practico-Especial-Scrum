<?php
/* Smarty version 3.1.39, created on 2022-07-02 17:05:11
  from 'C:\xampp\htdocs\TPE\TPEMetodologiaGrupo3\Sprint\Template\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62c05ea70efd12_48483288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e8b11d1833959d038e5bd6af0da6bf9a6d29fec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\TPEMetodologiaGrupo3\\Sprint\\Template\\header.tpl',
      1 => 1653488148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c05ea70efd12_48483288 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <BASE href="<?php echo BASE_URL;?>
">
        <title>TurnosDeMedico</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <link type="text/css" rel="stylesheet" href="Publico\css\style.css">
    </head>
    <body>
    <header>
        <nav  class="navbar navbar-light" style="background-color:rgba(51, 224, 167, 0.89);">
            <form class="form-inline">
                <button class="btn btn-outline-success " type="button">Sacar Turno</button>
                <button class="btn btn-outline-success " type="button"><a href = "home">Ver turnos</a></button>
                <button class="btn btn-outline-success " type="button">Cancelar Turno</button>
            </form>
        </nav>
    </header><?php }
}
