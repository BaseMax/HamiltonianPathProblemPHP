# Hamiltonian Path Problem

> Find a Hamiltonian path in a graph.

Implement a Hamiltonian path algorithm, Designing a tour for visiting all cities of a country. (PHP)

### Using

```sh
$ php hamiltonian-path-problem.php
```

### Example

If your start city is `Kashan` and you want to visit all cities only once and again back to `Kashan`.

```php
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
```

So it's the output of the program:

- Kashan
- Tehran
- Mashhad
- Tabriz
- Qom
- Shiraz
- Ahvaz
- Qazvin
- Khoramabad
- Yazd
- Sari
- Kashan

