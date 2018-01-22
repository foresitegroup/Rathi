<?php
$PageTitle = "Elastomeric Coupling - Tire Flex / T/TO Type";
include "header.php";
?>

<div class="product-header-half">
  <div class="product-header">
    <div class="site-width">
      <h2>Elastomeric Coupling</h2>
      <h1>Tire Flex / T/TO Type</h1>
      <em>Compare to Dodge Para-Flex style</em>
    </div>
  </div>

  <div class="site-width">
    <div class="left">
      <h3>Selection Procedure</h3>
      <ol>
        <li>Service Factor: Determine the required service factor from Table 1 below.</li>
        <li>Design Power: Multiply the normal running power by the service factor. This gives the Design Power which is used as a basis for selecting the coupling.</li>
        <li>Coupling Size: Refer to Table 2; use speed and power to find the appropriate size.</li>
        <li>Bore Size: Check from Table 4 that selected coupling can accommodate required bores.</li>
      </ol>
    </div>

    <div class="right">
      <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
      <script type="text/javascript" src="inc/jquery.cycle2.carousel.min.js"></script>

      <div class="cycle-slideshow" data-cycle-fx="carousel" data-cycle-timeout="0" data-cycle-slides="> div" data-cycle-carousel-visible="1" data-cycle-carousel-fluid="true" data-cycle-next="#next" data-cycle-prev="#prev" data-cycle-pager="#pager,#number-pager" data-cycle-pager-template="<a href='#'>{{slideNum}}</a>">
        <div style="background-image: url(images/t-to-fig1.jpg);"></div>
        <div style="background-image: url(images/t-to-fig2.jpg);"></div>
        <div style="background-image: url(images/t-to-fig3.jpg);"></div>
        <div style="background-image: url(images/t-to-fig4.jpg);"></div>

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

      <a href="pdf/T-TO_Spec_Sheet.pdf" class="specsheet">Download Spec Sheet <i class="fa fa-download" aria-hidden="true"></i></a>
    </div>
  </div>
</div>

