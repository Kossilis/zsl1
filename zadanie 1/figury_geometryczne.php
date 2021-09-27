<!DOCTYPE html>
<html lang="pl" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Figury geometryczne</title>
    </head>
    <body>
        <h4>Wybierz jedną z opcji</h4>
        <from action="./scripts/script.php" method="post">
            <input type="text" name="name" placeholder="Podaj swoje imię"><br><br>
            <input type="radio" name="square" value="kwadrat">Kwadrat<br><br>
            <input type="radio" name="square" value="prostokat">Prostokąt<br><br>
            <input type="submit" value="Zatwierdź figurę">
        </from>
    </body>
</html>