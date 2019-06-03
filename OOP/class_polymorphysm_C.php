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

class Woman extends Person{
	public $name;
	private $birthday;

	public function smile(){
		echo $this->name," XD <br>";
	}
} 

function showHappiness($persons){
	foreach( $persons as $i=>$person ){
		$person->smile();
	}
}
$p[0] = new Person();
$p[0]->name = "Adam";  

$p[1] = new Man();
$p[1]->name = "John";

$p[2] = new Woman();
$p[2]->name = "Mary";

showHappiness($p);
?>      
</body>
</html>