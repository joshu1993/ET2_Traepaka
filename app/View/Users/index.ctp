<!-- app/View/Users/index.ctp -->
<div class="users form">
<h1 style="font-weight: bold; color: red; text-decoration: underline;"> Admin Panel:</h1>
<h2>Lista de Usuarios</h2>
<table>
    <thead>
		<tr>
			<th><?php echo $this->Form->checkbox('all', array('name' => 'CheckAll',  'id' => 'CheckAll')); ?></th>
			<th><?php echo $this->Paginator->sort('username', 'Usuario');?>  </th>
			<th><?php echo $this->Paginator->sort('email', 'E-Mail');?></th>
			<th><?php echo $this->Paginator->sort('created', 'Creado');?></th>
			<th><?php echo $this->Paginator->sort('tipo','Tipo');?></th>
			<th><?php echo $this->Paginator->sort('ver','Ver');?></th></th>
			<th><?php echo $this->Paginator->sort('eliminar','Eliminar');?></th>
		</tr>
	</thead>
	<tbody>						
		<?php $count=0; ?>
		<?php foreach($users as $user): ?>				
		<?php $count ++;?>
		<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
		<?php endif; ?>
			<td><?php echo $this->Form->checkbox('User.id.'.$user['User']['id']); ?></td>
			<td><?php echo $this->Html->link( $user['User']['username']  ,   array('action'=>'edit', $user['User']['id']),array('escape' => false) );?></td>
			<td style="text-align: center;"><?php echo $user['User']['email']; ?></td>
			<td style="text-align: center;"><?php echo $this->Time->niceShort($user['User']['created']); ?></td>
			<td style="text-align: center;"><?php echo $user['User']['tipo']; ?></td>
			<td><?php echo $this->Html->Link('Detalle', array('controller'=> 'users', 'action'=> 'ver',$user['User']['id'])); ?></td>
			<td><?php echo $this->Form->postLink('Eliminar', array('action'=> 'eliminar',$user['User']['id']), array('confirm'=>'Eliminar a ' .$user['User']['name'].'?' )); ?></td>
			</td>
		</tr>
		<?php endforeach; ?>
		<?php unset($user); ?>
	</tbody>
</table>
<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
<?php echo $this->Paginator->numbers(array(   'class' => 'numbers'     ));?>
<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
</div>				




	
	