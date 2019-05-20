<?php

if(isset($_POST['send'])) {
	$name = $_POST['name'];
	$mail = $_POST['email'];
	$phone = $_POST['tel'];
	$message = $_POST['message'];

} else {
	$name = 'Vidmantas';
	$mail = 'Direktorius';
	$phone = '+37067574401';
	$message = 'Nijolė';
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>IKI</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/about.css">
</head>
<body>
<header>
	<img src="css/images/iki-logo.jpg">
	<ul>
		<li><a href="index.php">Apie mus</a></li>
		<li><a href="about.php">Susisiek</a></li>
	</ul>
</header>
<section class="banana-bg">
	<div class="about">
		<div class="about-content">
			<span>Susisiekite su mūsų</span><span class="green"> komanda!</span>
				<form method="post">
					<label>Vardas:</label>
					<input type="text" placeholder="Petras" name="name">
					<label>El. paštas:</label>
					<input type="email" placeholder="email@email.lt" name="email">
					<label>Iki kortelės numeris:</label>
					<input type="number" placeholder="12345678" name="tel">
					<label>Žinutė:</label>
					<textarea placeholder="Jūsų laiškas mums..." name="message"></textarea>
					<input type="submit" value="Siųsti" name="send">
				</form>
				<table>
					<tr>
						<th>Vardas</th>
						<th>Pareigos</th>
						<th>Telefonas</th>
					</tr>
					<tr>
						<td><?php print $name; ?></td>
						<td><?php print $mail; ?></td>
						<td><?php print $phone; ?></td>
					</tr>
					<tr>
						<td><?php print $message; ?></td>
						<td>Administratorė</td>
						<td>+37067574401</td>
					</tr>
				</table>
		</div>
	</div>
</section>
<footer>Copyright Petras Slekys 2019. All rights reserved</footer>
</body>
</html>