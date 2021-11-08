<html>
<head>
<meta charset="utf-8">
<title>Użytkownicy</title>
</head>
<body>
<h4>Użytkownicy</h4>
<?php
	$connect = new mysqli("localhost", "root", "", "3pi2t");

	$sql = "SELECT * FROM `users`";
	$result = $connect->query($sql);

	while ($user = $result->fetch_assoc()) {

		echo <<< USER
			Id: $user[id]<br>
			Imię i nazwisko: $user[name] $user[surname]<br>
			Data urodzenia: $user[birthday]<br>
			Data utworzenia użytkownika: $user[create_date]
			<hr>
USER;
	}
	?>
</body>
</html>