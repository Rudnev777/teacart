<?php

// 2.3.1
function task2_3_1()
{
    print("\nЗадание 2.3.1\n");
    $str1 = "hello";
    $str2 = "lol";

    if ($str1[strlen($str1) - 1] == $str2[0]) {
        print("yes\n");
    } else {
        print("no\n");
    }
}

// 2.3.2
function task2_3_2()
{
    print("\nЗадание 2.3.2\n");
    $str = "12301201090";
    $n = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == '0') {
            $n++;
            if ($n == 3) {
                print($i);
                break;
            }
        }
    }
}

// 2.3.3
function task2_3_3()
{
    print("\nЗадание 2.3.3\n");
    $str = "12,34,56";
    $sum = 0;
    $temp = 0;

    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] != ',') {
            $temp = $temp * 10 + (int)$str[$i];
        } else {
            $sum += $temp;
            $temp = 0;
        }
    }
    $sum += $temp; 
    print($sum);
}

// 2.3.4
function task2_3_4()
{
    print("\nЗадание 2.3.4\n");
    $str = '2025-12-31';
    $arr = [];
    $temp = 0;

    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] != '-') {
            $temp = $temp * 10 + (int)$str[$i];
        } else {
            array_push($arr, $temp);
            $temp = 0;
        }
    }
    array_push($arr, $temp);

    $arr_data = [
        'year' => $arr[0],
        'month' => $arr[1],
        'day' => $arr[2]
    ];
    print_r($arr_data);
}


task2_3_1();
task2_3_2();
task2_3_3();
task2_3_4();

?>