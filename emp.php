<?php 

	$vNombre=$_POST['nombre'];
	$vApellido=$_POST['apellido'];
	$vTel=$_POST['telefono'];
	$vCiu=$_POST['ciudad'];
	$vCar=$_POST['cargo'];
	$vUsua=$_POST['usuario'];
	$vPass=$_POST['password'];


 
 $con = mysqli_connect('mysql.hostinger.es', 'u365468925_proye', 'paginasweb2015', 'u365468925_proye');

		
	$query = "INSERT INTO empleados (Nombre_Empleado, Apellido_Empleado,Telefono,Direccion_Empleado,Cargo,usuario,password) 
	VALUES ('$vNombre','$vApellido','$vTel','$vCiu','$vCar','$vUsua','$vPass')";
	
	mysqli_query($con,$query); 
		
	
 ?>

 
<script language="javascript">window.location="empleado.php";</script>

