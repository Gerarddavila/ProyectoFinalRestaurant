<?php 

	$vNombre=$_POST['nombre'];
	$vApellido=$_POST['apellido'];
	$vCiudad=$_POST['ciudad'];
	$vFecha=$_POST['fecha'];
	$vTel=$_POST['telefono'];
	$vTel2=$_POST['telefono2'];
	$vEmail=$_POST['email'];
	$vMotivo=$_POST['motivo'];



 $Conexion = mysql_connect('mysql.hostinger.es','u365468925_proye','paginasweb2015');
  mysql_select_db('u365468925_proye', $Conexion);
 
 

		
	$query = "INSERT INTO clientes (Nombre_Cliente, Apellido_Cliente, Direccion_Cliente, Telefono_Cliente,fecha_reserv,otro_telefono,email,Motivo) 
	VALUES ('$vNombre','$vApellido','$vCiudad','$vTel','$vFecha','$vTel2','$vEmail','$vMotivo')";

	if (mysql_query($query)) 
		echo "Datos Insertados";
	else
		echo "NO se pudo insertar";


	echo $query;
 ?>

 
<script language="javascript">window.location="index.html";</script>



