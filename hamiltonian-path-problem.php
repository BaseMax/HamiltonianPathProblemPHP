<?php
/*
 * Name: Hamiltonian Path Problem
 * Description: Find a Hamiltonian path in a graph
 * Author: Max Base
 * Date: 2022/07/09
 */

// Calculate the distance of two points
function d(array $point1, array $point2) : float
{
    $x1 = $point1[0];
    $y1 = $point1[1];
    $x2 = $point2[0];
    $y2 = $point2[1];

    return sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
}

// Optimize route from $main_city to visiting all other cities only once and return to $main_city again
function HamiltonianPath(array $cities, array $main_city) : array
{
    $path = [ $main_city["name"] ];
    $current_city = $main_city;
    while (count($path) < count($cities)) {
        $nearest_distance = 1000000;
        $nearest_point = null;
        foreach ($cities as $city) {
            if ($city["name"] == $current_city["name"]) continue;
            if (in_array($city["name"], $path)) continue;

            $distance = d($current_city["points"], $city["points"]);
            if ($distance < $nearest_distance) {
                $nearest_distance = $distance;
                $nearest_point = $city;
            }
        }
        $path[] = $nearest_point["name"];
        $current_city = $nearest_point;
    }
    $path[] = $main_city["name"];
    return $path;
}

// Example
$cities = [];
$cities[] = ["name" => "kashan", "points" => [0, 0]];
$cities[] = ["name" => "tehran", "points" => [1, 1]];
$cities[] = ["name" => "mashhad", "points" => [2, 2]];
$cities[] = ["name" => "tabriz", "points" => [3, 3]];
$cities[] = ["name" => "qom", "points" => [4, 4]];
$cities[] = ["name" => "shiraz", "points" => [5, 5]];
$cities[] = ["name" => "ahvaz", "points" => [6, 6]];
$cities[] = ["name" => "qazvin", "points" => [7, 7]];
$cities[] = ["name" => "khoramabad", "points" => [8, 8]];
$cities[] = ["name" => "yazd", "points" => [9, 9]];
$cities[] = ["name" => "sari", "points" => [10, 10]];

$res = HamiltonianPath($cities, $cities[0]);
print_r($res);
