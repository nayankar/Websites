<?php
    header("Access-Control-Allow-Origin: *");
   
   ?>         

         <?php 
	$street = "";
	$city = "";
	$state = "";
	$degree = "";
	
	if (isset($_GET["street"]) && !empty($_GET["street"])) {
		$street = urlencode($_GET["street"]);
	}

	if (isset($_GET["city"]) && !empty($_GET["city"])) {
		$city = urlencode($_GET["city"]);
	}

	if (isset($_GET["state"]) && !empty($_GET["state"])) {
		$state = urlencode($_GET["state"]);
	}

	if (isset($_GET["degree"]) && !empty($_GET["degree"])) {
		$degree = $_GET["degree"];
	}

	$Addressconc = $street . "," . $city . "," . $state;
	$GoogleApiKey = "AIzaSyBu2zR5g1feAivz76dshxbskkUFWJlBhHA";
	$GoogleApiURL = "https://maps.googleapis.com/maps/api/geocode/xml?address=" . $Addressconc . "&key=" . $GoogleApiKey;

	$xmlDoc = new SimpleXMLElement($GoogleApiURL, NULL, TRUE);
	if ($xmlDoc->status == "OK") {
		$lattitude = "";
		$longitude = "";

		$i = 0;
		foreach ($xmlDoc->result[0]->geometry[0]->location[0]->children() as $child) {
			if($i == 0) {$lattitude = $child;}
			if($i == 1) {$longitude = $child;}
			$i++;
		}

		$ForecastApiKey = "b171a1750d9efc9cc295c967cf4c235b";

		$forecastApiUnit = "";

		if($degree == "Fahrenheit") {
			$forecastApiUnit = "us";
		}
		else if($degree == "Celsius") {
			$forecastApiUnit = "si";
		}

		$ForecastApiURL = "https://api.forecast.io/forecast/" . $ForecastApiKey . "/" . $lattitude . "," . $longitude . "?units=" . $forecastApiUnit . "&exclude=flags";

		

		$obj = json_decode(file_get_contents($ForecastApiURL));
		
		echo json_encode($obj);
	}
?>

