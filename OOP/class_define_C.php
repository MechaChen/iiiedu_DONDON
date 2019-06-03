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
	const STEP = "生老病死";
	public $name;
	private $birthday;

	public function smile(){
		echo $this->name," smile~~<br>";
	}

	public function setBirthday($date){
		//....
		//...
		if( strpos($date, "-") === false){
			return false;
		}else{
			$this->birthday = $date;
			return true;
		}
	
	}

	public function getBirthday(){
		return $this->birthday;
	}
} 

$p1 = new Person();
$p1->name = "Adam";  
$p1->smile();
//$p1->birthday = "1988-08-08"; //error
if($p1->setBirthday("1988-08-08") === false){
	echo "生日的格式不符<br>";
}
echo "生日: ", $p1->getBirthday(), "<br>";

$p2 = new Person();
$p2->name = "Alice";
$p2->smile();


echo "人生必經四階段 : ", Person::STEP, "<br>";
?>      
</body>
</html>