<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Gráfico</title>
</head>
<body>
	<!--
	<?php 

		$conexion=mysql_connect('localhost', 'root', '');
	    //$conexion = mysql_connect('192.168.43.246', 'tesalia', 'proyecto');
	    mysql_select_db('solar_metric');
		$now = (new \Datetime())->format('Y-m-d');
		echo $now;
		$consulta= "SELECT voltaje, temp, humedad, hora FROM medicion WHERE fecha = '" .$now. "' ORDER BY hora DESC LIMIT 3";
		
		$resultado=mysql_query($consulta, $conexion);

		echo '<table style="border: 2px solid #fff; text-align:center;">';
		echo '<tr><td>HORA DE MEDICIÓN</td><td>VOLTAJE</td><td>HUMEDAD</td><td>TEMPERATURA</td></tr>';

		$i=0;
		while($registro=mysql_fetch_array($resultado)){
			$voltaje[$i]=$registro["voltaje"];
			$temp[$i]=$registro["temp"];
			$humedad[$i]=$registro["humedad"];
			$hora[$i]=$registro["hora"];
			echo '<tr>';
			echo '<td>'.$hora[$i].'</td>';
			echo '<td>'.$voltaje[$i].'v</td>';
			echo '<td>'.$humedad[$i].'%</td>';
			echo '<td>'.$temp[$i].'°C</td>';
			$i++;
			echo '</tr>';
		}

		echo '</table>'
	 ?>
	 -->
	<div>
		<canvas id="chart" width="400" height="400"></canvas>
	</div>

	<script src="js/jquery.js"></script>
	<script src="js/chart.js"></script>
	<script>
	$(document).ready(function() {
		var ctx = $("#chart").get(0).getContext("2d");

		var data = {
		    labels: ["January", "February", "March", "April", "May", "June", "July"],
		    datasets: [
		        {
		            label: "My First dataset",
		            fillColor: "rgba(220,220,220,0.2)",
		            strokeColor: "rgba(220,220,220,1)",
		            pointColor: "rgba(220,220,220,1)",
		            pointStrokeColor: "#fff",
		            pointHighlightFill: "#fff",
		            pointHighlightStroke: "rgba(220,220,220,1)",
		            data: [65, 59, 80, 81, 56, 55, 40]
		        },
		        {
		            label: "My Second dataset",
		            fillColor: "rgba(151,187,205,0.2)",
		            strokeColor: "rgba(151,187,205,1)",
		            pointColor: "rgba(151,187,205,1)",
		            pointStrokeColor: "#fff",
		            pointHighlightFill: "#fff",
		            pointHighlightStroke: "rgba(151,187,205,1)",
		            data: [28, 48, 40, 19, 86, 27, 90]
		        }
		    ]
		};

		var myChart = new Chart(ctx).Line(data);
	});

	</script>
</body>
</html>