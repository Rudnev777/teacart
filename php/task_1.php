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




task1_10_1();
task1_10_2();
task1_10_3();
task1_10_4();
task2_3_1();
task2_3_2();
task2_3_3();
task2_3_4();
task2_5_1();
task2_5_2();
task2_5_3();
task3_6_1();
task3_6_2();
task3_6_3();
task3_10_1();
task3_10_2();
task3_10_3();
task3_10_4();
task3_10_5();
task3_10_6();

?>