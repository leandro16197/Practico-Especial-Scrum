{include file="Template/header.tpl"}
    <h1 class="titulo">{$titulo}</h1>
    <div class="table-admin">
      <table class="table">
      <thead class="table-success">
        <tr>
        <th scope="col">Medico</th>
      <th scope="col">Turnos</th>
    </tr>
  </thead>
  <tbody>
  {foreach from=$lista item=turno}
    <tr>
      <th  scope="row">IMG</th>
      <td class="distancia table-success">
        <p>{$turno->Nombre}</p>
        <p>{$turno->Especialidad}</p>
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