
<?php
    echo $this->Html->meta('icon');

    echo $this->Html->css(array('traepaka.css','bootstrap.min','bootstrap-theme.min'));
    echo $this->Html->script(array('jquery','bootstrap.min'));

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
  ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">

 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0, user-scalable=no">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
 <link rel="stylesheet" href="css/traepaka.css"></link>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <title>Traepaká</title>

</head>
<body>
  <header>
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
      <div class="container">
        <!-- Logo y toggle quedan agrupados para una mejor visualización en dispositivos móviles -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegador" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          <div id="logo" >
          <img src="/ET2_Traepaka/app/webroot/img/imagenlogo.png">
          </div>
        </div>

        <!-- Agrupa los enlaces de navegación, formularios y otros contenidos para toggle -->
      <div class="collapse navbar-collapse" id="navegador">
        <ul class="nav navbar-nav">
          <li><a <?php echo $this->Html->link('Inicio', '/Posts/view', array('class' => 'button')); ?></a></li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >Categorías<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a>Casa y Jardín</a></li>
            <li><a>Caza y Pesca</a></li>
            <li><a>Deportes</a></li>
            <li><a>Mobiliario</a></li>
            <li><a>Moda</a></li>
            <li><a>Motor</a></li>
            <li><a>Tecnología</a></li>
          </ul>
          </li>  
          <li> 
            <form class="navbar-form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Buscar producto...">
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
            </form>
          </li>
          <li><a <?php echo $this->Html->link('Chats', '/Chats/view', array('class' => 'button')); ?></a></li>
           <li><a <?php echo $this->Html->link('Usuarios', '/Users/index', array('class' => 'button')); ?></a></li>
          <li><a <?php echo $this->Html->link('Productos', '/Productos/index', array('class' => 'button')); ?></a></li>
          <li>
          <div id="iniciar_sesion" class= "col-sm-2">
          <button type="submit" class="iniciosesion">Iniciar Sesión</button>
          </div> 
          </li>
        </ul>
      </ul>
    </div>
  </div>
</nav>
  </header>


<h1>Detalles del usuario <?php echo $user['User']['username']; ?></h1>

<div class="user form">

<p><strong>Username: </strong><?php echo $user['User']['username']; ?></p>
<p><strong>Name: </strong><?php echo $user['User']['name']; ?></p>
<p><strong>Apellido: </strong><?php echo $user['User']['surname']; ?></p>
<p><strong>Email: </strong><?php echo $user['User']['email']; ?></p>
<p><strong>Tipo: </strong><?php echo $user['User']['tipo']; ?></p>
<p><strong>Creado: </strong><?php echo $user['User']['created']; ?></p>

</div>
<!--
<h3>Productos Usuario:</h3>

<?php if(empty($user['Producto'])): >?
	
	<p> No tiene productos asociados </p>
	
<?php endif; ?>	

<?php foreach($user['Producto'] as $us): ?>{
		
		<p><?php echo Nombre: $us['name']; ?></p>
		<p><?php echo Descripcion: $us['description']; ?></p>
		<p><?php echo Lugar: $us['place']; ?></p>
		<p><?php echo Precio: $us['price']; ?></p>
		<p><?php echo Categoria: $us['category']; ?></p>
		<p><?php echo Creado: $us['created']; ?></p>
		
	}
	<?php endforeach; ?>

-->
	
	<?php
	echo $this->Html->link('Volver lista de usuarios',array('controller'=>'users','action'=>'index'));
?>

