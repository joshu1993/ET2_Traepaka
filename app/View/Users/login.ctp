<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Por favor introduzca usuario y contraseña'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>
<?php
<<<<<<< HEAD

 echo $this->Html->link( "Registrarse",   array('action'=>'add') ); 
 echo $this->Html->link( "Añadir nuevo usuario",   array('action'=>'add') ); 

=======
 echo $this->Html->link( "Add A New User",   array('action'=>'add') ); 
>>>>>>> parent of 9298fdf... vistas
?>