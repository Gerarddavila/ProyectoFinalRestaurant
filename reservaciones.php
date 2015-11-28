<?php 

	$vNombre=$_POST['nombre'];
	$vApellido=$_POST['apellido'];
	$vCiudad=$_POST['ciudad'];
	$vTel=$_POST['telefono'];
	$vTel2=$_POST['telefono2'];
	$vEmail=$_POST['email'];
	$vUsua=$_POST['usuario'];
	$vPass=$_POST['password'];



 $Conexion = mysql_connect('localhost','root','MARIACRISTINA');
  mysql_select_db('PaginasBD', $Conexion);
 
 

		
	$query = "INSERT INTO clientes (Nombre_Cliente, Apellido_Cliente,Direccion_Cliente,Telefono_Cliente,otro_telefono,usuario,email,password) 
	VALUES ('$vNombre','$vApellido','$vCiudad','$vTel','$vTel2','$vUsua','$vEmail','$vPass')";

	if (mysql_query($query)) 
		
	
 ?>

 
<script language="javascript">window.location="index.html";</script>



