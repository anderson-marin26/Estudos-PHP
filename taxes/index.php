<?php
	
	require 'Tax.php';
	require 'ISS.php';
	require 'KCV.php';
	require 'ICMS.php';
	require 'Resources.php';
	require 'TaxesCalculator.php';

	$reform = new Resources(500);

	$calculator = new TaxesCalculator();

	echo $calculator->calculate($reform, new ICMS());
	echo "<br />";
	echo $calculator->calculate($reform, new ISS());
	echo "<br />";
	echo $calculator->calculate($reform, new KCV());
?>