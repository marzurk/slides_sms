<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sun Metric Station - By Proyecto Tesalia</title>
	<link rel="stylesheet" href="css/reveal.css">
	<link rel="stylesheet" href="css/theme/black.css">
	<link rel="stylesheet" href="css/main.css">
	<!--Add support for earlier versions of Internet Explorer-->
	<!--[if IE 9]>
		<script src="lib/js/html5shiv.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Wrap the entire slide show in a div using the reveal class -->
	<div class="reveal">
		<div class="slides">
			<!-- ALL SLIDES GO HERE -->
			<!--  Each section elemente contains an individual slide -->
			<section>
				<h1>Sun Metric Station</h1>
				<img src="img/solar-energy.jpg" style="max-width:50%;">
				<p><a href="http://fb.com/ProyectoTesalia" target="_blank">Proyecto Tesalia</a></p>
			</section>
			<section>
				<section id="abstract" data-background="img/photovoltaic.png" data-background-size="100%">
					<p class="sombra">El sol constituye una fuente de energía considerable. La energía recibida anualmente  a nivel de la Tierra corresponde a aproximadamente 7 000 veces la energía consumida por la humanidad.</p>
					<p class="sombra">Se trata de una energía lumínica llevada por los fotones provenientes de las reacciones de fusión nuclear del hidrógeno que ocurren en el interior del Sol. Puede cubrir ampliamente nuestras necesidades energéticas, siempre y cuando se pueda convertir eficientemente y a bajo costo.</p>
				</section>
				<section>
					<strong>La energía fotovoltaica es la única que convierte directamente la energía solar en eléctrica</strong><br/><br/>
					<h3 style="color:#1ACEE3;">Sistemas fotovoltaicos autónomos</h3>
					<p>Los sistemas fotovoltaicos autónomos (SFA) están constituidos, en lo fundamental, por los paneles fotovoltaicos, que constituyen el generador de energía eléctrica, las baterías para almacenar la energía y utilizarla en los momentos de ausencia de la radiación solar, y la carga eléctrica que se va a consumir mediante equipos eléctricos domésticos y/o industriales.</p>
				</section>
				<section>
					<h2>Funcionamiento de los <strong>Sistemas solares Fotovoltaicos</strong></h2>
					<p>La luz solar entra sobre la superficie del arreglo fotovoltaico, donde es convertida en energía eléctrica de corriente directa por las celdas solares, después esta energía es recogida y conducida hasta un controlador de carga con la función de enviar a toda o parte de esta energía hasta el banco de baterías en donde es almacenada, cuidando que no se excedan los limites de sobrecarga y sobredescarga.
				</section>
				<section>
					<p>
						La energía almacenada se utiliza para abastecer las cargas durante la noche o en días de baja insolación o cuando el arreglo fotovoltaico es incapaz de satisfacer la demanda por si solo. Si las cargas a alimentar son de corriente directa, estas pueden hacerse a través del arreglo fotovoltaico o desde la batería. Cuando las cargas son de corriente alterna, la energía proveniente del arreglo y de las baterías, limitadas por el controlador, es enviada a un inversor de corriente, en donde es convertida a corriente alterna
					</p>
				</section>
			</section>
			<section>
				<section data-background="img/solar-panel.png">
					<h2>¿Qué es SMS - Sun Metric Station?</h2>
					<ul class="sombra">
						<li>
						Es un Sistema de Medición Solar automático que permite monitorear y registrar los valores correspondientes a la energía eléctrica (en Volts) producida por el mismo.
						</li>
						<li>
							Es un sistema automático que busca orientarse paralelamente al sol, con la finalidad de recibir la incidencia solar de manera directa y maximizar el porcentaje de aprovechamiento de la radiación solar emitida.
						</li>
					</p>
				</section>
				<section>
					<p>SOMETHING :)</p>
					<?php
						$server = "192.168.10.38";
						$username = "tesalia";
						$password = "proyecto";
						$dbname = "solar_metric";

						//Create connection
						$con = mysqli_connect($server, $username, $password, $dbname);

						/* verificar la conexión */
						if (mysqli_connect_errno()) {
						    printf("Conexión fallida: %s\n", mysqli_connect_error());
						    exit();
						}

						//Select results from all days
						if ($resultado = mysqli_query($con, "SELECT * FROM medicion")) {
							
						    /* liberar el conjunto de resultados */
						    mysqli_free_result($resultado);
						}

						//Close Connections
						$close = mysqli_close($con);

						if(!$close){
							echo 'Ha sucedido un error inesperado<br>';
						}
					 ?>
					 <h3>El numero de resultados es: <?php $numResul ?> </h3>
				</section>
				<section>
					<a href="http://bit.ly/1gVATKM">Datos sobre radiación solar en Teapa, Tabasco - NASA</a>
					<a href="http://bit.ly/1OXoi7T">Villahermosa - Estadísticas de radiación - NASA</a>
				</section>
			</section>
			<section>
				<section>
					<h2 style="color:#FFBB18;">Datos interesantes</h2>
					<blockquote cite="http://www.conermex.com.mx/slide/sistemas-fotovoltaicos.html">
						<p>
							La energía solar puede prestar una importante contribución, ya que el sol es un enorme proveedor de energía. Cada año suministra 219,000 billones de kilowatt-hora de energía gratis - unas 2,500 veces más que de lo requerido por la población mundial.
						</p>
					</blockquote>
					<cite><a href="http://www.conermex.com.mx/slide/sistemas-fotovoltaicos.html" target="_blank">Conermex, 2011</a></cite>
				</section>
				<section>
					<h3 style="color:#1ACEE3;">Radiación Solar Diaria Promedio Anual</h3>
					<p>A diferencia de otras latitudes, el promedio de horas de luz solar en México es de 11 horas en invierno y de casi 13 horas en verano. Esto implica abundacia de radiación solar durante prácticamente todo el año.</p>
					<img src="img/radiacion1__solar_mexico_instituto_de_investigaciones_eléctricas.jpg" alt="Radiación solar diaria promedio anual"><br>
				</section>
				<section>
					<h3 style="color:#1ACEE3;">
						La energía potencial del sol es mayor que la de cualquier otra fuente
					</h3>
					<p>
						La energia potencial anual solar es de 23,000 TWy
					</p>
					<img src="img/energy-resources-renewables-fossil-fuel-uranium.png" alt="Fuentes de energías"><br>
					<cite><a href="http://asrc.albany.edu/people/faculty/perez/Kit/pdf/a-fundamental-look-at%20the-planetary-energy-reserves.pdf" target="_blank">A Fundamental Look at Energy Reserves for the Planet</a></cite>
				</section>
				<section>
					<h3 style="color:#1ACEE3;">
						La capacidad de potencia de los sistemas fotovoltaicos creció de 2.2 GW en 2002 a 100GW en 2012
					</h3>
					<p>
						De 2007 a 2012, creció 10 veces mas, de 10 GW a 100 GW
					</p>
					<img src="img/global-solar-PV-capacity-growth.png" alt="Crecimiento de la Potencia de Sistemas Fotovoltaicos"><br>
					<cite><a href="http://www.ren21.net/gsr" target="_blank">Renewables 2013 Global Status Report</a></cite>
				</section>
			</section>
			<section>
				<p>
					<a href="http://www.conermex.com.mx/informacion-de-interes/los-sistemas-fotovoltaicos.html" title="Sistemas fotovoltaicos - CONERMEX" target="_blank">
						http://www.conermex.com.mx/informacion-de-interes/los-sistemas-fotovoltaicos.html
					</a>
				</p>
				
				<p>
					<a href="http://www.cnrs.fr/cw/dossiers/dosolaireS/contenu/alternative/alter2_textes.html"target="_blank">
						http://www.cnrs.fr/cw/dossiers/dosolaireS/contenu/alternative/alter2_textes.html
					</a>
				</p>

				<p>
					<a href="http://www.abb-conversations.com/2013/12/7-impressive-solar-energy-facts-charts/" target="_blank">
						http://www.abb-conversations.com/2013/12/7-impressive-solar-energy-facts-charts/
					</a>
				</p>

				<p>
					<a href="http://dakar.com.mx/dakar.com.mx/index.php/es/energia-solar/paneles-solares/radiacion-solar" target="_blank">
						http://dakar.com.mx/dakar.com.mx/index.php/es/energia-solar/paneles-solares/radiacion-solar
					</a>
				</p>
				<p><a href="http://bit.ly/1gVATKM" title="NASA Surface metereology and Solar Energy: RETScreen Data">http://bit.ly/1gVATKM</a></p>
			</section>
		</div>
	</div>
	<script type="text/javascript" src="jquery.js"></script>
	<script src="lib/js/head.min.js"></script>
	<script src="js/reveal.js"></script>
	<script>
		//Required, even if empty
		Reveal.initialize({
			controls: true,
			progress: true,
			slideNumber: true,
			keyboard: true,
			overview: true,
			center: true,
			touch: true,
			loop: false,
			mouseWheel: true,
			transition: 'slide'
		});
	</script>
</body>
</html>