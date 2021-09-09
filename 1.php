<?php
    echo 'ZSŁ<br>';
    echo 'ZSŁ<hr>';

    $name='Konrad';
    echo 'Imię: $name<br>'; //Imię: $name
    echo "Imię: $name<br>"; //Imię: Janusz
    
// konkatenacja .
    echo "Janusz"." Kowalski<br>";

// typy danych
// -całkowity-
    $calkowita=10;
    $bin=0b101; //5
    $oct=011; //9
    $hex=0x11; //17
    echo $calkowita."<br>";
    echo $bin."<br>";
    echo $oct."<br>";
    echo $hex."<br>";

// zmiennoprzecinkowy
    $x=10.5;
// logiczny
    $prawda=true;
    $fałsz=false;
    echo $prawda."<br>"; //1
    echo $fałsz."<br>"; //nic nie wyświetli
    //w nazwach zmiennych nie należy używać polskich znaków

// składnia heredoc
echo <<< E
    <hr>Twoje imię: $name<br>
    Poznań<br>
    ZSŁ<hr>
E;

$text = <<< E
    <hr>Twoje imię: $name<br>
    Poznań<br>
    ZSŁ<hr>
E;

    echo $text;

// składnia nowdoc

echo <<< 'E'
    <hr>Twoje imię: $name<br>
    Poznań<br>
    ZSŁ<hr>
E;

    $surname="Zaczyński";
    echo "$name $surname<br>"; //Konrad Nowak
    echo "\$name $surname<br>"; //$name Nowak
?>