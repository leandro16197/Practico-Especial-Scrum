<?php
/* Smarty version 3.1.39, created on 2022-07-02 17:05:10
  from 'C:\xampp\htdocs\TPE\TPEMetodologiaGrupo3\Sprint\Template\turnos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62c05ea6d91c71_64229350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '755497ba3ba51cce854d7d4c031ad1779c09c827' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\TPEMetodologiaGrupo3\\Sprint\\Template\\turnos.tpl',
      1 => 1653488148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Template/header.tpl' => 1,
  ),
),false)) {
function content_62c05ea6d91c71_64229350 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1 class="titulo"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <form action="<?php echo BASE_URL;?>
verTurnosMedico" method="post">
      <label>Seleccionar turnos de medico: </label>
      <select name="medico">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['medicos']->value, 'medico');
$_smarty_tpl->tpl_vars['medico']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['medico']->value) {
$_smarty_tpl->tpl_vars['medico']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['medico']->value->id_doctor;?>
"><?php echo $_smarty_tpl->tpl_vars['medico']->value->nombre;?>
</option>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>
      <button type="submit">Buscar</button>
    </form>
    <div class="table-admin">
      <table class="table">
        <thead class="table-success">
          <tr>
            <th scope="col">Médico</th>
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
            <tr id="<?php echo $_smarty_tpl->tpl_vars['turno']->value->id_turno;?>
">
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
                <?php } else { ?>
                  <label class="table-success"><button class="btn_print" type="button" id="<?php echo $_smarty_tpl->tpl_vars['turno']->value->id_turno;?>
">Imprimir</button></label>
                <?php }?>
              </td>
            </tr>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
      </table>
    </div>
    <div class="div_cont_form_Confirm_turn" id="div_cont_form_Confirm_turn"></div>
<footer>

</footer>
<?php echo '<script'; ?>
 src="js/app_turn.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
