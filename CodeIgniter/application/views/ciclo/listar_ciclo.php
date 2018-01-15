<div id="centro">
<?php
		printf('Gestión de CICLOS<br>');
		printf('--------------------------------------------------------------------<br>');
		
		//FILTROS DE CURSO Y GRUPO
		if ($centros){
			$ID_Centro = array(
	    		0         => 'Todos los Centros'
			);
			foreach ($centros->result() as $centro) {
				$ID_Centro[$centro->ID_Centro] = $centro->DESC_Centro;
			}	
		}
		else{
			$ID_Centro = array(
	    		0         => 'Todos los Centros'
			);
		}

		if ($cursos){
			$ID_Curso = array(
	    		0         => 'Todos los Cursos'
			);
			foreach ($cursos->result() as $curso) {
				$ID_Curso[$curso->ID_Curso] = $curso->COD_Curso;
			}	
		}
		else{
			$ID_Curso = array(
	    		0         => 'Todos los Cursos'
			);
		}	

		?>


		<div>
			<?php echo form_open('Ciclo/filtrar_ciclo');?>
			<?php echo form_label('Centro: ','ID_Centro'); ?>
			<?php
			//DESPLEGABLE DE CENTRO
			echo form_dropdown('ID_Centro', $ID_Centro);
			?>
			<?php echo form_label('Curso: ','ID_Curso'); ?>
			<?php
			//DESPLEGABLE DE CURSOS
			echo form_dropdown('ID_Curso', $ID_Curso);
			?>
			<?php echo form_submit('Filtrar','Filtrar'); ?>
			<?php echo form_close();?>
		</div>

		<?php
		printf('--------------------------------------------------------------------<br>');	


		//TABLA DE RESULTADOS DEL LISTADO	
		if ($ciclos){
			printf('<table>
				<thead>			
				<tr>');
			$primerciclo = $ciclos->result()[0];
			foreach ($primerciclo as $key => $value) {
				printf('<th id="%s">
						<span>%s</span>
					</th>',$key,$key);
			}
			printf('<th>Acciones</th></tr>
			</thead>
			<tbody>');
			foreach ($ciclos->result() as $ciclo) {
				printf('<tr class="primero">',$ciclo->ID_Ciclo,$ciclo->ID_Ciclo);
				foreach ($ciclo as $detalle) {
					//Para curso y Centro hay que sacar su COD_CENTRO y COD_CURSO
					printf('<td>
					<a href="%sindex.php/Ciclo/editar/%s">%s</a>
					</td>',base_url(),$ciclo->ID_Ciclo,$detalle);
				}
				$url = "'".base_url()."index.php/Ciclo/borrar/".$ciclo->ID_Ciclo."'"; 
				printf('<td><input type="button" onclick="location.href=%s" value="Borrar"></td>',$url);
				printf('</tr>');
			}	
			printf('</tbody></table>');
		}
		else{
				printf('No hay Registros');
		}

		printf('--------------------------------------------------------------------<br>');	
		?>		
</div>