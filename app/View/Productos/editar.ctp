<h2>Editar Producto</h2>


<?php echo $this->Form->create('Producto');?>
<?php echo $this->Form->input('name');?>
<?php echo $this->Form->input('description',array('rows'=>3));?>
<?php echo $this->Form->input('place');?>
<?php echo $this->Form->input('price');?>
<?php echo $this->Form->input('category');?>
<?php echo $this->Form->end('Editar producto');?>

