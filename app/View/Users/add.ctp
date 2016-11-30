
<h2>Crear Usuario</h2>
<?php
	echo $this->Form->create('User');
	echo $this->Form->input('username');
	echo $this->Form->input('name');
	echo $this->Form->input('surname');
	echo $this->Form->input('password');
	echo $this->Form->input('email');
	echo $this->Form->input('role', array('options' => array('admin' => 'Admin', 'user' => 'User')
	echo $this->Form->end('Crear Usuario');
?>