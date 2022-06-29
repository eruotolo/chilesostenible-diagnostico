        <?php
        if (isset($preguntas)) {
        ?>
            $("#chechkbox-1").prop('checked', false);
            $("#chechkbox-2").prop('checked', false);
            $("#chechkbox-3").prop('checked', false);
            $("#chechkbox-4").prop('checked', false);

		   if ('<?php echo $preguntas["p1-1"] ?>' == 'Si') {
			   $("#chechkbox-1").prop('checked', true);
			   $('#otherFieldDiv').show();
		   } else if ('<?php echo $preguntas["p1-1"] ?>' == 'No') {
			   $("#chechkbox-2").prop('checked', true);
		   } 
		   
        <?php
        }
        ?>