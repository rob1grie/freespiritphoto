<!DOCTYPE HTML>
<html>

<?php 
$pageTitle = 'About Me';
require_once('includes/head.php');
?>

<body>
  <div id="main">

<?php require_once('includes/header.php'); ?>
    <!-- begin content -->
    <div id="site_content">
      <div id="left_content">
        <h1>About Free Spirit Photography</h1>
        <p>A camera was first placed in my hands on my 11th birthday. From that moment on, I looked at the world differently and aspired to become a professional photographer. I followed my dreams through high school then life happened. Met the love of my life, got married and started a family. Over the years I never let go of my dream, so it is with the help & support of my amazing family that I am finally able to chase after my childhood dream.</p>
<p>There is a certain sense of freedom when I look through the viewfinder. My spirit is happiest when I am behind the camera.</p>
<span style="text-align:right;"><p>Jen Campbell</p></span>
<span style="text-align:center;"><h2>“Photography is a love affair with life.” ~ Burk Uzzle</h2></span>
      </div>
      <div id="right_content">
        <img style="float: left;" src="images/about.jpg" title="about me" alt="about me"/>
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
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
  <?php require_once('includes/piwik.php'); ?>
</body>
</html>
