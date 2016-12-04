<?php
    echo $this->Html->meta('icon');

    echo $this->Html->css(array('cake.generic','traepaka.css','bootstrap.min','bootstrap-theme.min'));
    echo $this->Html->script(array('jquery','npm','bootstrap.min'));

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
          <li class="active"><a <?php echo $this->Html->link('Inicio', '/Posts/view', array('class' => 'button')); ?>>Inicio</a></li>
          <li><a <?php echo $this->Html->link('Chats', '/Chats/views', array('class' => 'button')); ?>>Chats</a>Chats</a></li>
           <li><a <?php echo $this->Html->link('Usuarios', '/Users/view', array('class' => 'button')); ?>>Usuarios</a>Usuarios</a></li>
          <li><a <?php echo $this->Html->link('Productos', '/Productos/index', array('class' => 'button')); ?>>Productos</a>Productos</a></li>
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
   
    <section>
    <div id="cuadroproductos" type="submit" class="row">
      <div id="cuadroanuncio" class= "col-sm-4">
	  <?php foreach($productos as $producto): ?>
    
        <div id="imagenproducto">
        <img src="/ET2_Traepaka/app/webroot/img/futbolin.jpg"></img>
        </div>
        <div id="nombreProducto" >
        <h1><?php echo $producto['Producto']['name']; ?></h1>
        <h2><?php echo $producto['Producto']['place']; ?></h2>
		<h2><?php echo $producto['Producto']['price']; ?></h2>
        </div>
        <h3><?php echo $producto['Producto']['description']; ?></h3>
        <div id="botones" class="col-sm-6" >
        <button type="submit"class="verdetalles"><?php echo $this->Html->link('Editar',array('controller'=>'productos','action'=>'editar',$producto['Producto']['id'])); ?></button>
        <button type="submit" class="loquiero"><?php echo $this->Form->postLink('Eliminar', array('action'=> 'eliminar', $producto['Producto']['id']), array('confirm' => 'Eliminar producto ')); ?></button>
        </div>
		
		<?php endforeach; ?>
		<?php
	echo $this->Html->link('Crear nuevo producto', array ('controller'=>'productos','action'=>'nuevo'));
    ?>
      </div>
     
    </div>
  </section>
  <section>
    <div id="paginasbuscar" class="row">
      <nav aria-label="..."><ul class="pagination">...</ul></nav>
        <ul class="pagination">
          <li class="disabled">
            <span>
              <span aria-hidden="true">&laquo;</span>
            </span>
          </li>
          <li class="active"><span>1 <span class="sr-only">(current)</span></span></li>
          <li> <span>2 <span class="sr-only">(current)</span></span></li>
          <li> <span>3 <span class="sr-only">(current)</span></span></li>
          <li> <span>4 <span class="sr-only">(current)</span></span></li>
          <li> <span>5 <span class="sr-only">(current)</span></span></li>
          <li> <span>6 <span class="sr-only">(current)</span></span></li>
          <li> <span>7 <span class="sr-only">(current)</span></span></li>
          <li> <span>8 <span class="sr-only">(current)</span></span></li>
          <li> <span>9 <span class="sr-only">(current)</span></span></li>
          </ul>
      </nav>
    </div>
  </section>
  
  
    <footer>
     <div class="panel-footer">Copyright &copy; 2016 ·Joshua y Ramón· Todos los derechos reservados.</div>
  </footer>
  
<script src="js/jquery.js" ></script>
<script src="js/bootstrap.js" ></script>
</body>
</html>

 