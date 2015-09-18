<!DOCTYPE HTML>
<html>
<?php 
$pageTitle = 'Home';
require_once('includes/head.php');
?>

<body>
  <div id="main">

<?php require_once('includes/header.php'); ?>
    <!-- begin content -->
    <div id="site_content">
      <ul class="slideshow">
        <li class="show"><img width="950" height="450" src="images/homeslides/01_home.jpg" alt="Hole #12, Augusta Country Club,
Manchester, Maine" /></li>
        <li><img width="950" height="450" src="images/homeslides/02_home.jpg" alt="A beautiful flower, perfect imperfection" /></li>
        <li><img width="950" height="450" src="images/homeslides/03_home.jpg" alt="Great Moose Lake, Hartland, Maine" /></li>
        <li><img width="950" height="450" src="images/homeslides/04_home.jpg" alt="Morning dew" /></li>
      </ul>
    </div>
    <!-- end content -->

<?php require_once('includes/footer.php'); ?>

  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="js/image_fade.js"></script>
  <!-- initialise sooperfish menu -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
