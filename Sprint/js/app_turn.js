"use strict";
document.querySelector(".btn_print").addEventListener('click', printInfo);

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



async function printInfo(trname){
    let tr = document.getElementById(trname).innerHTML;

    let original = document.body.innerHTML;
  console.log(trname);
   

    document.body.innerHTML = tr
    
    window.print();

   document.body.innerHTML = original;
  }

async function sendEmail(){
  /*const options = {
    method: 'GET',
    headers: {
      'X-RapidAPI-Host': 'privatix-temp-mail-v1.p.rapidapi.com',
      'X-RapidAPI-Key': 'ba0aae0a55msh382a46d8c4f24aap10fdcfjsn059afd07562b'
    }
  };
  
  fetch('https://privatix-temp-mail-v1.p.rapidapi.com/request/one_mail/id/eileen54k_t786a@hxsni.com/', options)
    .then(response => response.json())
    .then(response => console.log(response))
    .catch(err => console.error(err));*/
    Email.send({
      Host: "smtp.gmail.com",
      Username: "sender@email_address.com",
      Password: "Enter your password",
      To: 'receiver@email_address.com',
      From: "sender@email_address.com",
      Subject: "Sending Email using javascript",
      Body: "Well that was easy!!",
    })
      .then(function (message) {
        alert("mail sent successfully")
      });
}