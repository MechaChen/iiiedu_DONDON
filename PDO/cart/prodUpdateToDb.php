<?php
	$errMsg = "";
	try {
		require_once('connectBooks.php');
		$sql = "
			UPDATE products
			SET pname = :pname,
				 price = :price,
				 author = :author,
				 pages = :p                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         ages,
				 image = :image
			WHERE psn = :psn;
		";
		$products = $pdo->prepare($sql);
		$products->bindValue(':psn', $_REQUEST["psn"]);
		$products->bindValue(':pname', $_REQUEST["pname"]);
		$products->bindValue(':price', $_REQUEST["price"]);
		$products->bindValue(':author', $_REQUEST["author"]);
		$products->bindValue(':pages', $_REQUEST["pages"]);
		$products->bindValue(':image', $_REQUEST["image"]);
		$products->execute();
		echo "異動成功";
	} catch (PDOException $e) {
		$errMsg .= $e->getMessage()."<br>";
		$errMsg .= $e->getLine()."<br";
		exit($errMsg);
	}
?>      
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
</body>
</html>