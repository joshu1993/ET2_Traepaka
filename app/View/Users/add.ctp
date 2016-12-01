<!-- app/View/Users/add.ctp -->
<div class="users form">
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
<?php echo $this->Form->end('Submit'); ?>
</div>