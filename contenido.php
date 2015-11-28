<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
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
                    <li><a class="color_animation" href="intereses.php">Comentarios</a></li>
                    <li><a class="color_animation" href="detalles.php">Reservaciones</a></li>
                    <li><a class="color_animation" href="empleados.php">Empleados</a></li>
                </ul>
<?php
if (!isset($_SESSION['valido']))
        $_SESSION['valido']=0;

    if($_SESSION['valido']==0){
    echo "<div align='center'>";            
        echo "<img class='img-responsive' src='images/logo72.pn' alt='restringido'>";
        echo "<a class='btn btn-warning' href='index.php'>Login</a>";
    echo "</div>";
    }
else
    {
?>
                <ul class="nav navbar-nav main-nav  clear navbar-right navbar-top">
                    <li><a class="color_animation" href="cerrarsesion.php">Cerrar Sesion</a></li>
                </ul>
            </div>
        </div>
        </nav>
    

<div id="top" class="starter_container bg">
        <div class="follow_container">
            <div class="starter_follow">
                <h2 class="top-title"> Los Olivos</h2>
                <h2 class="white second-title">" Alimentos & Bebidas "</h2>
                <h2 class="top-title">ADMINISTRADOR</h2>
                
            </div>
        </div>  
    </div>
 </body>
</html>
<?php
}
?>