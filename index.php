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

    <script type="text/javascript" src="inc/jquery.waypoints.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("#home-lookup").waypoint(function(direction) {
          $(".home HEADER, #waypoint-menu-spacer").toggleClass("sticky", direction == "down");
        });
      });
    </script>

    <div id="waypoint-menu-spacer"></div>

    <div id="home-hero">
      <div class="site-width">
        <div class="text">
          <h1>Global Quality Couplings.</h1>
          Rathi North America offers a wide range of standard elastomeric and metallic couplings with time-tested, off-the-shelf designs. Local distribution and technical support is focused on serving OEMs, Distributors, and End User customers. Five decades of integrated manufacturing experience provide optimal quality and performance. Rathi’s operations are certified to ISO 9001:2008 International Standards for Quality Management, and the couplings comply with API, ISO, DIN, BS, IS, AGMA standards and provides ATEX certification.
        </div>

        <div class="couplings">
          <div style="background-image: url(images/elastomeric-coupling.png);">
            <a href="#">Elastomeric Couplings</a>
          </div>

          <div style="background-image: url(images/metallic-coupling.png);">
            <a href="#">Metallic Couplings</a>
          </div>
        </div>
      </div>
    </div>

    <div id="home-lookup" class="no-result">
      <div class="site-width">
        <h2>Elastomeric Product Lookup</h2>

        <script type="text/javascript" src="inc/find-part-home.js"></script>

        <form action="ajax-find-part.php" method="POST" id="home-find-part" class="lookup-form">
          <div class="select-man">
            <label for="home-manufacturer">Manufacturer</label>
            <div class="select">
              <select name="manufacturer" id="home-manufacturer">
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
            <label for="home-model">Model</label>
            <div class="select">
              <select name="model" id="home-model">
                <option value="">Select...</option>
              </select>
            </div>
          </div>
          
          <div class="select-ts">
            <label for="home-type-size">Type/Size</label>
            <div class="select">
              <select name="type-size" id="home-type-size">
                <option value="">Select...</option>
              </select>
            </div>
          </div>

          <button id="home-find-my-part" class="find-my-part">Find My Part</button>
        </form>
      </div>

      <div id="home-find-part-results" class="find-part-results"></div>
    </div>

    <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
    <script type="text/javascript" src="inc/jquery.cycle2.carousel.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        function buildCarousel() {
          var slides = 4;
          var startslide = 5;

          if (window.innerWidth < 901) { slides = 2; startslide = 0; }
          if (window.innerWidth < 481) { slides = 1; startslide = 0; }

          $('#home-blog').cycle({
            timeout: 0,
            slides: "> a",
            prev: "#prev",
            next: "#next",
            fx: 'carousel',
            carouselFluid: 'true',
            carouselVisible: slides,
            startingSlide: startslide
          });
        }

        function resizeCarousel() {
          $('#home-blog').cycle('destroy');
          buildCarousel();
        }

        buildCarousel();
        
        $(window).resize(function(){
          setTimeout(function() { resizeCarousel(); },100);
        });
      });
    </script>

    <div id="home-blog">
      <a href="#">
        <div style="background-image: url(https://fillmurray.com/400/400);">
          <div class="title">Blog Title One</div>
          <div class="author">By Dougie Jones</div>
        </div>
      </a>
      <a href="#">
        <div style="background-image: url(https://fillmurray.com/410/410);">
          <div class="title">Blog Title Two Is Kind of Long</div>
          <div class="author">By Chip Dipson</div>
        </div>
      </a>
      <a href="#">
        <div style="background-image: url(https://fillmurray.com/420/420);">
          <div class="title">Blog Title Three Is Really Quite Long</div>
          <div class="author">By Dip Dobson</div>
        </div>
      </a>
      <a href="#">
        <div style="background-image: url(https://fillmurray.com/430/430);">
          <div class="title">Blog Title Four</div>
          <div class="author">By Dougie Jones</div>
        </div>
      </a>
      <a href="#">
        <div style="background-image: url(https://fillmurray.com/440/440);">
          <div class="title">Blog Title Five</div>
          <div class="author">By Dougie Jones</div>
        </div>
      </a>
      <a href="#">
        <div style="background-image: url(https://fillmurray.com/450/450);">
          <div class="title">Blog Title Six</div>
          <div class="author">By Dougie Jones</div>
        </div>
      </a>

      <span href="#" id="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
      <span href="#" id="next"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
    </div>

    <footer>
      <div class="site-width">
        <div class="logo"><img src="images/logo.png" alt="Rathi North America"></div>

        <div class="address">
          Rathi North America<br>
          N56W13855 Silver Spring Dr.<br>
          Menomonee Falls, WI 53051
        </div>

        <div class="social">
          <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
          <br>

          <a href="tel:12816900741">1.281.690.0741</a>
        </div>
      </div>
    </footer>

    <div id="copyright">
      &copy; <?php echo date("Y"); ?> Rathi North America - All rights reserved.
    </div>
    
  </body>
</html>