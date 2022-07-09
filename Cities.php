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

// Init
$start_point = "kashan";
$end_point = "tehran";

$cities = [];
$cities["kashan"] = ["name" => "Kashan", "x" => 0, "y" => 0];
$cities["tehran"] = ["name" => "Tehran", "x" => 100, "y" => 100];
$cities["mashhad"] = ["name" => "Mashhad", "x" => 50, "y" => 50];
$cities["karaj"] = ["name" => "Karaj", "x" => 75, "y" => 75];
$cities["tabriz"] = ["name" => "Tabriz", "x" => 25, "y" => 25];
$cities["shiraz"] = ["name" => "Shiraz", "x" => 75, "y" => 25];
$cities["qom"] = ["name" => "Qom", "x" => 25, "y" => 75];
$cities["ahvaz"] = ["name" => "Ahvaz", "x" => 75, "y" => 75];
$cities["qazvin"] = ["name" => "Qazvin", "x" => 25, "y" => 25];
$cities["khoramabad"] = ["name" => "Khoramabad", "x" => 75, "y" => 75];

