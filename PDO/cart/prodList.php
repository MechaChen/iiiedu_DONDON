<?php
$errMsg = "";
try {
	$dsn = "mysql:host=localhost;port=3306;dbname=books;charset=utf8";
	$user = "Benson";
	$password = "Benson123";
	$options = array(PDO::ATTR_CASE=>PDO::CASE_NATURAL, PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION );

	$pdo = new PDO($dsn, $user, $password, $options);

	$sql = "select * from products";
	$products = $pdo->query($sql); 
} catch (PDOException $e) {
	echo "錯誤 : ", $e -> getMessage(), "<br>";
	echo "行號 : ", $e -> getLine(), "<br>";
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
td {
	border-bottom:1px dotted deeppink;
}
</style>
</head>
<body>
<table align="center">
	<tr bgcolor="#bfbfef"><th>書號</th><th>書名</th><th>價格</th><th>作者</th><th>加入購物車</th></tr>
<?php	
	while($prodRow = $products->fetch(PDO::FETCH_ASSOC)){
?>		
	<form action="cartAdd.php" method="GET">
		<input type="hidden" name="psn" value="<?php echo $prodRow["psn"] ?>">
		<input type="hidden" name="pname" value="<?php echo $prodRow["pname"] ?>">
		<input type="hidden" name="price" value="<?php echo $prodRow["price"] ?>">
		<tr>
			<td><?php echo $prodRow["psn"];?></td>
			<td><?php echo $prodRow["pname"];?></td>
			<td><?php echo $prodRow["price"];?></td>
			<td><?php echo $prodRow["author"];?></td>
			<td><input type="submit" value="加入購物車"></td>
		</tr>
	</form>
<?php
	}
?>
</table>     
</body>
</html>