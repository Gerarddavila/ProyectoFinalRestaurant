<?php 

	$vNombre=$_POST['name'];
	$vEmail=$_POST['email'];
	$vMotivo=$_POST['subject'];
	$vMjs=$_POST['message'];



  	 $con = mysqli_connect('mysql.hostinger.es', 'u365468925_proye', 'paginasweb2015', 'u365468925_proye');

		
	$query = "INSERT INTO comentarios (cliente, email, motivo, mensaje) 
	VALUES ('$vNombre','$vEmail','$vMotivo','$vMjs')";

	mysqli_query($con,$query);
		
 ?>

 
<script language="javascript">window.location="index.html";</script>
