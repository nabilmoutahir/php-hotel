<?php 

include __DIR__ . "/../data/hotels.php";

$parking_check = isset($_GET['parking-checker']) ? true : false;

if ($parking_check){

    $hotels = array_filter($hotels, fn($hotel) => $hotel['parking']);

};