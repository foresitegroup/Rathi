<?php
$PageTitle = "Elastomeric Coupling - Curved Jaw / RFC Type";
include "header.php";
?>

<div class="product-header-half">
  <div class="product-header">
    <div class="site-width">
      <h2>Elastomeric Coupling</h2>
      <h1>Curved Jaw / RFC Type</h1>
      <em>Compare to Fenner&reg; HRC Type</em>
    </div>
  </div>

  <div class="site-width">
    <div class="left">
      The RFC coupling is a general purpose flexible coupling available in eight different sizes in taper bore, pilot bore or finished bore.<br>
      <br>

      <h3>Easy installation</h3>
      Alignment is quickly achieved by simply placing a straight edge across the outside diameter of the hubs. No special tools are needed; only a hexagon wrench is need to lock the taper bush.<br>
      <br>

      <h3>Accommodates Misalignment</h3>
      The RFC coupling compensates for axial, parallel, and angular misalignment.<br>
      <br>

      <h3>Extra Protection Against Failure</h3>
      The Inter-linking hubs act as an additional<br>
      <br>

      <h3>Interchangeable</h3>
      The RFC coupling is compatible with leading makes of couplings. Elastomeric spider is of Nitrile rubber suitable for temperatures from -40&deg;F to + 212&deg;F.
    </div>

    <div class="right">
      <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
      <script type="text/javascript" src="inc/jquery.cycle2.carousel.min.js"></script>

      <div class="cycle-slideshow" data-cycle-fx="carousel" data-cycle-timeout="0" data-cycle-slides="> div" data-cycle-carousel-visible="1" data-cycle-carousel-fluid="true" data-cycle-next="#next" data-cycle-prev="#prev" data-cycle-pager="#pager,#number-pager" data-cycle-pager-template="<a href='#'>{{slideNum}}</a>">
        <div style="background-image: url(images/rfc-fig1.jpg);"></div>
        <div style="background-image: url(images/rfc-fig2.jpg);"></div>
        <div style="background-image: url(images/rfc-fig3.jpg);"></div>
        <div style="background-image: url(images/rfc-fig4.jpg);"></div>
        <div style="background-image: url(images/rfc-fig5.jpg);"></div>

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

      <a href="pdf/RFC_Spec_Sheet.pdf" class="specsheet">Download Spec Sheet <i class="fa fa-download" aria-hidden="true"></i></a>
    </div>
  </div>
</div>

