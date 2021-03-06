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
	
	// private $oti_hotel = array (
	// "HotelName" => "Juliessa Inn",
	// "HotelAddress" => "9201 Juliessa Drive",
	// "HotelWebsite" => "www.juliessaHotel.com"
	// );
	public function __construct() {
		$this->oti_hotel = $oti_hotel = array (
				"HotelName" => "Juliessa Inn",
				"HotelAddress" => "9201 Juliessa Drive",
				"HotelWebsite" => "www.juliessaHotel.com" 
		);
	}
	public function getHotelArray() {
		return $this->oti_hotel;
	}
}
class HotelFactory {
	public static function create() {
		return new Hotel ();
	}
}
?>