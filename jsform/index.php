<!DOCTYPE html>
<html>
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Forms</title>

	<link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" 
    href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
    crossorigin="anonymous">
</head>
<body>
	<div class="all-content">
		<div class="left-form" id="left-form">
			<form>
				<h1 id="h1-change"><span id="span-change">Get</span> In Touch</span></h1>
				<label id="change-name-label" >Name</label>
				<input type="text" name="">
				<label id="change-email-label">Email</label>
				<input type="email" name="">
				<label id="change-message-label">Message</label>
				<textarea></textarea>

				<input type="submit" name="" value="SEND IT">

				<div class="social-networks">
					<div class="social-net-wrapper">
						<i class="fab fa-facebook" id="change-network1"></i>
						<i class="fab fa-linkedin-in" id="change-network2"></i>
						<i class="fab fa-instagram" id="change-network3"></i>
						<i class="fab fa-twitter" id="change-network4"></i>
					</div>
				</div>
			</form>
			<div class="change-color">
				<i  onclick="changeColors()" id="change-button" class="fas fa-chevron-up"></i>
			</div>
			<footer id="footer-change">2018 danjuma ashiwaju</footer>
		</div><!-- left-form end -->
		<div class="right-form">
			<form>
				<h1><span>Get</span> In Touch</h1>
				<label>Name</label>
				<input type="text" name="" id="text-change">
				<label>Email</label>
				<input type="email" name="" id="email-change">
				<label>Message</label>
				<textarea id="textarea-change"></textarea>

				<input type="submit" name="" value="SEND IT">

				<div class="social-networks">
					<div class="social-net-wrapper">
						<i class="fab fa-facebook"></i>
						<i class="fab fa-linkedin-in"></i>
						<i class="fab fa-instagram"></i>
						<i class="fab fa-twitter"></i>
					</div>
				</div>
			</form>
			<footer>2018 danjuma ashiwaju</footer>
		</div>
	</div>

	     <script>
    		function changeColors() {
    			document.getElementById("left-form").style.backgroundColor = "white";
    			document.getElementById("h1-change").style.color = "#777777";
    			document.getElementById("span-change").style.borderColor = "#3c8a7d"; // not working

    			// label
    			document.getElementById("change-name-label").style.color = "#777777";
    			document.getElementById("change-email-label").style.color = "#777777";
    			document.getElementById("change-message-label").style.color = "#777777";

    			// inputs change
    			document.getElementById("text-change").style.borderColor = "#777777";
    			document.getElementById("email-change").style.borderColor = "#777777";
    			document.getElementById("textarea-change").style.borderColor = "#777777";

    			// Social networks
    			document.getElementById("change-network1").style.color = "white";
    			document.getElementById("change-network1").style.backgroundColor = "#2d9f85";
    			document.getElementById("change-network2").style.color = "white";
    			document.getElementById("change-network2").style.backgroundColor = "#2d9f85";
    			document.getElementById("change-network3").style.color = "white";
    			document.getElementById("change-network3").style.backgroundColor = "#2d9f85";
    			document.getElementById("change-network4").style.color = "white";
    			document.getElementById("change-network4").style.backgroundColor = "#2d9f85";

    			// button 
    			document.getElementById("change-button").style.backgroundColor = "#fff";

    			document.getElementById("footer-change").style.color = "black";
    	}
    </script>
</body>
</html>