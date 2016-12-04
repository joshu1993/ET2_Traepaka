<?php
    echo $this->Html->meta('icon');

    echo $this->Html->css(array('bootstrap.min','bootstrap-theme.min'));
    echo $this->Html->css('traepaka.css'); 
    echo $this->Html->script(array('jquery','bootstrap.min'));

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
  ?>
<!doctype html>
<html>
<head>
<!--
<meta charset="UTF-8">

 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0, user-scalable=no">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
 <link rel="stylesheet" href="css/traepaka.css"></link>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <title>Traepaká</title>
-->
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
          <li><a <?php echo $this->Html->link('Chats', '/Chats/vista', array('class' => 'button')); ?></a></li>
          <li class="active"><a <?php echo $this->Html->link('Productos', '/Productos/index', array('class' => 'button')); ?></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
           <button type="submit" class="iniciosesion" onClick=" window.location.href='/ET2_Traepaka/login.ctp' ">Iniciar Sesión</button>
        </ul>      
    </div>
  </div>
</nav>
  </header>


<h1>Detalles del producto <?php echo $producto['Producto']['id']; ?></h1>

<div class="user form">

<p><strong>Id: </strong><?php echo $producto['Producto']['id']; ?></p>
<p><strong>Name: </strong><?php echo $producto['Producto']['name']; ?></p>
<p><strong>Description: </strong><?php echo $producto['Producto']['description']; ?></p>
<p><strong>Place: </strong><?php echo $producto['Producto']['place']; ?></p>
<p><strong>Price: </strong><?php echo $producto['Producto']['price']; ?></p>
<p><strong>Category: </strong><?php echo $producto['Producto']['category']; ?></p>
<p><strong>Created: </strong><?php echo $producto['Producto']['created']; ?></p>

</div>
<div class="user form">
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
	echo $this->Html->link('Volver a la lista de productos',array('controller'=>'productos','action'=>'index'));
?>
</div>
</body>