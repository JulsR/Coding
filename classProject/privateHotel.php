<?php

/*
 * The Assignment - create a class that, when instantiated, pulls all data from an imaginary table named oti_hotel
 * and stores it in a private array inside the class.
 *
 * oti_hotels fields:
 * hotel_name
 * hotel_address
 * hotel_web_site
 *
 */
class Hotel {
	
	public function __construct() {
		$privateArray = getData();
		var_dump($privateArray);
		savePrivateData($privateArray);
	}
	
	private function savePrivateData($container) {
		$privateArray = $container; // array should be accessible here. Use $privateArray
	}
}

function getData() {
	$oti_hotel = array (
			"HotelName" => "Juliessa Inn",
			"HotelAddress" => "9201 Juliessa Drive",
			"HotelWebsite" => "www.juliessaHotel.com" 
	);
	return $oti_hotel;
}

?>