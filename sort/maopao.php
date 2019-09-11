<?php
function swap(&$x, &$y) {
    $t = $x;
    $x = $y;
    $y = $t;
}

function bubble_sort(&$arr) {//php的陣列視為基本型別，所以必須用傳參考才能修改原陣列
    for ($i = 0; $i < count($arr) - 1; $i++)
        for ($j = 0; $j < count($arr) - 1 - $i; $j++)
            if ($arr[$j] > $arr[$j + 1])
                swap($arr[$j], $arr[$j + 1]);
}

$arr = array(21, 34, 3, 32, 82, 55, 89, 50, 37, 5, 64, 35, 9, 70);
bubble_sort($arr);
for ($i = 0; $i < count($arr); $i++)
    echo $arr[$i] . ' ';