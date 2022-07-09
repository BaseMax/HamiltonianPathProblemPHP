<?php
# Hamiltonian Path Problem

function d(array $point1, array $point2) : float
{
    $x1 = $point1[0];
    $y1 = $point1[1];
    $x2 = $point2[0];
    $y2 = $point2[1];

    return sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
}

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

$graph = [];
foreach($cities as $city1)
{
    foreach($cities as $city2)
    {
        if ($city1["name"] === $city2["name"]) continue;

        $graph[ $city1["name"] ][ $city2["name"] ] = d($city1["points"], $city2["points"]);
   }
}

// Optimize route from $main_point to visiting all other cities only once and return to $main_point again
$main_point = $cities[0];

function HamiltonianPath($main_point)
{
    global $cities;
    global $graph;

    $path = [ $main_point["name"] ];
    $current_point = $main_point;
    while (count($path) < count($cities))
    {
        $min_distance = 1000000;
        $min_point = null;
        foreach ($cities as $point)
        {
            if ($point["name"] == $current_point["name"]) continue;
            if (in_array($point["name"], $path)) continue;

            // var_dump($current_point);
            // var_dump($point);
            // print_r($graph[$current_point["name"]]);
            // print_r($graph[$current_point["name"]][$point["name"]]);
            // print "-------------\n";

            // print "Checking " . $current_point["name"] . " to " . $point["name"] . "\n";
            $distance = $graph[$current_point["name"]][$point["name"]];

            if ($distance < $min_distance)
            {
                $min_distance = $distance;
                $min_point = $point;
            }
        }
        $path[] = $min_point["name"];
        $current_point = $min_point;
    }
    $path[] = $main_point["name"];
    return $path;
}

$res = HamiltonianPath($main_point);
print_r($res);

// print_r($graph);
