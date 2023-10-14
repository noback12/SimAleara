<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style.css">
    <title>Simulador de Recibos de Sueldo Bingo Ciudadela</title>
    <script src="script.js"></script>   
  </head>
 <body>
   <div class="fondo-header">
    <header>
      <a class="logo" href="/">
        <img title="ALEARA" src="../img/logo.png">
        <div class="texto"></div>
      </a>

      <div class="botones">
        <div class="juego"></div>
        <div class="datos">Alsina 946/48, C1088AAB, Bs. As., Argentina<br><strong>Tel: (5411) 5235-9810</strong></div>

        <div class="iconos">
          <div class="icono"><a href="/multimedia/fotos"><img title="Fotos" src="../img/header/fotos.png"></a></div>
          <div class="icono"><a href="/multimedia/videos"><img title="Videos" src="../img/header/videos.png"></a></div>
          <div class="icono"><a href="/multimedia/audios"><img title="Audios" src="../img/header/audios.png"></a></div>
          <div class="icono">
            <a class="addthis_button_more" title="Compartir">
              <img title="Redes" src="../img/header/compartir.png">
            </a>
          </div>
          <div class="icono"><a href="/contacto"><img title="Contacto" src="../img/header/contacto.png"></a></div>
        </div>
        <div class="buscador">
          <div class="buscar">
            <!--Como es un sistema externo a la pagina principal a ALEARA le aclaro en el action que busque en aleara"-->
            <form action="https://www.aleara.com.ar/busqueda" method="get">
              <input type="text" name="buscar" value="">
              <input type="submit">
            </form>
          </div>
        </div>
      </div>
    </header>
  </div>
  <!-- Formulario para simular recibo de bingo -->
  <main class="fondo-cuerpo">
    <section class="cuerpo">
      <div class="cabecera">
        <div class="divisor">   </div>
           <h1>Simular Recibo de Sueldo de Bingo</h1>  
     </div>
    <form id="formularioRecibo" action="" method="get">
    <!--Por ahora lo dejo asi , tengo que hacer que por php se autocomplete con todas las categorias -->
    <label for="categoria">Categoria:</label>
      <select id="categoria" name="categoria" required>
        <option value="01">Asistente Tecnico</option>
        <option value="02">Auxiliar tecnico </option>
        <option value="03">Auxiliar Contable</option>
        <option value="04">Promotor</option>
        <option value="05">Cajero</option>
        <option value="06">Limpieza</option>
        <option value="07">Supervisor</option>
      </select>

     <label for="FIngreso">Fecha de ingreso:</label>
     <input type="month" id="FIngreso" name="FIngreso">
    <br><br>
    <div>
      <label>Periodo:</label> 
      <label for="anio">Año:</label>
      <select id="anio" name="anio" required>
        <?php for($i=2023 ; $i >=2020 ; $i--) { ?>
          <option value="<?=$i?>"><?=$i?></option> 
          <?php } ?>
      </select>


      <label for="mes">Mes:</label>
      <select id="mes" name="mes" required>
        <option value="01">ENERO</option>
        <option value="02">FEBRERO</option>
        <option value="03">MARZO</option>
        <option value="04">ABRIL</option>
        <option value="05">MAYO</option>
        <option value="06">JUNIO</option>
        <option value="07">JULIO</option>
        <option value="08">AGOSTO</option>
        <option value="09">SEPTIEMBRE</option>
        <option value="10">OCTUBRE</option>
        <option value="11">NOVIEMBRE</option>
        <option value="12">DICIEMBRE</option>
      </select>
    </div>
    <br><br>
    <label><input type="checkbox" id="permPuesto" value="permPuesto" >    Ad. permanencia</label>
    <label><input type="checkbox" id="puntualidad" value="puntualidad"checked>    Ad. asist y puntualidad</label>
    <label><input type="checkbox" id="presentismo" value="presentismo"checked>  Ad. Presentismo</label><br>

    <label for="feriados">Feriados:</label>
    <input type="number" id="feriados" name="feriados"
       min="0" max="31" value=0><br><br>

    <label for="alimentacion">Dias de Alimentacion (0-31):</label>
    <input type="number" id="alimentacion" name="alimentacion"
       min="0" max="31" value="21"><br><br>

    <input type="checkbox" id="mutual" value="mutual"><label>Mutual</label><br>
    <label for="ajustes">Ajustes:</label>
    <input type="number" id="ajustes" name="ajustes"><br><br>
        <input type="submit" value="Simular">
     </form>
    <div id="apartadoLegal">
      <p>
      Este presente sistema ha sido creado para el uso de los trabajadores de agencias de loteria y juegos de azar ,con el unico proposito de servir como una guía orientativa de su salario. De tal forma, el usuario puede visualizar todos los elementos de esta página web, imprimirlos, copiarlos y almacenarlos en cualquier soporte físico, siempre y cuando sea única y exclusivamente para su uso personal y privado. Los contenidos y resultados que arrojen los cálculos son meramente ORIENTATIVOS. 
      </p>
    </div>
    <br>
    </section>
  </main>

