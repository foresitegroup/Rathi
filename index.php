<?php
$PageClass = "home";
include "header.php";
?>

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
      Rathi North America offers a wide range of standard elastomeric and metallic couplings with time-tested, off-the-shelf designs. Local distribution and technical support is focused on serving OEMs, Distributors, and End User customers. Five decades of integrated manufacturing experience provide optimal quality and performance. Rathi's operations are certified to ISO 9001:2008 International Standards for Quality Management, and the couplings comply with API, ISO, DIN, BS, IS, AGMA standards and provides ATEX certification.
    </div>

    <div class="couplings">
      <div style="background-image: url(images/elastomeric-coupling.png);">
        <a href="couplings.php">Elastomeric Couplings</a>
      </div>

      <div style="background-image: url(images/metallic-coupling.png);">
        <a href="couplings.php#metallic">Metallic Couplings</a>
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

      <div class="disclaimer">
        This Elastomeric Product Lookup is intended to provide only general guidance. Rathi North America makes no warranty concerning the equivalency, interchangeability or suitability of any cross-referenced products for any particular application or use.
      </div>
    </form>
  </div>

  <div id="home-find-part-results" class="find-part-results"></div>
</div>

<div id="home-blog">
  <?php
  require('blog/wp-load.php');
  query_posts('showposts=-1');
  while (have_posts()): the_post();
  ?>
  <a href="<?php echo get_permalink(); ?>">
    <div style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>);">
      <div class="title"><?php the_title(); ?></div>
      <div class="author">By <?php the_author(); ?></div>
    </div>
  </a>
  <?php
  endwhile;
  $count_posts = wp_count_posts();
  $post_num = ($count_posts->publish - 1);
  ?>

  <span href="#" id="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
  <span href="#" id="next"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
</div>

<script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
<script type="text/javascript" src="inc/jquery.cycle2.carousel.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    function buildCarousel() {
      var slides = 4;
      var startslide = <?php echo $post_num; ?>;

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

<?php include "footer.php"; ?>