<div class="product-details">
  <div class="site-width">
    <h3>Details &amp; Specs</h3>

    <br>

    <h4>Table 1: Service Factors</h4>
    <table class="text-six">
      <thead>
        <tr>
          <th rowspan="3" class="text">
            <strong>SPECIAL CLASSES</strong><br>
            For applications where substantial shock, vibration and torque fluctuations occur and for reciprocating machines e.g. internal combustion engines, piston pumps and compressors Refer to Rathi Transpower Pvt. Ltd. with full application details for analysis.
          </th>
          <th colspan="6">Type of Driving Unit</th>
        </tr>
        <tr>
          <th colspan="3" class="blue">Electric Motors, Steam Turbines</th>
          <th colspan="3" class="blue">Internal Combustion Engines, Steam Engines, Water Engines</th>
        </tr>
        <tr>
          <th colspan="3">Hours per Day Duty</th>
          <th colspan="3">Hours per Day Duty</th>
        </tr>
        <tr>
          <th class="blue">Type of Driven Machine</th>
          <th class="blue">Up to 10</th>
          <th class="blue">10 to 16</th>
          <th class="blue">Over 16</th>
          <th class="blue">Up to 10</th>
          <th class="blue">10 to 16</th>
          <th class="blue">Over 16</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text">
            <strong>CLASS 1</strong><br>
            Agitators, Brewing machinery, Centrifugal compressors and pumps, Belt Conveyors, Dynamometers, Lineshafts, Fans up to 7.5kW / 10HP, Blower and exhausters (except positive displacement) &amp; Generators.
          </td>
          <td>0.8</td>
          <td>0.9</td>
          <td>1.0</td>
          <td>1.3</td>
          <td>1.4</td>
          <td>1.5</td>
        </tr>
        <tr>
          <td class="text">
            <strong>CLASS 2</strong><br>
            Clay working machinery, General machine tools, Paper mill beaters and winders, Rotary pumps, Rubber extruders, Rotary Screens, Textile Machinery, Marine Propellers &amp; Fans over 7.5kW / 10HP.
          </td>
          <td>1.3</td>
          <td>1.4</td>
          <td>1.5</td>
          <td>1.8</td>
          <td>1.9</td>
          <td>2.0</td>
        </tr>
        <tr>
          <td class="text">
            <strong>CLASS 3</strong><br>
            Bucket elevators, Cooling tower fans, Piston compressors &amp; pumps, Foundry machinery, Metal presses, Paper mills, Calenders, Hammer mills, Presses and pulp grinders, Rubber Calenders, Pulverisers &amp; Positive displacement blowers.
          </td>
          <td>1.8</td>
          <td>1.9</td>
          <td>2.0</td>
          <td>2.3</td>
          <td>2.4</td>
          <td>2.5</td>
        </tr>
        <tr>
          <td class="text">
            <strong>CLASS 4</strong><br>
            Reciprocating conveyors, Gyratory crushers, Mills (ball, pebble and rod), Rubber Machinery (Banbury Mixers and Mills) &amp; Vibratory screens.
          </td>
          <td>2.3</td>
          <td>2.4</td>
          <td>2.5</td>
          <td>2.8</td>
          <td>2.9</td>
          <td>3.0</td>
        </tr>
      </tbody>
    </table>

    <br><br>

    <script type="text/javascript">var wdec = 1;</script>
    <script type="text/javascript" src="inc/scale-convert.js"></script>

    <div class="system-toggle nudge">
      Units:
      <a href="#" class="convertimp">Imperial</a> / <a href="#" class="convertmet">Metric</a>
    </div>

    <h4>Table 2: Power Ratings (<span class="scalerpm">kW</span>)</h4>
    <table class="sixteen">
      <thead>
        <tr>
          <th rowspan="2">Speed RPM</th>
          <th colspan="15">Size T/TO</th>
        </tr>
        <tr>
          <th class="blue">4</th>
          <th class="blue">5</th>
          <th class="blue">6</th>
          <th class="blue">7</th>
          <th class="blue">8</th>
          <th class="blue">9</th>
          <th class="blue">10</th>
          <th class="blue">11</th>
          <th class="blue">12</th>
          <th class="blue">14</th>
          <th class="blue">16</th>
          <th class="blue">18</th>
          <th class="blue">20</th>
          <th class="blue">22</th>
          <th class="blue">25</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>750</td>
          <td class="convertrpm">1.87</td>
          <td class="convertrpm">5.17</td>
          <td class="convertrpm">9.97</td>
          <td class="convertrpm">19.65</td>
          <td class="convertrpm">29.47</td>
          <td class="convertrpm">39.30</td>
          <td class="convertrpm">53.02</td>
          <td class="convertrpm">68.70</td>
          <td class="convertrpm">104.25</td>
          <td class="convertrpm">182.25</td>
          <td class="convertrpm">296.25</td>
          <td class="convertrpm">492.75</td>
          <td class="convertrpm">732</td>
          <td class="convertrpm">907.5</td>
          <td class="convertrpm">1155</td>
        </tr>
        <tr>
          <td>1000</td>
          <td class="convertrpm">2.50</td>
          <td class="convertrpm">6.90</td>
          <td class="convertrpm">13.30</td>
          <td class="convertrpm">26.20</td>
          <td class="convertrpm">39.30</td>
          <td class="convertrpm">52.40</td>
          <td class="convertrpm">70.70</td>
          <td class="convertrpm">91.60</td>
          <td class="convertrpm">139.00</td>
          <td class="convertrpm">243.00</td>
          <td class="convertrpm">395.00</td>
          <td class="convertrpm">657.00</td>
          <td class="convertrpm">976</td>
          <td class="convertrpm">1215</td>
          <td class="convertrpm">1537</td>
        </tr>
        <tr>
          <td>1500</td>
          <td class="convertrpm">3.75</td>
          <td class="convertrpm">10.35</td>
          <td class="convertrpm">19.95</td>
          <td class="convertrpm">39.30</td>
          <td class="convertrpm">58.95</td>
          <td class="convertrpm">78.60</td>
          <td class="convertrpm">106.05</td>
          <td class="convertrpm">137.40</td>
          <td class="convertrpm">208.50</td>
          <td class="convertrpm">364.50</td>
          <td><span class="convertrpm">592.50</span>*</td>
          <td><span class="convertrpm">986.5</span>*</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>1800</td>
          <td class="convertrpm">4.50</td>
          <td class="convertrpm">12.42</td>
          <td class="convertrpm">23.94</td>
          <td class="convertrpm">47.16</td>
          <td class="convertrpm">70.74</td>
          <td class="convertrpm">94.32</td>
          <td class="convertrpm">127.26</td>
          <td class="convertrpm">164.88</td>
          <td class="convertrpm">250.20</td>
          <td><span class="convertrpm">437.40</span>*</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>3000</td>
          <td class="convertrpm">7.50</td>
          <td class="convertrpm">20.70</td>
          <td class="convertrpm">39.90</td>
          <td class="convertrpm">78.60</td>
          <td><span class="convertrpm">117.90</span>*</td>
          <td><span class="convertrpm">157.20</span>*</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>3600</td>
          <td class="convertrpm">9.00</td>
          <td class="convertrpm">24.84</td>
          <td class="convertrpm">47.98</td>
          <td class="convertrpm">94.32</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
    <br>

    <ul>
      <li>All power ratings are calculated at constant torque.</li>
      <li>For speeds below 100 RPM and intermediate speeds, use normal torque ratings.</li>
    </ul>
    <br>
    * Dynamic balancing preferred at these speeds.<br>
    <br>
    
    <table class="five">
      <thead>
        <tr>
          <th>Poles</th>
          <th>2</th>
          <th>4</th>
          <th>6</th>
          <th>8</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>RPM</td>
          <td>3000</td>
          <td>1500</td>
          <td>1000</td>
          <td>750</td>
        </tr>
      </tbody>
    </table>

    <br>

    <div class="system-toggle nudge">
      Units:
      <a href="#" class="convertimp">Imperial</a> / <a href="#" class="convertmet">Metric</a>
    </div>

    <h4>Table 3: Technical Data</h4>
    <table class="six">
      <thead>
        <tr>
          <th>Coupling Size</th>
          <th>Torsional Stiffness (<span class="scalet">N-m</span> / degree)</th>
          <th>Parallel Misalignment (<span class="scale">mm</span>)</th>
          <th>End Float (<span class="scale">mm</span>)</th>
          <th>Rated Torque (<span class="scalet">N-m</span>)</th>
          <th>Max. Torque (<span class="scalet">N-m</span>)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>T-4</td>
          <td class="convertt">5</td>
          <td class="convert">1.1</td>
          <td class="convert">1.3</td>
          <td class="convertt">24</td>
          <td class="convertt">64</td>
        </tr>
        <tr>
          <td>T-5</td>
          <td class="convertt">13</td>
          <td class="convert">1.3</td>
          <td class="convert">1.7</td>
          <td class="convertt">66</td>
          <td class="convertt">160</td>
        </tr>
        <tr>
          <td>T-6</td>
          <td class="convertt">26</td>
          <td class="convert">1.6</td>
          <td class="convert">2.0</td>
          <td class="convertt">127</td>
          <td class="convertt">310</td>
        </tr>
        <tr>
          <td>T-7</td>
          <td class="convertt">41</td>
          <td class="convert">1.9</td>
          <td class="convert">2.3</td>
          <td class="convertt">250</td>
          <td class="convertt">487</td>
        </tr>
        <tr>
          <td>T-8</td>
          <td class="convertt">63</td>
          <td class="convert">2.1</td>
          <td class="convert">2.6</td>
          <td class="convertt">375</td>
          <td class="convertt">759</td>
        </tr>
        <tr>
          <td>T-9</td>
          <td class="convertt">91</td>
          <td class="convert">2.4</td>
          <td class="convert">3.0</td>
          <td class="convertt">500</td>
          <td class="convertt">1096</td>
        </tr>
        <tr>
          <td>T-10</td>
          <td class="convertt">126</td>
          <td class="convert">2.6</td>
          <td class="convert">3.3</td>
          <td class="convertt">675</td>
          <td class="convertt">1517</td>
        </tr>
        <tr>
          <td>T-11</td>
          <td class="convertt">178</td>
          <td class="convert">2.9</td>
          <td class="convert">3.7</td>
          <td class="convertt">875</td>
          <td class="convertt">2137</td>
        </tr>
        <tr>
          <td>T-12</td>
          <td class="convertt">296</td>
          <td class="convert">3.2</td>
          <td class="convert">4.0</td>
          <td class="convertt">1330</td>
          <td class="convertt">3547</td>
        </tr>
        <tr>
          <td>TO-14</td>
          <td class="convertt">470</td>
          <td class="convert">3.7</td>
          <td class="convert">4.6</td>
          <td class="convertt">2325</td>
          <td class="convertt">5642</td>
        </tr>
        <tr>
          <td>TO-16</td>
          <td class="convertt">778</td>
          <td class="convert">4.2</td>
          <td class="convert">5.3</td>
          <td class="convertt">3730</td>
          <td class="convertt">9339</td>
        </tr>
        <tr>
          <td>TO-18</td>
          <td class="convertt">1371</td>
          <td class="convert">4.8</td>
          <td class="convert">6.0</td>
          <td class="convertt">6270</td>
          <td class="convertt">16455</td>
        </tr>
        <tr>
          <td>TO-20</td>
          <td class="convertt">1959</td>
          <td class="convert">5.3</td>
          <td class="convert">6.6</td>
          <td class="convertt">9325</td>
          <td class="convertt">23508</td>
        </tr>
        <tr>
          <td>TO-22</td>
          <td class="convertt">2760</td>
          <td class="convert">5.8</td>
          <td class="convert">7.3</td>
          <td class="convertt">11600</td>
          <td class="convertt">33125</td>
        </tr>
        <tr>
          <td>TO-25</td>
          <td class="convertt">3562</td>
          <td class="convert">6.6</td>
          <td class="convert">8.2</td>
          <td class="convertt">14675</td>
          <td class="convertt">42750</td>
        </tr>
      </tbody>
    </table>

    <br>

    <div class="system-toggle nudge">
      Units:
      <a href="#" class="convertimp">Imperial</a> / <a href="#" class="convertmet">Metric</a>
    </div>

    <h4>Table 4: Dimensional Data</h4>
    <table class="eighteen">
      <thead>
        <tr>
          <th rowspan="2">Coupling Size &amp; Type</th>
          <th rowspan="2"><span class="scalerpm">kW</span> at 100 RPM</th>
          <th rowspan="2">Max Speed RPM</th>
          <th rowspan="2"># Bush Size</th>
          <th colspan="2">Bore (<span class="scale">mm</span>)</th>
          <th colspan="3">Type F/H</th>
          <th colspan="2">Type B</th>
          <th rowspan="2">&Oslash;A (<span class="scale">mm</span>)</th>
          <th rowspan="2">&Oslash;D (<span class="scale">mm</span>)</th>
          <th rowspan="2">&Oslash;B (<span class="scale">mm</span>)</th>
          <th rowspan="2">M (<span class="scale">mm</span>)</th>
          <th rowspan="2">G (<span class="scale">mm</span>)</th>
          <th rowspan="2">Weight per Coupling (<span class="scalew">kg</span>)</th>
          <th rowspan="2">M.I. WR2 per Coupling (<span class="scalei">kgm2</span>)</th>
        </tr>
        <tr>
          <th class="blue">PB</th>
          <th class="blue">Max.</th>
          <th class="blue">L (<span class="scale">mm</span>)</th>
          <th class="blue">C (<span class="scale">mm</span>)</th>
          <th class="blue">J (<span class="scale">mm</span>)</th>
          <th class="blue">L (<span class="scale">mm</span>)</th>
          <th class="blue">C (<span class="scale">mm</span>)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>T-4 B</td>
          <td class="convertrpm">0.25</td>
          <td>4500</td>
          <td></td>
          <td class="convert">10</td>
          <td class="convert">32</td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert">68</td>
          <td class="convert">22</td>
          <td class="convert">104</td>
          <td class="convert">82</td>
          <td class="convert"></td>
          <td class="convert">17</td>
          <td class="convert">24</td>
          <td class="convertw">1.9</td>
          <td class="converti">0.00161</td>
        </tr>
        <tr>
          <td>T-4 F/H</td>
          <td class="convertrpm">0.25</td>
          <td>4500</td>
          <td>1008</td>
          <td class="convert"></td>
          <td class="convert">25</td>
          <td class="convert">68</td>
          <td class="convert">22</td>
          <td class="convert">29</td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert">104</td>
          <td class="convert">82</td>
          <td class="convert"></td>
          <td class="convert">17</td>
          <td class="convert">24</td>
          <td class="convertw">1.7</td>
          <td class="converti">0.00148</td>
        </tr>
        <tr>
          <td>T-5 B</td>
          <td class="convertrpm">0.69</td>
          <td>4500</td>
          <td></td>
          <td class="convert">10</td>
          <td class="convert">38</td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert">93</td>
          <td class="convert">32</td>
          <td class="convert">133</td>
          <td class="convert">100</td>
          <td class="convert">79</td>
          <td class="convert">17</td>
          <td class="convert">29</td>
          <td class="convertw">3.5</td>
          <td class="converti">0.00358</td>
        </tr>
        <tr>
          <td>T-5 F/H</td>
          <td class="convertrpm">0.69</td>
          <td>4500</td>
          <td>1210</td>
          <td class="convert"></td>
          <td class="convert">32</td>
          <td class="convert">79</td>
          <td class="convert">25</td>
          <td class="convert">38</td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert">133</td>
          <td class="convert">100</td>
          <td class="convert">79</td>
          <td class="convert">19</td>
          <td class="convert">29</td>
          <td class="convertw">2.7</td>
          <td class="converti">0.00349</td>
        </tr>
        <tr>
          <td>T-6 B</td>
          <td class="convertrpm">1.33</td>
          <td>4000</td>
          <td></td>
          <td class="convert">15</td>
          <td class="convert">45</td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert">111</td>
          <td class="convert">38</td>
          <td class="convert">165</td>
          <td class="convert">125</td>
          <td class="convert">73</td>
          <td class="convert">8</td>
          <td class="convert">35</td>
          <td class="convertw">5</td>
          <td class="converti">0.0105</td>
        </tr>
        <tr>
          <td>T-6 F/H</td>
          <td class="convertrpm">1.33</td>
          <td>4000</td>
          <td>1610</td>
          <td class="convert"></td>
          <td class="convert">42</td>
          <td class="convert">85</td>
          <td class="convert">25</td>
          <td class="convert">38</td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert">165</td>
          <td class="convert">125</td>
          <td class="convert">103</td>
          <td class="convert">19</td>
          <td class="convert">35</td>
          <td class="convertw">3.6</td>
          <td class="converti">0.0103</td>
        </tr>
        <tr>
          <td>T-7 B</td>
          <td class="convertrpm">2.62</td>
          <td>3600</td>
          <td></td>
          <td class="convert">19</td>
          <td class="convert">50</td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert">133</td>
          <td class="convert">45</td>
          <td class="convert">197</td>
          <td class="convert">144</td>
          <td class="convert">82</td>
          <td class="convert"></td>
          <td class="convert">43</td>
          <td class="convertw">7.8</td>
          <td class="converti">0.0198</td>
        </tr>
        <tr>
          <td>T-8 B</td>
          <td class="convertrpm">3.93</td>
          <td>3100</td>
          <td></td>
          <td class="convert">25</td>
          <td class="convert">63</td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert">149.5</td>
          <td class="convert">51</td>
          <td class="convert">210</td>
          <td class="convert">167</td>
          <td class="convert">96</td>
          <td class="convert"></td>
          <td class="convert">47.5</td>
          <td class="convertw">10.9</td>
          <td class="converti">0.042</td>
        </tr>
        <tr>
          <td>T-9 B</td>
          <td class="convertrpm">5.24</td>
          <td>3000</td>
          <td></td>
          <td class="convert">30</td>
          <td class="convert">75</td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert">165</td>
          <td class="convert">57</td>
          <td class="convert">235</td>
          <td class="convert">188</td>
          <td class="convert">110</td>
          <td class="convert"></td>
          <td class="convert">51</td>
          <td class="convertw">15</td>
          <td class="converti">0.0681</td>
        </tr>
        <tr>
          <td>T-10 B</td>
          <td class="convertrpm">7.07</td>
          <td>2600</td>
          <td></td>
          <td class="convert">32</td>
          <td class="convert">80</td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert">178</td>
          <td class="convert">60</td>
          <td class="convert">254</td>
          <td class="convert">216</td>
          <td class="convert">125</td>
          <td class="convert"></td>
          <td class="convert">58</td>
          <td class="convertw">21.5</td>
          <td class="converti">0.1303</td>
        </tr>
        <tr>
          <td>T-11 B</td>
          <td class="convertrpm">9.16</td>
          <td>2300</td>
          <td></td>
          <td class="convert">32</td>
          <td class="convert">90</td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert">183</td>
          <td class="convert">65</td>
          <td class="convert">279</td>
          <td class="convert">233</td>
          <td class="convert">140</td>
          <td class="convert"></td>
          <td class="convert">53</td>
          <td class="convertw">28.8</td>
          <td class="converti">0.1622</td>
        </tr>
        <tr>
          <td>T-12 B</td>
          <td class="convertrpm">13.9</td>
          <td>2050</td>
          <td></td>
          <td class="convert">38</td>
          <td class="convert">100</td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert">209.5</td>
          <td class="convert">75</td>
          <td class="convert">314</td>
          <td class="convert">364</td>
          <td class="convert">152</td>
          <td class="convert"></td>
          <td class="convert">57.5</td>
          <td class="convertw">43.1</td>
          <td class="converti">0.365</td>
        </tr>
        <tr>
          <td>TO-14 B</td>
          <td class="convertrpm">24.3</td>
          <td>1800</td>
          <td></td>
          <td class="convert">58</td>
          <td class="convert">127</td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert">201</td>
          <td class="convert">89</td>
          <td class="convert">359</td>
          <td class="convert">311</td>
          <td class="convert">195</td>
          <td class="convert">26</td>
          <td class="convert">23</td>
          <td class="convertw">60.6</td>
          <td class="converti">0.6045</td>
        </tr>
        <tr>
          <td>TO-14 F/H</td>
          <td class="convertrpm">24.3</td>
          <td>1800</td>
          <td>3525</td>
          <td class="convert"></td>
          <td><span class="convert">100</span>*</td>
          <td class="convert">153</td>
          <td class="convert">65</td>
          <td class="convert">67</td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert">359</td>
          <td class="convert">311</td>
          <td class="convert">195</td>
          <td class="convert"></td>
          <td class="convert">23</td>
          <td class="convertw">42.6</td>
          <td class="converti">0.4922</td>
        </tr>
        <tr>
          <td>TO-16 B</td>
          <td class="convertrpm">39.5</td>
          <td>1600</td>
          <td></td>
          <td class="convert">65</td>
          <td class="convert">140</td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert">212</td>
          <td class="convert">102</td>
          <td class="convert">395</td>
          <td class="convert">345</td>
          <td class="convert">216</td>
          <td class="convert"></td>
          <td class="convert">8</td>
          <td class="convertw">86.4</td>
          <td class="converti">1.2755</td>
        </tr>
        <tr>
          <td>TO-16 F/H</td>
          <td class="convertrpm">39.5</td>
          <td>1600</td>
          <td>4030</td>
          <td class="convert"></td>
          <td><span class="convert">115</span>*</td>
          <td class="convert">162</td>
          <td class="convert">77</td>
          <td class="convert">80</td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert">395</td>
          <td class="convert">345</td>
          <td class="convert">216</td>
          <td class="convert"></td>
          <td class="convert">8</td>
          <td class="convertw">72.6</td>
          <td class="converti">1.1134</td>
        </tr>
        <tr>
          <td>TO-18 B</td>
          <td class="convertrpm">65.7</td>
          <td>1500</td>
          <td></td>
          <td class="convert">70</td>
          <td class="convert">150</td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert">254</td>
          <td class="convert">116</td>
          <td class="convert">470</td>
          <td class="convert">298</td>
          <td class="convert">220</td>
          <td class="convert"></td>
          <td class="convert">22</td>
          <td class="convertw">133.3</td>
          <td class="converti">2.1525</td>
        </tr>
        <tr>
          <td>TO-18 F/H</td>
          <td class="convertrpm">65.7</td>
          <td>1500</td>
          <td>4535</td>
          <td class="convert"></td>
          <td><span class="convert">125</span>*</td>
          <td class="convert">200</td>
          <td class="convert">89</td>
          <td class="convert">89</td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert">470</td>
          <td class="convert">398</td>
          <td class="convert">220</td>
          <td class="convert"></td>
          <td class="convert">22</td>
          <td class="convertw">123</td>
          <td class="converti">1.9514</td>
        </tr>
        <tr>
          <td>TO-20 B</td>
          <td class="convertrpm">97.6</td>
          <td>1300</td>
          <td></td>
          <td class="convert">70</td>
          <td class="convert">150</td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert">258</td>
          <td class="convert">114</td>
          <td class="convert">508</td>
          <td class="convert">429</td>
          <td class="convert">220</td>
          <td class="convert"></td>
          <td class="convert">30</td>
          <td class="convertw">144.6</td>
          <td class="converti">3.1765</td>
        </tr>
        <tr>
          <td>TO-20 F/H</td>
          <td class="convertrpm">97.6</td>
          <td>1300</td>
          <td>4535</td>
          <td class="convert"></td>
          <td><span class="convert">125</span>*</td>
          <td class="convert">208</td>
          <td class="convert">89</td>
          <td class="convert">89</td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert">508</td>
          <td class="convert">429</td>
          <td class="convert">220</td>
          <td class="convert"></td>
          <td class="convert">30</td>
          <td class="convertw">158.3</td>
          <td class="converti">3.0129</td>
        </tr>
        <tr>
          <td>TO-22 B</td>
          <td class="convertrpm">121</td>
          <td>1100</td>
          <td></td>
          <td class="convert">75</td>
          <td class="convert">160</td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert">281</td>
          <td class="convert">127</td>
          <td class="convert">562</td>
          <td class="convert">470</td>
          <td class="convert">240</td>
          <td class="convert"></td>
          <td class="convert">27</td>
          <td class="convertw">181.63</td>
          <td class="converti">4.7861</td>
        </tr>
          <td>TO-22 F/H</td>
          <td class="convertrpm">121</td>
          <td>1100</td>
          <td>5040</td>
          <td class="convert"></td>
          <td class="convert">125</td>
          <td class="convert">231</td>
          <td class="convert">102</td>
          <td class="convert">92</td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert">562</td>
          <td class="convert">470</td>
          <td class="convert">240</td>
          <td class="convert"></td>
          <td class="convert">27</td>
          <td class="convertw">195.1</td>
          <td class="converti">4.8954</td>
        </tr>
        <tr>
          <td>TO-25 B</td>
          <td class="convertrpm">154</td>
          <td>1000</td>
          <td></td>
          <td class="convert">85</td>
          <td class="convert">190</td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert">294</td>
          <td class="convert">132</td>
          <td class="convert">628</td>
          <td class="convert">532</td>
          <td class="convert">275</td>
          <td class="convert"></td>
          <td class="convert">30</td>
          <td class="convertw">281.1</td>
          <td class="converti">5.129</td>
        </tr>
      </tbody>
    </table>

    <br>

    <ul>
      <li>M is the amount by which clamping screws need to be withdrawn to release the tire.</li>
      <li>J is the wrench clearance to allow for tightening and loosening of the bush on the shaft.</li>
      <li>Shaft ends, although normally located G apart, can project beyond the flanges as shown. This allows sufficient space between shaft ends for end float and misalignment.</li>
      <li>Maximum torque figures should be regarded as short duration overload rating for direct on line starting. Angular misalignment capacity up to 4&deg;.</li>
      <li>Weights and Moment of Inertia specified assume without bores.</li>
    </ul>
    <br>

    # For detailed information about Taper Bush bore, please refer to Taper Bush catalog.<br>
    * Standard Bore of <span class="convert">90</span> <span class="scale">mm</span>, <span class="convert">100</span> <span class="scale">mm</span>, <span class="convert">115</span> <span class="scale">mm</span> and max. bore with shallow key <span class="convert">100</span> <span class="scale">mm</span>, <span class="convert">115</span> <span class="scale">mm</span> and <span class="convert">125</span> <span class="scale">mm</span> for bush nos. 3525, 4030 &amp; 4535 resply.
  </div>
</div>

<?php include "footer.php"; ?>