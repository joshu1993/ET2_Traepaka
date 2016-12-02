
<h2>Detalle del usuario <?php echo $user['User']['name']; ?></h2>

<p><strong>Email: </strong><?php echo $user['User']['email']; ?></p>
<p><strong>Username: </strong><?php echo $user['User']['username']; ?></p>
<p><strong>Creado:: </strong><?php echo $user['User']['created']; ?></p>



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
