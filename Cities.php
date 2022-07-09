<?php
/*
 * Name: Cities
 * Author: Max Base
 * Date: 2022/07/09
 * Description: This is the cities page.
 */

// Distance of two cities
function d(array $point1, array $point2) : float
{
    $x1 = $point1[0];
    $y1 = $point1[1];
    $x2 = $point2[0];
    $y2 = $point2[1];

    return sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
}

// Out world size is 100x100

// The propery of city:
// - The name of the city
// - The coordinates of the city

// Init the cities
$cities = [];
$cities["kashan"] = ["name" => "Kashan", "points" => [0, 0]];
$cities["tehran"] = ["name" => "Tehran", "points" => [100, 0]];
$cities["mashhad"] = ["name" => "Mashhad", "points" => [100, 100]];
$cities["karaj"] = ["name" => "Karaj", "points" => [0, 100]];
$cities["tabriz"] = ["name" => "Tabriz", "points" => [25, 25]];
$cities["shiraz"] = ["name" => "Shiraz", "points" => [75, 25]];
$cities["qom"] = ["name" => "Qom", "points" => [25, 75]];
$cities["ahvaz"] = ["name" => "Ahvaz", "points" => [75, 75]];
$cities["qazvin"] = ["name" => "Qazvin", "points" => [25, 25]];
$cities["khoramabad"] = ["name" => "Khoramabad", "points" => [75, 75]];
$cities["yazd"] = ["name" => "Yazd", "points" => [25, 25]];
$cities["sari"] = ["name" => "Sari", "points" => [75, 75]];

// Project 1
// Find the optimal route between two cities
// $start_point = "kashan";
// $end_point = "tehran";
// function project1($start_point, $end_point)
// {
//     global $cities;
//     $start_point = $cities[$start_point];
//     $end_point = $cities[$end_point];
//     $distance = d($start_point, $end_point);
//     $path = [$start_point["name"]];
//     $current_point = $start_point;
//     while ($current_point["name"] != $end_point["name"]) {
//         $min_distance = 1000000;
//         $min_point = null;
//         foreach ($cities as $point) {
//             if ($point["name"] == $current_point["name"]) {
//                 continue;
//             }
//             $distance = d($current_point, $point);
//             if ($distance < $min_distance) {
//                 $min_distance = $distance;
//                 $min_point = $point;
//             }
//         }
//         $path[] = $min_point["name"];
//         $current_point = $min_point;
//     }
//     return $path;
// }

// $d_k_t = d($cities["kashan"]["points"], $cities["tehran"]["points"]);
// var_dump($d_k_t);
// TODO

// Project 2
// TODO

// Project 3
// Optimize the route from a city and visiting all city one by one in the order of the distance and finally return to the starting city
$main_point = "kashan";

function project3($main_point)
{
    global $cities;
    $main_point = $cities[$main_point];
    $distance = d($main_point, $cities["tehran"]);
    $path = [$main_point["name"]];
    $current_point = $main_point;
    while ($current_point["name"] != "tehran") {
        $min_distance = 1000000;
        $min_point = null;
        foreach ($cities as $point) {
            if ($point["name"] == $current_point["name"]) {
                continue;
            }
            $distance = d($current_point, $point);
            if ($distance < $min_distance) {
                $min_distance = $distance;
                $min_point = $point;
            }
        }
        $path[] = $min_point["name"];
        $current_point = $min_point;
    }
    return $path;
}

// Hamiltonian path
function hamiltonian_path($main_point)
{
    global $cities;

    $main_point = $cities[$main_point];
    $distance = d($main_point["points"], $cities["tehran"]["points"]);
    $path = [$main_point["name"]];

    $current_point = $main_point;
    while ($current_point["name"] != "tehran") {
        print "Current point: " . $current_point["name"] . "\n";
        $min_distance = 1000000;
        $min_point = null;
        foreach ($cities as $point) {
            if ($point["name"] == $current_point["name"]) {
                continue;
            }
            $distance = d($current_point["points"], $point["points"]);
            if ($distance < $min_distance) {
                $min_distance = $distance;
                $min_point = $point;
            }
        }
        $path[] = $min_point["name"];
        print "Min point: " . $min_point["name"] . "\n";
        $current_point = $min_point;
    }

    return $path;
}

$routes = hamiltonian_path($main_point);
var_dump($routes);
