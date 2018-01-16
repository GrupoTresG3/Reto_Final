<div id='centro'>
<?php
		printf('Gestión de CENTROS');
		if ($centros){
			printf('<table id="primero">
				<thead>			
				<tr>');
			$primercentro = $centros->result()[0];
			foreach ($primercentro as $key => $value) {
				printf('<th id="%s">
						<span>%s</span>
					</th>',$key,$key);
			}
			printf('<th>Acciones</th></tr>
			</thead>
			<tbody>');
			foreach ($centros->result() as $centro) {
				printf('<tr class="primero">',$centro->ID_Centro,$centro->ID_Centro);
				foreach ($centro as $detalle) {
					//Para curso y Centro hay que sacar su COD_CENTRO y COD_CURSO
					printf('<td>
					<a href="%sindex.php/Centro/editar/%s">%s</a>
					</td>',base_url(),$centro->ID_Centro,$detalle);
				}
				$url = "'".base_url()."index.php/Centro/borrar/".$centro->ID_Centro."'"; 
				printf('<td><input type="button" onclick="location.href=%s" value="Borrar"></td>',$url);
				printf('</tr>');
			}	
			printf('</tbody></table>');
		}
		else{
				printf('No hay Registros');
		}
		?>		
</div>