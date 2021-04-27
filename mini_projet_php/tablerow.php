<?php
	if(isset($_POST['number']))
	{
		for ($i = 1; $i < 11; $i++)
		{
			if ($i < 10)
				echo "x0";
			else
				echo "x";
			echo $i . "------" . $i * $_POST['number'] . "</br>";
		}
	}