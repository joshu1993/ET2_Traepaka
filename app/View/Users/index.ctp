
<h2> Lista de Usuarios </h2>
 <table>
  <tr>
		<td> Id</td>
		<td> Nombre</td>
		<td> Apellido</td>
		<td> Detalles</td>
  </tr>
	<?php foreach($users as $user){
		echo "<tr>";
		echo "<td> $user['User']['id'] </td>";
		echo "<td> $user['User']['nombre'] </td>";
		echo "<td> $user['User']['surname'] </td>";
		echo "<td> $this->Html->Link('Detalle', array('controller'=> 'users', 'action'=> 'ver',$user['User']['id']))</td>";
		echo "<td> $this->Form->postLink('Eliminar', array('action'=> 'eliminar',$user['User']['id']), array('confirm'=>'Eliminar a ' .$user['User']['nombre'].'?' ))</td>";
		
		echo "</tr>";
	
	
	
	}
	?>