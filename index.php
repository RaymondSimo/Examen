<!DOCTYPE html> 
<html> 
<head> 
<title>Examen parcial</title> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<div class="navbar navbar-inverse"> 
    <a class="navbar-brand" href="#">@Mercado en linea</a> 
    <ul class="nav navbar-nav"> 
        <li class="active"><a href="#">Inicio</a></li> 
        <li><a href="mostrar.php">Listar</a></li> 
        <li><a href="agregar.php">Insertar</a></li> 
        <li><a href="editar.php">Modificar</a></li> 
        <li><a href="borrarin.php">Eliminar</a></li> 
    </ul> 
    <li class="dropdown"> 
    <a class="dropdown-toggle" href="#" data-toggle="dropdown" >Submenu <b class="caret"></b></a> 
    <ul class="dropdown-menu"> 
        <li><a href="#">Compras</a></li> 
        <li><a href="#">Ventas</a></li> 
        <li class="divider"></li> 
        <li><a href="#">Pedidos</a></li> 
    </ul> 
</li>
</div>



</head> 

<body class="container"> <h1>Acmeshop</h1>

<div id="myCarousel" class=" carousel slide">
            <ol class=" carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/mercado.jpg" alt="">
                    <div class="carousel-caption">
                        <h1>Examen Parcial</h1>
                        <p>Marzo</p>
                    </div>
                </div>
                <div class="item">
                    <img src="img/vector.jpg" alt="">
                    <div class="carousel-caption">
                        <h1>Examen Parcial</h1>
                        <p>Marzo</p>
                    </div>
                </div>
            </div>
</div>

<script src="http://code.jquery.com/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script> 
</body> 
</html>