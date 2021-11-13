<?php

class Robot{
    private $name;
    private $food;

    public function __construct(){
        $this->name = "どらみ";
        $this->food = "メロンパン";
    }
    private function talk(){
        echo 'こんにちは、ボクの名前は'.$this->name.'です<br>';
    }
   
    private function eat(){
        echo '好きな食べ物は'.$this->food.'です<br>';
    }
    public function greeting(){
        $this->talk();
        $this->eat();
    }

    public function setName($namae){
        $this->name = $namae;
    }
    public function getName(){
        return $this->name;
    }
    public function setFood($tabemono){
        $this->food = $tabemono;
    }
    public function getFood(){
        return $this->food;
    }
}
$robot = new Robot();
echo $robot->getName();
echo $robot->getFood();
echo '<br>';
$robot->setName('ドラえもん');
$robot->setFood('どら焼き');
// $robot->greeting();
?>


<?php
    class Kid{
        private $name;
        private $sex;
        private $age;

        public function __construct(){
            $this->name ="Seed";
            $this->sex ="boy";
            $this->age = 10;
        }
        public function showName(){
            if($this->sex == "boy"){
                if($this->age >=12){
                    return $this->name.'君';
                    echo '<br>';
                }else{
                    return $this->name. 'くん';
                    echo '<br>';
                }
            }elseif($this->sex =="girl"){
                if($this->age >=12){
                    return $this->name. 'さん';
                    echo '<br>';
                }else{
                    return $this->name. 'ちゃん';
                    echo '<br>';
                }
            }else{
                return $this->name.'の性別が不明です。';
            }
        }
        public function setName($namae){
            $this->name = $namae;
        }
        public function getName(){
            return $this->name;
        }
        public function setSex($seibetsu){
            $this->sex =$seibetsu;
        }
        public function getSex(){
            return $this->sex;
        }
        public function setAge($nenrei){
             $this->age = $nenrei;
        }
        public function getAge(){
            return $this->age;
        }
    }
    $kid = new Kid();
    $kid->setName('seedtech');
    $kid->setSex('girl');
    $kid->setAge(12);
    echo $kid->showName();
?>
