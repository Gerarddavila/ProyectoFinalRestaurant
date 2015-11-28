<?php 

	$vfecha=$_POST['fecha'];
	$vnom=$_POST['nombre'];
	$vpersonas=$_POST['personas'];
	$vtipo=$_POST['tipo'];
	

$con = mysqli_connect('mysql.hostinger.es', 'u365468925_proye', 'paginasweb2015', 'u365468925_proye');


	$query = "INSERT INTO reservaciones (Fecha_Reservacion,nom_reservacion, No_personas,categoria) 
	VALUES ('$vfecha','$vnom','$vpersonas','$vtipo')";

	mysqli_query($con,$query);
		
 ?>

 
<script language="javascript">window.location="Reservar.php";</script>
