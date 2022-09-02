<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laboratorio 1.5</title>
</head>
<body>
    <?php
    define('tam',10);
    echo "<table border=1>";
    $n=1;
    for($n1=1;$n1<=tam;$n1++){

        if($n1%2==0){
            echo "<tr bgcolor=#bdc3d6>"; 
        }   
        else{
            echo "<tr>";
        }
        for($n2=1;$n2<=tam;$n2++){
            echo "<td>". $n. "</td>";
            $n=$n+1;

        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>