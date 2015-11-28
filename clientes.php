<!DOCTYPE html>
<html>

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
                    <li><a class="color_animation" href="contenido.php">Inicio</a></li>
                   
                </ul>
                 <?php
    session_start();
   

    if (!isset($_SESSION['userid']))
        $_SESSION['userid']=1;

    if($_SESSION['userid']==0)
          echo '</br></br></br></br>','<a>Acceso Restringido: </a>';
    if($_SESSION['userid']==0)
        echo '<a><img src="images/logo72.png" alt="Inicio"></a>';
       
        if($_SESSION['userid']==0)
        echo '<a href="cerrarsesion.php">  Iniciar Sesion</a>';

       
 
    else
    {
?>
                <ul class="nav navbar-nav main-nav  clear navbar-right navbar-top">
                    <li><a class="color_animation" href="cerrarsesion.php">Cerrar Sesion</a></li>
                </ul>
            </div>
        </div>
        </nav>
          <div class="container-fluid">
            <div class="row">
                <div class="col-md col-lg-offset-1 ">
                    <table class="table table-hover table-responsive">
                         <tbody>
                            </br></br></br></br>
                            <div class="container-fluid">
   <div class="row">
    <div class="col-md-5">
      <table class="table table-hover table-responsive">
     <thead>
        <tr class="success">
          <th>Cliente</th>
           <th>Apellidos</th>
           <th>Direccion</th>
          <th>Telefono</th>
          <th>Otro Telefono</th>
          <th>Email</th>
          <th>Usuario</th>
          <th>Contraseña</th>
           </tr>
      </thead>
    <tbody>
                            
                            <?php
                        include_once "conexion.php";
                        $con = mysqli_connect('mysql.hostinger.es', 'u365468925_proye', 'paginasweb2015', 'u365468925_proye');
                      $query="SELECT * FROM clientes";

  $record = mysqli_query($con,$query);

 if($row= mysqli_fetch_array($record))
 {
   
    do {
      echo "<tr><td>".$row['Nombre_Cliente']."</td>
                <td>".$row['Apellido_Cliente']."</td>
                <td>".$row['Direccion_Cliente']."</td>
                <td>".$row['Telefono_Cliente']."</td>
                <td>".$row['otro_telefono']."
                <td>".$row['email']."
                <td>".$row['usuario']."</td>
                <td>".$row['password']."</td>
            </tr> \n";
    }
    while ($row = mysqli_fetch_array($record));
    echo "</table> \n";
  }


?>

                        </tbody>    
                    </table>
                </div>
            </div>
            <div class="clearfix visible-lg"></div>
        </div >
  <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
    <script type="text/javascript" src="js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
    <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>      
    <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <script type="text/javascript">
        $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                      return false;
                    }
                }
            });
        });

    </script>


    <script>
        $(function() {
            $( "#datepicker" ).datepicker();
        });
    </script>

    <script type="text/javascript">
        $(function(){
            $('#portfolio').mixitup({
                targetSelector: '.item',
                transitionSpeed: 450
            });
        });
    </script>
</body>
</html>
  

<?php
}
?>