"use strict";

let id_paciente = 11223344;

document.addEventListener("DOMContentLoaded", function(){
    GetTurns(id_paciente);
    try{

        let btn_confirm = document.querySelectorAll(".btn_confirm");

        btn_confirm.forEach(btn => {
            btn.addEventListener('click', function(e){
                e.preventDefault();
                ConfirmTurn(btn.id);
            });
        });
    }catch(error){}
});



async function GetTurns(id){
    try {
      let recibido = await fetch('api/turnos/' + id);
      let json = await recibido.json();

      console.log(json);
    }
    catch(t){
      console.log(t);
    }
}

async function ConfirmTurn(id){
    try {
        await fetch('api/confirmarTurno/'+id, {
          "method": 'POST',
          "headers": { "Content-Type": "application/json"},
        });
        GetTurns(id_paciente);
      }
      catch (t) {
        console.log(t);
      }
}
