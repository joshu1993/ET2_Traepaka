<h2>Crear Producto</h2>

<?php
	echo $this->Form->create('Producto');
	echo $this->Form->input('name');
	echo $this->Form->input('description', array('rows'=>3));
	echo $this->Form->input('place');
	echo $this->Form->input('price');
	echo $this->Form->input('category');
	echo $this->Form->input('user_id');
	echo $this->Form->end('Crear mesa');
?>

<?php
	echo $this->Html->link('Volver a lista de mesas', array('controller'=>'productos','action'=>'index'));
	
?>	