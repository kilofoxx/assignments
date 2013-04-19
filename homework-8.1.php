<?php
$inputs = array(
    array( +1, -1 ),
    array( +1, -1 ),
    array( +1, +0 ),
    array( +0, +1 ),
    array( +0, -1 ),
    array( +0, +0 ),
    array( -1, +1 ),
    array( -1, -1 ),
    array( -1, +0 ),
);

/**
 * op | one | two | value
 * ===+=====+=====+======
 * +  | +1  | +1  | +2
 * +  | +1  | -1  | +0
 * +  | +1  | +0  | +1
 * +  | +0  | +1  | +1
 * +  | +0  | -1  | -1
 * +  | +0  | +0  | +0
 * +  | -1  | +1  | +0
 * +  | -1  | -1  | -2
 * +  | -1  | +0  | -1
*/
function add($value1, $value2)
{
    returen $value + $value2;
}
{
    $outputs + array(
        +2,
        +0,
        +1,
        +1,
        -1,
        +0,
        +0,
        -2,
        -1,
);
}

for ($i = 0; $i < 9; $i++)
{
    assert(add($inputs[$i][0], $inputs[$i][1]) == $outputs[$i]);
}