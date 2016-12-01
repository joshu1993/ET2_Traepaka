   <h2>Lista de productos</h2>
   
  
   
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
   <?php foreach($productos as $producto): ?>
		<tr>
			
			<td><?php echo $producto['Producto']['name']; ?></td>
			<td><?php echo $producto['Producto']['description']; ?></td>
			<td><?php echo $producto['Producto']['place']; ?></td>
			<td><?php echo $producto['Producto']['price']; ?></td>
			<td><?php echo $producto['Producto']['category']; ?></td>
			<td><?php echo $this->Time->format('d-m-Y ; h:i A', $producto['Producto']['created']); ?></td>
			<td><?php echo $this->Time->format('d-m-Y ; h:i A', $producto['Producto']['modified']); ?></td>
			<td><?php echo $this->Html->Link($producto['User']['name'].''.$producto['User']['surname'],array('controller'=> 'users','action'=>'ver' , $producto['User']['id'])); ?></td>
			<td><?php echo $this->Html->link('Editar',array('controller'=>'productos','action'=>'editar',$producto['Producto']['id'])); ?></td>
			<td><?php echo $this->Form->postLink('Eliminar', array('action'=> 'eliminar',$producto['Producto']['id']), array('confirm'=>'Eliminar producto ' .$producto['Producto']['name'].'?' )); ?></td>
		
		</tr>
		
	<?php endforeach; ?>
	
	
	
   
   </table>
   
    <?php
	
		echo $this->Html->link('Crear nuevo producto', array ('controller'=>'productos','action'=>'nuevo'));
   ?>
   
   