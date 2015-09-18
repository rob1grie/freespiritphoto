<head>
  <title>Free Spirit Photography | <?php echo $pageTitle; ?></title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <!-- stylesheets -->
  <?php 
  	if (strpos($_SERVER['SCRIPT_NAME'], 'portfolio')) {
		echo "<link href='css/portfolio.css' rel='stylesheet' type='text/css' />\r\n";
	}
  ?>
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href="css/dark.css" rel="stylesheet" type="text/css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
  <?php require_once('includes/favicon.php'); ?>
  <link href='http://fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
</head>