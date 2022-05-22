<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <BASE href="{BASE_URL}">
        <title>Turnos</title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link type="text/css" rel="stylesheet" href="Publico\css\style.css">
    </head>
    <body id="Body">
    <header>  
    <nav  class="navbar navbar-light" style="background-color:rgba(51, 224, 167, 0.89);">
    <form class="form-inline">
    <button class="btn btn-outline-success " type="button">Sacar Turno</button>
    <button class="btn btn-outline-success " type="button">Ver Turno</button>
    <button class="btn btn-outline-success " type="button">Cancelar Turno</button>
    </form>
    </nav>
    </header>
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
    <tr id="{$turno->id_turno}">
    {if $turno->Imagen != null}
      <td>  
      <img src={$turno->Imagen} alt={$turno->Nombre} class="imagen-tabla">
      </td>
    {else}
      <td>
      <img src="publico/img/user_image.png" alt="Imagen no disponible" class="imagen-tabla">
      </td>
    {/if}
    <td class="table-success">
        <p>{$turno->Nombre}</p>
        <p>{$turno->Especialidad}</p>
        <p id="turn_date">{$turno->fecha}</p>
         {if $turno->confirmado == 0}
        <label class="table-success"><button class="btn_confirm" type="button" id="{$turno->id_turno}">confirmar</button></label>
        {else}
        <label class="table-success"><button class="btn_print" type="button" id="{$turno->id_turno}">Imprimir</button></label>
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