<?php
    echo PHP_VERSION."<br>"; //7.4.8
    echo 2**10,"<br>"; //1024
    
    $x=1;
    $y=10;

    echo $x<=>$y,"<br>"; //-1

// równe / identyczne
    $x=1;
    $y=1.0;

    echo gettype($x)."<br>"; //integer
    echo gettype($y)."<br>"; //double

    if ($x==$y) {
        echo "równe<br>";
    }else {
        echo"różne<br>";
    }

    if ($x===$y) {
        echo "identyczne<br>";
    }else {
        echo"różne<br>";
    }
?>