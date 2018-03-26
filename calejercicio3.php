
	<div class="container col-md-12">
	<h1>Resultados</h1>
		<div class="form-group col-md-12">
			<?php

				function fact($num)
				{
				    $res = 1;
				    for ($n = $num; $n >= 1; $n--) 
				        $res = $res*$n;
				    return $res;
				}

				$n = $_POST['candidato'] ;
				$k = $_POST['plaza'] ;

				$factn = fact($n);
				$res = ($factn) / (fact($n-$k));
				echo "<div > <b>$res</b></div";
			?>
		</div>
	</div>
	</div>
