<!DOCTYPE HTML>
<html>
<?php
$pageTitle = 'Portfolio - Landscape and Architecture';
require_once('includes/head.php');
?>

<body>
  <div id="main">
<?php require_once('includes/header.php'); ?>

    <!-- begin content -->
    <div id="site_content">
	<div class="portfolio-title"><h1>Landscape &amp; Architecture</h1></div>
      <!-- start gallery HTML containers -->
      <div class="navigation-container">
        <div id="thumbs" class="navigation">
          <a class="pageLink prev" style="visibility: hidden;" href="#" title="Previous Page"></a>
          <ul class="thumbs noscript">
            <li>
              <a class="thumb" href="images/portfolio-landscape/01.jpg"><img src="images/portfolio-landscape/01_thumb.jpg" alt="one" /></a>
            </li>
            <li>
              <a class="thumb" href="images/portfolio-landscape/02.jpg"><img src="images/portfolio-landscape/02_thumb.jpg" alt="two" /></a>
            </li>
            <li>
              <a class="thumb" href="images/portfolio-landscape/03.jpg"><img src="images/portfolio-landscape/03_thumb.jpg" alt="three" /></a>
            </li>
            <li>
              <a class="thumb" href="images/portfolio-landscape/04.jpg"><img src="images/portfolio-landscape/04_thumb.jpg" alt="three" /></a>
            </li>
          </ul>
          <a class="pageLink next" style="visibility: hidden;" href="#" title="Next Page"></a>
        </div>
      </div>
      <div class="content">
        <div class="slideshow-container">
          <div id="loading" class="loader"></div>
          <div id="slideshow" class="slideshow"></div>
          <div id="controls" class="controls portfolio-landscape"></div>
          <div id="caption" class="caption-container"></div>
        </div>
      </div>
      <!-- end gallery HTML containers -->
    </div>
    <!-- end content -->

<?php require_once('includes/footer.php'); ?>

  </div>
<?php require_once('includes/portfolio_js.php'); ?>
  <?php require_once('includes/piwik.php'); ?>
</body>
</html>
