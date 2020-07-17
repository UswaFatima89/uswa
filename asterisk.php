<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta >
	<title>Asterisk Code</title>
</head>
<body>
    <?php
        for ($r =1; $r <=10; $r++){
            echo "<br>";

        for ($p = 1; $p <=10-$r; $p++) {
                echo "*";
        }
    }
     ?>
	 <?php
        echo "<pre>";
        $space = 10;
        for ($i = 0; $i <= 10; $i++) {
            
            for ($k = 0; $k < $space; $k++) {
                echo "&nbsp;";
            }
            for ($j = 0; $j < 2 * $i - 1; $j++) {
                echo "*";
            }
            
            $space--;
            echo "<br/>";
        }
        echo "</pre>";
	 ?>

     <?php
        for ($r =1; $r <=10; $r++){
            echo "<br>";

        for ($p = 1; $p <=$r; $p++) {
                echo "*";
        }
    }
     ?>
</body>
</html>