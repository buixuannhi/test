<?php 
session_start();
if(isset($_SESSION['counter'])){
    $_SESSION['counter'] += 1;
}else{
    $_SESSION['counter']=1;
}
$msg = "sdkfjs  ". $_SESSION['counter'];
$msg .="  lần trong session này .";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thiết lập session trong php </title>
</head>
<body>
    <?php echo $msg ?>
</body>
</html>
