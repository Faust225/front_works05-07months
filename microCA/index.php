<?php

$val1 = rand(0, 9);
$val2 = rand(0, 9);

$sum = 0;

$sum += $val1 + $val2;

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Microsoft</title>

	<link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" 
    href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
    crossorigin="anonymous">
</head>
<body>
	<nav>
		<img src="http://sfaxa.org/wp-content/uploads/microsoft-logo-white-transparent_2166875.png">
		<div class="nav-links">
			<a href="">Home</a>
			<a href="">About</a>
			<a href="">Contacts</a>
		</div>
	</nav><!-- header end -->
	<section class="main">
		<div class="main-wrapper">
			<h1>Hello</h1>
			<p>This can be a lot of text</p>
		</div>
	</section><!-- main end -->
	<section class="text">
		<div class="text-wrapper">
			<h2><span>Hello</span></h2>
			<p>This can be a lot of text</p>
		</div>
	</section>
	<section class="left-img-right-txt">
		<div class="image"></div>
		<div class="right-text">
			<h2><span>Hello</span></h2>
			<p>This can be a lot of text</p>
		</div>
	</section>
	<section class="right-img-left-txt">
		<div class="image"></div>
		<div class="left-text">
			<h2><span>Hello</span></h2>
			<p>This can be a lot of text</p>
		</div>
	</section>
	<section class="left-img-right-txt">
		<div class="image"></div>
		<div class="right-text">
			<h2><span>Hello</span></h2>
			<p>This can be a lot of text</p>
		</div>
	</section>
	<section class="right-img-left-txt">
		<div class="image"></div>
		<div class="left-text">
			<h2><span>Hello</span></h2>
			<p>This can be a lot of text</p>
		</div>
	</section>
	<section class="left-img-right-txt">
		<div class="image"></div>
		<div class="right-text">
			<h2><span>Hello</span></h2>
			<p>This can be a lot of text</p>
		</div>
	</section>
	<section class="right-img-left-txt">
		<div class="image"></div>
		<div class="left-text">
			<h2><span>Hello</span></h2>
			<p>This can be a lot of text</p>
		</div>
	</section>
	<section class="add-employee">
		<div class="add-employee-wrapper">
			<h2><span>Add Employee</span></h2>
			<form method="POST">
				<label>NAME:</label>
				<input type="text" name="firstname" placeholder="Petras">
				<label>EMAIL:</label>
				<input type="email" name="email" placeholder="Petras@mozilla.lt">
				<label>PHONE:</label>
				<input type="tel" name="phone" placeholder="867574401">
				<label><?php print $val1; ?> + <?php print $val2; ?>:</label>
				<input type="number" name="captcha">

				<input type="submit" name="send" value="ADD EMPLOYEE">
			</form>
			<?php

			if (isset($_POST['send'])) {
				
				$data = $_POST['firstname'] . ' ' . $_POST['email'] . ' ' . $_POST['phone'] . "\r\n";

				// NURODOMA .TXT FAILO VIETA IR KAS BUS JAME DAROMA
			    $fp = fopen('info.txt', 'a');

				// IRASOMI DUOMENYS I NURODYTA .TXT FAILA
			    fwrite($fp, $data);

				// UZDAROMAS FAILAS
			    fclose($fp);

			}

			?>
		</div>
	</section>
	<section class="employee-table">
		<div class="employee-table-wrapper">
			<h2><span>Employee Table</span></h2>
			<table>
				<tr>
					<th>Vardas</th>
					<th>El. paštas</th>
					<th>Telefonas</th>
				</tr>
				<tr>
					<td>Petras</td>
					<td>petras@mozilla.lt</td>
					<td>867574401</td>
				</tr>
				<tr>
					<td>Petras</td>
					<td>petras@mozilla.lt</td>
					<td>867574401</td>
				</tr>
				<tr>
					<td>Petras</td>
					<td>petras@mozilla.lt</td>
					<td>867574401</td>
				</tr>
				<tr>
					<td>Petras</td>
					<td>petras@mozilla.lt</td>
					<td>867574401</td>
				</tr>
				<?php

				$fn = fopen("info.txt","r");
  
	 			 while(!feof($fn)) {
					$line = fgets($fn);
					$line_el = explode(" ", $line);

					?>

					<tr>
						<td><?php print $line_el[0]; ?></td>
						<td><?php print $line_el[1]; ?></td>
						<td><?php print $line_el[2]; ?></td>
					</tr>

				<?php

	  			}

	  			fclose($fn);

				?>
			</table>
		</div>
	</section>
	<section class="contact">
		<div class="contact-wrapper">
			<form>
				<label>FULL NAME:</label>
				<input type="text" name="full_name" placeholder="Petras Slekys">
				<label>EMAIL:</label>
				<input type="email" name="contact_email" placeholder="Petras@mozilla.lt">
				<label>MESSAGE:</label>
				<textarea placeholder="Your message...">
				</textarea>

				<input type="submit" name="send_message" value="SEND!">
				<input type="reset" name="clear" value="CLEAR">
			</form>
			<div class="contact-us-info">
				<div class="contact-el">
					<h3><i class="fas fa-phone"></i>Phone</h3>
					<p>37067574401</p>
				</div>
				<div class="contact-el">
					<h3><i class="fas fa-envelope"></i>Address</h3>
					<p>info@info.lt</p>
				</div>
				<div class="contact-el">
					<h3><i class="fas fa-home"></i>Address</h3>
					<p>Mindaugo str.16</p>
				</div>
			</div>
		</div>
	</section>
	<footer>Copyright © Petras Slekys</footer>
</body>
</html>