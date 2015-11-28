<?php 
	//datos para la coneccion a maysql
define('DB_SERVER', 'mysql.hostinger.es');
define('DB_NAME', 'u365468925_proye');
define('DB_USER', 'u365468925_proye');
define('DB_PASS', 'paginasweb2015');
 
// $con = mysql_connect(DB_SERVER, DB_USER,DB_PASS);
 //mysql_select_db(DB_NAME, $con);
 
 $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS,DB_NAME);
 
 //$con = mysqli_connect('mysql.hostinger.es', 'u365468925_proye', 'paginasweb2015', 'u365468925_proye');

 ?>