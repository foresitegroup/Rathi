<?php
include "inc/fintoozler.php";
$PageClass = "home";
?>
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

        $('#toggle-lookup').on('change',function(e) {
          $('#menu-lookup').toggleClass('ml-active');
        });
      });
    </script>
  </head>
  <body<?php if (isset($PageClass)) echo ' class="' . $PageClass . '"'; ?>>

    <header>
      <div class="site-width">
        <a href="." id="logo"><img src="images/logo.png" alt="Rathi North America"></a>

        <div class="right">
          <div class="call">
            Give us a call <span>1.281.690.0741</span>
          </div>

          <ul>
            <li>
              <a href="#">Couplings</a>
              <ul>
                <li><a href="#">Elastomeric</a></li>
                <li><a href="#">Metallic</a></li>
              </ul>
            </li>
            <li><a href="#">About</a></li>
            <li id="menu-lookup">
              <input type="checkbox" id="toggle-lookup" role="button">
              <label for="toggle-lookup">Elastomeric Product Lookup</label>
              <div id="lookup">
                <form action="ajax-find-part.php" method="POST" id="find-part">
                  <div>
                    <select name="manufacturer" id="manufacturer">
                      <option value="">Select Manufacturer...</option>
                      <?php
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
            </li>
          </ul>
        </div>
      </div>
    </header>

    <script type="text/javascript" src="inc/jquery.waypoints.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("#waypoint-trigger").waypoint(function(direction) {
          $(".home HEADER, #waypoint-trigger").toggleClass("sticky", direction == "down");
        });
      });
    </script>

    <div id="home-hero">
      <div class="site-width" style="min-height: 500px;">
        HERO CONTENT STARTS HERE
      </div>
    </div>

    <div id="waypoint-trigger"></div>

    <div class="site-width">
      CONTENT HERE
    </div>

    <div style="width: 500px; height: 2000px; margin: 0 auto 2em; background-image: linear-gradient(to bottom, red, orange, yellow, green, blue, indigo, violet);"></div>
    
  </body>
</html>