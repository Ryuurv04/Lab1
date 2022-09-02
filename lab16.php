<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laboratorio 1.6</title>
</head>
<body>
    <?php
    define('tam',4);
    function potencia ($v1,$v2){
        $rdo=pow($v1,$v2);
        return $rdo;
    }

    echo "<table border=1>";
    for($n1=1;$n1<=tam;$n1++){
        echo "<tr>";
        for($n2=1;$n2<=tam;$n2++){
            echo "<td>". potencia($n1,$n2). "</td>";
            
            
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>