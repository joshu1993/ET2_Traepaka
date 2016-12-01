
<h2> Lista de Usuarios </h2>
 <table>
  <tr>
		<td> Id</td>
		<td> Nombre</td>
		<td> Apellido</td>
		<td> Detalles</td>
		<td> Eliminar</td>
  </tr>
	<?php foreach($users as $user): ?>
		<tr>
			<td><?php echo $user['User']['id'] ?></td>
			<td><?php echo $user['User']['name']; ?></td>
			<td><?php echo $user['User']['surname']; ?></td>
			<td><?php echo $this->Html->Link('Detalle', array('controller'=> 'users', 'action'=> 'ver',$user['User']['id'])); ?></td>
			<td><?php echo $this->Form->postLink('Eliminar', array('action'=> 'eliminar',$user['User']['id']), array('confirm'=>'Eliminar a ' .$user['User']['name'].'?' )); ?></td>
		
		</tr>
	
	
	
	
	<?php endforeach; ?>
	</table>