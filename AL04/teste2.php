<?php
require "Geonames.php";

$lat =  53.32425;
$lng = -1.234214;

$geo = new Geonames("guilhermeteixeira131");
$prompt = "This place is in: ";
try {
    $place = $geo->getPlaceName($lat, $lng);
    if ($place != "Unknown") {
        $prompt .= " in " . $place;
    }
}
catch (Exception $e) {
    error_log("Error with web service: " . $e->getMessage());
}

echo $prompt;