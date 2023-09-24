<?php
// создали массив
$cities = [
    ['New York', 'New York', 8175133],
    ['Los Angeles', 'California', 3792621],
    ['Chicago', 'Illinois', 2695598],
    ['Houston', 'Texas', 2100263],
    ['Philadelphia', 'Pennsylvania', 1526006],
    ['Phoenix', 'Arizona', 1445632],
    ['San Antonio', 'Texas', 1327407],
    ['San Diego', 'California', 1307402],
    ['Dallas', 'Texas', 1197816],
    ['San Jose', 'California', 945942]
];
// делаем сортировку городов по населению
usort($cities, fn($a, $b) => $b[2] <=> $a[2]);
foreach ($cities as $city) {
    print "$city[0], $city[1], $city[2]\n";
}
// делаем сортировку городов по численности населения
usort($cities, fn($a, $b) => $a[0] <=> $b[0]);
foreach ($cities as $city) {
    print "$city[0], $city[1], $city[2]\n";
}
