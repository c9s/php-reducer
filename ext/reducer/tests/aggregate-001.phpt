--TEST--
aggregate
--FILE--
<?php
$ret = aggregate([ 
    [ 'category' => 'Food', 'type' => 'pasta', 0 => 1, 'foo' => 10 ],
    [ 'category' => 'Food', 'type' => 'pasta', 0 => 1 ],
    [ 'category' => 'Food', 'type' => 'juice', 0 => 1 ],
    [ 'category' => 'Food', 'type' => 'juice', 0 => 1 ],
    [ 'category' => 'Book', 'type' => 'programming', 0 => 5 ],
    [ 'category' => 'Book', 'type' => 'programming', 0 => 2 ],
    [ 'category' => 'Book', 'type' => 'cooking', 0 => 6 ],
    [ 'category' => 'Book', 'type' => 'cooking', 0 => 2 ],
], ['category','type'], [
    0 => REDUCER_SUM,
]);
print_r($ret);
--EXPECT--
Array
(
    [category] => Food
    [type] => pasta
    [0] => 19
)
