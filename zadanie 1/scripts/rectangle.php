<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Prostokąt</title>
</head>
<body>
<h3>Prostokąt</h3>
<form method="post">
<input type="text" name="sideA" placeholder="Podaj bok a">
<input type="submit" value="Oblicz">
</form>
<?php
if (!empty($_POST['sideA'])) {
$sideA=$_POST['sideA'];
$area=pow($sideA, 2);
$circuit=4*$sideA;
echo <<< RESULT
<hr>
Pole ptostokąta wynosi: $area cm<sup>2</sup><br>
Obwód prostokąta wynosi: $circle
RESULT;
}else {
    echo "Wypełnij wszystkie pola!";
}
?>
</body>
</html>