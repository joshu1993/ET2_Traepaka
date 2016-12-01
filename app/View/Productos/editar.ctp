
<!-- app/View/Productos/nuevo.ctp -->
<div class="users form">
    <fieldset>
        <legend><?php echo ('Editar Producto'); ?></legend>
        <?php echo $this->Form->input('name');
		echo $this->Form->input('description', array('rows'=>3));
		echo $this->Form->input('place');
        echo $this->Form->input('price');
		echo $this->Form->input('category');
        
    ?>
    </fieldset>
<?php echo $this->Form->end('Editar Producto'); ?>
</div>


