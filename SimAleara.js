function mostrarOpciones(opcion) {
            if (opcion === 'loteria') {
               //Muestro la seccion que del radio correspondiente 
                document.getElementById('especificoBingo').style.display = 'none';
                document.getElementById('especificoLoteria').style.display = 'Block';
                // Desabilito los gets de la otra opcion 
                document.getElementById('select1').disabled = false;
                document.getElementById('select2').disabled = true;
                document.getElementById('alimentacion').disabled = true;
                document.getElementById('jornada').disabled = false;
                document.getElementById('horas50').disabled = false;
                document.getElementById('horas100').disabled = false;


            } else if (opcion === 'bingo') {
                //Muestro la seccion que del radio correspondiente 
                document.getElementById('especificoBingo').style.display = 'block';
                document.getElementById('especificoLoteria').style.display = 'none';
                // Desabilito los gets de la otra opcion 
                document.getElementById('select1').disabled = true;
                document.getElementById('select2').disabled = false;

                document.getElementById('alimentacion').disabled = false;
                document.getElementById('jornada').disabled = true;
                document.getElementById('horas50').disabled = true;
                document.getElementById('horas100').disabled = true;
            }
        }
function obtenerFecha() {
    // Obtener el valor de la fecha
    var fecha = document.getElementById("fechaInput").value;
  
    // Escribir el valor de la fecha en el campo de texto
    document.getElementById("ingreso").value = fecha;
  }
