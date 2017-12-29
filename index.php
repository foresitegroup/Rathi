<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width">
    
    <title>Rathi North America<?php if (isset($PageTitle)) echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <meta name="description" content="">
    <meta name="keywords" content="">
    
    <link href="//fonts.googleapis.com/css?family=Kanit:300,400,500,700,800,900|Open+Sans:800" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="inc/main.css?<?php echo filemtime('inc/main.css'); ?>">
    
    <script type="text/javascript" src="inc/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="inc/find-part.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');
      });
    </script>
  </head>
  <body>

<!--     <div class="menu site-width">
      <ul>
        <li><a href=".">Home</a></li>
        <li>
          <a href="#">Menu Two</a>
          <ul>
            <li><a href=".">Submenu One</a></li>
            <li><a href="#">Submenu Two</a></li>
            <li><a href="#">Submenu Three</a></li>
            <li><a href="#">Submenu Four</a></li>
          </ul>
        </li>
        <li><a href="#">Menu Three</a></li>
        <li><a href="#">Menu Four</a></li>
      </ul>
    </div> -->

    <div class="site-width">
      <form action="ajax-find-part.php" method="POST" id="find-part">
        <div>
          <select name="manufacturer" id="manufacturer">
            <option value="">Select Manufacturer...</option>
            <?php
            include "inc/fintoozler.php";
            $manresult = $mysqli->query("SELECT * FROM products GROUP BY competitor ORDER BY competitor ASC");

            while($manrow = $manresult->fetch_array(MYSQLI_ASSOC)) {
              echo '<option value="' . $manrow['competitor'] . '">' . $manrow['competitor'] . '</option>';
            }

            $manresult->close();
            ?>
          </select>

          <select name="model" id="model">
            <option value="">Select Model...</option>
          </select>

          <select name="type-size" id="type-size">
            <option value="">Select Type/Size...</option>
          </select>

          <input type="submit" name="submit" value="Find My Part" id="find-my-part">
        </div>
      </form>

      <div id="find-part-results"></div>
    </div>
    
  </body>
</html>