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
    console.log(id);

    const turn = {
        id_turno: id,
        dni_paciente: parseInt(document.querySelector('#turn_dni_paciente').value),
        id_doctor: parseInt(document.querySelector('#turn_id_doctor').value),
        fecha: document.querySelector('#turn_date').value,
        confirmado: 1,
    }

    try {
        await fetch('api/confirmarTurno/'+id, {
          "method": 'POST',
          "headers": { "Content-Type": "application/json"},
          "body": JSON.stringify(turn),
        });
        console.log("hecho")
      }
      catch (t) {
        console.log(t);
      }

    /*fetch('api/confirmarTurno/'+id, {
        method: 'PUT',
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(turn)
    })
    .then(response => response.json())
    .then(
        console.log("hecho")
    )
    .catch(error => console.log(error));*/
}

/*async function editarDato(pedido, id) {
    let data = {
      "thing": {
        "producto": pedido.producto,
        "descripcion": pedido.descripcion,
        "cantidad": pedido.cantidad,
        "precio": pedido.precio,
      }
    };
    try {
      await fetch(url + "/" + id, {
        "method": "PUT",
        "headers": {
        "Content-Type": "application/json"
        },
        "body": JSON.stringify(data),
      });
      traerDatos();
    }
    catch (t) {
      console.log(t);
    }
  }*/