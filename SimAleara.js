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

/* No me actualiza en el form cambio a un select antiguedad 
document.addEventListener("DOMContentLoaded", function(){
document.getElementById('FIngreso').addEventListener('input', restarFechas);
document.getElementById('anio').addEventListener('change', restarFechas);
document.getElementById('mes').addEventListener('change', restarFechas);
});


function restarFechas() {
    var monthInputValue = document.getElementById('FIngreso').value;
    var yearSelectValue = parseInt(document.getElementById('anio').value);
    var monthSelectValue = parseInt(document.getElementById('mes').value);


      var monthYear = monthInputValue.split('-');
      var year = parseInt(monthYear[0]);
      var month = parseInt(monthYear[1]);

      var diffYears = yearSelectValue - year   ;
      var diffMonths =   monthSelectValue - month;

      if (diffMonths < 0) {
        diffYears--;
        diffMonths += 12;
      }

      var diffMessage = 'Diferencia: ';
      if (diffYears > 0) {
        diffMessage += diffYears + (diffYears === 1 ? ' año' : ' años');
      }
      if (diffYears && diffMonths) {
        diffMessage += ' y ';
      }
      if (diffMonths > 0) {
        diffMessage += diffMonths + (diffMonths === 1 ? ' mes' : ' meses');
      }

    document.getElementById('Antiguedad').innerText = diffYears;
    // Cambiar el color del texto según el resultado
      if (diffYears < 0 || (diffYears === 0 && diffMonths < 0)) {
        Antiguedad.style.color = 'red';
      } else {
        Antiguedad.style.color = 'green';
      }

      // Establecer el valor de resultDiv como valor del campo de formulario oculto
      document.getElementById('formularioRecibo').setAttribute('action', 'http://localhost:8080/SimAleara/controllers/SimRecibo.php?result=' + diffYears);
  }
*/
