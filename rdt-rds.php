<?php
$PageTitle = "Metallic Coupling - RDT and RDS Type";
include "header.php";
?>

<div class="product-header-half">
  <div class="product-header">
    <div class="site-width">
      <h2>Metallic Coupling</h2>
      <h1>RDT and RDS Type</h1>
      Drive Shaft Coupling
    </div>
  </div>

  <div class="site-width">
    <div class="left">
      <h3>Features</h3>
      <ul>
        <li>High torsional strength</li>
        <li>Polyamide coated spline shafts for longer life</li>
        <li>Ground fillet radii to avoid stress concentration</li>
        <li>Special high tensile self locking bolts will be supplied with Hub and SAE Plate</li>
      </ul>
    </div>

    <div class="right">
      <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
      <script type="text/javascript" src="inc/jquery.cycle2.carousel.min.js"></script>

      <div class="cycle-slideshow" data-cycle-fx="carousel" data-cycle-timeout="0" data-cycle-slides="> div" data-cycle-carousel-visible="1" data-cycle-carousel-fluid="true" data-cycle-next="#next" data-cycle-prev="#prev" data-cycle-pager="#pager,#number-pager" data-cycle-pager-template="<a href='#'>{{slideNum}}</a>">
        <div style="background-image: url(images/rdt-rds-fig1.jpg);"></div>
        <div style="background-image: url(images/rdt-rds-fig2.jpg);"></div>
        <div style="background-image: url(images/rdt-rds-fig3.jpg);"></div>
        <div style="background-image: url(images/rdt-rds-fig4.jpg);"></div>
        <div style="background-image: url(images/rdt-rds-fig5.jpg);"></div>
        <div style="background-image: url(images/rdt-rds-fig6.jpg);"></div>

        <p id="pager"></p>
        <p id="number-pager"></p>
      </div>

      <a href="#" id="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
      <a href="#" id="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>

      <script type="text/javascript">
        $(document).ready(function() {
          var slideCount = $('.cycle-slideshow').data('cycle.opts').slideCount;

          if (slideCount == 1) {
            $('.product-header-half .right #prev, .product-header-half .right #next, .product-header-half .right #pager').css('visibility', 'hidden');
            $('#number-pager').prepend('Fig ');
          } else {
            $('#number-pager').prepend('Fig ').append(' / ' + slideCount);
          }

          var paddingTop = parseInt($('.product-header-half .right').css('padding-top'));
          var slideHeight = $('.cycle-slideshow .cycle-carousel-wrap').height() / 2;
          var topValue = slideHeight + paddingTop + 'px';
          $('.product-header-half .right #prev, .product-header-half .right #next').css('top', topValue);
        });
      </script>

      <a href="pdf/RDT-RDS_Spec_Sheet.pdf" class="specsheet">Download Spec Sheet <i class="fa fa-download" aria-hidden="true"></i></a>
    </div>
  </div>
</div>

