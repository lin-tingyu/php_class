<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

$a = 90;
if($a<0 || $a>100){
    echo "數值有問題";
}elseif($a<60){
    echo "E";
}elseif($a<70){
    echo "D";
}elseif($a<80){
    echo "C";
}elseif($a<90){
    echo "B";
}else{ 
    echo "A";
}

?>

<br>
<br><br><br><br><br>
<?php
$year = 2400;
if($year %400==0){
    echo "{$year}年為 潤";
}elseif($year %100==0){
    echo "{$year}年為 平";
}elseif($year %4==0){
    echo "{$year}年為 潤";
}else{
    echo "{$year}年為 平";
}

?>

</body>
</html>