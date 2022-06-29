// All questions        
		<?php
        if (isset($preguntas)) {
				$preg = 20;
				$nro_pregs = 7;
				$other_preg = 6; // 0 if none
        ?>
			$('input[type=checkbox]').each(function () {
				$(this).prop("checked", false);					
			}) // Deselect all

			// Check the needed ones
			<?php
				for ($i = 1; $i <= $nro_pregs; $i++) {
					$pind = "p$preg-$i";
			?>
					if ('<?php echo $preguntas[$pind] ?>' == 'Si') {
						$("#chechkbox-<?php echo $i ?>").prop('checked', true);
					}
					
			<?php
				}
			?>
			
			// Get Other value
			<?php
				if ($other_preg <> 0) {
					$pind = "p$preg-$other_preg";
			?>				
				if ('<?php echo $preguntas[$pind] ?>' != '' && '<?php echo $preguntas[$pind] ?>' != 'No' && '<?php echo $preguntas[$pind] ?>' != 'Si') {
					$('#other').val('<?php echo $preguntas[$pind] ?>');
					if ($('#other').val() != '') {
						$("#chechkbox-<?php echo $other_preg ?>").prop('checked', true);
					}
				}
			<?php				
				} 
			?>			
		<?php
			}
		?>	