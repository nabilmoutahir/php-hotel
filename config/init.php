<?php

include __DIR__ . "/../data/hotels.php";

$parking_check = isset($_GET['parking-checker']) ? true : false;

if ($parking_check) {

    $hotels = array_filter($hotels, fn($hotel) => $hotel['parking']);

}
;

$vote_filter = $_GET['vote-filter'] ?? false;

if ($vote_filter) {

    $hotels = array_filter($hotels, fn($hotel) => $hotel['vote'] >= $vote_filter);

}
;