<div class="product-details">
  <div class="site-width">
    <h3>Details &amp; Specs</h3>

    <br><br>

    <h4>Service Factors</h4>
    <table class="text-six">
      <thead>
        <tr>
          <th rowspan="3" class="text">
            Applications with excessive shocks, vibrations and torque fluctuations (compressors, engine, centrifugal pumps blowers, fans, generators, conveyors etc.)
          </th>
          <th colspan="6">Type of Driving Unit</th>
        </tr>
        <tr>
          <th colspan="3" class="blue">Electric Motors, Steam Turbines</th>
          <th colspan="3" class="blue">Internal Combustion Engines, Steam Turbines, Water Turbines</th>
        </tr>
        <tr>
          <th colspan="3">Hours Per Day Duty</th>
          <th colspan="3">Hours Per Day Duty</th>
        </tr>
        <tr>
          <th class="blue text">Class of Driven Machine</th>
          <th class="blue">Up to 8</th>
          <th class="blue">8 to 16</th>
          <th class="blue">Over 16</th>
          <th class="blue">Up to 8</th>
          <th class="blue">8 to 16</th>
          <th class="blue">Over 16</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text">Uniformly Driven Machines</td>
          <td>1.00</td>
          <td>1.12</td>
          <td>1.25</td>
          <td>1.25</td>
          <td>1.40</td>
          <td>1.60</td>
        </tr>
        <tr>
          <td class="text">Machines Driven with Moderate Shocks</td>
          <td>1.60</td>
          <td>1.80</td>
          <td>2.00</td>
          <td>2.00</td>
          <td>2.24</td>
          <td>2.50</td>
        </tr>
        <tr>
          <td class="text">Machines Driven with Heavy Shocks</td>
          <td>2.50</td>
          <td>2.80</td>
          <td>3.12</td>
          <td>3.12</td>
          <td>3.55</td>
          <td>4.00</td>
        </tr>
      </tbody>
    </table>

    <br><br>
    
    <script type="text/javascript">var tdecm = 1; var wdecm = 2;</script>
    <script type="text/javascript" src="inc/scale-convert.js"></script>

    <div class="system-toggle nudge">
      Units:
      <a href="#" class="convertimp">Imperial</a> / <a href="#" class="convertmet">Metric</a>
    </div>
    
    <h4>Power Rating (<span class="scalerpm">kW</span>)</h4>
    <table class="nine">
      <thead>
        <tr>
          <th>Speed</th>
          <th colspan="8">Coupling Size</th>
        </tr>
        <tr>
          <th class="blue">RPM</th>
          <th class="blue">RFC 7</th>
          <th class="blue">RFC 9</th>
          <th class="blue">RFC 11</th>
          <th class="blue">RFC 13</th>
          <th class="blue">RFC 15</th>
          <th class="blue">RFC 18</th>
          <th class="blue">RFC 23</th>
          <th class="blue">RFC 28</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>100</td>
          <td class="convertrpm">0.33</td>
          <td class="convertrpm">0.84</td>
          <td class="convertrpm">1.68</td>
          <td class="convertrpm">3.30</td>
          <td class="convertrpm">6.28</td>
          <td class="convertrpm">9.95</td>
          <td class="convertrpm">20.90</td>
          <td class="convertrpm">33.00</td>
        </tr>
        <tr>
          <td>1500</td>
          <td class="convertrpm">4.95</td>
          <td class="convertrpm">12.55</td>
          <td class="convertrpm">25.15</td>
          <td class="convertrpm">49.50</td>
          <td class="convertrpm">94.00</td>
          <td class="convertrpm">149.00</td>
          <td class="convertrpm">313.50</td>
          <td class="convertrpm">495.00</td>
        </tr>
        <tr>
          <td>3000</td>
          <td class="convertrpm">9.90</td>
          <td class="convertrpm">25.10</td>
          <td class="convertrpm">50.30</td>
          <td class="convertrpm">99.00</td>
          <td class="convertrpm">188.00</td>
          <td class="convertrpm">298.00</td>
          <td class="convertrpm"></td>
          <td class="convertrpm"></td>
        </tr>
      </tbody>
    </table>

    <br>

    <ul>
      <li>Power rating can be increased by using 92&deg; shore hardness spider, please consult manufacturer for the same.</li>
    </ul>

    <br><br>

    <div class="system-toggle nudge">
      Units:
      <a href="#" class="convertimp">Imperial</a> / <a href="#" class="convertmet">Metric</a>
    </div>

    <h4>Dimensional Data (<span class="scale">mm</span>)</h4>
    <table class="nineteen">
      <thead>
        <tr>
          <th rowspan="3">Coupling Size</th>
          <th colspan="5" class="blue">F / H Hub</th>
          <th colspan="4" class="blue">B Hub</th>
          <th rowspan="3">&Oslash;A</th>
          <th rowspan="3">&Oslash;B</th>
          <th rowspan="3">&Oslash;E</th>
          <th rowspan="3">F</th>
          <th rowspan="3">G</th>
          <th colspan="3" rowspan="2">L</th>
          <th rowspan="3">J</th>
        </tr>
        <tr>
          <th rowspan="2">Bushing Size</th>
          <th colspan="2"># Bore</th>
          <th rowspan="2">C</th>
          <th rowspan="2">D</th>
          <th colspan="2">Bore</th>
          <th rowspan="2">C</th>
          <th rowspan="2">D</th>
        </tr>
        <tr>
          <th class="blue">Max</th>
          <th class="blue">Min</th>
          <th class="blue">Max</th>
          <th class="blue">Min</th>
          <th class="blue">L1</th>
          <th class="blue">L2</th>
          <th class="blue">L3</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>RFC 7</td>
          <td class="convert">1008</td>
          <td class="convert">25</td>
          <td class="convert">10</td>
          <td class="convert">19</td>
          <td class="convert">24</td>
          <td class="convert">32</td>
          <td class="convert">10</td>
          <td class="convert">21</td>
          <td class="convert">26</td>
          <td class="convert">69</td>
          <td class="convert">60</td>
          <td class="convert">31</td>
          <td class="convert">28</td>
          <td class="convert">17.5</td>
          <td class="convert">66</td>
          <td class="convert">68</td>
          <td class="convert">70</td>
          <td class="convert">29</td>
        </tr>
        <tr>
          <td>RFC 9</td>
          <td class="convert">1108</td>
          <td class="convert">28</td>
          <td class="convert">10</td>
          <td class="convert">18</td>
          <td class="convert">24</td>
          <td class="convert">42</td>
          <td class="convert">10</td>
          <td class="convert">26</td>
          <td class="convert">32</td>
          <td class="convert">85</td>
          <td class="convert">65</td>
          <td class="convert">32</td>
          <td class="convert">34.5</td>
          <td class="convert">22.5</td>
          <td class="convert">70.5</td>
          <td class="convert">78.5</td>
          <td class="convert">86.5</td>
          <td class="convert">29</td>
        </tr>
        <tr>
          <td>RFC 11</td>
          <td class="convert">1610</td>
          <td class="convert">42</td>
          <td class="convert">14</td>
          <td class="convert">19</td>
          <td class="convert">27</td>
          <td class="convert">55</td>
          <td class="convert">10</td>
          <td class="convert">37</td>
          <td class="convert">45</td>
          <td class="convert">112</td>
          <td class="convert">100</td>
          <td class="convert">45</td>
          <td class="convert">45</td>
          <td class="convert">29</td>
          <td class="convert">83</td>
          <td class="convert">101</td>
          <td class="convert">119</td>
          <td class="convert">38</td>
        </tr>
        <tr>
          <td>RFC 13</td>
          <td class="convert">1610</td>
          <td class="convert">42</td>
          <td class="convert">14</td>
          <td class="convert">17.5</td>
          <td class="convert">26.5</td>
          <td class="convert">60</td>
          <td class="convert">20</td>
          <td class="convert">46</td>
          <td class="convert">55</td>
          <td class="convert">130</td>
          <td class="convert">105</td>
          <td class="convert">50</td>
          <td class="convert">54</td>
          <td class="convert">36</td>
          <td class="convert">89</td>
          <td class="convert">117.5</td>
          <td class="convert">146</td>
          <td class="convert">38</td>
        </tr>
        <tr>
          <td>RFC 15</td>
          <td class="convert">2012</td>
          <td class="convert">50</td>
          <td class="convert">14</td>
          <td class="convert">44</td>
          <td class="convert">34</td>
          <td class="convert">70</td>
          <td class="convert">20</td>
          <td class="convert">50</td>
          <td class="convert">60</td>
          <td class="convert">150</td>
          <td class="convert">115</td>
          <td class="convert">62</td>
          <td class="convert">60</td>
          <td class="convert">40</td>
          <td class="convert">108</td>
          <td class="convert">134</td>
          <td class="convert">160</td>
          <td class="convert">42</td>
        </tr>
        <tr>
          <td>RFC 18</td>
          <td class="convert">2517</td>
          <td class="convert">60</td>
          <td class="convert">16</td>
          <td class="convert">35</td>
          <td class="convert">47</td>
          <td class="convert">80</td>
          <td class="convert">30</td>
          <td class="convert">58</td>
          <td class="convert">70</td>
          <td class="convert">180</td>
          <td class="convert">125</td>
          <td class="convert">77</td>
          <td class="convert">73</td>
          <td class="convert">49</td>
          <td class="convert">143</td>
          <td class="convert">166</td>
          <td class="convert">189</td>
          <td class="convert">48</td>
        </tr>
        <tr>
          <td>RFC 23</td>
          <td class="convert">3020</td>
          <td class="convert">75</td>
          <td class="convert">24</td>
          <td class="convert">39.5</td>
          <td class="convert">52.5</td>
          <td class="convert">100</td>
          <td class="convert">40</td>
          <td class="convert">77</td>
          <td class="convert">90</td>
          <td class="convert">225</td>
          <td class="convert">155</td>
          <td class="convert">99</td>
          <td class="convert">84.5</td>
          <td class="convert">58.5</td>
          <td class="convert">163.5</td>
          <td class="convert">201</td>
          <td class="convert">238.5</td>
          <td class="convert">55</td>
        </tr>
        <tr>
          <td>RFC 28</td>
          <td class="convert">3535</td>
          <td class="convert">90</td>
          <td class="convert">35</td>
          <td class="convert">74</td>
          <td class="convert">90.5</td>
          <td class="convert">115</td>
          <td class="convert">50</td>
          <td class="convert">88.5</td>
          <td class="convert">105</td>
          <td class="convert">275</td>
          <td class="convert">185</td>
          <td class="convert">118</td>
          <td class="convert">107.5</td>
          <td class="convert">74.5</td>
          <td class="convert">255.5</td>
          <td class="convert">270</td>
          <td class="convert">284.5</td>
          <td class="convert">67</td>
        </tr>
        <tr>
          <td>RFC 28A</td>
          <td class="convert">3535</td>
          <td class="convert">100</td>
          <td class="convert">35</td>
          <td class="convert">50</td>
          <td class="convert">66.5</td>
          <td class="convert">125</td>
          <td class="convert">50</td>
          <td class="convert">88.5</td>
          <td class="convert">105</td>
          <td class="convert">275</td>
          <td class="convert">206</td>
          <td class="convert">118</td>
          <td class="convert">107.5</td>
          <td class="convert">74.5</td>
          <td class="convert">207.5</td>
          <td class="convert">246</td>
          <td class="convert">284.5</td>
          <td class="convert">67</td>
        </tr>
      </tbody>
    </table>

    <br>

    <ul>
      <li>For RFC 28A standard max bore = <span class="convert">90</span> <span class="scale">mm</span>; with shallow key = <span class="convert">100</span> <span class="scale">mm</span></li>
      <li>L1 = Length with assembly combinations FF, HH, FH.</li>
      <li>L2 = Length with assembly combinations FB, HB, the shaft.</li>
      <li>L3 = Length with assembly combinations BB. </li>
      <li>J = Wrench clearance required to tighten and loosen the bushing on the shaft.</li>
      <li>Bore tolerance is H7 unless otherwise specified.</li>
    </ul>

    <br><br>

    <div class="system-toggle nudge">
      Units:
      <a href="#" class="convertimp">Imperial</a> / <a href="#" class="convertmet">Metric</a>
    </div>

    <h4>Technical Data (<span class="scale">mm</span>)</h4>
    <table class="nine">
      <thead>
        <tr>
          <th rowspan="2">Coupling Size</th>
          <th rowspan="2">Maximum Speed RPM</th>
          <th colspan="2">Rated Torque (<span class="scalet">N-m</span>)</th>
          <th rowspan="2">Moment of Inertia WR2 (<span class="scalei">kgm2</span>)</th>
          <th rowspan="2">Torsional Stiffness (<span class="scalet">N-m</span> / degree)</th>
          <th colspan="2">Maximum Misalignment</th>
          <th rowspan="2">Weight (<span class="scalew">kg</span>)</th>
        </tr>
        <tr>
          <th class="blue">Normal</th>
          <th class="blue">Maximum</th>
          <th class="blue">Parallel</th>
          <th class="blue">Axial</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>RFC 7</td>
          <td>9100</td>
          <td class="convertt">31.5</td>
          <td class="convertt">72</td>
          <td class="converti">0.00085</td>
          <td class="convertt">10.2</td>
          <td>0.3</td>
          <td>+0.20</td>
          <td class="convertw">1.00</td>
        </tr>
        <tr>
          <td>RFC 9</td>
          <td>7400</td>
          <td class="convertt">80</td>
          <td class="convertt">180</td>
          <td class="converti">0.00115</td>
          <td class="convertt">25.5</td>
          <td>0.3</td>
          <td>+0.49</td>
          <td class="convertw">1.17</td>
        </tr>
        <tr>
          <td>RFC 11</td>
          <td>5630</td>
          <td class="convertt">160</td>
          <td class="convertt">360</td>
          <td class="converti">0.00400</td>
          <td class="convertt">48</td>
          <td>0.3</td>
          <td>+0.61</td>
          <td class="convertw">5.00</td>
        </tr>
        <tr>
          <td>RFC 13</td>
          <td>4850</td>
          <td class="convertt">315</td>
          <td class="convertt">720</td>
          <td class="converti">0.00780</td>
          <td class="convertt">84</td>
          <td>0.4</td>
          <td>+0.79</td>
          <td class="convertw">5.46</td>
        </tr>
        <tr>
          <td>RFC 15</td>
          <td>4200</td>
          <td class="convertt">600</td>
          <td class="convertt">1500</td>
          <td class="converti">0.01810</td>
          <td class="convertt">176</td>
          <td>0.4</td>
          <td>+0.92</td>
          <td class="convertw">7.11</td>
        </tr>
        <tr>
          <td>RFC 18</td>
          <td>3500</td>
          <td class="convertt">950</td>
          <td class="convertt">2350</td>
          <td class="converti">0.04340</td>
          <td class="convertt">240</td>
          <td>0.4</td>
          <td>+1.09</td>
          <td class="convertw">16.60</td>
        </tr>
        <tr>
          <td>RFC 23</td>
          <td>2800</td>
          <td class="convertt">2000</td>
          <td class="convertt">5000</td>
          <td class="converti">0.12068</td>
          <td class="convertt">336</td>
          <td>0.5</td>
          <td>+1.32</td>
          <td class="convertw">26.00</td>
        </tr>
        <tr>
          <td>RFC 28/28A</td>
          <td>2300</td>
          <td class="convertt">3150</td>
          <td class="convertt">7200</td>
          <td class="converti">0.44653</td>
          <td class="convertt">960</td>
          <td>0.5</td>
          <td>+1.70</td>
          <td class="convertw">50.00</td>
        </tr>
      </tbody>
    </table>

    <br>

    <ul>
      <li>Weight &amp; M.I. are for coupling with mid-range bore taper bushes.</li>
      <li>The maximum angular misalignment is 1&deg;.</li>
      <li>For speeds below 100 rpm &amp; intermediate speeds use normal torque ratings.</li>
      <li>All dimensions are in <span class="scale">mm</span> unless otherwise specified.</li>
      <li>For vertical installation contact RATHI.</li>
    </ul>
  </div>
</div>

<?php include "footer.php"; ?>