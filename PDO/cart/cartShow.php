<?php
//啟用session
ob_start();
session_start();
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
a{
	text-decoration:none;
}
a:hover{
	text-decoration:underline;
}
</style>
</head>
<body>
<table align="center" width="700">
	<tr bgcolor="#bfbfef"><th>書號</th><th>書名</th><th>價格</th><th>數量</th></tr>
	<?php 
	foreach($_SESSION["pname"] as $psn => $data) {
	?>
		<tr>
			<td><?php echo $psn; ?></td>
			<td><?php echo $_SESSION["pname"][$psn]; ?></td>
			<td><?php echo $_SESSION["price"][$psn]; ?></td>
			<td><?php echo $_SESSION["qty"][$psn]; ?></td>
		</tr>
	<?php
	}
	?>
</table>     
<center><a href="prodList.php">繼續瀏覽</a></center>
</body>
</html>