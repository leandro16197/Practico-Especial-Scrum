{include file="Template/header.tpl"}
    <h1 class="titulo">{$titulo}</h1>
  {foreach from=$lista item=turno}
    <h2>Medico: {$turno->Nombre}</h2>
    <h3>Especialidad: {$turno->Especialidad}</h3>
    <img src={$turno->Imagen} alt={$turno->Nombre} class="imagen-tabla">
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
      </td>
      {if $turno->confirmado == 0}
        <td class="distancia table-success"><button class="btn_confirm" type="button" id="{$turno->id_turno}">confirmar</button></td>
      {/if}
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