<?php

// 3.6.1
function task3_6_1()
{
    print ("\nЗадание 3.6.1\n");
    $arr = [10, 500, 1234, 5, 10000, 999];
    $result = [];

    foreach ($arr as $val) {
        // Проверяем длину числа, преобразовав его в строку (или по модулю)
        if (strlen((string) $val) <= 3) {
            $result[] = $val;
        }
    }
    print_r($result);
}


// 3.6.2
function task3_6_2()
{
    print ("\nЗадание 3.6.2\n");
    $num = 12345;
    $str_num = (string) $num;
    $bool = true;

    for ($i = 0; $i < strlen($str_num); $i++) {
        if ($str_num[$i] == '0') {
            $bool = false;
            break;
        }
    }

    if ($bool) {
        print ("Все цифры больше нуля.\n");
    } else {
        print ("В числе есть нули.\n");
    }
}

// 3.6.3
function task3_6_3()
{
    print ("\nЗадание 3.6.3\n");
    $arr = [123, 456, 789];
    $result = [];

    foreach ($arr as $el) {
        $str_el = (string) $el;
        for ($i = 0; $i < strlen($str_el); $i++) {
            array_push($result, $str_el[$i]);
        }
    }

    print_r($result);
}

task3_6_1();
task3_6_2();
task3_6_3();