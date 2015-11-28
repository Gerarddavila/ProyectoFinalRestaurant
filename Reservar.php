<?php session_start(); ?>
<!DOCTYPE html>
<html>

 <meta charset="UTF-8">
    <title>Reservaciones</title>
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
               
                </ul>
<?php
if (!isset($_SESSION['valido']))
        $_SESSION['valido']=0;

    if($_SESSION['valido']==0){
    echo "<div align='center'>";            
        echo "<img class='img-responsive' src='images/logo72.pn' alt='restringido'>";
        echo "<a class='btn btn-warning' href='index.html'>Login</a>";
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
    

<section class="description_content">
        <div class="limit">
            <div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form">
                    <!-- Form -->
                    <form id="contact-us" method="post" action="savereservar.php">
                        <!-- Left Inputs -->

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-6 col-xs-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-xs-6">
                                            <!-- Name -->
                                            
                                            <input type="text" name="fecha" id="datepicker" required="required" class="form" placeholder="Fecha Reservación" />
                                            <input type="text" name="nombre" id="subject" required="required" class="form" placeholder="Persona a Reservar" />
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-xs-6">  
                                            <!-- Name -->
                                          
                                            <input type="text" name="personas" id="subject" required="required" class="form" placeholder="Numero de Personas" />
                                              <div class="form-group">
                         <label for="select" class="col-lg-4 control-label">Seleccionar</label>
                        <div class="col-lg-6">        
                        <select name="tipo" class="form-control" id="select">
               <?php
		  $con = mysqli_connect('mysql.hostinger.es', 'u365468925_proye', 'paginasweb2015', 'u365468925_proye');
                
                  $query = "SELECT * FROM Tipo";

                  $record = mysqli_query($con,$query);

                  while ($dato = mysqli_fetch_array($record)) 
                  {
                    echo "<option value='".$dato['idTipo']."'>".$dato['Horario']."</option>";
                  }

                ?>
              </select>
          </div>
            </div>
                                        </div>

                                        <div class="col-xs-12">
                                            <!-- Send Button -->
                                            <button type="submit" id="submit" name="submit" class=" form-btn form-btn1 semibold">Reservar</button> 
                                        </div>
                                        
                                    </div>
                                </div>

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
