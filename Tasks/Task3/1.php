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
// считаем и ввыодим сумму численности насиленияы
$total = 0;
print '<table>';
foreach ($cities as $city) {
    $total += $city[2];
    print "<tr><td>$city[0]</td><td>$city[1]</td><td>$city[2]</td></tr>";
}
print "<tr><td></td><td></td><td>$total</td></tr>";
print '</table>';
