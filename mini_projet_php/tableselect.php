<?php
	function calc($n)
	{
		for ($i = 1; $i < 11; $i++)
		{
			if ($i < 10)
				echo "x0";
			else
				echo "x";
			echo $i . "------" . $i * $n . "</br>";
		}
		echo "</br>";
	}

	foreach ($_POST as $key => $valeur)
		calc($key);