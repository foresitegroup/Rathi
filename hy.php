<?php
$PageTitle = "Elastomeric Coupling - HY Flex / HY Type";
include "header.php";
?>

<div class="product-header-half">
  <div class="product-header">
    <div class="site-width">
      <h2>Elastomeric Coupling</h2>
      <h1>HY Flex / HY Type</h1>
      Soft Torsion Coupling
      <em>Compare to Renold Holset Style</em>
    </div>
  </div>

  <div class="site-width">
    <div class="left">
      <ul>
        <li>Torsionally soft coupling</li>
        <li>No need of lubrication</li>
        <li>Versatility of application - can be used with shaft to shaft or shaft to flange arrangement</li>
        <li>Low initial and operational cost</li>
        <li>Smooth power transmission compact size</li>
        <li>Effective damping of vibrations</li>
      </ul>
    </div>

    <div class="right">
      <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
      <script type="text/javascript" src="inc/jquery.cycle2.carousel.min.js"></script>

      <div class="cycle-slideshow" data-cycle-fx="carousel" data-cycle-timeout="0" data-cycle-slides="> div" data-cycle-carousel-visible="1" data-cycle-carousel-fluid="true" data-cycle-next="#next" data-cycle-prev="#prev" data-cycle-pager="#pager,#number-pager" data-cycle-pager-template="<a href='#'>{{slideNum}}</a>">
        <div style="background-image: url(images/hy-fig1.jpg);"></div>
        <div style="background-image: url(images/hy-fig2.jpg);"></div>
        <div style="background-image: url(images/hy-fig3.jpg);"></div>
        <div style="background-image: url(images/hy-fig4.jpg);"></div>
        <div style="background-image: url(images/hy-fig5.jpg);"></div>

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

      <a href="pdf/HY_Spec_Sheet.pdf" class="specsheet">Download Spec Sheet <i class="fa fa-download" aria-hidden="true"></i></a>
    </div>
  </div>
</div>

