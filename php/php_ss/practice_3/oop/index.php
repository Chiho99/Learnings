<?php
// ex
// ロボットクラス
class Robot {
    private $name;
    private $food;

    function __construct() 
    {
        $this->name = 'ロボット';
        $this->food = '金属';
    }
    public function setName($namae) {
        $this->name = $namae;
    }

    public function getName() {
        return $this->name;
    }

    public function setFood($tabemono) {
        $this->food = $tabemono;
    }
    public function getFood() {
        return $this->food;
    }
    private function talk(){
        echo 'こんにちは、僕の名前は'.$this->name.'です<br>';
    }
    
    private function eat() {
        echo '好きな食べ物は'. $this->food. 'です<br>';
    }

    public function greeting() {
        $this->talk();
        $this->eat();
    }

    

}
// Robotクラスのオブジェクト生成
$robot = new Robot();
$robot->setName('どらえもん');
$robot->setFood('どら焼き');
$robot->greeting();
echo '------------------------------------------------<br>';
echo '名前:'.$robot->getName();
echo '食べ物:'.$robot->getFood();

echo '<br>------------------------------------------------<br>';
// 1
class Kid {
    private $name;
    private $sex;
    private $age;

    function __construct()
    {
        $this->name = 'Seed';
        $this->sex = 'boy';
        $this->age = 10;
    }

    public function setName($namae){
        $this->name = $namae;
    }

    public function getName(){
        return $this->name;
    }

    public function setSex($seibetsu){
        $this->sex = $seibetsu;
    }

    public function getSex() {
        return $this->sex;
    }
    
    public function setAge($toshi) {
        $this->age = $toshi;
    }

    public function getAge() {
        return $this->age;
    }

    public function showName(){
        if($this->sex == 'boy' && $this->age < 12){
            echo $this->name.'くん';
        }elseif($this->sex == 'boy' && $this->age >= 12){
            echo $this->name.'君';
        }elseif($this->sex == 'girl' && $this->age <12){
            echo $this->name.'ちゃん';
        }else{
            echo $this->name.'さん';
        }
    }
}

$kid = new Kid();
$kid->setName('はなこ');
$kid->setSex('girl');
$kid->setAge(15);
$kid->showName();