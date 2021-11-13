<?php
    class Robot{
        private $name;
        private $food;

        function __construct(){
            $this->name = 'ドラえもん';
            $this ->food = 'どら焼き';
        }
        public function setName($namae){
            $this->name = $namae;
        }
        public function setFood($tabemono){
            $this->food = $tabemono;
        }
        public function greeting(){
            $this->talk();
            $this->eat();
        }
        public function getName(){
            return $this->name;
        }
        public function getFood(){
            return $this->food;
        }
        private function talk(){
            echo 'こんにちは、ボクの名前は'.$this->name.'です';
            echo '<br>';
        }
        private function eat(){
            echo '好きな食べ物は'.$this->food.'です';
            echo '<br>';
        }
       
    }
    $robot = new Robot();
    echo '初期値の名前：'. $robot->getName(). '<br>';
    echo '初期値の食べ物:'.$robot->getFood().'<br>';
    $robot->setName('ドラ・ザ・キッド');
    $robot->setFood('ケチャップとマスタードをかけたどら焼き');
    $robot->greeting();
?>

<?php
    class Kid{
        private $name;
        private $sex;
        private $age;

        function __construct(){
            $this->name = 'Seed';
            $this->sex = 'boy';
            $this->age = 10;
        }
        public function getName(){
            return $this->name;
        }
        public function setName($namae){
            $this->name = $namae;
       }
        public function getSex(){
            return $this->sex;
        }
        
        public function setSex($seibetsu){
             $this->sex = $seibetsu;
        }
        public function getAge(){
            return $this->age;
        }
        public function setAge($nenrei){
            $this->age= $nenrei;
        }
        public function showName(){
            if($this->sex == 'boy' && $this->age >= 12){
                    return $this->name. '君'.'<br>';
                }elseif($this->sex == 'boy' && $this->age < 12){
                    return $this->name. 'くん'.'<br>';
                }elseif($this->sex =='girl' && $this->age >= 12){
                    return $this->name.'さん'.'<br>';
                }else if($this->sex =='girl' && $this->age < 12){
                    return $this->name.'ちゃん'.'<br>';
                }else{
                return $this->name.'の性別が不明です';
            }
        }
    }
    $kid = new Kid();
    echo '初期値の名前：'.$kid->showName().'<br>';
    $kid->setName('seedTech');
    $kid->setSex('girl');
    $kid->setAge(12);
    echo $kid->showName();
?>

