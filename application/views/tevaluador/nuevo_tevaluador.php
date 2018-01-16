 <?php
$form = array(
	'name' => 'form_tevaluador'
	);
$DESC_TEvaluador = array(	
	'name' => 'DESC_TEvaluador',
	'placeholder' => 'Descripción de TEvaluador',
	'maxlength' => 100,
	'size' => 30
	);
?>

<div>
	<?php echo form_open('TEvaluador/nuevo_tevaluador',$form);?>
	<?php echo form_label('Descripción de TEvaluador: ','DESC_TEvaluador'); ?>
	<?php echo form_input($DESC_TEvaluador); ?>
	<br>
	<?php echo form_submit('Crear','Crear'); ?>
	<?php echo form_close();?>
</div>
