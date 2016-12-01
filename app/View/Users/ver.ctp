
<h2>Detalle del usuario <?php echo $user['User']['name']; ?></h2>

<p><strong>Email: </strong><?php echo $user['User']['email']; ?></p>
<p><strong>Username: </strong><?php echo $user['User']['username']; ?></p>
<p><strong>Creado:: </strong><?php echo $user['User']['created']; ?></p>



	
	<?php
	echo $this->Html->link('Volver lista de usuarios',array('controller'=>'users','action'=>'index'));

	?>
