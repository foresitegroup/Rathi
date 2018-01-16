<?php
$PageTitle = "Elastomeric Coupling - Straight Jaw / SWS Type";
include "header.php";
?>

<div class="product-header-half">
  <div class="product-header">
    <div class="site-width">
      <h2>Elastomeric Coupling</h2>
      <h1>Straight Jaw / SWS Type</h1>
      Straight Jaw with Radially Removable Split Wrap (Single Plane)
      <em>Compare to Lovejoy&reg; LCS Type</em>
    </div>
  </div>

  <div class="site-width">
    <div class="left">
      <ul>
        <li>Industry Standard design</li>
        <li>Three elastomeric material options</li>
        <li>Torque ratings from 4,735 in-lbs to over 95,000 in-lbs</li>
      </ul>
    </div>

    <div class="right">
      <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
      <script type="text/javascript" src="inc/jquery.cycle2.carousel.min.js"></script>

      <div class="cycle-slideshow" data-cycle-fx="carousel" data-cycle-timeout="0" data-cycle-slides="> div" data-cycle-carousel-visible="1" data-cycle-carousel-fluid="true" data-cycle-next="#next" data-cycle-prev="#prev" data-cycle-pager="#pager,#number-pager" data-cycle-pager-template="<a href='#'>{{slideNum}}</a>">
        <div style="background-image: url(images/sws-fig1.jpg);"></div>

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

      <a href="pdf/L-SW-RRS_Spec_Sheet.pdf" class="specsheet">Download Spec Sheet <i class="fa fa-download" aria-hidden="true"></i></a>
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

    <table class="seventeen">
      <thead>
        <tr>
          <th rowspan="3">Coupling Size</th>
          <th colspan="6">Power Rating</th>
          <th rowspan="2" colspan="2">Motor Side Bore (<span class="scale">mm</span>)</th>
          <th rowspan="2" colspan="2">Pump Side Bore (<span class="scale">mm</span>)</th>
          <th rowspan="2" colspan="2">&Oslash;D (<span class="scale">mm</span>)</th>
          <th rowspan="2" colspan="2">Hub Diameter (<span class="scale">mm</span>)</th>
          <th rowspan="2" colspan="2">Length thru Bore (<span class="scale">mm</span>)</th>
        </tr>
        <tr>
          <th colspan="2" class="blue">Synthetic Rubber</th>
          <th colspan="2" class="blue">Polyurethane</th>
          <th colspan="2" class="blue">Hytrel</th>
        </tr>
        <tr>
          <th>Rated Torque (<span class="scalet">N-m</span>)</th>
          <th><span class="scalerpm">kW</span> at 100 RPM</th>
          <th>Rated Torque (<span class="scalet">N-m</span>)</th>
          <th><span class="scalerpm">kW</span> at 100 RPM</th>
          <th>Rated Torque (<span class="scalet">N-m</span>)</th>
          <th><span class="scalerpm">kW</span> at 100 RPM</th>
          <th class="blue">Min.</th>
          <th class="blue">Max.</th>
          <th class="blue">Min.</th>
          <th class="blue">Max.</th>
          <th class="blue">&Oslash;A</th>
          <th class="blue">&Oslash;B</th>
          <th class="blue">&Oslash;C</th>
          <th class="blue">&Oslash;E</th>
          <th class="blue">D</th>
          <th class="blue">D1</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>SWS276</td>
          <td class="convertt">535</td>
          <td class="convertrpm">5.6</td>
          <td class="convertt">802</td>
          <td class="convertrpm">8.4</td>
          <td class="convertt">1337</td>
          <td class="convertrpm">14</td>
          <td class="convert">25</td>
          <td class="convert">75</td>
          <td class="convert">24</td>
          <td class="convert">42</td>
          <td class="convert">173</td>
          <td class="convert">154</td>
          <td class="convert">70</td>
          <td class="convert">130</td>
          <td class="convert">60</td>
          <td class="convert">60</td>
        </tr>
        <tr>
          <td>SWS280</td>
          <td class="convertt">783</td>
          <td class="convertrpm">8.2</td>
          <td class="convertt">1175</td>
          <td class="convertrpm">12.3</td>
          <td class="convertt">1958</td>
          <td class="convertrpm">20.5</td>
          <td class="convert">30</td>
          <td class="convert">80</td>
          <td class="convert">28</td>
          <td class="convert">55</td>
          <td class="convert">208</td>
          <td class="convert">189</td>
          <td class="convert">90</td>
          <td class="convert">130</td>
          <td class="convert">65</td>
          <td class="convert">60</td>
        </tr>
        <tr>
          <td>SWS295</td>
          <td class="convertt">1280</td>
          <td class="convertrpm">13.4</td>
          <td class="convertt">1920</td>
          <td class="convertrpm">20.1</td>
          <td class="convertt">3199</td>
          <td class="convertrpm">33.5</td>
          <td class="convert">30</td>
          <td class="convert">95</td>
          <td class="convert">28</td>
          <td class="convert">65</td>
          <td class="convert">253</td>
          <td class="convert">234</td>
          <td class="convert">106</td>
          <td class="convert">160</td>
          <td class="convert">80</td>
          <td class="convert">70</td>
        </tr>
        <tr>
          <td>SWS2955</td>
          <td class="convertt">2139</td>
          <td class="convertrpm">22.4</td>
          <td class="convertt">3209</td>
          <td class="convertrpm">33.6</td>
          <td class="convertt">5348</td>
          <td class="convertrpm">56</td>
          <td class="convert">30</td>
          <td class="convert">105</td>
          <td class="convert">28</td>
          <td class="convert">70</td>
          <td class="convert">253</td>
          <td class="convert">234</td>
          <td class="convert">106</td>
          <td class="convert">160</td>
          <td class="convert">80</td>
          <td class="convert">75</td>
        </tr>
        <tr>
          <td>SWS300</td>
          <td class="convertt">3046</td>
          <td class="convertrpm">31.9</td>
          <td class="convertt">4570</td>
          <td class="convertrpm">47.9</td>
          <td class="convertt">7616</td>
          <td class="convertrpm">79.75</td>
          <td class="convert">30</td>
          <td class="convert">105</td>
          <td class="convert">28</td>
          <td class="convert">75</td>
          <td class="convert">272</td>
          <td class="convert">251</td>
          <td class="convert">122</td>
          <td class="convert">180</td>
          <td class="convert">88</td>
          <td class="convert">80</td>
        </tr>
        <tr>
          <td>SWS350</td>
          <td class="convertt">4298</td>
          <td class="convertrpm">45</td>
          <td class="convertt">6446</td>
          <td class="convertrpm">67.5</td>
          <td class="convertt">10744</td>
          <td class="convertrpm">112.5</td>
          <td class="convert">30</td>
          <td class="convert">115</td>
          <td class="convert">30</td>
          <td class="convert">80</td>
          <td class="convert">323</td>
          <td class="convert">302</td>
          <td class="convert">130</td>
          <td class="convert">200</td>
          <td class="convert">90</td>
          <td class="convert">90</td>
        </tr>
      </tbody>
    </table>

    <br>

    <ul>
      <li>Standard space length <span class="convert">140</span> <span class="scale">mm</span>, <span class="convert">180</span> <span class="scale">mm</span> available.</li>
      <li>Non standard spacer available on request.</li>
    </ul>
  </div>
</div>

<?php include "footer.php"; ?>