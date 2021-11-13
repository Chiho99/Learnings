<?php
class Trip {
    public $price;
    public $fav;
    public $country;
    public $city;
    private $popularity;

    public function getDestinationName() {
        return $this->country;
    }
    public function setDestinationName($country) {
        $this->country = $country;
    }
    public function getCity() {
        return $this->city;
    }
    public function setCity($city) {
        $this->city = $city;
    }
    public function getPopularity(){
        return $this->popularity;
    }
    public function setPopularity($star) {
        $this->popularity = $star;
    }
    public function getPrice() {
        return $this->price;
    }
    public function setPrice($cost) {
         $this->price = $cost;
    }
}
$usa = new Trip();
$usa->setDestinationName('アメリカ');
$usa->setPopularity('★★★★★');
$usa->setPrice(79500);
$usa->setCity('サンフランシスコ');

$uk = new Trip();
$uk->setDestinationName('イギリス');
$uk->setPopularity('★★★');
$uk->setPrice(124240);
$uk->setCity('ロンドン');

$italy = new Trip();
$italy->setDestinationName('イタリア');
$italy->setPopularity('★★★');
$italy->setPrice(114240);
$italy->setCity('ヴェニス');

$france = new Trip();
$france->setDestinationName('フランス');
$france->setPopularity('★★★★★');
$france->setPrice(106320);
$france->setCity('パリ');


