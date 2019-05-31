<?php 

    $queryURL = "https://api.walmartlabs.com/v1/search?" + "&apiKey=vng9pukufs97mcyyjs5ps266&query=test&format=json";
	$xml = file_get_contents($queryURL);
	echo $xml;

?>