<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style-portfolio.css">
    <link rel="stylesheet" href="css/picto-foundry-food.css" />
    <link rel="stylesheet" href="css/jquery-ui.css">
    <script src="js/jquery-1-11-3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="favicon-1.ico" type="image/x-icon">
</head>
<body>
	<!--barra navegacion-->


    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
         <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    	<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
              
                </button>
                <a href="#" class="navbar-brand color_animation "> Iniciar Sesión</a>
            </div>
            <!--Agrupar los enalaces en navegacion, que se puedan ocultar al minimizar la barra-->
   <div class="collapse navbar-collapse" id="bs-example-navbar-ccolor_animationollapse-1">
                <ul class="nav navbar-nav main-nav  clear navbar-right ">
                
                  
                   
                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav></br></br></br></br>
    

   

<div class="container-fluid col-lg-offset-3">
   <div class="row">
    <div class="col-md-7">

<!--Inicio formulario -->
<form action = "usuarioconexion.php" method="POST" class="form-horizontal login ">
   <fieldset>
   	<legend>Iniciar Sesion</legend>
     <div class="form-group">
         <label class="col-lg-2 control-label">Usuario</label>
         <div class="col-lg-7">
         <input name="user" type="text" class="form-control"  placeholder="Usuario">
     </div>
     </div>

     <div class="form-group">
         <label class="col-lg-2 control-label">Contraseña</label>
         <div class="col-lg-7">
         <input name="password" type="password" class="form-control"  placeholder="Contraseña">
     </div>
     </div>

     <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              <button name="login"type="submit" value="login" class="btn btn-info">Ingresar</button>
            </div>
     </div>
    </fieldset>
    </form>
    </div>
    </div>
    </div>


 </body>
</html>
