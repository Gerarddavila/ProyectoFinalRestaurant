<?php 
	//datos para la coneccion a maysql
define('DB_SERVER', 'localhost');
define('DB_NAME', 'a7150759_Paginas');
define('DB_USER', 'root');
define('DB_PASS', 'MARIACRISTINA');
 
 //$con = mysql_connect(DB_SERVER, DB_USER,DB_PASS);
 //mysql_select_db(DB_NAME, $con);
 
 //$conexion = mysqli_connect(DB_SERVER, DB_USER, DB_PASS,DB_NAME);
 
 $con = mysqli_connect('mysql.hostinger.es', 'u365468925_proye', 'paginasweb2015', 'u365468925_proye');

 ?>