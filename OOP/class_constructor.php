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

	public function ??????($name="Somebody", $birthday=""){
		$this->name = $name;
		$this->birthday = $birthday;
	}

	public function ??????(){
		echo "bye~~<br>";
	}

	public function smile(){
		echo $this->name," smile~~<br>";
	}
} 


$p1 = new Person("Adam", "1980-08-08");
$p1->smile();

$p2 = new Person();
$p2->smile();
?>
</body>
</html>