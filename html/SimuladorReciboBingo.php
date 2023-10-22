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
      <a class="logo" href="https://www.aleara.com.ar/">
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
  <main class="fondo-cuerpo">
    <section class="cuerpo">

      <div class="cabecera">
        <div class="divisor">   </div>
           <h1>Simulador de Recibos de Sueldo de Bingo</h1>  
     </div>
     

      <div class="info">
            <span>Mes: XX</span>  del XXXX  <br>
            <span>ingreso:XX/XX/XX</span>  
      </div>
      <table id="tablaRecibo">
          <thead>
              <tr>
                  <th>Concepto</th>
                  <th>Detalle</th>
                  <th>Remunerativo</th>
                  <th>NO Remunerativo</th>
                  <th>Descuentos</th>
              </tr>
          </thead>
          <tbody>
          <tr>
            <td class="concepto">Categoria</td>
            <td>Asistente tecnico</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td class="concepto">Sueldo</td>
            <td>-</td>
            <td>156115.82</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td class="concepto">Antiguedad</td>
            <td>%1 * 4</td>
            <td>6244.63</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td class="concepto">Presentismo</td>
            <td>%5</td>
            <td>7805.79</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td class="concepto">Ad. puntualidad</td>
            <td>%10</td>
            <td>15611.58</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td class="concepto">Ad. por Permanencia</td>
            <td></td>
            <td>0</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td class="concepto">Fallo categoria</td>
            <td></td>
            <td>0</td>
            <td></td>
            <td></td>
          </tr>
          <!--<tr>
            <td class="concepto">Horas Nocturnas</td>
            <td></td>
            <td>0</td>
            <td></td>
            <td></td>
          </tr>-->
          <tr>
            <td class="concepto">feriados</td>
            <td></td>
            <td>0</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
          <td class="concepto">Ajuste Categoria</td>
            <td></td>
            <td>0</td>
            <td></td>
            <td></td>
          </tr>

          <tr>
            <td class="concepto">Alimentacion</td>
            <td></td>
            <td></td>
            <td>26000</td>
            <td></td>
          </tr>
          <tr>
            <td class="concepto">Monto NO remunerativo aleara</td>
            <td></td>
            <td></td>
            <td>27549.85</td>
            <td></td>
          </tr>
          <tr>
            <td class="concepto">Jubilacion</td>
            <td></td>
            <td></td>
            <td></td>
            <td>21252.98</td>
          </tr>
          <tr>
            <td class="concepto">Ley 19032</td>
            <td></td>
            <td></td>
            <td></td>
            <td>5796.27</td>
          </tr>
          <tr>
            <td class="concepto">obra social</td>
            <td></td>
            <td></td>
            <td></td>
            <td>5796.27</td>
          </tr>
          <tr>
            <td class="concepto">Aleara</td>
            <td></td>
            <td></td>
            <td></td>
            <td>4415.18</td>
          </tr>
          <tr>
            <td class="concepto">Mutual</td>
            <td></td>
            <td></td>
            <td></td>
            <td>0</td>
          </tr>

          <tr>
            <td class="concepto">Subtotal</td>
            <td></td>
            <td>Rem</td>
            <td>No rem</td>
            <td>Desc</td>
          </tr>
          <tr id="neto">
            <td class="concepto">TOTAL NETO</td>
            <td></td>
            <td colspan="3" >209898.00</td>
          </tr>
        </tbody>
      </table>
    </section>
  </main>

<!--Footer de la pagina inicial ALEARA --> 
  <div class="fondo-footer">
				<footer>
					<div class="informacion group">
						<div class="primera col">
							<div class="logo"><a href="https://www.aleara.com.ar/"><img title="ALEARA" src="../img/footer/logo.png"></a></div>
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