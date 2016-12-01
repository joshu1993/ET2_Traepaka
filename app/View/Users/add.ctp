<!-- app/View/Users/add.ctp -->
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo ('Add User'); ?></legend>
        <?php echo $this->Form->input('username');
		echo $this->Form->input('name');
		echo $this->Form->input('surname');
        echo $this->Form->input('password');
		echo $this->Form->input('email');
        echo $this->Form->input('tipo', array(
            'options' => array('admin' => 'Admin', 'user' => 'User')
        ));
    ?>
    </fieldset>
<?php echo $this->Form->end('Añadir usuario'); ?>
<table>
<?php echo $this->Html->link('Volver lista de usuarios',array('controller'=>'users','action'=>'index'));?>
</table>