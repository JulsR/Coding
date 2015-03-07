<?php
require_once 'hotel.php'; //allows you to use the demo.php file.

//calls the factory create method. This creates the hotel object and stores it in $ht
$ht=HotelFactory::create(); 

//takes the hotel object stored in $ht, calles the getHotelArray() method and stores the result in a new variable
$hoteldata = $ht->getHotelArray();

//using the new variable, $hoteldata, you can access the array elements by calling the key name. 
var_dump($hoteldata["HotelName"]);

var_dump($hoteldata["HotelAddress"]);

var_dump($hoteldata["HotelWebsite"]);



?>