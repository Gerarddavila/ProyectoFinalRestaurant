<?php session_start(); ?>
<!DOCTYPE html>
<html>

 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title>Restaurant</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style-portfolio.css">
    <link rel="stylesheet" href="css/picto-foundry-food.css" />
    <link rel="stylesheet" href="css/jquery-ui.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="favicon-1.ico" type="image/x-icon">
    
</head>

<body>

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="images/logo72.png" alt="Inicio"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav main-nav   ">
                    <li><a class="color_animation" href="contenido.php">Inicio</a></li>
                   
                </ul>
                 <?php
     if (!isset($_SESSION['valido']))
        $_SESSION['valido']=0;

    if($_SESSION['valido']==0){
    echo "<div align='center'>";            
        echo "<img class='img-responsive' src='images/logo72.png' alt='restringido'>";
        echo "<a class='btn btn-warning' href='index.php'>Login</a>";
    echo "</div>";
    }
else
    {
?>

                <ul class="nav navbar-nav main-nav  clear navbar-right navbar-raght">
                    <li><a class="color_animation" href="cerrarsesion.php">Cerrar Sesion</a></li>
                </ul>
            </div>
        </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md col-lg-offset-1">
                    <table class="table table-hover table-responsive">
                       <tbody>
                            </br></br></br></br>
                           <div class="row">
    <div class="col-md-5">
      <table class="table table-hover table-responsive">
     <thead>
        <tr class="success">
          <th>Cliente</th>
          <th>Apellidos</th>
          <th>Direccion</th>
          <th>Telefono</th>
           <th>Telefono Opcional</th>
          <th>Fecha Reservacion</th>
          <th>Email</th>
           </tr>
      </thead>
    <tbody>
                            
<?php
$con = mysqli_connect('mysql.hostinger.es', 'u365468925_proye', 'paginasweb2015', 'u365468925_proye');

$query="SELECT * FROM clientes";

  $record = mysql_query($query);

  while ($dato = mysql_fetch_array($record)) {   
                                
                                   echo "<tr><td>".$row['Nombre_Cliente']."</td>
                                                  <td>".$row['Apellido_Cliente']."</td>
                                                  <td>".$row['Direccion_Cliente']."</td>
                                                  <td>".$row['Telefono_Cliente']."</td>
                                                  <td>".$row['otro_telefono']."</td>
                                                   <td>".$row['fecha_reserv']."</td>
                                                  <td>".$row['email']."</td><br>"; 
                                    echo "<tr>";
                              }
                            }
?>
                        </tbody>    
                    </table>
                </div>
            </div>
            <div class="clearfix visible-lg"></div>
        </div >
    </body>
</html>