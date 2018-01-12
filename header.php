<?php
include "inc/fintoozler.php";
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
    
    <link href="//fonts.googleapis.com/css?family=Kanit:300,400,500,700,800,900|Open+Sans:600,700,800" rel="stylesheet">
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
            Give us a call <span><a href="tel:12816900741">1.281.690.0741</a></span>
          </div>
          
          <input type="checkbox" id="toggle-menu" role="button">
          <label for="toggle-menu"></label>
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
                <form action="ajax-find-part.php" method="POST" id="find-part" class="lookup-form">
                  <div class="select-man">
                    <label for="manufacturer">Manufacturer</label>
                    <div class="select">
                      <select name="manufacturer" id="manufacturer">
                        <option value="">Select...</option>
                        <?php
                        $manresult = $mysqli->query("SELECT * FROM products GROUP BY competitor ORDER BY competitor ASC");

                        while($manrow = $manresult->fetch_array(MYSQLI_ASSOC)) {
                          echo '<option value="' . $manrow['competitor'] . '">' . $manrow['competitor'] . '</option>';
                        }

                        $manresult->close();
                        ?>
                      </select>
                    </div>
                  </div>
                  
                  <div class="select-mod">
                    <label for="model">Model</label>
                    <div class="select">
                      <select name="model" id="model">
                        <option value="">Select...</option>
                      </select>
                    </div>
                  </div>
                  
                  <div class="select-ts">
                    <label for="type-size">Type/Size</label>
                    <div class="select">
                      <select name="type-size" id="type-size">
                        <option value="">Select...</option>
                      </select>
                    </div>
                  </div>

                  <button id="find-my-part" class="find-my-part">Find My Part</button>
                </form>

                <div id="find-part-results" class="find-part-results"></div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </header>
