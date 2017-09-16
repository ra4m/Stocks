<?php

//Autocomplete
if(!empty($_GET['term'])) {
		$term = $_GET['term'];
		$url = "http://dev.markitondemand.com/MODApis/Api/v2/Lookup/json?input=".$term;

		$j_response = file_get_contents($url);
		$j_response = json_decode($j_response);

		print json_encode($j_response);

	}


//Stocks API
if(!empty($_GET['text'])) { 
		$symbol = $_GET['text'];

		$quote= "http://dev.markitondemand.com/MODApis/Api/v2/Quote/json?symbol=".$symbol;
		$j_response = file_get_contents($quote);
		$j_response = json_decode($j_response);

		print json_encode($j_response);
	}


//Markit Graph
	if(!empty($_GET['graph'])) { 
		$symbol = $_GET['graph'];

		$quote= 'http://dev.markitondemand.com/MODApis/Api/v2/InteractiveChart/json?parameters={"Normalized":false,"NumberOfDays":1095,"DataPeriod":"Day","Elements":[{"Symbol":"' . $symbol . '","Type":"price","Params":["ohlc"]}]}';
		$j_response = file_get_contents($quote);
		$j_response = json_decode($j_response);

		print json_encode($j_response);
	}

?>