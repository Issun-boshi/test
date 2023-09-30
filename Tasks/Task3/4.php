<?php
/* Классы и идентификационные номера учащихся в классе:
ассоциативный массив, ключом которого служит Ф.И.О. учащегося, а значением — ассоциативный массив, содержащий класс, а также
идентификационный номер учащегося
*/
    $students = [ 'James D. McCawley' =>
    [ 'grade' => 'A+','id' => 271231 ],
    'Buwei Yang Chao' =>
    [ 'grade' => 'A', 'id' => 818211] ]; 

/* Количество каждого товара в запасах на складе:
ассоциативный массив, ключом которого служит наименование
товара, а значением - порядковый номер хранения на складе
*/

    $inventory = [ 'Spin Reel' => 3, 'Rod' => 2, 'Wobbler' => 6,'Spoon' => 0 ];

/*Школьные обеды, состоящие из разных блюд (закусок, салатов,
напитков и т.д.), а также их стоимость на каждый день недели:
ассоциативный массив, ключом которого служит день недели, а
значением - ассоциативный массив, описывающий блюдо. Этот
ассоциативный массив содержит пару "ключ-значение" на стоимость
каждого обеда, а также пары "ключ-значение" на каждое блюдо
составляющее обед на данный день недели
*/
    $dinners = [ 'Monday' => [ 'cost' => 200,
                               'starters' => 'Pasta with cheese',
                               'salad' => 'Olivie',
                               'drink' => 'Compote' ],
    'Tuesday' => [ 'cost' => 235,
                   'starters' => 'Rice with sausages',
                   'salad' => 'Salad with mushrooms',
                   'drink' => 'Black Tea' ],
    'Wednesday' => [ 'cost' => 250,
                     'starters' => 'Pork chop',
                     'salad' => 'Greek salad',
                     'drink' => 'Orange juice' ],
    'Thursday' => [ 'cost' => 261,
                    'starters' => 'Schnitzel',
                    'salad' => 'Garden fresh salad',
                    'drink' => 'Lemonade' ],
    'Friday' => [ 'cost' => 299,
                  'starters' => 'Fish and chips',
                  'salad' => 'Caesar salad',
                  'drink' => 'Compote' ] ];

/* Имена членов вашей семьи:
числовой массив, индексы которого не указаны явно, а
значениями служат имена членов вашей семьи
*/
    $family = [ 'Sergey', 'Sveta', 'Philipp', 'Valery',];

/* Имена, возраст и родство членов семьи:
ассоциативный массив, ключами которого служат имена членов
семьи, а значениями — ассоциативные массивы, состоящие из
пар "ключ-значение", обозначающих возраст и степень родства
*/
    $family = [ 'Sergey' => [ 'age' => 59,'relation' => 'father' ],
    'Sveta' => [ 'age' => 55,'relation' => 'mother' ],
    'Philipp' => [ 'age' => 34,'relation' => 'myself' ],
    'Valery' => [ 'age' => 84,'relation' => 'grandfather' ] ];