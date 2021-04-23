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

	if(isset($_POST['1']))
		calc(1);

	if(isset($_POST['2']))
		calc(2);

	if(isset($_POST['3']))
		calc(3);

	if(isset($_POST['4']))
		calc(4);

	if(isset($_POST['5']))
		calc(5);

	if(isset($_POST['6']))
		calc(6);

	if(isset($_POST['7']))
		calc(7);

	if(isset($_POST['8']))
		calc(8);

	if(isset($_POST['9']))
		calc(9);

	if(isset($_POST['10']))
		calc(10);