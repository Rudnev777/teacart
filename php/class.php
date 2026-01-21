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
            $this->balance = 0;
        }
    }

    public function Deposite($sum){
        if($sum > 0){
            $this->balance += $sum;
        }
        else{
                $this->balance += 0;
        }
    }

    public function Withdraw($sum){
        if($this->balance - $sum > 0){
            $this->balance -= $sum;
        }
         else{
                $this->balance -= 0;
        }

    }

     public function getBalance(){
        return  $this->balance;
    }
    public function toString(){
        echo "\nНомер : " . $this->number  . ",\t Баланс :" . $this->balance . "\n";
    }
}


echo "\n------------------------------\n\nЗадание №1\n\n------------------------------\n";
$maks = new Person('Максим', 15);
$maks->info();

echo "\n------------------------------\n\nЗадание №2\n\n------------------------------\n";
$rect1 = new Rect(10, 5);
echo "Area = " . $rect1->Area() . "\n";
echo "Perimetr = " . $rect1->Perimetr() . "\n";
echo "\nget\n\n";
echo "heigth = " . $rect1->getHeigth() . "\n";
echo "wigth = " . $rect1->getWidth() . "\n";


echo "\nset\n\n";
$rect1->setHeigth(7);
$rect1->setWidth(17);

echo "heigth = " . $rect1->getHeigth() . "\n";
echo "wigth = " . $rect1->getWidth() . "\n";

echo "\n------------------------------\n\nЗадание №3\n\n------------------------------\n";

$b = new BankAccount(1, -10);
$b->toString();
$b->Deposite(100);
$b->toString();

$b->Withdraw(10);
$b->toString();
echo "\nБаланс = " . $b->getBalance() . "\n";
?>