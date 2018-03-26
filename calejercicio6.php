<?php

				$dalmata = $_POST['dalmata'];
				$grandanes = $_POST['grandanes'];
				$hembradalmata = $_POST['hemdal'];
				$hembragrandanes = $_POST['hembragrandanes'];
				$hembraresto = $_POST['hemresto'];

				$otrasrazastotal = (($dalmata + $grandanes) - 100)* -1;

				$machodalmata = ($hembradalmata-100)* -1;
				$machograndanes = ($hembragrandanes-100)* -1;
				$machoresto = ($hembraresto-100)* -1;

				$resp = ($grandanes * $machograndanes) / (($dalmata * $machodalmata)+($grandanes * $machograndanes)+($otrasrazastotal * $machoresto));
				$resp2 = round($resp * 100,3);

				echo "Dalmatas: $dalmata ---- Hembra Dalmata: $hembradalmata y Macho Dalmata: $machodalmata<br>";
				echo "Gran Danés: $grandanes ---- Hembra Gran Danés: $hembragrandanes y Macho Gran Danés: $machograndanes<br>";
				echo "Otras razas: $otrasrazastotal ---- Hembra Resto: $hembraresto y Macho Resto: $machoresto<br>";
				echo "<br>";
				echo "<div align='center'>La probabilidad de que un perro macho tomado al azar sea Gran Danés, es del <br><b>$resp2%</b></div>";
			?>