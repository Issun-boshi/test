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
// инициализировали массив
$states = [];
// суммировали население по штатам
foreach ($cities as $city) {
    if (!array_key_exists($city[1], $states)) {
        $states[$city[1]] = 0;
    }
    $states[$city[1]] += $city[2];
}
//выводим население по штатам
foreach ($states as $state => $value) {
    print "$state, $value\n";
}
