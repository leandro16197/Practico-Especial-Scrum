{include file="Template/header.tpl"}
    <h1 class="titulo">{$titulo}</h1>
  {foreach from=$medicos item=medico}
    <h2>Medico: {$medico->Nombre}</h2>
    <h3>Especialidad: {$medico->Especialidad}</h3>
    {if $medico->Imagen != null}
      <td>
      <img src={$medico->Imagen} alt={$medico->Nombre} class="imagen-tabla">
      </td>
    {else}
      <td>
      <img src="publico/img/user_image.png" alt="Imagen no disponible" class="imagen-tabla">
      </td>
    {/if}
  {/foreach}
    <div class="table-admin">
      <table class="table">
      <thead class="table-success">
      <tr>
      <th scope="col">Turnos</th>
      </tr>
  </thead>
  <tbody>
  {foreach from=$lista item=turno}
    <tr>
      <td class="distancia table-success">
        <p id="turn_date">{$turno->fecha}</p>
      {if $turno->confirmado == 0}
        <td class="distancia table-success"><button class="btn_confirm" type="button" id="{$turno->id_turno}">confirmar</button></td>
      {else}
        <td class="table-success"><button class="btn_print" type="button" id="{$turno->id_turno}">Imprimir</button></td>
      {/if}
      </td>
    </tr>
    {/foreach}
  </tbody>
</table>
    </div>
<footer>

</footer>
<script src="js/app_turn.js"></script>
</body>

</html>