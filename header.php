<?php
if (!isset($TopDir)) $TopDir = "";

include "inc/fintoozler.php";

function email($address, $name="") {
  $email = "";
  for ($i = 0; $i < strlen($address); $i++) { $email .= (rand(0, 1) == 0) ? "&#" . ord(substr($address, $i)) . ";" : substr($address, $i, 1); }
  if ($name == "") $name = $email;
  echo "<a href=\"&#109;&#97;&#105;&#108;&#116;&#111;&#58;$email\">$name</a>";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width">
    
    <title>Rathi North America<?php if (isset($PageTitle)) echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $TopDir; ?>images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo $TopDir; ?>images/apple-touch-icon.png">
    
    <meta name="description" content="">
    <meta name="keywords" content="">

    <?php if (isset($BlogInc)) echo $BlogInc; ?>
    
    <link href="//fonts.googleapis.com/css?family=Kanit:300,400,500,700,800,900|Open+Sans:600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $TopDir; ?>inc/main.css?<?php if ($TopDir == "") echo filemtime('inc/main.css'); ?>">
    
    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">var TopDir = "<?php echo $TopDir; ?>";</script>
    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/find-part.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');

        $('#toggle-lookup').on('change',function(e) {
          $('#menu-lookup').toggleClass('ml-active');
        });
      });
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114304978-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-114304978-1');
    </script>
  </head>
  <body<?php if (isset($PageClass)) echo ' class="' . $PageClass . '"'; ?>>

    <header>
      <div class="site-width">
        <a href="<?php echo $TopDir; ?>." id="logo"><img src="<?php echo $TopDir; ?>images/logo.png" alt="Rathi North America"></a>

        <div class="header-right">
          <div class="call">
            <!-- Give us a call <span><a href="tel:3174905542">317.490.5542</a></span> -->
          </div>
          
          <input type="checkbox" id="toggle-menu" role="button">
          <label for="toggle-menu"></label>
          <ul>
            <li><a href="<?php echo $TopDir; ?>couplings.php">Couplings</a></li>
            <li><a href="<?php echo $TopDir; ?>about.php">About</a></li>
            <li id="menu-lookup">
              <input type="checkbox" id="toggle-lookup" role="button">
              <label for="toggle-lookup">Elastomeric Product Lookup</label>
              <div id="lookup">
                <form action="<?php echo $TopDir; ?>ajax-find-part.php" method="POST" id="find-part" class="lookup-form">
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

                  <div class="disclaimer">
                    This Elastomeric Product Lookup is intended to provide only general guidance. Rathi North America makes no warranty concerning the equivalency, interchangeability or suitability of any cross-referenced products for any particular application or use.
                  </div>
                </form>

                <div id="find-part-results" class="find-part-results"></div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </header>
