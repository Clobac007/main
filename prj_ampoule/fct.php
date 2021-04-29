<?php
$dns = "mysql:host=localhost;dbname=prj_ampoule;charset=utf8";
$pdo = new PDO($dns, "root", "");

if (isset($_POST['add']))
{
	if(!empty($_POST["date_ch"]) && !empty($_POST["floor_ch"]) && !empty($_POST["place_ch"])
		&& !empty($_POST["price_ch"]))
	{
		$pdo->query("INSERT INTO test VALUES (DEFAULT, STR_TO_DATE('".$_POST["date_ch"]."', '%Y-%m-%d'), '".$_POST["floor_ch"]."',
			'".$_POST["place_ch"]."', '".$_POST["price_ch"]."')");
	}
}
?>