<?php

// 1.10.1
function task1_10_1()
{
    print("\nЗадание 1.10.1\n");
    $arr = [];
    for ($i = 0; $i < 10; $i++) {
        array_push($arr, rand(1, 100));
    }

    print_r($arr);
}

// 1.10.2
function task1_10_2()
{
    print("\nЗадание 1.10.2\n");
    $n = 12345;
    $rev = 0;
    while ($n > 0) {
        $rev = $rev * 10 + $n % 10;
        $n = (int) ($n / 10);
    }
    print($rev);
}

// 1.10.3
function task1_10_3()
{
    print("\nЗадание 1.10.3\n");
    $arr = [1, 2, 3, 4, 5, 6];
    $n = 0;
    for ($i = 0; $i < count($arr) / 2; $i++) {
        $arr_temp = [];
        for ($j = 0; $j < 2; $j++) {
            array_push($arr_temp, $arr[$n++]);
        }
        print_r($arr_temp);
    }
}

// 1.10.4
function task1_10_4()
{
    print("\nЗадание 1.10.4\n");
    $arr1 = [1, 2, 3];
    $arr2 = [4, 5, 6];
    $arr3 = [];

    foreach ($arr1 as $el) {
        array_push($arr3, $el);
    }
    foreach ($arr2 as $el) {
        array_push($arr3, $el);
    }
    print_r($arr3);
}


task1_10_1();
task1_10_2();
task1_10_3();
task1_10_4();

?>