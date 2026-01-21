<?php
class Person
{
    private $name;
    private $age;


    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function info()
    {
        echo "Имя : " . $this->name . ", возрост : " . $this->age . "\n";
    }

}


class Rect
{
    private $width;
    private $heigth;

    public function __construct($w, $h)
    {

        $this->width = $w;
        $this->heigth = $h;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeigth()
    {
        return $this->heigth;
    }

    public function setWidth($w)
    {
        $this->width = $w;
    }

    public function setHeigth($h)
    {
        $this->heigth = $h;
    }

    public function Area()
    {
        return ($this->heigth + $this->width) * 2;
    }

    public function Perimetr()
    {
        return $this->heigth * $this->width;
    }
}

class BankAccount
{
    private $number;
    private $balance;

    public function __construct($num, $bal)
    {
        $this->number = $num;
        if ($bal > 0) {
            $this->balance = $bal;
        } else {
            echo "Баланс не может быть отрицательным (" . $bal . ")\n";
            $this->balance = 0;
        }
    }

    public function Deposite($sum)
    {
        if ($sum > 0) {
            $this->balance += $sum;
        } else {
            echo "Вы ввели отрицательную сумму";
        }
    }

    public function Withdraw($sum)
    {
        if ($this->balance - $sum > 0) {
            $this->balance -= $sum;
        } else {
            echo "На счете недостаточьно средств";
        }

    }

    public function getBalance()
    {
        return $this->balance;
    }
    public function toString()
    {
        echo "\nНомер : " . $this->number . ",\t Баланс :" . $this->balance . "\n";
    }
}



class User
{
    protected $login;
    protected $age;

    public function __construct($login, $age)
    {
        $this->age = $age;
        $this->login = $login;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function getAge()
    {
        return $this->age;
    }

    public function toString()
    {
        return "\nLogin : " . $this->login . ",\t age : " . $this->age . "\n";
    }
}

class Client extends User
{
    private $city;
    private $maxPayment;

    public function __construct($login, $age, $city, $maxPayment)
    {
        if ($age >= 18) {
            $this->age = $age;
        } else {
            echo "Error age";
        }
        $this->login = $login;
        $this->city = $city;
        $this->maxPayment = $maxPayment;
    }
    public function getCity()
    {
        return $this->city;
    }

    public function getMaxPayment()
    {
        return $this->maxPayment;
    }


    public function toString()
    {
        return "\nLogin : " . $this->login . ",\t age : " . $this->age . ", \t city : " . $this->city . ", \t maxPayment : " . $this->maxPayment . "\n";
    }
}

class Master extends User
{
    private $cities;
    private $minPayment;

    public function __construct($login, $age, $cities, $minPayment)
    {
        if ($age >= 18) {
            $this->age = $age;
        } else {
            echo "Error age master";
        }
        $this->cities = $cities;
        $this->minPayment = $minPayment;
        $this->login = $login;
    }
    public function getCities()
    {
        return $this->cities;
    }

    public function getMinPayment()
    {
        return $this->minPayment;
    }
    public function toString()
    {
        return "\nLogin : " . $this->login . ",\t age : " . $this->age . ", \t cities : " . $this->cities . ", \t maxPayment : " . $this->minPayment . "\n";
    }

    public function AreWeWork ($clients)
    {
        foreach ($clients as $client) {
           
            $max = $client->getMaxPayment();
            if ($this->minPayment < $max) {
                $city = $client->getCity();
                
                    if (in_array($city, $this->cities)) {
                        echo $client->toString();
                    }
                
            }
        }
    }
}

class MathUtils{
    public static function factorial($n){
    $result = 1;

    for ($i = 1; $i < $n; $i++){
        $result *= $i;
    }
    return $result;
    }
}
abstract class Shape{
    abstract public function getArea();
}

class Circle extends Shape{
    private $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }
    public function getArea(){
        return $this->radius * $this->radius * 3.14;
    }

}

interface Log{
     function log($message);
}

class FileLog implements Log{
    public function log($message){
        $f = fopen("/Users/mikhailrudnev/Desktop/teacart/php/text.txt","a");
        if(!$f){
            echo"Error";
        }
        fwrite($f, $message);
        fclose($f);
         echo"fie close\n";
    }
}
function Master_go(Master $master, Client $client)
{
    $min = $master->getMinPayment();
    $max = $client->getMaxPayment();
    if ($min < $max) {
        $arr = $master->getCities();
        $city = $client->getCity();
        foreach ($arr as $el) {
            if ($el == $city) {
                return true;
            }
        }
        return false;
    }
}



// echo "\n------------------------------\n\nЗадание №1\n\n------------------------------\n";

// $maks = new Person('Максим', 15);
// $maks->info();

// echo "\n------------------------------\n\nЗадание №2\n\n------------------------------\n";
// $rect1 = new Rect(10, 5);
// echo "Area = " . $rect1->Area() . "\n";
// echo "Perimetr = " . $rect1->Perimetr() . "\n";
// echo "\nget\n\n";
// echo "heigth = " . $rect1->getHeigth() . "\n";
// echo "wigth = " . $rect1->getWidth() . "\n";


// echo "\nset\n\n";
// $rect1->setHeigth(7);
// $rect1->setWidth(17);

// echo "heigth = " . $rect1->getHeigth() . "\n";
// echo "wigth = " . $rect1->getWidth() . "\n";

// echo "\n------------------------------\n\nЗадание №3\n\n------------------------------\n";

// $b = new BankAccount(1, -10);
// $b->toString();
// $b->Deposite(-100);
// $b->toString();

// $b->Withdraw(110);
// $b->toString();
// echo "\nБаланс = " . $b->getBalance() . "\n";


// echo "\n------------------------------\n\nЗадание №4\n\n------------------------------\n";

// $arr = [];
// $arr_city =["Москва", "Тула", "Уфа", "Воронеж", "Питер", "Сочи"];
// $arr_master = ["Москва", "Тула"];
// for ($i = 0; $i < 20; $i++) {
//     array_push($arr, new Client("User" . $i, rand(20, 45), $arr_city[rand(0, count($arr_city) - 1)], rand(5000, 20000)));
// }

// // echo "\nМассив User start\n";
// // foreach ($arr as $el) {
// //     echo $el->toString();
// // }
// // echo "\nМассив User finish\n";

// $master = new Master("Master1", 20, $arr_master, 10000);

// echo "\nПодходят мастеру первый способ\n";
// foreach ($arr as $el) {
//     if (Master_go($master, $el)) {
//         echo $el->toString();
//     }
// }
// echo "\nПодходят мастеру второй способ\n";
// $master->AreWeWork($arr);

// echo "\n------------------------------\n\nЗадание №5\n\n------------------------------\n";

// echo MathUtils::factorial(180) . "\n";



echo "\n------------------------------\n\nЗадание №6\n\n------------------------------\n";
$circle = new Circle(3);
echo $circle->getArea() . "\n";

echo "\n------------------------------\n\nЗадание №7\n\n------------------------------\n";

$l = new FileLog;
$l->log("Привет мир!\n");
?>