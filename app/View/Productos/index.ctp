   <h2>Lista de productos</h2>
   
   <?php
	
		echo $this->Html->link('Crear nueva mesa', array ('controller'=>'productos','action'=>'nuevo'));
   ?>
   
   <table>
		<tr>
			<td>Nombre</td>
			<td>Descripcion</td>
			<td>Lugar</td>
			<td>Precio</td>
			<td>Categoria</td>
			<td>Creado</td>
			<td>Modificado</td>
			<td>Responsable</td>
			<td>Editar</td>
			<td>Eliminar</td>
		</tr>
   <?php foreach($productos as $producto){
		echo "<tr>";
		echo "<td> $producto['Producto']['name'] </td>";
		echo "<td> $producto['Producto']['description'] </td>";
		echo "<td> $producto['Producto']['place'] </td>";
		echo "<td> $producto['Producto']['price'] </td>";
		echo "<td> $producto['Producto']['category'] </td>";
		echo "<td> $this->Time->format('d-m-Y ; h:i A', $producto['Producto']['created']) </td>";
		echo "<td> $this->Time->format('d-m-Y ; h:i A', $producto['Producto']['modified']) </td>";
		echo "<td> $this->Html->Link($producto['User']['name'].''.$producto['User']['surname'],array('controller'=> 'users','action'=>'ver' , $producto['User'][''id]))</td>";
		echo "<td> $this->Html->link('Editar',array('controller'=>'productos','action'=>'editar',$producto['Producto']['id'])) </td>";
		echo "<td> $this->Form->postLink('Eliminar', array('action'=> 'eliminar',$producto['Producto']['id']), array('confirm'=>'Eliminar producto ' .$producto['Producto']['nombre'].'?' ))</td>";
		
		echo "</tr>";
	
	
	
	}
	?>
   
   </table>