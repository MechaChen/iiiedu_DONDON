<?php
   $errMsg = "";
   try {
       $dsn = "mysql:host=localhost;port=3306;dbname=books;charset=utf8";
       $user = "root";
       $password = "root";
       $options = array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_CASE => PDO::CASE_NATURAL);
       $pdo = new PDO($dsn, $user, $password, $options);
       $sql = "select * from product";
       $pdoStatement = $pdo->query($sql);
      
   } catch (PDOException $e) {
       $errMsg .=  $e->getMessage(). "<br>"; 
       $errMsg .=  $e->getLine(). "<br>";    
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
<?php 
if( $errMsg != ""){
   exit($errMsg); //停止執行php程式
}
?>   
<table border='1' cellspacing='0' align='center'>   
<?php
        while($row = $pdoStatement->fetch(PDO::FETCH_ASSOC)){
?>
         <tr>
         <td><?php echo $row["psn"];?></td>
         <td><?php echo $row["pname"];?></td>
         <td><?php echo $row["price"];?></td>
         <td><?php echo $row["author"];?></td>     
         </tr>
<?php
       }
?>
</table>

</body>
</html>