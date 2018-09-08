<?php

class Car{
	
	public $reference;
	public $wheels = [
    ['flat' => false],
    ['flat' => false],
    ['flat' => false],
    ['flat' => false],
];
	public $broken;
	public $brand;
	
	function construction($reference,$broken,$brand){
		$this->reference = $reference;
		$this->broken = $broken;
		$this->brand = $brand;	
	}
	public function brokenCar(){
		$this->broken = true;
	}
		public function repairCar(){
		$this->broken = false;
	}
	
	public function flatTire($wheels){
		$this->wheels[$wheels]['flat'] = true;
}
	public function repairTire($wheels){
		$this->wheels[$wheels]['flat'] = false;
}

}

class Parking{
	public function constructionParking($car1,$car2){
		$this->car1 = $car1;
		$this->car2 = $car2;
	}
}

$porshe = new Car();
$porshe->construction(1, true, 'porsche');

//Now i flat my tire 
	$porshe->flatTire(2);

//Now fix car 
$porshe->repairCar();

// Now fix flat week 
for ($i = 0; $i <= 3; $i++) {
	$porshe->repairTire($i);
} 

// Car broke again 
$porshe->brokenCar();

// So we have to fix again ....
$porshe->repairCar();

//build a second car 
$fiat = new Car();
$fiat->construction(2,false,'fiat');

//Park cars in my parking 
$park = new Parking();
$park->constructionParking($porshe,$fiat);

//take my car with brand 

var_dump($park);
