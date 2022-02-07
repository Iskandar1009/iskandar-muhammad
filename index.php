<?php

function indexCoordinates($circle_centre_x, $circle_centre_y, $radius)
{
    $message_array = [];
    $ships = [
        "trading" => [13, 15],
        "patrols" => [20, 12],
        "pirate" => [7, 40]
    ];
    foreach ($ships as $ship => $coordinates) {
        if (!(($ships[$ship][1] - $circle_centre_x) * ($ships[$ship][1] - $circle_centre_x) + ($ships[$ship][0] - $circle_centre_y) * ($ships[$ship][0] - $circle_centre_y) <= $radius * $radius)) {
            array_push($message_array, "The ship is not in your radius");
        } else {
            array_push($message_array, $ship);
        }
    }
    $message = implode(", ", $message_array);
    return $message;
}
echo indexCoordinates(0, 50, 70);
