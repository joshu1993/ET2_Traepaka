<h1>Detalles del usuario <?php echo $user['User']['username']; ?></h1>


<table>
<?php echo $this->Html->link('Volver lista de usuarios',array('controller'=>'users','action'=>'index'));?>
</table>


<div class="user form">

<p><strong>Username: </strong><?php echo $user['User']['username']; ?></p>
<p><strong>Name: </strong><?php echo $user['User']['name']; ?></p>
<p><strong>Apellido: </strong><?php echo $user['User']['surname']; ?></p>
<p><strong>Email: </strong><?php echo $user['User']['email']; ?></p>
<p><strong>Tipo: </strong><?php echo $user['User']['tipo']; ?></p>
<p><strong>Creado: </strong><?php echo $user['User']['created']; ?></p>

</div>


