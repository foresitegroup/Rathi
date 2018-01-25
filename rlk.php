<?php
$PageTitle = "Metallic Coupling - Disc / RLK Type";
include "header.php";
?>

<div class="product-header-half">
  <div class="product-header">
    <div class="site-width">
      <h2>Metallic Coupling</h2>
      <h1>Disc / RLK Type</h1>
      Spacer Coupling API 610 / 671
    </div>
  </div>

  <div class="site-width">
    <div class="left">
      <ul>
        <li>ATEX certification is standard</li>
        <li>Optional Non-Sparking is available</li>
        <li>Options like Clamping hubs, shrink discs, brake discs, non standard DBSE, special coating are available upon request</li>
      </ul>
    </div>

    <div class="right">
      <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
      <script type="text/javascript" src="inc/jquery.cycle2.carousel.min.js"></script>

      <div class="cycle-slideshow" data-cycle-fx="carousel" data-cycle-timeout="0" data-cycle-slides="> div" data-cycle-carousel-visible="1" data-cycle-carousel-fluid="true" data-cycle-next="#next" data-cycle-prev="#prev" data-cycle-pager="#pager,#number-pager" data-cycle-pager-template="<a href='#'>{{slideNum}}</a>">
        <div style="background-image: url(images/rlk-fig1.jpg);"></div>
        <div style="background-image: url(images/rlk-fig2.jpg);"></div>

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

      <!-- <a href="" class="specsheet">Download Spec Sheet <i class="fa fa-download" aria-hidden="true"></i></a> -->
    </div>
  </div>
</div>

