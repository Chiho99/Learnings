<?php
    class Robot{
        private $name;
        private $food;

        public function __construct(){
            $this->name ="ドラえもん";
            $this->food = "どら焼き";
        }
        private function talk(){
            echo 'こんにちは、ボクの名前は'.$this->name.'です';
            echo '<br>';
        }
        private function eat(){
            echo '好きな食べ物は'.$this->food.'です';
            echo '<br>';
        }
        public function greeting(){
            $this->talk();
            $this->eat();
        }
        public function setName($namae){
            $this->name = $namae;
        }
        public function getName(){
            return  $this->name;
        }
        public function setFood($tabemono){
            $this->food = $tabemono;
        }
        public function getFood(){
            return $this->food;
        }

    }
    $robot = new Robot();
    echo '初期の名前:'.$robot->getName().'<br>';
    echo '<br>';
    echo '初期の食べ物:'. $robot->getFood().'<br>';
    echo '<br>';
    $robot->setName('どらみ');
    $robot->setFood('メロンパン');
        $robot->greeting();
?>



<!-- 演習問題１ -->
<?php
    class Kid{
        private $name;
        private $sex;
        private $age;

        public function __construct(){
            $this->name = "Seed";
            $this->sex = "boy";
            $this->age = 14;
        }
        public function showName(){
           if($this->sex == 'boy'){
               if($this->age >= 12){
                   return $this->name.'君';
               }else{
                return $this->name. 'くん';
               }
           }elseif($this->sex == 'girl'){
               if($this->age >= 12){
                   return $this->name. 'さん';
               }else{
                    return $this->name. 'ちゃん';
               } 
           }else{
               return $this->name. 'の性別が不明です';
           }

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
    // echo $kid->getName();
    // echo '<br>';
    // echo $kid->getSex();
    // echo '<br>';
    // echo $kid->getAge();
    echo $kid->showName();
    echo '<br>';
    $kid->setName('Nexseed');
    $kid->setSex('girl');
    $kid->setAge(10);
    echo $kid->showName();
?>