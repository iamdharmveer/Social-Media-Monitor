<?php

$contents = file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=b4001a6d87cf3fe98ac2ba5893af594729495ed094c9dfc76209dbaba414e922&ip={$_SERVER['REMOTE_ADDR']}&format=json"); 
$contents = utf8_encode($contents); 
$results = json_decode($contents); 
 



/*
if($data = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=b4001a6d87cf3fe98ac2ba5893af594729495ed094c9dfc76209dbaba414e922&ip={$_SERVER['REMOTE_ADDR']}&format=json"))){
echo "IP Address    : ".$data->ipAddress."<br>";
echo "Country Code  : ".$data->countryCode."<br>";
echo "Country Name  : ".$data->countryName."<br>";
echo "Region Name  : ".$data->regionName."<br>";
echo "City Name  : ".$data->cityName."<br>";
echo "Zip Code  : ".$data->zipCode."<br>";
echo "Latitude  : ".$data->latitude."<br>";
echo "Longitude  : ".$data->longitude."<br>";
echo "Time Zone  : ".$data->timeZone."<br>";
} else {
	var_dump($data, true);
	
}	

*/
?>
