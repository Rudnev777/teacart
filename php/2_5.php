<?php

// 2.5.1
function task2_5_1()
{
    print("\nЗадание 2.5.1\n");
    $str = "023m0df0dfg0";
    $arr_zero = [];

    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == '0') {
            array_push($arr_zero, $i);
        }
    }
    print_r($arr_zero);
}

// 2.5.2
function task2_5_2()
{
    print("\nЗадание 2.5.2\n");
    $str = "abcdefg";
    $str_t = "";
    $t = 1;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($t != 3) {
            $str_t .= $str[$i];
            $t++;
        } else {
            $t = 1;
        }
    }

    $str = $str_t;
    print($str);
}

// 2.5.3
function task2_5_3()
{
    print("\nЗадание 2.5.3\n");
    $arr = [1, 2, 3, 4, 5, 6];
    $sum1 = 0;
    $sum2 = 0;

    for ($i = 0; $i < count($arr); $i++) {
        if ($i % 2 == 0) {
            $sum1 += $arr[$i];
        } else {
            $sum2 += $arr[$i];
        }
    }
    print($sum2 / $sum1);
}


task2_5_1();
task2_5_2();
task2_5_3();

?>