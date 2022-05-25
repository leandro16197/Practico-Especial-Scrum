//"use strict";
//document.querySelector(".btn_print").addEventListener('click', printInfo);

//let id_paciente = 11223344;

document.addEventListener("DOMContentLoaded", function(){
    //GetTurns(id_paciente);
    try{
      let btn_confirm = document.querySelectorAll(".btn_confirm");
      btn_confirm.forEach(btn => {
        btn.addEventListener('click', function(e){
          e.preventDefault();
          ConfirmTurn(btn.id);
        });
      });
    }catch(error){}
  try{
    let btn_print = document.querySelectorAll(".btn_print");
    btn_print.forEach(btn => {
      btn.addEventListener('click', function(e){
        e.preventDefault();
        printInfo(btn.id);
      });
    });
  }catch(error){}
});





/*async function GetTurns(id){
  try {
    let recibido = await fetch('api/turnos/' + id);
    let json = await recibido.json();

    console.log(json);
  }
  catch(t){
    console.log(t);
  }
}*/

async function ConfirmTurn(id_turn){
  try {
    await fetch('api/confirmarTurno/'+id_turn, {
      "method": 'POST',
      "headers": { "Content-Type": "application/json"},
    });
    GetConfirmTurn(id_turn);
    }
  catch (t) {
    console.log(t);
  }
}

async function GetConfirmTurn(id_turn){
  try {
    let recibido = await fetch('api/turnoConfirmado/' + id_turn);
    let json = await recibido.json();
    ShowConfirmTurn(json);
  }
  catch (t) {
    console.log(t);
  }
}

function ShowConfirmTurn(json){

  console.log(json[0]);

  let form = document.createElement("form");
  form.action = "verTurnoConfirmado";
  form.method = "POST";

  let medicalName = document.createElement("input");
  medicalName.name = "medicalName";
  medicalName.type = "text";
  medicalName.value = json[0].Nombre;

  let medicalSpeciality = document.createElement("input");
  medicalSpeciality.name = "medicalSpeciality";
  medicalSpeciality.type = "text";
  medicalSpeciality.value = json[0].Especialidad;

  let idTurno = document.createElement("input");
  idTurno.name = "id_turno";
  idTurno.type = "text";
  idTurno.value = json[0].id_turno;

  let imagen = document.createElement("input");
  imagen.name = "imagen";
  imagen.type = "text";
  imagen.value = json[0].Imagen;

  let date = document.createElement("input");
  date.name = "date";
  date.type = "text";
  date.value = json[0].fecha;

  let btn = document.createElement("button");
  btn.id = "btn_form_confirm_turn";
  btn.type="submit";

  form.appendChild(medicalName);
  form.appendChild(medicalSpeciality);
  form.appendChild(date);
  form.appendChild(btn);
  form.appendChild(idTurno);
  form.appendChild(imagen);

  let div = document.querySelector("#div_cont_form_Confirm_turn");
  div.appendChild(form);
  btn.click();
}



async function printInfo(trname){
    let tr = document.getElementById(trname).innerHTML;
    console.log(document.getElementById(trname));

    let original = document.body.innerHTML;
    console.log(trname);
   

    document.body.innerHTML = tr
    
    window.print();

   document.body.innerHTML = original;
  }

