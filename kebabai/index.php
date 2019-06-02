<?php

$pasiula = [
    [
        'Jammi',
        'Wraperia Suppa Kebs',
        'Sinano kebabai',
    ],
    [
        'kebabas lavase',
        'kebabas pitoje',
        'kebabas leksteje',
    ],
    [
        'didelis',
        'mazas',
        'kovotojo',
    ],
    [
        'cesnakinis',
        'svelnus',
        'cipotle',
        'astrus',
    ],
    [
        'jautiena',
        'vistiena',
    ],
];

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Kebabai</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<form method="POST">
		<?php for($item = 0; $item < count($pasiula); $item++): ?>
			<select name="<?php print $item ?>">
				<<?php foreach ($pasiula[$item] as $key => $value): ?>
					<option value="<?php print $key ?>"><?php print $value ?></option>
				<?php endforeach; ?>
			</select>
			<?php endfor; ?>
			<input type="submit" name="send">
	</form>
	<?php 

	if (isset($_POST['send'])) {
		if($_POST['0'] != '0' && $_POST['2'] == '2') {
			print 'kovotojo galimas tik Jammi parduotuveje ';
		
		} else {

			require_once "config.php";

			if(isset($_POST['send'])) {
				$kebabine = $pasiula[0][$_POST[0]];
				$tipas = $pasiula[1][$_POST[1]];
				$didis = $pasiula[2][$_POST[2]];
				$padazas = $pasiula[3][$_POST[3]];
				$mesa = $pasiula[4][$_POST[4]];

				$sql = "INSERT INTO kebab (kebabine, tipas, didis, padazas, mesa)
				VALUES ('$kebabine', '$tipas', '$didis', '$padazas', '$mesa')";

				if ($connect->query($sql) === TRUE) {
			    echo "New record created successfully";

				} else {
				    echo "Error: " . $sql . "<br>" . $connect->error;
				}
			}
			?>
			<table>
					<tr>
						<th>Kebabine</th>
						<th>Kebabo tipas</th>
						<th>Didis</th>
						<th>Padazas</th>
						<th>Mesa</th>
					</tr>
					<?php

					$query = "SELECT * FROM kebab ORDER by kebabine";
					$result = $connect->query($query);

					 // go through each row that was returned in $result
					while($table = mysqli_fetch_array($result)){

					?>
					<tr><!-- $pasiula needed, because form takes data from php arr -->
						<td><?php print $table[1]?></td>
						<td><?php print $table[2]?></td>
						<td><?php print $table[3]?></td>
						<td><?php print $table[4]?></td>
						<td><?php print $table[5]?></td>
					</tr>
					<?php

				}
				$connect->close();

					?>
				</table>
		<?php
		}
	}

	?>
</body>
</html>