<?php
$form = array(
	'name' => 'form_tevaluador'
	);
$url = "'".base_url()."index.php/TEvaluador'";
$js_cancel_button = 'onClick="location.href='.$url.'"';
$DESC_TEvaluador = array(	
	'name' => 'DESC_TEvaluador',
	'value' => $tevaluadores->result()[0]->DESC_TEvaluador,
	'placeholder' => 'Descripción de TEvaluador',
	'maxlength' => 100,
	'size' => 30
	);
?>

<div>
	<?php echo form_open('TEvaluador/actualizar/'.$tevaluadores->result()[0]->ID_TEvaluador,$form);?>
	<br>
	<?php echo form_label('Descripción de TEvaluador: ','DESC_TEvaluador'); ?>
	<?php echo form_input($DESC_TEvaluador); ?>
	<br>
	<?php echo form_submit('Guardar','Guardar'); ?>
	<?php echo form_button('Cancelar','Cancelar',$js_cancel_button); ?>
	<?php echo form_close();?>
</div>

