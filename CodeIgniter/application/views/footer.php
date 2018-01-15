<div id="cabecera">
	<div id=botonVolver>
	
	<?php 
		$url = "'".base_url()."index.php'";
		$js_volver_button = 'onClick="location.href='.$url.'"';
	 ?>

	<?php echo form_button('Volver','Volver',$js_volver_button); ?>
	</div>

</div>

</body>
</html>