
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

				$n = $_POST['grupo'] ;
				$k = $_POST['integrado'] ;

				$factn = fact($n);
				$factk = fact($k);
				$res = ($factn) / (fact($n-$k)*($factk));
				echo "<div >R= <b>$res</b></div";
			?>
		</div>
	</div>
	