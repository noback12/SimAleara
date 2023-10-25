function mostrarFormulario() {
    var juegoBingo = document.getElementById('bingo');
    var juegoLoteria = document.getElementById('loteria');
    var extensionDiv = document.getElementById('extension');

    if (juegoBingo.checked) {
        extensionDiv.innerHTML = `
            <br><label for="categoria">Categoria:</label>
      <select id="categoria" name="categoria" required>
        <option value="01">Asistente Tecnico</option>
        <option value="02">Auxiliar tecnico </option>
        <option value="03">Auxiliar Contable</option>
        <option value="04">Promotor</option>
        <option value="05">Cajero</option>
        <option value="06">Limpieza</option>
        <option value="07">Supervisor</option>
      </select><br><br>

      <label><input type="checkbox" id="permPuesto" value="permPuesto" >    Ad. permanencia</label>
    <label><input type="checkbox" id="puntualidad" value="puntualidad"checked>    Ad. asist y puntualidad</label>
    <label><input type="checkbox" id="presentismo" value="presentismo"checked>  Ad. Presentismo</label><br>


      <label for="alimentacion">Dias de Alimentacion (0-31):</label>
    <input type="number" id="alimentacion" name="alimentacion"
       min="0" max="31" value="21">
        `;
    } else if (juegoLoteria.checked) {
        extensionDiv.innerHTML = `
        <br><label for="categoria">Categoria:</label>
           <select id="categoria" name="categoria" required>
                <option value="01">categoria 1</option>
                <option value="02">categoria 2</option>
                <option value="03">categoria 3</option>
            </select> &nbsp&nbsp&nbsp 
            <label for="jornada">Jornada:</label>
            <select  id="jornada" name="jornada" size="1">
                <option selected="selected" value="Completa">48 Horas</option>
                <option value="32">32 horas </option>
                <option value="31">31 horas </option>
                <option value="30"> 30 horas </option>
                <option value="29"> 29 horas </option>
                <option value="28"> 28 horas </option>
                <option value="27"> 27 horas </option>
                <option value="26"> 26 horas </option>
                <option value="25"> 25 horas </option>
                <option value="24"> 24 horas </option>
                <option value="23"> 23 horas </option>
                <option value="22"> 22 horas </option>
                <option value="21"> 21 horas </option>
                <option value="20"> 20 horas </option>                          
            </select><br><br>
            <label for="horas50">Hs. extra Lunes a Viernes:</label>
            <input type="number" id="horas50" name="horas50"
            min="0" max="50" value=0><br>
            <label for="horas100">Hs. extra Sabados , Domingos y Feriados:</label>
            <input type="number" id="horas100" name="horas100"
            min="0" max="50" value=0>
        `;
    }
}


function obtenerFecha() {
    // Obtener el valor de la fecha
    var fecha = document.getElementById("fechaInput").value;
  
    // Escribir el valor de la fecha en el campo de texto
    document.getElementById("ingreso").value = fecha;
  }