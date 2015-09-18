<!DOCTYPE HTML>
<html>
	<?php
	$pageTitle = 'Contact';
	require_once('includes/head.php');

// define variables for contact form and set to empty values
	$name = $email = "";
	$message = "";
	$nameErr = $emailErr = $messageErr = $roboErr = "&nbsp;";
	$isError = FALSE;
	$onLoad = ""; // JavaScript function to use in <BODY> tag
	$roboTest = "14 + 3 = ?";
	$roboAnswer = 17;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$onLoad = "messageResult()";
		
		if (empty($_POST["name"])) {
			$nameErr = "Name is required";
		}
		else {
			$name = test_input($_POST["name"]);
			if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
				$nameErr = "Only letters and white space allowed";
				$isError = TRUE;
			}
		}

		if (empty($_POST["email"])) {
			$emailErr = "Email is required";
		}
		else {
			$email = test_input($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Invalid email format";
				$isError = TRUE;
			}
		}

		if (empty($_POST["message"])) {
			$messageErr = "Message is required";
			$isError = TRUE;
		}
		else {
			$message = test_input($_POST['message']);
		}
		
		if ((int)$_POST["roboResponse"] !== $roboAnswer) {
			$roboErr = "Incorrect answer";
			$isError = TRUE;
		}

		if (!$isError) {
			$email = test_input($_POST["email"]);
			$message = test_input($_POST["message"]);
			$subject = "A message from a visitor at FreeSpiritPhoto.us";
			$to = "jen@freespiritphoto.us";
//			$to = "robgrie@gmail.com";
			$headers = 'From: ' . $email . "\r\n" .
					'Reply-To: ' . $email . "\r\n" .
					'X-Mailer: PHP/' . phpversion();

			$comment = "The following message was sent from the FreeSpiritPhoto.us Contact page:\r\r" .
					"Name: " . $name . "\r\r" .
					"Email: " . $email . "\r\r" .
					"Message: " . $message;

			$success = @mail($to, $subject, $comment, $headers);

			if ($success) {
				// Clear all form fields
				$name = $email = $message = "";
				$jsSuccess = 1;
			}
			else {
				$jsSuccess = 0;
			}
		}
	}

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	?>
	<body onload="<?php echo $onLoad; ?>">
		<div id="main">

			<?php require_once('includes/header.php'); ?>

			<!-- begin content -->
			<div id="site_content">
				<div id="left_content">
					<h1>Contact</h1>
					<p>Say hello, we would love to hear from you!</p>
					<form id="contact" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);

			?>" method="post">
						<div class="form_settings">
							<p>
								(* required field)<br/>
								<span>Name *</span><input class="contact" type="text" name="name" value="<?php echo $name; ?>" /><br/>
								<span class="error"><?php echo $nameErr; ?></span>
							</p>
							<p>
								<span>Email Address *</span><input class="contact" type="text" name="email" value="<?php echo $email; ?>" /><br/>
								<span class="error"><?php echo $emailErr; ?></span>
							</p>
							<p>
								<span>Message *</span><textarea class="contact textarea" rows="5" cols="50" name="message"><?php echo $message; ?></textarea><br/>
								<span class="error"><?php echo $messageErr; ?></span>
							</p>
					<!--           <p style="line-height: 1.7em;">To help prevent spam, please enter the answer to this question:</p>-->
							<p>
								<span><?php echo $roboTest; ?></span><input type="text" name="roboResponse" /><br/>
								<span class="error"><?php echo $roboErr; ?></span>
							</p>
							<p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="submit" value="Send" /></p>
						</div>
					</form>
				</div>
				<div id="right_content">
					<img src="images/contact.jpg" width="450" height="450" title="contact" alt="contact" />
				</div>
			</div>
			<!-- end content -->

			<?php require_once('includes/footer.php'); ?>

		</div>
		<!-- javascript at the bottom for fast page loading -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
		<script type="text/javascript" src="js/jquery.sooperfish.js"></script>
		<!-- initialise sooperfish menu -->
		<script type="text/javascript">
			$(document).ready(function () {
				$('ul.sf-menu').sooperfish();
			});
		</script>
		<script type="text/javascript">
			function messageResult() {
				var result = "";
				if (<?php echo $jsSuccess; ?>) {
					result = "Your message was sent successfully. You will be hearing from us soon!";
				}
				else {
					result = "There was a problem sending your message. Please try again or contact us through email.";
				}
				alert(result);
			}
		</script>
	</body>
</html>
