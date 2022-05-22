<?php
/* Smarty version 3.1.39, created on 2022-05-22 14:31:42
  from 'C:\xampp\htdocs\TPEMetodologiaGrupo3\Sprint\Template\turnos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_628a2d2ee0d6a5_13932121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6499313c5286f3dbbf232cb76ede8ad1958d5f25' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEMetodologiaGrupo3\\Sprint\\Template\\turnos.tpl',
      1 => 1653222701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628a2d2ee0d6a5_13932121 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <BASE href="<?php echo BASE_URL;?>
">
        <title>Turnos</title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"><?php echo '</script'; ?>
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
    <button class="btn btn-outline-success " type="button">Ver Turno</button>
    <button class="btn btn-outline-success " type="button">Cancelar Turno</button>
    </form>
    </nav>
    </header>
    <h1 class="titulo"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <div class="table-admin">
      <table class="table">
      <thead class="table-success">
        <tr>
        <th scope="col">Medico</th>
      <th scope="col">Turnos</th>
    </tr>
  </thead>
  <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista']->value, 'turno');
$_smarty_tpl->tpl_vars['turno']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['turno']->value) {
$_smarty_tpl->tpl_vars['turno']->do_else = false;
?>
    <tr>
    <?php if ($_smarty_tpl->tpl_vars['turno']->value->Imagen != null) {?>
      <td>  
      <img src=<?php echo $_smarty_tpl->tpl_vars['turno']->value->Imagen;?>
 alt=<?php echo $_smarty_tpl->tpl_vars['turno']->value->Nombre;?>
 class="imagen-tabla">
      </td>
    <?php } else { ?>
      <td>
      <img src="publico/img/user_image.png" alt="Imagen no disponible" class="imagen-tabla">
      </td>
    <?php }?>
    <td class="table-success">
        <p><?php echo $_smarty_tpl->tpl_vars['turno']->value->Nombre;?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['turno']->value->Especialidad;?>
</p>
        <p id="turn_date"><?php echo $_smarty_tpl->tpl_vars['turno']->value->fecha;?>
</p>
         <?php if ($_smarty_tpl->tpl_vars['turno']->value->confirmado == 0) {?>
        <label class="table-success"><button class="btn_confirm" type="button" id="<?php echo $_smarty_tpl->tpl_vars['turno']->value->id_turno;?>
">confirmar</button></label>
        <?php }?>
      </td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table>
    </div>
<footer>

</footer>
<?php echo '<script'; ?>
 src="js/app_turn.js"><?php echo '</script'; ?>
>
</body>
    
</html><?php }
}
