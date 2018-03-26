
	<div class="container col-md-6">
		<div class="form-group col-md-12">
			<?php
			$satiempo = $_POST['satiempo'];
			$llatiempo = $_POST['llatiempo'];
			$prob = $_POST['prob'];

			//echo "$satiempo y $llatiempo y $prob<br>";

			$res1 = $prob/$satiempo*100;
			$res2 = $prob/$llatiempo*100;

			echo "<div align='center'>La Probabilidad de que llegue a tiempo dado que salió a tiempo es de: <b>$res1%</b><br>";
			echo "La Probabilidad de que salió a tiempo dado que llegó a tiempo es de: <b>$res2%</b><br></div>";

			?>
		</div>
	</div>
	