<div class="product-details">
  <div class="site-width">
    <h3>Details &amp; Specs</h3>

    <script type="text/javascript" src="inc/scale-convert.js"></script>

    <div class="system-toggle">
      Units:
      <a href="#" class="convertimp">Imperial</a> / <a href="#" class="convertmet">Metric</a>
    </div>

    <table class="nine">
      <thead>
        <tr>
          <th rowspan="2">Coupling Size</th>
          <th rowspan="2">Short Duration Torque (<span class="scalet">N-m</span>)</th>
          <th rowspan="2">Flange Hole Dia. (<span class="scale">mm</span>)</th>
          <th rowspan="2">Flange PCD (<span class="scale">mm</span>)</th>
          <th rowspan="2">Angle B&deg; Max (deg)</th>
          <th colspan="2">Model RDT</th>
          <th colspan="2">Model RDS</th>
        </tr>
        <tr>
          <th class="blue">Slip Movement K (<span class="scale">mm</span>)</th>
          <th class="blue">FCL-FEL (<span class="scale">mm</span>)</th>
          <th class="blue">Slip Movement K (<span class="scale">mm</span>)</th>
          <th class="blue">FCL-FEL (<span class="scale">mm</span>)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1130</td>
          <td class="convertt">550</td>
          <td class="convert" data-orig="8.2">8.2</td>
          <td class="convert">70</td>
          <td>17</td>
          <td class="convert">43</td>
          <td><span class="convert">315</span>-<span class="convert">358</span></td>
          <td class="convert">24</td>
          <td><span class="convert">208</span>-<span class="convert">232</span></td>
        </tr>
        <tr>
          <td>1310 &#9632;</td>
          <td class="convertt">1085</td>
          <td class="convert" data-orig="10.5">10.5</td>
          <td class="convert">79</td>
          <td>25</td>
          <td class="convert">51</td>
          <td><span class="convert">335</span>-<span class="convert">385</span></td>
          <td class="convert">49</td>
          <td><span class="convert">281</span>-<span class="convert">330</span></td>
        </tr>
        <tr>
          <td>1410 &#9632;</td>
          <td class="convertt">2034</td>
          <td class="convert" data-orig="12.5">12.5</td>
          <td class="convert">95</td>
          <td>20</td>
          <td class="convert">58</td>
          <td><span class="convert">471</span>-<span class="convert">529</span></td>
          <td class="convert">30</td>
          <td><span class="convert">300</span>-<span class="convert">330</span></td>
        </tr>
        <tr>
          <td>1480 &#9632;</td>
          <td class="convertt">2712</td>
          <td class="convert">13</td>
          <td class="convert">121</td>
          <td>20</td>
          <td class="convert">64</td>
          <td><span class="convert">418</span>-<span class="convert">481</span></td>
          <td class="convert">50</td>
          <td><span class="convert">270</span>-<span class="convert">320</span></td>
        </tr>
        <tr>
          <td>1550 &#9632;</td>
          <td class="convertt">3255</td>
          <td class="convert">13</td>
          <td class="convert">121</td>
          <td>20</td>
          <td class="convert">64</td>
          <td><span class="convert">445</span>-<span class="convert">508</span></td>
          <td class="convert">33</td>
          <td><span class="convert">308</span>-<span class="convert">341</span></td>
        </tr>
        <tr>
          <td>1610</td>
          <td class="convertt">4950</td>
          <td class="convert" data-orig="10.5">10.5</td>
          <td class="convert">155</td>
          <td>20</td>
          <td class="convert">70</td>
          <td><span class="convert">500</span>-<span class="convert">570</span></td>
          <td class="convert">45</td>
          <td><span class="convert">377</span>-<span class="convert">422</span></td>
        </tr>
        <tr>
          <td>1710</td>
          <td class="convertt">6511</td>
          <td class="convert" data-orig="10.5">10.5</td>
          <td class="convert">184</td>
          <td>15</td>
          <td class="convert">133</td>
          <td><span class="convert">650</span>-<span class="convert">783</span></td>
          <td class="convert">104</td>
          <td><span class="convert">632</span>-<span class="convert">736</span></td>
        </tr>
      </tbody>
    </table>
    &#9632; Rectangular Flange

    <div class="system-toggle nudge">
      Units:
      <a href="#" class="convertimp">Imperial</a> / <a href="#" class="convertmet">Metric</a>
    </div>
    
    <h4>Rathi Drive Shaft Hub (RDH)</h4>
    <table class="seven">
      <thead>
        <tr>
          <th>RDH Size</th>
          <th>&Oslash;A (<span class="scale">mm</span>)</th>
          <th>&Oslash;B (<span class="scale">mm</span>)</th>
          <th>Max Bore &Oslash;C (<span class="scale">mm</span>)</th>
          <th>&Oslash;E (<span class="scale">mm</span>)</th>
          <th>F (<span class="scale">mm</span>)</th>
          <th>L (<span class="scale">mm</span>)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1130</td>
          <td class="convert">86</td>
          <td class="convert">51</td>
          <td class="convert">32</td>
          <td class="convert" data-orig="57.2">57.2</td>
          <td class="convert" data-orig="2.8">2.8</td>
          <td class="convert">40</td>
        </tr>
        <tr>
          <td>1210 &#9632;</td>
          <td class="convert">102</td>
          <td class="convert">57</td>
          <td class="convert">40</td>
          <td class="convert" data-orig="60.4">60.4</td>
          <td class="convert" data-orig="1.7">1.7</td>
          <td class="convert">45</td>
        </tr>
        <tr>
          <td>1410 &#9632;</td>
          <td class="convert">128</td>
          <td class="convert">72</td>
          <td class="convert">48</td>
          <td class="convert" data-orig="69.9">69.9</td>
          <td class="convert" data-orig="1.7">1.7</td>
          <td class="convert">45</td>
        </tr>
        <tr>
          <td>1480 &#9632;</td>
          <td class="convert">146</td>
          <td class="convert">94</td>
          <td class="convert">65</td>
          <td class="convert" data-orig="95.3">95.3</td>
          <td class="convert">2</td>
          <td class="convert">60</td>
        </tr>
        <tr>
          <td>1550 &#9632;</td>
          <td class="convert">146</td>
          <td class="convert">94</td>
          <td class="convert">65</td>
          <td class="convert" data-orig="95.3">95.3</td>
          <td class="convert" data-orig="1.8">1.8</td>
          <td class="convert">60</td>
        </tr>
        <tr>
          <td>1610</td>
          <td class="convert">176</td>
          <td class="convert">115</td>
          <td class="convert">80</td>
          <td class="convert">168</td>
          <td class="convert" data-orig="1.8">1.8</td>
          <td class="convert">70</td>
        </tr>
        <tr>
          <td>1710</td>
          <td class="convert">210</td>
          <td class="convert">142</td>
          <td class="convert">90</td>
          <td class="convert" data-orig="196.9">196.9</td>
          <td class="convert" data-orig="2.2">2.2</td>
          <td class="convert">90</td>
        </tr>
      </tbody>
    </table>
    &#9632; Rectangular Flange
    
    <div class="system-toggle nudge">
      Units:
      <a href="#" class="convertimp">Imperial</a> / <a href="#" class="convertmet">Metric</a>
    </div>
    
    <h4>Rathi Drive Shaft Hub (RDJ)</h4>
    <table class="seven">
      <thead>
        <tr>
          <th>RDH Size</th>
          <th>&Oslash;A (<span class="scale">mm</span>)</th>
          <th>&Oslash;B (<span class="scale">mm</span>)</th>
          <th>Max Bore &Oslash;C (<span class="scale">mm</span>)</th>
          <th>&Oslash;E (<span class="scale">mm</span>)</th>
          <th>F (<span class="scale">mm</span>)</th>
          <th>L (<span class="scale">mm</span>)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1130</td>
          <td class="convert">86</td>
          <td class="convert">50</td>
          <td class="convert">32</td>
          <td class="convert" data-orig="57.2">57.2</td>
          <td class="convert" data-orig="2.8">2.8</td>
          <td class="convert">40</td>
        </tr>
        <tr>
          <td>1210 &#9632;</td>
          <td class="convert">102</td>
          <td class="convert">58</td>
          <td class="convert">40</td>
          <td class="convert" data-orig="60.4">60.4</td>
          <td class="convert" data-orig="1.7">1.7</td>
          <td class="convert">45</td>
        </tr>
        <tr>
          <td>1410 &#9632;</td>
          <td class="convert">128</td>
          <td class="convert">68</td>
          <td class="convert">48</td>
          <td class="convert" data-orig="69.9">69.9</td>
          <td class="convert" data-orig="1.7">1.7</td>
          <td class="convert">45</td>
        </tr>
        <tr>
          <td>1480 &#9632;</td>
          <td class="convert">146</td>
          <td class="convert">92</td>
          <td class="convert">65</td>
          <td class="convert" data-orig="95.3">95.3</td>
          <td class="convert">2</td>
          <td class="convert">60</td>
        </tr>
        <tr>
          <td>1550 &#9632;</td>
          <td class="convert">146</td>
          <td class="convert">92</td>
          <td class="convert">65</td>
          <td class="convert" data-orig="95.3">95.3</td>
          <td class="convert" data-orig="1.8">1.8</td>
          <td class="convert">60</td>
        </tr>
        <tr>
          <td>1610</td>
          <td class="convert">176</td>
          <td class="convert">115</td>
          <td class="convert">115</td>
          <td class="convert">168</td>
          <td class="convert" data-orig="1.8">1.8</td>
          <td class="convert">70</td>
        </tr>
        <tr>
          <td>1710</td>
          <td class="convert">210</td>
          <td class="convert">135</td>
          <td class="convert">90</td>
          <td class="convert" data-orig="196.9">196.9</td>
          <td class="convert" data-orig="2.2">2.2</td>
          <td class="convert">90</td>
        </tr>
      </tbody>
    </table>
    &#9632; Rectangular Flange<br>
    <br>
    
    <h4>Rathi Drive Shaft SAE Plate (RDP)</h4>
    <table class="five">
      <thead>
        <tr>
          <th>RDP Size</th>
          <th>&Oslash;J</th>
          <th>No. of Holes</th>
          <th>&Oslash;L</th>
          <th>PCD</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>6 <sup>1</sup>&frasl;<sub>2</sub>"</td>
          <td>8 <sup>1</sup>&frasl;<sub>2</sub>"</td>
          <td>6</td>
          <td><sup>21</sup>&frasl;<sub>64</sub>"</td>
          <td>7 <sup>7</sup>&frasl;<sub>8</sub>"</td>
        </tr>
        <tr>
          <td>7 <sup>1</sup>&frasl;<sub>2</sub>"</td>
          <td>9 <sup>1</sup>&frasl;<sub>2</sub>"</td>
          <td>8</td>
          <td><sup>21</sup>&frasl;<sub>64</sub>"</td>
          <td>8 <sup>3</sup>&frasl;<sub>4</sub>"</td>
        </tr>
        <tr>
          <td>8"</td>
          <td>10 <sup>3</sup>&frasl;<sub>8</sub>"</td>
          <td>6</td>
          <td><sup>13</sup>&frasl;<sub>32</sub>"</td>
          <td>9 <sup>5</sup>&frasl;<sub>8</sub>"</td>
        </tr>
        <tr>
          <td>10"</td>
          <td>12 <sup>3</sup>&frasl;<sub>8</sub>"</td>
          <td>8</td>
          <td><sup>13</sup>&frasl;<sub>32</sub>"</td>
          <td>11 <sup>5</sup>&frasl;<sub>8</sub>"</td>
        </tr>
        <tr>
          <td>11 <sup>1</sup>&frasl;<sub>2</sub>"</td>
          <td>13 <sup>7</sup>&frasl;<sub>8</sub>"</td>
          <td>8</td>
          <td><sup>13</sup>&frasl;<sub>32</sub>"</td>
          <td>13 <sup>1</sup>&frasl;<sub>8</sub>"</td>
        </tr>
        <tr>
          <td>14"</td>
          <td>18 <sup>3</sup>&frasl;<sub>8</sub>"</td>
          <td>8</td>
          <td><sup>17</sup>&frasl;<sub>32</sub>"</td>
          <td>17 <sup>1</sup>&frasl;<sub>4</sub>"</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<?php include "footer.php"; ?>