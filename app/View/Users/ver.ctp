<h1>Detalles del usuario <?php echo $user['User']['username']; ?></h1>


<table>
<?php echo $this->Html->link('Volver lista de usuarios',array('controller'=>'users','action'=>'index'));?>
</table>


<div class="user form">

<p><strong>Username: </strong><?php echo $user['User']['username']; ?></p>
<p><strong>Name: </strong><?php echo $user['User']['name']; ?></p>
<p><strong>Apellido: </strong><?php echo $user['User']['surname']; ?></p>
<p><strong>Email: </strong><?php echo $user['User']['email']; ?></p>
<p><strong>Tipo: </strong><?php echo $user['User']['tipo']; ?></p>
<p><strong>Creado: </strong><?php echo $user['User']['created']; ?></p>

</div>

<h3>Productos Usuario:</h3>

<?php if(empty($user['Producto'])): ?>
	
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
	
	
	<?php
	echo $this->Html->link('Volver lista de usuarios',array('controller'=>'users','action'=>'index'));
?>

