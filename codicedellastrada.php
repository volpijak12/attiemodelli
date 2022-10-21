<?php 
include('dbcon.php');
include('session.php'); 

$result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CodicedellaStrada | attiemodellidipoliziagiudiziaria</title>
</head>
<body>  
    
    
    <center>


    <a href = "https://digilander.libero.it/dlpasquale/gatto.pdf" target = "_blank">Gatto Nero</a>
    <br>
    <hr>
    <a href = "http://www.africau.edu/images/default/sample.pdf" target = "_blank">Gatto Nero</a>
    <br>
    <hr>
    <a href = "https://digilander.libero.it/dlpasquale/gatto.pdf" target = "_blank">Gatto Nero</a>
    <br>
    <hr>
    <a href = "https://digilander.libero.it/dlpasquale/gatto.pdf" target = "_blank">Gatto Nero</a>
    <br>
    <hr>
    <a href = "https://digilander.libero.it/dlpasquale/gatto.pdf" target = "_blank">Gatto Nero</a>
    <br>
    <hr>
    <a href = "https://digilander.libero.it/dlpasquale/gatto.pdf" target = "_blank">Gatto Nero</a>
    <br>
    <hr>
    <a href = "https://digilander.libero.it/dlpasquale/gatto.pdf" target = "_blank">Gatto Nero</a>
    <br>
    <hr>
    <a href = "https://digilander.libero.it/dlpasquale/gatto.pdf" target = "_blank">Gatto Nero</a>


    </center>


</body>
</html>


