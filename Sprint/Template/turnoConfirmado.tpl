{include file="Template/header.tpl"}
    <h1 class="titulo">{$titulo}</h1>
    <div class = "div_turn_confirm">
        <p>{$medico}</p>
        <p>{$especialidad}</p>
        <p>{$date}</p>
        <button class="btn_print btn_print_confirm" type="button" id="{$turno->id_turno}">Imprimir</button>

    </div>
<script src="js/app_turn.js"></script>
</body>

</html>