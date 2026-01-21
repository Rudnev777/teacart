<?php

// 3.10.1
function task3_10_1()
{
    print ("\nЗадание 3.10.1\n");
    $arr = [1, 2, 3];
    $result = [];

    foreach ($arr as $el) {
        array_push($result, $el);
        array_push($result, $el);
    }
    print_r($result);
}

// 3.10.2
function task3_10_2()
{
    print ("\nЗадание 3.10.2\n");
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $num = 12;
    $result = [];

    foreach ($arr as $val) {
        if ($num % $val == 0) {
            array_push($result, $val);
        }
    }
    print_r($result);
}

// 3.10.3
function task3_10_3()
{
    print ("\nЗадание 3.10.3\n");
    $num1 = 12345;
    $num2 = 34567;
    $str1 = (string) $num1;
    $str2 = (string) $num2;
    $result = [];

    for ($i = 0; $i < strlen($str1); $i++) {
        for ($j = 0; $j < strlen($str2); $j++) {
            if ($str1[$i] == $str2[$j]) {
                array_push($result, (int) $str1[$i]);
            }
        }
    }
    print_r($result);
}

// 3.10.4
function task3_10_4()
{
    print ("\nЗадание 3.10.4\n");
    $num = 313234353;
    $str = (string) $num;
    $positions = [];

    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == '3') {
            array_push($positions, $i);
        }
    }

    $result = [];
    for ($i = 1; $i < count($positions) - 1; $i++) {
        array_push($result, $positions[$i]);
    }

    print_r($result);
}

// 3.10.5
function task3_10_5()
{
    print ("\nЗадание 3.10.5\n");
    $arr = [123, 112, 456, 777, 890, 11];
    $result = [];

    foreach ($arr as $num) {
        $str = (string) $num;
        $bool = true;

        for ($i = 0; $i < strlen($str); $i++) {
            for ($j = $i + 1; $j < strlen($str); $j++) {
                if ($str[$i] == $str[$j]) {
                    $bool = false;
                    break;
                }
            }
        }

        if ($bool) {
            array_push($result, $num);
        }
    }
    print_r($result);
}

// 3.10.6
function task3_10_6()
{
    print ("\nЗадание 3.10.6\n");
    $matrix = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9],
    ];
    $result = [];

    foreach ($matrix as $arr) {
        foreach ($arr as $el) {
            array_push($result, $el);
        }
    }
    print_r($result);
}


task3_10_1();
task3_10_2();
task3_10_3();
task3_10_4();
task3_10_5();
task3_10_6();

?>