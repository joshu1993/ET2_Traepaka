
<!-- app/View/Productos/nuevo.ctp -->

<table>

<?php echo $this->Form->create('Producto'); ?>
    <fieldset>
        <legend><?php echo ('Crear Producto'); ?></legend>
        <?php echo $this->Form->input('name');
		echo $this->Form->input('description', array('rows'=>3));
		echo $this->Form->input('place');
        echo $this->Form->input('price');
		echo $this->Form->input('category_id');
        echo $this->Form->input('user_id');
    ?>
    </fieldset>
<?php echo $this->Form->end('Publicar producto'); ?>
</table>
<table>
<?php echo $this->Html->link('Volver a lista de productos', array('controller'=>'productos','action'=>'index')); ?>
</table>