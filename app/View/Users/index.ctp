
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


<!-- app/View/Users/index.ctp -->

<h1> Lista de usuarios:</h1>
<table>
    <thead>
		<tr>
			<th><?php echo $this->Form->checkbox('all', array('name' => 'CheckAll',  'id' => 'CheckAll')); ?></th>
			<th><?php echo $this->Paginator->sort('username', 'Usuario');?>  </th>
			<th><?php echo $this->Paginator->sort('email', 'E-Mail');?></th>
			<th><?php echo $this->Paginator->sort('tipo','Tipo');?></th>
			<th><?php echo $this->Paginator->sort('created', 'Creado');?></th>
			<th><?php echo $this->Paginator->sort('ver','Ver');?></th></th>
			<th><?php echo $this->Paginator->sort('edit','Modificar');?></th></th>
			<th><?php echo $this->Paginator->sort('eliminar','Eliminar');?></th>
		</tr>
	</thead>
	<tbody>						
		<?php $count=0; ?>
		<?php foreach($users as $user): ?>				
		<?php $count ++;?>
		<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
		<?php endif; ?>
			<td><?php echo $this->Form->checkbox('User.id.'.$user['User']['id']); ?></td>
			<td><?php echo $user['User']['username']; ?></td>
			<td><?php echo $user['User']['email']; ?></td>
			<td><?php echo $user['User']['tipo']; ?></td>
			<td><?php echo $this->Time->niceShort($user['User']['created']); ?></td>
			<td><?php echo $this->Html->Link('+info', array('controller'=> 'users', 'action'=> 'ver',$user['User']['id'])); ?></td>
			<td><?php echo $this->Html->Link('edit', array('controller'=> 'users', 'action'=> 'edit',$user['User']['id'])); ?></td>
			<td><?php echo $this->Form->postLink('eliminar', array('action'=> 'eliminar', $user['User']['id']), array('confirm'=>'Eliminar a ' . $user['User']['name'] . '?' )); ?></td>
			</td>
		</tr>
		<?php endforeach; ?>
		<?php unset($user); ?>
	</tbody>
</table>

<table>
<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
<?php echo $this->Paginator->numbers(array(   'class' => 'numbers'     ));?>
<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
</table>	
<table>
<?php echo $this->Html->link( "Crear usuario",   array('action'=>'add'),array('escape' => false) ); ?>
<br/>
<?php 
echo $this->Html->link( "Logout",   array('action'=>'logout') ); 
?>
</table>