<div class="product-details">
  <div class="site-width">
    <h3>Details &amp; Specs</h3>

    <br><br>

    <table class="service-factor">
      <tr>
        <th colspan="2">Driver Machine (SF1)</th>
        <th colspan="4">Driven Machine (SF2)</th>
      </tr>
      <tr>
        <td colspan="2">Diesel Engine</td>
        <td colspan="2">Blower</td>
        <td colspan="2">Pump</td>
      </tr>
      <tr>
        <td class="sub">1 Cylinder</td>
        <td>3.50</td>
        <td class="sub">Centrifugal</td>
        <td>1.50</td>
        <td class="sub">Centrifugal</td>
        <td>1.25</td>
      </tr>
      <tr>
        <td class="sub">2 Cylinder</td>
        <td>3.00</td>
        <td class="sub">Lobe or vane</td>
        <td>2.00</td>
        <td class="sub">Gear</td>
        <td>2.00</td>
      </tr>
      <tr>
        <td class="sub">3 Cylinder</td>
        <td>2.50</td>
        <td colspan="2">Compressor</td>
        <td class="sub">Ram</td>
        <td>3.00</td>
      </tr>
      <tr>
        <td class="sub">4 Cylinder</td>
        <td>2.00</td>
        <td class="sub">Axial Screw</td>
        <td>1.50</td>
        <td class="sub">Reciprocating</td>
        <td>3.00</td>
      </tr>
      <tr>
        <td class="sub">5 Cylinder</td>
        <td>1.80</td>
        <td class="sub">Centrifugal</td>
        <td>1.50</td>
        <td colspan="2">Fan</td>
      </tr>
      <tr>
        <td class="sub">6 Cylinder</td>
        <td>1.70</td>
        <td class="sub">Lobe Type</td>
        <td>2.00</td>
        <td class="sub">Centrifugal</td>
        <td>1.50</td>
      </tr>
      <tr>
        <td class="sub">More than 6 Cylinder</td>
        <td>1.50</td>
        <td class="sub">Reciprocating</td>
        <td>3.00</td>
        <td class="sub">Mine ventilating</td>
        <td>2.50</td>
      </tr>
      <tr>
        <td>Vee Engine</td>
        <td>1.50</td>
        <td class="sub">Rotary</td>
        <td>2.00</td>
        <td>Propeller marine</td>
        <td>2.00</td>
      </tr>
      <tr>
        <td>Petrol Engine</td>
        <td>1.50</td>
        <td colspan="2">Conveyor</td>
        <td>Machine tool</td>
        <td>2.00</td>
      </tr>
      <tr>
        <td colspan="2" rowspan="3"></td>
        <td class="sub">Belt, chain &amp; screw</td>
        <td>1.50</td>
        <td>Cement mill</td>
        <td>2.50</td>
      </tr>
      <tr>
        <td class="sub">Bucket</td>
        <td>2.00</td>
        <td>Alternator/Generator</td>
        <td>1.50</td>
      </tr>
      <tr>
        <td colspan="2"></td>
        <td>Generator - Welsding</td>
        <td>2.20</td>
      </tr>
    </table>

    <br><br>

    <script type="text/javascript">var rpmdec = 1; var rpmdecm = 1; var idecm = 4;</script>
    <script type="text/javascript" src="inc/scale-convert.js"></script>

    <div class="system-toggle nudge">
      Units:
      <a href="#" class="convertimp">Imperial</a> / <a href="#" class="convertmet">Metric</a>
    </div>

    <h4>Dimensional Data</h4>
    <table class="fourteen">
      <thead>
        <tr>
          <th rowspan="2">Coupling Size</th>
          <th rowspan="2">Coupling Rating per 100 RPM (<span class="scalerpm">kW</span>)</th>
          <th rowspan="2">Max. Speed (RPM)</th>
          <th rowspan="2">Min. Bore (<span class="scale">mm</span>)</th>
          <th colspan="2">Max. Bore (<span class="scale">mm</span>)</th>
          <th rowspan="2">&Oslash;A (<span class="scale">mm</span>)</th>
          <th rowspan="2">&Oslash;B (<span class="scale">mm</span>)</th>
          <th rowspan="2">&Oslash;C (<span class="scale">mm</span>)</th>
          <th rowspan="2">D (<span class="scale">mm</span>)</th>
          <th rowspan="2">&Oslash;E (<span class="scale">mm</span>)</th>
          <th rowspan="2">F (<span class="scale">mm</span>)</th>
          <th rowspan="2">SX&Oslash;U (<span class="scale">mm</span>)</th>
          <th rowspan="2">No. of Rubber Inserts per Coupling</th>
        </tr>
        <tr>
          <th class="blue">&Oslash;D1</th>
          <th class="blue">&Oslash;D2</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>HY-50</td>
          <td class="convertrpm">4.7</td>
          <td>5550</td>
          <td class="convert">15</td>
          <td class="convert">40</td>
          <td class="convert">65</td>
          <td class="convert">158.7</td>
          <td class="convert">138.1</td>
          <td class="convert">122</td>
          <td class="convert">47</td>
          <td class="convert">111</td>
          <td class="convert">55</td>
          <td>6 X <span class="convert">9.2</span></td>
          <td>10</td>
        </tr>
        <tr>
          <td>HY-120</td>
          <td class="convertrpm">10.0</td>
          <td>4350</td>
          <td class="convert">30</td>
          <td class="convert">55</td>
          <td class="convert">75</td>
          <td class="convert">200.0</td>
          <td class="convert">177.8</td>
          <td class="convert">158</td>
          <td class="convert">51</td>
          <td class="convert">127</td>
          <td class="convert">65</td>
          <td>6 X <span class="convert">9.2</span></td>
          <td>10</td>
        </tr>
        <tr>
          <td>HY-200</td>
          <td class="convertrpm">15.5</td>
          <td>3950</td>
          <td class="convert">35</td>
          <td class="convert">70</td>
          <td class="convert">92</td>
          <td class="convert">222.2</td>
          <td class="convert">200.0</td>
          <td class="convert">180</td>
          <td class="convert">54</td>
          <td class="convert">155</td>
          <td class="convert">75</td>
          <td>6 X <span class="convert">9.2</span></td>
          <td>12</td>
        </tr>
        <tr>
          <td>HY-240</td>
          <td class="convertrpm">18.5</td>
          <td>3700</td>
          <td class="convert">40</td>
          <td class="convert">75</td>
          <td class="convert">100</td>
          <td class="convert">238.1</td>
          <td class="convert">212.7</td>
          <td class="convert">188</td>
          <td class="convert">60</td>
          <td class="convert">175</td>
          <td class="convert">85</td>
          <td>6 X <span class="convert">11.2</span></td>
          <td>12</td>
        </tr>
        <tr>
          <td>HY-370</td>
          <td class="convertrpm">28.5</td>
          <td>3400</td>
          <td class="convert">40</td>
          <td class="convert">85</td>
          <td class="convert">110</td>
          <td class="convert">260.3</td>
          <td class="convert">235.0</td>
          <td class="convert">212</td>
          <td class="convert">68</td>
          <td class="convert">190</td>
          <td class="convert">95</td>
          <td>8 X <span class="convert">11.2</span></td>
          <td>12</td>
        </tr>
        <tr>
          <td>HY-730</td>
          <td class="convertrpm">57.2</td>
          <td>3000</td>
          <td class="convert">55</td>
          <td class="convert">95</td>
          <td class="convert">120</td>
          <td class="convert">308.0</td>
          <td class="convert">279.4</td>
          <td class="convert">255</td>
          <td class="convert">90</td>
          <td class="convert">205</td>
          <td class="convert">102</td>
          <td>8 X <span class="convert">13.2</span></td>
          <td>12</td>
        </tr>
        <tr>
          <td>HY-1150</td>
          <td class="convertrpm">87.5</td>
          <td>2600</td>
          <td class="convert">55</td>
          <td class="convert">115</td>
          <td class="convert">130</td>
          <td class="convert">358.8</td>
          <td class="convert">323.8</td>
          <td class="convert">298</td>
          <td class="convert">99</td>
          <td class="convert">220</td>
          <td class="convert">110</td>
          <td>10 X <span class="convert">13.2</span></td>
          <td>12</td>
        </tr>
        <tr>
          <td>HY-2150</td>
          <td class="convertrpm">163.5</td>
          <td>2400</td>
          <td class="convert">70</td>
          <td class="convert">140</td>
          <td class="convert">175</td>
          <td class="convert">425.4</td>
          <td class="convert">390.4</td>
          <td class="convert">365</td>
          <td class="convert">120</td>
          <td class="convert">298</td>
          <td class="convert">150</td>
          <td>16 X <span class="convert">13.2</span></td>
          <td>12</td>
        </tr>
        <tr>
          <td>HY-3860</td>
          <td class="convertrpm">295.6</td>
          <td>2250</td>
          <td class="convert">80</td>
          <td class="convert">170</td>
          <td class="convert">200</td>
          <td class="convert">508.0</td>
          <td class="convert">469.9</td>
          <td class="convert">440</td>
          <td class="convert">134</td>
          <td class="convert">340</td>
          <td class="convert">170</td>
          <td>12 X <span class="convert">17.25</span></td>
          <td>14</td>
        </tr>
        <tr>
          <td>HY-5500</td>
          <td class="convertrpm">438.0</td>
          <td>1950</td>
          <td class="convert">90</td>
          <td class="convert">210</td>
          <td class="convert">250</td>
          <td class="convert">577.8</td>
          <td class="convert">536.6</td>
          <td class="convert">506</td>
          <td class="convert">147</td>
          <td class="convert">425</td>
          <td class="convert">210</td>
          <td>12 X <span class="convert">17.25</span></td>
          <td>16</td>
        </tr>
      </tbody>
    </table>

    <br><br>

    <h4>Flywheel Plate Details</h4>
    <table class="nine">
      <thead>
        <tr>
          <th>Flywheel Plate SAE Size (<span class="scale">mm</span>)</th>
          <th>6.5</th>
          <th>8</th>
          <th>10</th>
          <th>11.5</th>
          <th>14</th>
          <th>18</th>
          <th>21</th>
          <th>24</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Suitable Coupling Size</td>
          <td>HY-50</td>
          <td>HY-50<br>HY-120<br>HY-200</td>
          <td>HY-120<br>HY-200<br>HY-240</td>
          <td>HY-240<br>HY-370<br>HY-730</td>
          <td>HY-370<br>HY-730<br>HY-1150</td>
          <td>HY-1150<br>HY-2150<br>HY-3860</td>
          <td>HY-2150<br>HY-3860<br>HY-5500</td>
          <td>HY-3860<br>HY-5500</td>
        </tr>
        <tr>
          <td>&Oslash;J</td>
          <td>215.9</td>
          <td>263.53</td>
          <td>314.3</td>
          <td>352.4</td>
          <td>466.7</td>
          <td>571.5</td>
          <td>673.1</td>
          <td>733.4</td>
        </tr>
        <tr>
          <td>&Oslash;K</td>
          <td>200.03</td>
          <td>244.48</td>
          <td>295.27</td>
          <td>333.38</td>
          <td>438.15</td>
          <td>542.92</td>
          <td>641.35</td>
          <td>692.15</td>
        </tr>
        <tr>
          <td>MX&Oslash;N</td>
          <td>6 X 8.33</td>
          <td>6 X 10.5</td>
          <td>8 X 10.5</td>
          <td>8 X 10.5</td>
          <td>8 X 13.5</td>
          <td>6 X 16.7</td>
          <td>12 X 16.7</td>
          <td>12 X 22.0</td>
        </tr>
        <tr>
          <td>T</td>
          <td>8</td>
          <td>8</td>
          <td>12</td>
          <td>12</td>
          <td>16</td>
          <td>16</td>
          <td>20</td>
          <td>24</td>
        </tr>
      </tbody>
    </table>

    <br><br>

    <div class="system-toggle nudge">
      Units:
      <a href="#" class="convertimp">Imperial</a> / <a href="#" class="convertmet">Metric</a>
    </div>

    <h4>Rated Torque, Misalignment &amp; Stiffness Details</h4>
    <table class="twelve">
      <thead>
        <tr>
          <th rowspan="2">Coupling Size</th>
          <th rowspan="2">Rated Torque (<span class="scalet">N-m</span>)</th>
          <th rowspan="2">Allowable Vibratory Torque (<span class="scalet">N-m</span>) (At 10 Hz)</th>
          <th colspan="3">Allowable Misalignment</th>
          <th rowspan="2">Radial Stiffness* (<span class="scalest">N/mm</span>)</th>
          <th rowspan="2">Axial Stiffness* (<span class="scalest">N/mm</span>)</th>
          <th colspan="4">Torsional Stiffness* (<span class="scalekt">kN-m</span> / rad)</th>
        </tr>
        <tr>
          <th class="blue">Axial (<span class="scale">mm</span>)</th>
          <th class="blue">Radial (<span class="scale">mm</span>)</th>
          <th class="blue">Angular (deg)</th>
          <th class="blue">At 0.25 Tr</th>
          <th class="blue">At 0.5 Tr</th>
          <th class="blue">At 0.75 Tr</th>
          <th class="blue">At 1 Tr</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>HY-50</td>
          <td class="convertt">449</td>
          <td class="convertt">55</td>
          <td class="convert" data-orig="0.75">0.75</td>
          <td class="convert" data-orig="0.75">0.75</td>
          <td>0.5</td>
          <td class="convertst">1522</td>
          <td class="convertst">531</td>
          <td class="convertkt">3.501</td>
          <td class="convertkt">4.746</td>
          <td class="convertkt">6.545</td>
          <td class="convertkt">9.123</td>
        </tr>
        <tr>
          <td>HY-120</td>
          <td class="convertt">955</td>
          <td class="convertt">125</td>
          <td class="convert" data-orig="1.5">1.5</td>
          <td class="convert" data-orig="0.75">0.75</td>
          <td>0.5</td>
          <td class="convertst">1811</td>
          <td class="convertst">648</td>
          <td class="convertkt">8.12</td>
          <td class="convertkt">11.08</td>
          <td class="convertkt">15.21</td>
          <td class="convertkt">21.21</td>
        </tr>
        <tr>
          <td>HY-200</td>
          <td class="convertt">1480</td>
          <td class="convertt">190</td>
          <td class="convert" data-orig="1.5">1.5</td>
          <td class="convert" data-orig="0.75">0.75</td>
          <td>0.5</td>
          <td class="convertst">2264</td>
          <td class="convertst">786</td>
          <td class="convertkt">13.45</td>
          <td class="convertkt">18.24</td>
          <td class="convertkt">25.12</td>
          <td class="convertkt">35.01</td>
        </tr>
        <tr>
          <td>HY-240</td>
          <td class="convertt">1767</td>
          <td class="convertt">225</td>
          <td class="convert" data-orig="1.5">1.5</td>
          <td class="convert" data-orig="0.75">0.75</td>
          <td>0.5</td>
          <td class="convertst">2552</td>
          <td class="convertst">883</td>
          <td class="convertkt">17.79</td>
          <td class="convertkt">23.84</td>
          <td class="convertkt">32.54</td>
          <td class="convertkt">44.95</td>
        </tr>
        <tr>
          <td>HY-370</td>
          <td class="convertt">2722</td>
          <td class="convertt">347</td>
          <td class="convert" data-orig="1.5">1.5</td>
          <td class="convert" data-orig="0.75">0.75</td>
          <td>0.5</td>
          <td class="convertst">2867</td>
          <td class="convertst">1003</td>
          <td class="convertkt">24.62</td>
          <td class="convertkt">33.54</td>
          <td class="convertkt">46.16</td>
          <td class="convertkt">64.42</td>
        </tr>
        <tr>
          <td>HY-730</td>
          <td class="convertt">5462</td>
          <td class="convertt">673</td>
          <td class="convert" data-orig="1.5">1.5</td>
          <td class="convert" data-orig="1.0">1.0</td>
          <td>0.5</td>
          <td class="convertst">3771</td>
          <td class="convertst">1311</td>
          <td class="convertkt">46.78</td>
          <td class="convertkt">63.57</td>
          <td class="convertkt">87.75</td>
          <td class="convertkt">121.02</td>
        </tr>
        <tr>
          <td>HY-1150</td>
          <td class="convertt">8356</td>
          <td class="convertt">1066</td>
          <td class="convert" data-orig="1.5">1.5</td>
          <td class="convert" data-orig="1.5">1.5</td>
          <td>0.5</td>
          <td class="convertst">4142</td>
          <td class="convertst">1452</td>
          <td class="convertkt">71.37</td>
          <td class="convertkt">96.97</td>
          <td class="convertkt">134.03</td>
          <td class="convertkt">187.01</td>
        </tr>
        <tr>
          <td>HY-2150</td>
          <td class="convertt">15613</td>
          <td class="convertt">1990</td>
          <td class="convert" data-orig="2.0">2.0</td>
          <td class="convert" data-orig="1.5">1.5</td>
          <td>0.5</td>
          <td class="convertst">5123</td>
          <td class="convertst">1792</td>
          <td class="convertkt">132.04</td>
          <td class="convertkt">180.07</td>
          <td class="convertkt">248.02</td>
          <td class="convertkt">346.02</td>
        </tr>
        <tr>
          <td>HY-3860</td>
          <td class="convertt">28228</td>
          <td class="convertt">3565</td>
          <td class="convert" data-orig="3.0">3.0</td>
          <td class="convert" data-orig="1.5">1.5</td>
          <td>0.5</td>
          <td class="convertst">6677</td>
          <td class="convertst">2323</td>
          <td class="convertkt">265.07</td>
          <td class="convertkt">360.05</td>
          <td class="convertkt">498.01</td>
          <td class="convertkt">695.07</td>
        </tr>
        <tr>
          <td>HY-5500</td>
          <td class="convertt">41826</td>
          <td class="convertt">5080</td>
          <td class="convert" data-orig="3.0">3.0</td>
          <td class="convert" data-orig="1.5">1.5</td>
          <td>0.5</td>
          <td class="convertst">8443</td>
          <td class="convertst">2945</td>
          <td class="convertkt">465.05</td>
          <td class="convertkt">622.0</td>
          <td class="convertkt">846.3</td>
          <td class="convertkt">1150.3</td>
        </tr>
      </tbody>
    </table>
    * For HSZ - 70<br>

    <br><br>

    <div class="system-toggle nudge">
      Units:
      <a href="#" class="convertimp">Imperial</a> / <a href="#" class="convertmet">Metric</a>
    </div>

    <h4>Weight and Inertia Details</h4>
    <table class="eight">
      <thead>
        <tr>
          <th rowspan="2">Coupling Size</th>
          <th colspan="2">Std. HY Coupling</th>
          <th colspan="2">Adapter</th>
          <th colspan="3">Flywheel Plate</th>
        </tr>
        <tr>
          <th class="blue">Weight (<span class="scalew">kg</span>)</th>
          <th class="blue">MI (<span class="scalei">kgm2</span>)</th>
          <th class="blue">Weight (<span class="scalew">kg</span>)</th>
          <th class="blue">MI (<span class="scalei">kgm2</span>)</th>
          <th class="blue">SAE Size (<span class="scale">mm</span>)</th>
          <th class="blue">Weight (<span class="scalew">kg</span>)</th>
          <th class="blue">MI (<span class="scalei">kgm2</span>)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>HY-50</td>
          <td class="convertw">3.7</td>
          <td class="converti">0.0095</td>
          <td class="convertw">4.7</td>
          <td class="converti">0.0103</td>
          <td class="convert">165</td>
          <td class="convertw">2.0</td>
          <td class="converti">0.012</td>
        </tr>
        <tr>
          <td>HY-120</td>
          <td class="convertw">6.8</td>
          <td class="converti">0.0275</td>
          <td class="convertw">7.8</td>
          <td class="converti">0.0262</td>
          <td class="convert">203</td>
          <td class="convertw">3.0</td>
          <td class="converti">0.027</td>
        </tr>
        <tr>
          <td>HY-200</td>
          <td class="convertw">9.5</td>
          <td class="converti">0.049</td>
          <td class="convertw">12.2</td>
          <td class="converti">0.05</td>
          <td class="convert">254</td>
          <td class="convertw">6.5</td>
          <td class="converti">0.083</td>
        </tr>
        <tr>
          <td>HY-240</td>
          <td class="convertw">12.1</td>
          <td class="converti">0.0704</td>
          <td class="convertw">17.0</td>
          <td class="converti">0.08</td>
          <td class="convert">292</td>
          <td class="convertw">8.2</td>
          <td class="converti">0.128</td>
        </tr>
        <tr>
          <td>HY-370</td>
          <td class="convertw">11.1</td>
          <td class="converti">0.1224</td>
          <td class="convertw">22.5</td>
          <td class="converti">0.13</td>
          <td class="convert">355.5</td>
          <td class="convertw">19.5</td>
          <td class="converti">0.54</td>
        </tr>
        <tr>
          <td>HY-730</td>
          <td class="convertw">28.0</td>
          <td class="converti">0.2954</td>
          <td class="convertw">30</td>
          <td class="converti">0.23</td>
          <td class="convert">457</td>
          <td class="convertw">29.2</td>
          <td class="converti">1.2</td>
        </tr>
        <tr>
          <td>HY-1150</td>
          <td class="convertw">42.9</td>
          <td class="converti">0.566</td>
          <td class="convertw">39</td>
          <td class="converti">0.38</td>
          <td class="convert">533.5</td>
          <td class="convertw">50.6</td>
          <td class="converti">2.9</td>
        </tr>
        <tr>
          <td>HY-2150</td>
          <td class="convertw">69.3</td>
          <td class="converti">1.308</td>
          <td class="convertw">82</td>
          <td class="converti">1.2</td>
          <td class="convert">609.5</td>
          <td class="convertw">74.0</td>
          <td class="converti">4.9</td>
        </tr>
        <tr>
          <td>HY-3860</td>
          <td class="convertw">116.5</td>
          <td class="converti">3.16</td>
          <td class="convertw">124</td>
          <td class="converti">2.5</td>
          <td class="convert"></td>
          <td class="convertw"></td>
          <td class="converti"></td>
        </tr>
        <tr>
          <td>HY-5500</td>
          <td class="convertw">172.1</td>
          <td class="converti">5.81</td>
          <td class="convertw">228</td>
          <td class="converti">6.3</td>
          <td class="convert"></td>
          <td class="convertw"></td>
          <td class="converti"></td>
        </tr>
      </tbody>
    </table>

    <br>

    <ul>
      <li>Weight and MI are at min. bores.</li>
    </ul>

    <br><br>

    <h4>Elastomer Information</h4>
    <table class="text-four">
      <thead>
        <tr>
          <th class="text">Elastomer Grade</th>
          <th>HSZ</th>
          <th>HRZ</th>
          <th>HCZ</th>
          <th>HNZ</th>
        </tr>
        <tr>
          <th class="text blue">Identification Mark</th>
          <th class="blue">Green</th>
          <th class="blue">Red</th>
          <th class="blue">Yellow</th>
          <th class="blue">White</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text">Resistance to Compression Set</td>
          <td>Good</td>
          <td>Good</td>
          <td>Fair</td>
          <td>Good</td>
        </tr>
        <tr>
          <td class="text">Resistance to Flexing</td>
          <td>Good</td>
          <td>Excellent</td>
          <td>Good</td>
          <td>Good</td>
        </tr>
        <tr>
          <td class="text">Resistance to Cutting</td>
          <td>Fair</td>
          <td>Excellent</td>
          <td>Good</td>
          <td>Good</td>
        </tr>
        <tr>
          <td class="text">Resistance to Abrasion</td>
          <td>Good</td>
          <td>Excellent</td>
          <td>Good</td>
          <td>Good</td>
        </tr>
        <tr>
          <td class="text">Resistance to Oxidation</td>
          <td>Fair</td>
          <td>Fair</td>
          <td>Very Good</td>
          <td>Good</td>
        </tr>
        <tr>
          <td class="text">Resistance to Oil &amp; Gasoline</td>
          <td>Poor</td>
          <td>Poor</td>
          <td>Excellent</td>
          <td>Excellent</td>
        </tr>
        <tr>
          <td class="text">Resistance to Acids</td>
          <td>Good</td>
          <td>Good</td>
          <td>Fair</td>
          <td>Fair</td>
        </tr>
        <tr>
          <td class="text">Resistance to Water Swelling</td>
          <td>Good</td>
          <td>Good</td>
          <td>Good</td>
          <td>Good</td>
        </tr>
        <tr>
          <td class="text">Service Temp. Maximum; Continuous</td>
          <td><span class="converttemp">100</span>&deg;<span class="scaletemp">C</span></td>
          <td><span class="converttemp">80</span>&deg;<span class="scaletemp">C</span></td>
          <td><span class="converttemp">100</span>&deg;<span class="scaletemp">C</span></td>
          <td><span class="converttemp">120</span>&deg;<span class="scaletemp">C</span></td>
        </tr>
        <tr>
          <td class="text">Service Temperature Minimum</td>
          <td><span class="converttemp">-40</span>&deg;<span class="scaletemp">C</span></td>
          <td><span class="converttemp">-50</span>&deg;<span class="scaletemp">C</span></td>
          <td><span class="converttemp">-30</span>&deg;<span class="scaletemp">C</span></td>
          <td><span class="converttemp">-40</span>&deg;<span class="scaletemp">C</span></td>
        </tr>
      </tbody>
    </table>

    <br>

    <ul>
      <li>Initial misalignment should not exceed 25% of the maximum allowable misalignment</li>
      <li>Coupling should be dynamically balanced for operation above 80% of decaled maximum couplings speed.</li>
      <li>Standard rubber elements are HSZ-70</li>
    </ul>

  </div>
</div>

<?php include "footer.php"; ?>