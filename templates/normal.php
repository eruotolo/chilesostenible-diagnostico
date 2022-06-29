// All questions        
		<?php
        if (isset($preguntas)) {
				$preg = 7;
				$nro_pregs = 8;
				$other_preg = 0; // 0 if none
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
			