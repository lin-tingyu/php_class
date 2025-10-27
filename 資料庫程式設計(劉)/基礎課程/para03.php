<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>

<table>
    <?php
    for($i=1;$i<=10;$i++){
        echo "<tr>";
        for($j=1;$j<=10;$j++){
            if($i==1 && $j==1){
            echo "<td>";
            echo "</td>";
            }elseif($i==1){
            echo "<td>";
            echo $j-1;
            echo "</td>";
            }elseif($j==1){
            echo "<td>";
            echo $i-1;
            echo "</td>";
            }else{
            echo "<td>";
            echo $j . ' x '.$i.' = '.($j*$i);
            echo "</td>";
            }
            // echo "<td>";
            // echo $j . ' x '.$i.' = '.($j*$i);
            // echo "</td>";
        }
        echo "</tr>";
    }
        for($i=1;$i<=10;$i++){
            echo "&nbsp&nbsp&nbsp";
            echo "*";
            echo "<br>";
        }

    ?>

   


</table>
</div>


</body>
</html>