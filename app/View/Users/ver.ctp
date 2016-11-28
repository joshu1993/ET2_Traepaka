
<h2>Detalle del usuario<?php $user['User']['nombre']; ?></h2>

<p><strong>Email: </strong><?php echo $user['User']['email']; ?></p>
<p><strong>Username: </strong><?php echo $user['User']['username']; ?></p>
<p><strong>Creado:: </strong><?php echo $user['User']['created']; ?></p>



<h3>Productos Usuario:</h3>

<?php if(empty($user['Producto'])): ?>
	
	<p> No tiene productos asociados </p>
	
<?php endif ?>	

<?php foreach($user['Producto'] as $us){
		
		echo "<p> Nombre: $us['name'] </p>";
		echo "<p> Descripcion: $us['description'] </p>";
		echo "<p> Lugar: $us['place'] </p>";
		echo "<p> Precio: $us['price'] </p>";
		echo "<p> Categoria: $us['category'] </p>";
		echo "<p> Creado: $us['created'] </p>";
		
	}
	?>
	
	
	<?php
	echo $this->Html->link('Volver lista de usuarios',array('controller'=>'users','action'=>'index'));

	?>
