<?php 
$selected = "class='selected'";

$pageTitle === "Home" ? $homeSelected = $selected : $homeSelected = "";	
$pageTitle === "About Me" ? $aboutSelected = $selected : $aboutSelected = "";	
$pageTitle === "Contact" ? $contactSelected = $selected : $contactSelected = "";	
?>

      <nav>
        <ul class="sf-menu" id="nav">
          <li <?php echo $homeSelected; ?>><a href="index.php">home</a></li>
          <li <?php echo $aboutSelected; ?>><a href="about.php">about me</a></li>
          <li><a href="#">my portfolio</a>
            <ul>
              <li><a href="portfolio_golf.php">golf</a></li>
              <li><a href="portfolio_landscape.php">landscape/architecture</a></li>
              <li><a href="portfolio_nature.php">nature</a></li>
            </ul>
          </li>
<!--          <li <?php echo $homeSelected; ?>><a href="blog.html">blog</a></li>-->
          <li <?php echo $contactSelected; ?>><a href="contact.php">contact</a></li>
        </ul>
      </nav>
