<!-- app/View/Users/edit.ctp -->

<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Editar usuario'); ?></legend>
        <?php 
		echo $this->Form->hidden('id', array('value' => $this->data['User']['id']));
		echo $this->Form->input('username', array('label' => 'Nombre usuario', 'readonly' => 'readonly', 'label' => 'El nombre de usuario no puede cambiarse!'));
		echo $this->Form->input('email');
        echo $this->Form->input('password_update', array( 'label' => 'Nueva contraseña', 'maxLength' => 255, 'type'=>'password', 'required' => 0));
		echo $this->Form->input('password_confirm_update', array('label' => 'Repetir contraseña', 'maxLength' => 255, 'title' => 'Repite la contraseña', 'type'=>'password', 'required' => 0));
		
		echo $this->Form->input('tipo', array(
            'options' => array( 'admin' => 'Admin', 'user' => 'User')
        )); 
?>
    </fieldset>
<?php echo $this->Form->end('Modificar usuario'); ?>
<table>
<?php echo $this->Html->link('Volver lista de usuarios',array('controller'=>'users','action'=>'index'));?>
</table>