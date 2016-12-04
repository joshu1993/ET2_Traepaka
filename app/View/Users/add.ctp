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
          <li><a <?php echo $this->Html->link('Chats', '/Chats/view', array('class' => 'button')); ?>>Chats</a>Chats</a></li>
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


<!-- app/View/Users/add.ctp -->
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo ('Crear Usuario'); ?></legend>
        <?php echo $this->Form->input('username');
		echo $this->Form->input('name');
		echo $this->Form->input('surname');
        echo $this->Form->input('password');
		echo $this->Form->input('email');
        echo $this->Form->input('tipo', array(
            'options' => array('admin' => 'Admin', 'user' => 'User')
        ));
    ?>
    </fieldset>
<?php echo $this->Form->end('Añadir usuario'); ?>
<table>

<?php 
if($this->Session->check('Auth.User')){
echo $this->Html->link( "Volver a inicio",   array('action'=>'index') ); 
echo "<br>";
echo $this->Html->link( "Logout",   array('action'=>'logout') ); 
}else{
echo $this->Html->link( "Volver a la pantalla de login",   array('action'=>'login') ); 
}
?>
</table>
</body>