<!--Footer de la pagina inicial ALEARA --> 
  <div class="fondo-footer">
				<footer>
					<div class="informacion group">
						<div class="primera col">
							<div class="logo"><a href="/"><img title="ALEARA" src="../img/footer/logo.png"></a></div>
							<div class="info">
								<p>
									<span>Alsina 946/48, C1088AAB
Bs. As., Argentina</span><br>
									<span>(5411) 5235-9810 y rotativas</span><br>
								</p>
								<p>
									<span class="destacado">OSALARA: 0810-222-9810</span>
									<span>Bolívar 578, Bs. As., Argentina</span><br>
									<span>E-mail: <a href="mailto:info@aleara.com.ar">info@aleara.com.ar</a></span>
								</p>
								<p>
									<span class="destacado">Guía de prestadores</span>
									<a href="http://osalara.com.ar/guias">osalara.com.ar/guias</a>
								</p>
							</div>
						</div>

						<div class="centro col">
							<a href="#" class="destacado">Institucional</a>
															<a href="/fichas/15-aleara" target="_self">ALEARA</a>
																<a href="/fichas/16-osalara" target="_self">OSALARA</a>
																<a href="/fichas/30-amupeja" target="_self">AMUPEJA</a>
																<a href="/noticias" target="_self">Noticias</a>
																<a href="/fichas/23-servicios" target="_self">Servicios</a>
														</div>
						<div class="centro col">
							<a href="/agenda" class="destacado">Actividades</a>
							<a href="/noticias" class="destacado">Noticias</a>
							<span class="destacado">Redes</span>
							<a href="https://www.facebook.com/Sindicato-Aleara-1151031428266221/" target="_blank">Facebook</a>
							<a href="https://twitter.com/prensaaleara" target="_blank">Twitter</a>
							<a href="https://www.instagram.com/" target="_blank">Instagram</a>
						</div>

						<div class="centro col telefonos">
							<h2>Teléfonos Útiles</h2>
							<p>Bomberos: 100<br>
Policía: 911<br>
Emergencia Médica: 107<br>
Defensa Civil: 103</p>
						</div>

						<div class="ultima col">
							<div class="iconos">
								<div class="icono"><a href="https://www.facebook.com/Sindicato-Aleara-1151031428266221/"><img title="Facebook" src="../img/footer/facebook.png"></a></div>
								<div class="icono"><a href="https://twitter.com/prensaaleara"><img title="Twitter" src="../img/footer/twitter.png"></a></div>
								<div class="icono"><a href="https://www.instagram.com/"><img title="Instagram" src="../img/footer/instagram.png"></a></div>
								<div class="icono"><a href="/contacto"><img title="Contacto" src="../img/footer/contacto.png"></a></div>
							</div>
						</div>
					</div>
					<div class="nota">SINDICATO DE TRABAJADORES DE JUEGOS DE AZAR, ENTRETENIMIENTO, ESPARCIMIENTO, RECREACIÓN Y AFINES DE LA REPÚBLICA ARGENTINA - PERSONERÍA GREMIAL 1529. ADHERIDO A LA CGT.</div>
				</footer>
			</div>


  
</body>