<div class="product-details">
  <div class="site-width">
    <h3>Details &amp; Specs</h3>
    
    <script type="text/javascript">var rpmdec = 0; var rpmdecm = 0; var wdec = 0; var idec = 0; var idecm = 2;</script>
    <script type="text/javascript" src="inc/scale-convert.js"></script>

    <div class="system-toggle">
      Units:
      <a href="#" class="convertimp">Imperial</a> / <a href="#" class="convertmet">Metric</a>
    </div>

    <table class="thirteen">
      <thead>
        <tr>
          <th rowspan="2">Coupling Size</th>
          <th rowspan="2"><span class="scalerpm">kW</span> at 100 RPM</th>
          <th rowspan="2">Nominal Torque (<span class="scalet">N-m</span>)</th>
          <th colspan="3">Max Speed (RPM)</th>
          <th colspan="3">Max Bore (<span class="scale">mm</span>)</th>
          <th rowspan="2">Min DBSE (<span class="scale">mm</span>)</th>
          <th colspan="2">Misalignment Capacity</th>
          <th rowspan="2">Max Axial Load (<span class="scalen">N</span>)</th>
        </tr>
        <tr>
          <th class="blue">Hub I</th>
          <th class="blue">Hub II</th>
          <th class="blue">Hub III</th>
          <th class="blue">Hub I</th>
          <th class="blue">Hub II</th>
          <th class="blue">Hub III</th>
          <th class="blue">Axial &plusmn; (<span class="scale">mm</span>)</th>
          <th class="blue">Parallel &deg;</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>RLK 1500</td>
          <td class="convertrpm">150</td>
          <td class="convertt">14</td>
          <td>6500</td>
          <td>6500</td>
          <td>4000</td>
          <td class="convert">145</td>
          <td class="convert">158</td>
          <td class="convert">170</td>
          <td class="convert">200</td>
          <td class="convert">5</td>
          <td>0.5</td>
          <td class="convertn" data-orig="1300">1300</td>
        </tr>
        <tr>
          <td>RLK 2000</td>
          <td class="convertrpm">200</td>
          <td class="convertt" data-orig="19.1">19.1</td>
          <td>5200</td>
          <td>5200</td>
          <td>3500</td>
          <td class="convert">170</td>
          <td class="convert">185</td>
          <td class="convert">185</td>
          <td class="convert">210</td>
          <td class="convert">5</td>
          <td>0.5</td>
          <td class="convertn" data-orig="1500">1500</td>
        </tr>
        <tr>
          <td>RLK 2600</td>
          <td class="convertrpm">260</td>
          <td class="convertt" data-orig="24.4">24.4</td>
          <td>5000</td>
          <td>5000</td>
          <td>3400</td>
          <td class="convert">185</td>
          <td class="convert">210</td>
          <td class="convert">200</td>
          <td class="convert">220</td>
          <td class="convert" data-orig="7.9">7.9</td>
          <td>0.5</td>
          <td class="convertn" data-orig="1800">1800</td>
        </tr>
        <tr>
          <td>RLK 3350</td>
          <td class="convertrpm">335</td>
          <td class="convertt" data-orig="31.9">31.9</td>
          <td>4900</td>
          <td>4900</td>
          <td>3200</td>
          <td class="convert">200</td>
          <td class="convert">222</td>
          <td class="convert">215</td>
          <td class="convert">235</td>
          <td class="convert" data-orig="7.2">7.2</td>
          <td>0.5</td>
          <td class="convertn" data-orig="1900">1900</td>
        </tr>
        <tr>
          <td>RLK 4250</td>
          <td class="convertrpm">425</td>
          <td class="convertt" data-orig="41.4">41.4</td>
          <td>4400</td>
          <td>4400</td>
          <td>2900</td>
          <td class="convert">215</td>
          <td class="convert">235</td>
          <td class="convert">230</td>
          <td class="convert">250</td>
          <td class="convert" data-orig="7.2">7.2</td>
          <td>0.5</td>
          <td class="convertn" data-orig="2300">2300</td>
        </tr>
        <tr>
          <td>RLK 6010</td>
          <td class="convertrpm">601</td>
          <td class="convertt">60</td>
          <td>3000</td>
          <td>3000</td>
          <td>2600</td>
          <td class="convert">230</td>
          <td class="convert">265</td>
          <td class="convert">260</td>
          <td class="convert">260</td>
          <td class="convert" data-orig="6.9">6.9</td>
          <td>0.33</td>
          <td class="convertn" data-orig="3500">3500</td>
        </tr>
        <tr>
          <td>RLK 8500</td>
          <td class="convertrpm">890</td>
          <td class="convertt">85</td>
          <td>2700</td>
          <td>2700</td>
          <td>2300</td>
          <td class="convert">260</td>
          <td class="convert">300</td>
          <td class="convert">340</td>
          <td class="convert">345</td>
          <td class="convert" data-orig="8.1">8.1</td>
          <td>0.33</td>
          <td class="convertn" data-orig="5000">5000</td>
        </tr>
      </tbody>
    </table>

    <br>

    <table class="eighteen">
      <thead>
        <tr>
          <th rowspan="2">Coupling Size</th>
          <th colspan="2">A (<span class="scale">mm</span>)</th>
          <th colspan="2">B (<span class="scale">mm</span>)</th>
          <th colspan="3">C (<span class="scale">mm</span>)</th>
          <th colspan="3">D (<span class="scale">mm</span>)</th>
          <th rowspan="2">M Hub II (<span class="scale">mm</span>)</th>
          <th colspan="3">Weight (<span class="scalew">kg</span>)</th>
          <th colspan="3">Inertia (WR&sup2;) (<span class="scalei">kgm2</span>)</th>
        </tr>
        <tr>
          <th class="blue">Hub I/II</th>
          <th class="blue">Hub III</th>
          <th class="blue">Hub I/II</th>
          <th class="blue">Hub III</th>
          <th class="blue">Hub I</th>
          <th class="blue">Hub II</th>
          <th class="blue">Hub III</th>
          <th class="blue">Hub I</th>
          <th class="blue">Hub II</th>
          <th class="blue">Hub III</th>
          <th class="blue">Hub I</th>
          <th class="blue">Hub II</th>
          <th class="blue">Hub III</th>
          <th class="blue">Hub I</th>
          <th class="blue">Hub II</th>
          <th class="blue">Hub III</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>RLK 1500</td>
          <td class="convert">241</td>
          <td class="convert">283</td>
          <td class="convert">490</td>
          <td class="convert">540</td>
          <td class="convert">145</td>
          <td class="convert">145</td>
          <td class="convert">170</td>
          <td class="convert">199</td>
          <td class="convert">241</td>
          <td class="convert">235</td>
          <td class="convert">244</td>
          <td class="convertw">76</td>
          <td class="convertw" data-orig="80.6">80.6</td>
          <td class="convertw" data-orig="101.6">101.6</td>
          <td class="converti">0.61</td>
          <td class="converti">0.73</td>
          <td class="converti">0.99</td>
        </tr>
        <tr>
          <td>RLK 2000</td>
          <td class="convert">283</td>
          <td class="convert">320</td>
          <td class="convert">550</td>
          <td class="convert">580</td>
          <td class="convert">170</td>
          <td class="convert">170</td>
          <td class="convert">185</td>
          <td class="convert">235</td>
          <td class="convert">283</td>
          <td class="convert">260</td>
          <td class="convert">283</td>
          <td class="convertw">116</td>
          <td class="convertw">165</td>
          <td class="convertw" data-orig="176.9">176.9</td>
          <td class="converti">1.3</td>
          <td class="converti">2.12</td>
          <td class="converti">2.7</td>
        </tr>
        <tr>
          <td>RLK 2600</td>
          <td class="convert">320</td>
          <td class="convert">335</td>
          <td class="convert">590</td>
          <td class="convert">620</td>
          <td class="convert">185</td>
          <td class="convert">185</td>
          <td class="convert">200</td>
          <td class="convert">260</td>
          <td class="convert">320</td>
          <td class="convert">280</td>
          <td class="convert">300</td>
          <td class="convertw">137</td>
          <td class="convertw">241</td>
          <td class="convertw" data-orig="182.1">182.1</td>
          <td class="converti">1.72</td>
          <td class="converti">4.45</td>
          <td class="converti">2.72</td>
        </tr>
        <tr>
          <td>RLK 3350</td>
          <td class="convert">335</td>
          <td class="convert">360</td>
          <td class="convert">635</td>
          <td class="convert">665</td>
          <td class="convert">200</td>
          <td class="convert">200</td>
          <td class="convert">215</td>
          <td class="convert">280</td>
          <td class="convert">335</td>
          <td class="convert">300</td>
          <td class="convert">332</td>
          <td class="convertw">189</td>
          <td class="convertw">265</td>
          <td class="convertw" data-orig="291.4">291.4</td>
          <td class="converti">2.95</td>
          <td class="converti">4.8</td>
          <td class="converti">5.75</td>
        </tr>
        <tr>
          <td>RLK 4250</td>
          <td class="convert">360</td>
          <td class="convert">385</td>
          <td class="convert">680</td>
          <td class="convert">710</td>
          <td class="convert">215</td>
          <td class="convert">215</td>
          <td class="convert">230</td>
          <td class="convert">300</td>
          <td class="convert">352</td>
          <td class="convert">322</td>
          <td class="convert">361</td>
          <td class="convertw">229</td>
          <td class="convertw">317</td>
          <td class="convertw" data-orig="339.6">339.6</td>
          <td class="converti">3.96</td>
          <td class="converti">6.3</td>
          <td class="converti">7.77</td>
        </tr>
        <tr>
          <td>RLK 6010</td>
          <td class="convert">385</td>
          <td class="convert">435</td>
          <td class="convert">720</td>
          <td class="convert">720</td>
          <td class="convert">230</td>
          <td class="convert">230</td>
          <td class="convert">260</td>
          <td class="convert">322</td>
          <td class="convert">385</td>
          <td class="convert">365</td>
          <td class="convert">400</td>
          <td class="convertw">295</td>
          <td class="convertw">383</td>
          <td class="convertw" data-orig="477.1">477.1</td>
          <td class="converti">6.24</td>
          <td class="converti">9.98</td>
          <td class="converti">13.93</td>
        </tr>
        <tr>
          <td>RLK 8500</td>
          <td class="convert">465</td>
          <td class="convert">515</td>
          <td class="convert">945</td>
          <td class="convert">1025</td>
          <td class="convert">261</td>
          <td class="convert">300</td>
          <td class="convert">340</td>
          <td class="convert">402</td>
          <td class="convert">465</td>
          <td class="convert">515</td>
          <td class="convert">450</td>
          <td class="convertw">352</td>
          <td class="convertw">582</td>
          <td class="convertw" data-orig="857.1">857.1</td>
          <td class="converti">9.92</td>
          <td class="converti">20</td>
          <td class="converti">35.37</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<?php include "footer.php"; ?>