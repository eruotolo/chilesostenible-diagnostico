        <?php
        if (isset($preguntas)) {
			$preg = 6;
			$pind1 = "p$preg-1";
			$pind2 = "p$preg-2";
        ?>
            $("#chechkbox-1").prop('checked', false);
            $("#chechkbox-2").prop('checked', false);
            $("#chechkbox-3").prop('checked', false);
            $("#chechkbox-4").prop('checked', false);

		   if ('<?php echo $preguntas[$pind1] ?>' == 'Si') {
			   $("#chechkbox-1").prop('checked', true);
			   $('#otherFieldDiv').show();
		   } else if ('<?php echo $preguntas[$pind1] ?>' == 'No') {
			   $("#chechkbox-2").prop('checked', true);
		   } 
		   
		   if ('<?php echo $preguntas[$pind2] ?>' == 'Si') {
			   $("#chechkbox-3").prop('checked', true);
		   } else if ('<?php echo $preguntas[$pind2] ?>' == 'No') {
			   $("#chechkbox-4").prop('checked', true);
		   }
        <?php
        }
        ?>