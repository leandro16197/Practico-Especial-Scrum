<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <BASE href="{BASE_URL}">
        <title>Turnos</title>
        <link type="text/css" rel="stylesheet" href="Publico\css\style.css">
    </head>
    <body>
        <nav>
            <ul>
               <button>Sacar Turno</button>
               <button>Ver Turno</button>
               <button>Cancelar Turno</button>
           
            </ul>
            <img src="Publico\img\user_image.png" alt="">
        </nav>
        <section class="form">
            <form>
                <label>Seleccionar fecha del turno</label>
                <input type="date" placeholder="Seleccionar fecha del turno">
            </form>
            <div class="medicostyle">
                <input type="text" placeholder="Medico">  
                <div class="interiorDiv">
                <img src="Publico\img\user_image.png" alt="" class="imgMedico">
                <h3>Medico -- </h3>
                <h3>- Especialidad</h3>
            </div>  
           
        </section>

        <div class="turnosDisponibles">
            <h2>Turnos Disponibles</h1>
        </div>
        <section>
            <ul class="listHoras">
                <div class="divHoras">
                    <label>Hora</label>
                    <input type="checkbox">
                </div>
                <div class="divHoras">
                    <label>Hora</label>
                    <input type="checkbox">
                </div>
                <div class="divHoras">
                    <label>Hora</label>
                    <input type="checkbox">
                </div>
            
             </ul>
        </section>
        <div class="confirmButton">
            <button class="button">Confirmar</button>
        </div>
      
        

    </body>
    
</html>