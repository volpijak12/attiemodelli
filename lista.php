<?php 
include('dbcon.php');
include('session.php'); 

$result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<a href="index.php"><img src="https://mypetandme.elanco.com/salute/comportamento-dei-gatti-domande-frequenti/"
</body>
</html>