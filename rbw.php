<?php
$PageTitle = "Elastomeric Coupling - Sleeve Flex / RBW Type";
include "header.php";
?>

<div class="product-header-half">
  <div class="product-header">
    <div class="site-width">
      <h2>Elastomeric Coupling</h2>
      <h1>Sleeve Flex / RBW Type</h1>
      <em>Compare to Lovejoy&reg; S-Flex style</em>
    </div>
  </div>

  <div class="site-width">
    <div class="left">
      <h3>Features</h3>
      <ul>
        <li>Sleeve-Flex can be installed quickly and easily because there are no bolts, gaskets, covers, or seals.</li>
        <li>Alignment can be checked with a straight edge placed across the outside of the precision machined flanges. No special tools are need for the installation, alignment, or removal.</li>
        <li>The teeth of the sleeve lock into the teeth of the flanges without clamps or screws and tighten under torque to provide smooth transmission of power.</li>
        <li>There is no rubbing action of metal against rubber to cause wear. This eliminates the need for lubrication or maintenance, and provided a clean, dependable, and quiet performance.</li>
      </ul>
    </div>

    <div class="right">
      <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
      <script type="text/javascript" src="inc/jquery.cycle2.carousel.min.js"></script>

      <div class="cycle-slideshow" data-cycle-fx="carousel" data-cycle-timeout="0" data-cycle-slides="> div" data-cycle-carousel-visible="1" data-cycle-carousel-fluid="true" data-cycle-next="#next" data-cycle-prev="#prev" data-cycle-pager="#pager,#number-pager" data-cycle-pager-template="<a href='#'>{{slideNum}}</a>">
        <div style="background-image: url(images/rbw-fig1.jpg);"></div>
        <div style="background-image: url(images/rbw-fig2.jpg);"></div>
        <div style="background-image: url(images/rbw-fig3.jpg);"></div>
        <div style="background-image: url(images/rbw-fig4.jpg);"></div>
        <div style="background-image: url(images/rbw-fig5.jpg);"></div>
        <div style="background-image: url(images/rbw-fig6.jpg);"></div>

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

      <a href="pdf/RBW_Spec_Sheet.pdf" class="specsheet">Download Spec Sheet <i class="fa fa-download" aria-hidden="true"></i></a>
    </div>
  </div>
</div>

<div class="product-details">
  <div class="site-width">
    <h3>Details &amp; Specs</h3>
    
    <script type="text/javascript">var tdec = 1; var tdecm = 2; var wdecm = 1;</script>
    <script type="text/javascript" src="inc/scale-convert.js"></script>

    <div class="system-toggle">
      Units:
      <a href="#" class="convertimp">Imperial</a> / <a href="#" class="convertmet">Metric</a>
    </div>

    <table class="fifteen">
      <thead>
        <tr>
          <th rowspan="2">Coupling Size</th>
          <th rowspan="2">Flange Type</th>
          <th rowspan="2">Sleeve Type</th>
          <th rowspan="2"><span class="scalerpm">kW</span> at 100 RPM</th>
          <th rowspan="2">Rated Torque (<span class="scalet">N-m</span>)</th>
          <th rowspan="2">Max. Speed (RPM)</th>
          <th colspan="2">Bore (<span class="scale">mm</span>)</th>
          <th colspan="6">Dimensions (<span class="scale">mm</span>)</th>
          <th rowspan="2">Weight (<span class="scalew">kg</span>)</th>
        </tr>
        <tr>
          <th class="blue">PB</th>
          <th class="blue">Max.</th>
          <th class="blue">C</th>
          <th class="blue">D</th>
          <th class="blue">G</th>
          <th class="blue">H</th>
          <th class="blue">L</th>
          <th class="blue">X</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>RBW 3</td>
          <td>J</td>
          <td rowspan="10" class="rowspan">JE, JES</td>
          <td class="convertrpm">0.08</td>
          <td class="convertt">7.64</td>
          <td>9200</td>
          <td class="convert">10</td>
          <td class="convert">22</td>
          <td class="convert">20</td>
          <td class="convert">52</td>
          <td class="convert">9</td>
          <td class="convert">38</td>
          <td class="convert">49</td>
          <td class="convert">16</td>
          <td class="convertw">0.3</td>
        </tr>
      </tbody>
    </table>

    <br>

    <ul>
      <li>
        Maintain gap C at the time of assembly where:
        <ul>
          <li>C = <span class="convert">2</span> <span class="scale">mm</span> for SWQ 095 to SWQ 100</li>
          <li>C = <span class="convert">3</span> <span class="scale">mm</span> SWQ 110 to SWQ 350</li>
        </ul>
      </li>
      <li>Pilot bores other than specified are available on request.</li>
      <li>Non standard spacer length available on request.</li>
      <li>For vertical installation contact RATHI.</li>
    </ul>
  </div>
</div>

<?php include "footer.php"; ?>