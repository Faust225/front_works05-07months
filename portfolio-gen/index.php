<?php

			require_once "config.php";

			if(isset($_POST['send'])) {

				$firstname = $_POST['firstname'];
				$duty = $_POST['duty'];
				$image = $_POST['image'];
				$info = $_POST['info'];

				$sql = "INSERT INTO worker (firstname, position, image, info)
				VALUES ('$firstname', '$duty', '$image', '$info')";

					mysqli_query($connect, $sql);

			}

?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
	<title></title>
</head>
<body>
	<section>
		<form method="post">
			<input type="text" name="firstname" placeholder="firstname" required>
			<input type="text" name="duty" placeholder="Position" required>
			<input type="text" name="image" placeholder="insert URL">
			<textarea name="info" placeholder="Write something about yourself"></textarea>

			<input type="submit" name="send">
		</form>

		<div class="form-output">
			<?php

			$query = "SELECT * FROM worker ORDER by firstname";
			$result = $connect->query($query);

	 // go through each row that was returned in $result
			while($table = mysqli_fetch_array($result)){
?>
				<div class="person">
					<img src="<?php print $table[3] ?>">
					<h1><?php print 'Name: ' . $table[1] ?></h1>
					<h2><?php print 'Position: ' . $table[2] ?></h2> 
					<p><?php print 'Short info: ' . $table[4] ?></p>
				</div>

	<?php 

	} 

?>
		</div>
	</section>
</body>
</html>