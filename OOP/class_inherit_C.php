<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
<style type="text/css">
h2 {
	color:deeppink;
}	
</style>
</head>
<body>
<?php
class Person{
	public $name;
	private $birthday;

	public function smile(){
		echo $this->name," smile~~<br>";
	}
} 

class Man extends Person{
	public function smile(){
		echo $this->name," HA! HA!! HA!!!<br>";
	}
	public function fight(){
		echo $this->name, "衝! 衝!! 衝!!!<br>";
	}
}

$p1 = new Person();
$p1->name = "Adam";  
$p1->smile();

$m1 = new Man();
$m1->name = "John";
$m1->smile();
$m1->fight();
?>      
</body>
</html>