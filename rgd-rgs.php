<?php
$PageTitle = "Metallic Coupling - Gear Couplings / RGD/RGS Types";
include "header.php";
?>

<div class="product-header-half">
  <div class="product-header">
    <div class="site-width">
      <h2>Metallic Coupling</h2>
      <h1>Gear Couplings / RGD/RGS Types</h1>
      AGMA Standard Design
    </div>
  </div>

  <div class="site-width">
    <div class="left">
      <h3>Conforms to AGMA Standards</h3>
      <br>

      <h3>Design Features</h3>
      <ul>
        <li>High Torque Ratings</li>
        <li>Large Bore Capacity</li>
        <li>Interchangeability</li>
        <li>High Misalignment Capacity</li>
      </ul>
      <br>

      <h3>Interchangeability</h3>
      Complete half coupling assemblies are interchangeable with any other half gear coupling with an exposed bolt flange manufactured to AGMA standards. Rathi replacement half couplings provide additional hub strength and lower gear mesh loads.<br>
      <br>

      <h3>Large Bore Capacity</h3>
      Rathi RGD and RGS Series gear couplings can accommodate large shaft diameter.<br>
      <br>

      <h3>High Misalignment Capacity</h3>
      Rathi RGD and RGS Gear couplings are designed to accommodate a static misalignment of 1.5&deg; per gear mesh. The recommended operating misalignment is limited to 3/4&deg; per gear mesh.
    </div>

    <div class="right">
      <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
      <script type="text/javascript" src="inc/jquery.cycle2.carousel.min.js"></script>

      <div class="cycle-slideshow" data-cycle-fx="carousel" data-cycle-timeout="0" data-cycle-slides="> div" data-cycle-carousel-visible="1" data-cycle-carousel-fluid="true" data-cycle-next="#next" data-cycle-prev="#prev" data-cycle-pager="#pager,#number-pager" data-cycle-pager-template="<a href='#'>{{slideNum}}</a>">
        <div style="background-image: url(images/rgd-rgs-fig1.jpg);"></div>
        <div style="background-image: url(images/rgd-rgs-fig2.jpg);"></div>
        <div style="background-image: url(images/rgd-rgs-fig3.jpg);"></div>
        <div style="background-image: url(images/rgd-rgs-fig4.jpg);"></div>
        <div style="background-image: url(images/rgd-rgs-fig5.jpg);"></div>
        <div style="background-image: url(images/rgd-rgs-fig6.jpg);"></div>
        <div style="background-image: url(images/rgd-rgs-fig7.jpg);"></div>

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

      <a href="pdf/RGD-RGS_Spec_Sheet.pdf" class="specsheet">Download Spec Sheet <i class="fa fa-download" aria-hidden="true"></i></a>
    </div>
  </div>
</div>

<div class="product-details">
  <div class="site-width">
    <h3>Details &amp; Specs</h3>

    <br>

    <table class="text-three">
      <thead>
        <tr>
          <th class="text">Torque Variation</th>
          <th>Electric motor gas or steam turbine</th>
          <th>Steam engine or Water turbine</th>
          <th>Gas or oil Recip. Engine</th>
        </tr>
      </thead>
      <body>
        <tr>
          <td class="text">Constant Torque<br>(centrifugal pumps and compressors, light fans and light duty agitators)</td>
          <td>1.0</td>
          <td>1.3</td>
          <td>3.0</td>
        </tr>
        <tr>
          <td class="text">Slight Fluctuations<br>(screw compressors and pumps, liquid ring compressors, medium duty mixers and fans)</td>
          <td>1.5</td>
          <td>2.0</td>
          <td>3.0</td>
        </tr>
        <tr>
          <td class="text">Substantual Fluctuations<br>(reciprocating pumps, heavy duty mixers and fans)</td>
          <td>2.0</td>
          <td>2.5</td>
          <td>4.0</td>
        </tr>
      </body>
    </table>

    <br><br>

    <script type="text/javascript">var rpmdec = 0; var rpmdecm = 0; var wdec = 1; var idecm = 4;</script>
    <script type="text/javascript" src="inc/scale-convert.js"></script>

    <div class="system-toggle nudge">
      Units:
      <a href="#" class="convertimp">Imperial</a> / <a href="#" class="convertmet">Metric</a>
    </div>

    <h4>Double Engagement Coupling: Type RGD</h4>
    <table class="sixteen">
      <thead>
        <tr>
          <th rowspan="2">Coupling Size</th>
          <th colspan="2">Coupling Rating</th>
          <th rowspan="2">Max. Speed (RPM)</th>
          <th colspan="2">Bore Dia. (<span class="scale">mm</span>)</th>
          <th colspan="8">Dimensions (<span class="scale">mm</span>)</th>
          <th colspan="2">Solid Hub</th>
        </tr>
        <tr>
          <th class="blue"><span class="scalerpm">kW</span> at 100 RPM</th>
          <th class="blue">Rated Torque (<span class="scalet">N-m</span>)</th>
          <th class="blue">Min.</th>
          <th class="blue">Max.</th>
          <th class="blue">&Oslash;A</th>
          <th class="blue">L</th>
          <th class="blue">C</th>
          <th class="blue">&Oslash;D</th>
          <th class="blue">&Oslash;F</th>
          <th class="blue">J</th>
          <th class="blue">M</th>
          <th class="blue">Gap</th>
          <th class="blue">Mass (<span class="scalew">kg</span>)</th>
          <th class="blue">MI (WR&sup2;) (<span class="scalei">kgm2</span>)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>10</td>
          <td class="convertrpm">14</td>
          <td class="convertt">1337</td>
          <td>8000</td>
          <td class="convert">14</td>
          <td class="convert">52</td>
          <td class="convert">116</td>
          <td class="convert">89</td>
          <td class="convert">43</td>
          <td class="convert">69</td>
          <td class="convert">84</td>
          <td class="convert">39</td>
          <td class="convert">51</td>
          <td class="convert">3</td>
          <td class="convertw">4</td>
          <td class="converti">0.0052</td>
        </tr>
        <tr>
          <td>15</td>
          <td class="convertrpm">30</td>
          <td class="convertt">2865</td>
          <td>6500</td>
          <td class="convert">22</td>
          <td class="convert">65</td>
          <td class="convert">152</td>
          <td class="convert">103</td>
          <td class="convert">50</td>
          <td class="convert">86</td>
          <td class="convert">105</td>
          <td class="convert">48</td>
          <td class="convert">61</td>
          <td class="convert">3</td>
          <td class="convertw">9</td>
          <td class="converti">0.00192</td>
        </tr>
        <tr>
          <td>20</td>
          <td class="convertrpm">53</td>
          <td class="convertt">5061</td>
          <td>5600</td>
          <td class="convert">27</td>
          <td class="convert">80</td>
          <td class="convert">178</td>
          <td class="convert">127</td>
          <td class="convert">62</td>
          <td class="convert">105</td>
          <td class="convert">127</td>
          <td class="convert">60</td>
          <td class="convert">76</td>
          <td class="convert">3</td>
          <td class="convertw">15</td>
          <td class="converti">0.041</td>
        </tr>
        <tr>
          <td>25</td>
          <td class="convertrpm">105</td>
          <td class="convertt">10027</td>
          <td>5000</td>
          <td class="convert">32</td>
          <td class="convert">98</td>
          <td class="convert">213</td>
          <td class="convert">159</td>
          <td class="convert">77</td>
          <td class="convert">131</td>
          <td class="convert">155</td>
          <td class="convert">72</td>
          <td class="convert">92</td>
          <td class="convert">5</td>
          <td class="convertw">27</td>
          <td class="converti">0.105</td>
        </tr>
        <tr>
          <td>30</td>
          <td class="convertrpm">168</td>
          <td class="convertt">16043</td>
          <td>4400</td>
          <td class="convert">42</td>
          <td class="convert">115</td>
          <td class="convert">240</td>
          <td class="convert">187</td>
          <td class="convert">91</td>
          <td class="convert">152</td>
          <td class="convert">181</td>
          <td class="convert">84</td>
          <td class="convert">106</td>
          <td class="convert">5</td>
          <td class="convertw">40</td>
          <td class="converti">0.195</td>
        </tr>
        <tr>
          <td>35</td>
          <td class="convertrpm">231</td>
          <td class="convertt">22059</td>
          <td>3900</td>
          <td class="convert">47</td>
          <td class="convert">135</td>
          <td class="convert">279</td>
          <td class="convert">220</td>
          <td class="convert">107</td>
          <td class="convert">178</td>
          <td class="convert">211</td>
          <td class="convert">98</td>
          <td class="convert">130</td>
          <td class="convert">6</td>
          <td class="convertw">65</td>
          <td class="converti">0.454</td>
        </tr>
        <tr>
          <td>40</td>
          <td class="convertrpm">336</td>
          <td class="convertt">32086</td>
          <td>3600</td>
          <td class="convert">47</td>
          <td class="convert">160</td>
          <td class="convert">318</td>
          <td class="convert">248</td>
          <td class="convert">121</td>
          <td class="convert">210</td>
          <td class="convert">250</td>
          <td class="convert">111</td>
          <td class="convert">145</td>
          <td class="convert">6</td>
          <td class="convertw">96</td>
          <td class="converti">0.86</td>
        </tr>
        <tr>
          <td>45</td>
          <td class="convertrpm">4472</td>
          <td class="convertt">45073</td>
          <td>3200</td>
          <td class="convert">52</td>
          <td class="convert">180</td>
          <td class="convert">346</td>
          <td class="convert">278</td>
          <td class="convert">135</td>
          <td class="convert">235</td>
          <td class="convert">274</td>
          <td class="convert">123</td>
          <td class="convert">165</td>
          <td class="convert">8</td>
          <td class="convertw">131</td>
          <td class="converti">1.39</td>
        </tr>
        <tr>
          <td>50</td>
          <td class="convertrpm">650</td>
          <td class="convertt">62070</td>
          <td>2900</td>
          <td class="convert">72</td>
          <td class="convert">195</td>
          <td class="convert">389</td>
          <td class="convert">314</td>
          <td class="convert">153</td>
          <td class="convert">254</td>
          <td class="convert">306</td>
          <td class="convert">141</td>
          <td class="convert">183</td>
          <td class="convert">8</td>
          <td class="convertw">186</td>
          <td class="converti">2.53</td>
        </tr>
        <tr>
          <td>55</td>
          <td class="convertrpm">880</td>
          <td class="convertt">84034</td>
          <td>2650</td>
          <td class="convert">72</td>
          <td class="convert">215</td>
          <td class="convert">425</td>
          <td class="convert">344</td>
          <td class="convert">168</td>
          <td class="convert">279</td>
          <td class="convert">334</td>
          <td class="convert">158</td>
          <td class="convert">203</td>
          <td class="convert">8</td>
          <td class="convertw">247</td>
          <td class="converti">3.83</td>
        </tr>
        <tr>
          <td>60</td>
          <td class="convertrpm">1205</td>
          <td class="convertt">115069</td>
          <td>2450</td>
          <td class="convert">77</td>
          <td class="convert">235</td>
          <td class="convert">457</td>
          <td class="convert">384</td>
          <td class="convert">188</td>
          <td class="convert">305</td>
          <td class="convert">366</td>
          <td class="convert">169</td>
          <td class="convert">228</td>
          <td class="convert">8</td>
          <td class="convertw">299</td>
          <td class="converti">5.21</td>
        </tr>
        <tr>
          <td>70</td>
          <td class="convertrpm">1823</td>
          <td class="convertt">174084</td>
          <td>2150</td>
          <td class="convert">92</td>
          <td class="convert">280</td>
          <td class="convert">527</td>
          <td class="convert">451</td>
          <td class="convert">221</td>
          <td class="convert">356</td>
          <td class="convert">425</td>
          <td class="convert">196</td>
          <td class="convert">266</td>
          <td class="convert">9</td>
          <td class="convertw">473</td>
          <td class="converti">11</td>
        </tr>
        <tr>
          <td>80</td>
          <td class="convertrpm">2639</td>
          <td class="convertt">252006</td>
          <td>1750</td>
          <td class="convert">95</td>
          <td class="convert">285</td>
          <td class="convert">590</td>
          <td class="convert">508</td>
          <td class="convert">249</td>
          <td class="convert">385</td>
          <td class="convert">485</td>
          <td class="convert">243</td>
          <td class="convert">300</td>
          <td class="convert">10</td>
          <td class="convertw">682</td>
          <td class="converti">20.72</td>
        </tr>
        <tr>
          <td>90</td>
          <td class="convertrpm">3037</td>
          <td class="convertt">290012</td>
          <td>1550</td>
          <td class="convert">100</td>
          <td class="convert">300</td>
          <td class="convert">660</td>
          <td class="convert">565</td>
          <td class="convert">276</td>
          <td class="convert">420</td>
          <td class="convert">535</td>
          <td class="convert">265</td>
          <td class="convert">325</td>
          <td class="convert">13</td>
          <td class="convertw">898</td>
          <td class="converti">34.95</td>
        </tr>
        <tr>
          <td>100</td>
          <td class="convertrpm">4100</td>
          <td class="convertt">391521</td>
          <td>1450</td>
          <td class="convert">120</td>
          <td class="convert">330</td>
          <td class="convert">711</td>
          <td class="convert">623</td>
          <td class="convert">305</td>
          <td class="convert">470</td>
          <td class="convert">595</td>
          <td class="convert">294</td>
          <td class="convert">355</td>
          <td class="convert">13</td>
          <td class="convertw">1242</td>
          <td class="converti">55.95</td>
        </tr>
      </tbody>
    </table>

    <br>

    <ul>
      <li>Standard double engagement couplings accommodate both angular and parallel misalignment or a combination of both.</li>
      <li>Accommodates end float without imposing appreciable axial loads on adjacent bearings.</li>
      <li>The exposed bolt design allows use of either open end or socket wrenches.</li>
      <li>Ideal for all standard applications including fans, overhead cranes, conveyors, steel and paper mill equipment.</li>
      <li>Special requirements like limited end float, electrical insulation, shear pin, shrouded bolt designs and others can be supplied.</li>
    </ul>

    <br><br>

    <div class="system-toggle nudge">
      Units:
      <a href="#" class="convertimp">Imperial</a> / <a href="#" class="convertmet">Metric</a>
    </div>

    <h4>Single Engagement Coupling: Type RGS</h4>
    <table class="twenty">
      <thead>
        <tr>
          <th rowspan="2">Coupling Size</th>
          <th colspan="2">Coupling Rating</th>
          <th rowspan="2">Max. Speed (RPM)</th>
          <th colspan="2">Min. Bore (<span class="scale">mm</span>)</th>
          <th colspan="2">Max. Bore (<span class="scale">mm</span>)</th>
          <th colspan="10">Dimensions (<span class="scale">mm</span>)</th>
          <th colspan="2">Solid Hub</th>
        </tr>
        <tr>
          <th class="blue"><span class="scalerpm">kW</span> at 100 RPM</th>
          <th class="blue">Rated Torque (<span class="scalet">N-m</span>)</th>
          <th class="blue">Flex Hub</th>
          <th class="blue">Rigid Hub</th>
          <th class="blue">Flex Hub</th>
          <th class="blue">Rigid Hub</th>
          <th class="blue">&Oslash;A</th>
          <th class="blue">L</th>
          <th class="blue">C</th>
          <th class="blue">&Oslash;D</th>
          <th class="blue">&Oslash;F</th>
          <th class="blue">&Oslash;F1</th>
          <th class="blue">J</th>
          <th class="blue">H</th>
          <th class="blue">M</th>
          <th class="blue">Gap</th>
          <th class="blue">Mass (<span class="scalew">kg</span>)</th>
          <th class="blue">MI (WR&sup2;) (<span class="scalei">kgm2</span>)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>10</td>
          <td class="convertrpm">14</td>
          <td class="convertt">1337</td>
          <td>8000</td>
          <td class="convert">14</td>
          <td class="convert">18</td>
          <td class="convert">52</td>
          <td class="convert">60</td>
          <td class="convert">116</td>
          <td class="convert">87</td>
          <td class="convert">43</td>
          <td class="convert">69</td>
          <td class="convert">84</td>
          <td class="convert">84</td>
          <td class="convert">39</td>
          <td class="convert">40</td>
          <td class="convert">51</td>
          <td class="convert">4</td>
          <td class="convertw">5</td>
          <td class="converti">0.0055</td>
        </tr>
        <tr>
          <td>15</td>
          <td class="convertrpm">30</td>
          <td class="convertt">2865</td>
          <td>6500</td>
          <td class="convert">22</td>
          <td class="convert">26</td>
          <td class="convert">65</td>
          <td class="convert">80</td>
          <td class="convert">152</td>
          <td class="convert">101</td>
          <td class="convert">50</td>
          <td class="convert">86</td>
          <td class="convert">105</td>
          <td class="convert">107</td>
          <td class="convert">48</td>
          <td class="convert">47</td>
          <td class="convert">61</td>
          <td class="convert">4</td>
          <td class="convertw">10</td>
          <td class="converti">0.0204</td>
        </tr>
        <tr>
          <td>15</td>
          <td class="convertrpm">30</td>
          <td class="convertt">2865</td>
          <td>6500</td>
          <td class="convert">22</td>
          <td class="convert">26</td>
          <td class="convert">65</td>
          <td class="convert">80</td>
          <td class="convert">152</td>
          <td class="convert">101</td>
          <td class="convert">50</td>
          <td class="convert">86</td>
          <td class="convert">105</td>
          <td class="convert">107</td>
          <td class="convert">48</td>
          <td class="convert">47</td>
          <td class="convert">61</td>
          <td class="convert">4</td>
          <td class="convertw">10</td>
          <td class="converti">0.0204</td>
        </tr>
        <tr>
          <td>20</td>
          <td class="convertrpm">53</td>
          <td class="convertt">5061</td>
          <td>5600</td>
          <td class="convert">27</td>
          <td class="convert">30</td>
          <td class="convert">80</td>
          <td class="convert">90</td>
          <td class="convert">178</td>
          <td class="convert">125</td>
          <td class="convert">62</td>
          <td class="convert">105</td>
          <td class="convert">127</td>
          <td class="convert">130</td>
          <td class="convert">60</td>
          <td class="convert">59</td>
          <td class="convert">76</td>
          <td class="convert">4</td>
          <td class="convertw">16</td>
          <td class="converti">0.0436</td>
        </tr>
        <tr>
          <td>25</td>
          <td class="convertrpm">105</td>
          <td class="convertt">10027</td>
          <td>5000</td>
          <td class="convert">32</td>
          <td class="convert">37</td>
          <td class="convert">98</td>
          <td class="convert">110</td>
          <td class="convert">213</td>
          <td class="convert">156</td>
          <td class="convert">77</td>
          <td class="convert">131</td>
          <td class="convert">155</td>
          <td class="convert">157</td>
          <td class="convert">72</td>
          <td class="convert">74</td>
          <td class="convert">92</td>
          <td class="convert">5</td>
          <td class="convertw">28</td>
          <td class="converti">0.111</td>
        </tr>
        <tr>
          <td>30</td>
          <td class="convertrpm">168</td>
          <td class="convertt">16043</td>
          <td>4400</td>
          <td class="convert">42</td>
          <td class="convert">44</td>
          <td class="convert">115</td>
          <td class="convert">130</td>
          <td class="convert">240</td>
          <td class="convert">184</td>
          <td class="convert">91</td>
          <td class="convert">152</td>
          <td class="convert">181</td>
          <td class="convert">182</td>
          <td class="convert">84</td>
          <td class="convert">88</td>
          <td class="convert">106</td>
          <td class="convert">5</td>
          <td class="convertw">42</td>
          <td class="converti">0.210</td>
        </tr>
        <tr>
          <td>35</td>
          <td class="convertrpm">231</td>
          <td class="convertt">22059</td>
          <td>3900</td>
          <td class="convert">47</td>
          <td class="convert">52</td>
          <td class="convert">135</td>
          <td class="convert">150</td>
          <td class="convert">279</td>
          <td class="convert">215</td>
          <td class="convert">107</td>
          <td class="convert">178</td>
          <td class="convert">211</td>
          <td class="convert">212</td>
          <td class="convert">98</td>
          <td class="convert">102</td>
          <td class="convert">130</td>
          <td class="convert">6</td>
          <td class="convertw">67</td>
          <td class="converti">0.477</td>
        </tr>
        <tr>
          <td>40</td>
          <td class="convertrpm">336</td>
          <td class="convertt">32086</td>
          <td>3600</td>
          <td class="convert">47</td>
          <td class="convert">52</td>
          <td class="convert">160</td>
          <td class="convert">180</td>
          <td class="convert">318</td>
          <td class="convert">245</td>
          <td class="convert">121</td>
          <td class="convert">210</td>
          <td class="convert">246</td>
          <td class="convert">250</td>
          <td class="convert">111</td>
          <td class="convert">116</td>
          <td class="convert">145</td>
          <td class="convert">8</td>
          <td class="convertw">100</td>
          <td class="converti">0.92</td>
        </tr>
        <tr>
          <td>45</td>
          <td class="convertrpm">472</td>
          <td class="convertt">45073</td>
          <td>3200</td>
          <td class="convert">52</td>
          <td class="convert">57</td>
          <td class="convert">180</td>
          <td class="convert">200</td>
          <td class="convert">346</td>
          <td class="convert">274</td>
          <td class="convert">135</td>
          <td class="convert">235</td>
          <td class="convert">274</td>
          <td class="convert">276</td>
          <td class="convert">123</td>
          <td class="convert">131</td>
          <td class="convert">165</td>
          <td class="convert">8</td>
          <td class="convertw">135</td>
          <td class="converti">1</td>
        </tr>
        <tr>
          <td>50</td>
          <td class="convertrpm">650</td>
          <td class="convertt">62070</td>
          <td>2900</td>
          <td class="convert">72</td>
          <td class="convert">77</td>
          <td class="convert">195</td>
          <td class="convert">220</td>
          <td class="convert">389</td>
          <td class="convert">310</td>
          <td class="convert">153</td>
          <td class="convert">254</td>
          <td class="convert">306</td>
          <td class="convert">309</td>
          <td class="convert">141</td>
          <td class="convert">148</td>
          <td class="convert">183</td>
          <td class="convert">9</td>
          <td class="convertw">195</td>
          <td class="converti">3</td>
        </tr>
        <tr>
          <td>55</td>
          <td class="convertrpm">880</td>
          <td class="convertt">84034</td>
          <td>2650</td>
          <td class="convert">72</td>
          <td class="convert">77</td>
          <td class="convert">215</td>
          <td class="convert">240</td>
          <td class="convert">425</td>
          <td class="convert">350</td>
          <td class="convert">168</td>
          <td class="convert">279</td>
          <td class="convert">334</td>
          <td class="convert">334</td>
          <td class="convert">158</td>
          <td class="convert">173</td>
          <td class="convert">203</td>
          <td class="convert">9</td>
          <td class="convertw">261</td>
          <td class="converti">4.20</td>
        </tr>
        <tr>
          <td>60</td>
          <td class="convertrpm">1205</td>
          <td class="convertt">115069</td>
          <td>2450</td>
          <td class="convert">77</td>
          <td class="convert">82</td>
          <td class="convert">235</td>
          <td class="convert">260</td>
          <td class="convert">457</td>
          <td class="convert">384</td>
          <td class="convert">188</td>
          <td class="convert">305</td>
          <td class="convert">366</td>
          <td class="convert">366</td>
          <td class="convert">169</td>
          <td class="convert">185</td>
          <td class="convert">228</td>
          <td class="convert">10</td>
          <td class="convertw">316</td>
          <td class="converti">5.70</td>
        </tr>
        <tr>
          <td>70</td>
          <td class="convertrpm">1823</td>
          <td class="convertt">174084</td>
          <td>2150</td>
          <td class="convert">92</td>
          <td class="convert">102</td>
          <td class="convert">280</td>
          <td class="convert">300</td>
          <td class="convert">527</td>
          <td class="convert">452</td>
          <td class="convert">221</td>
          <td class="convert">356</td>
          <td class="convert">425</td>
          <td class="convert">425</td>
          <td class="convert">196</td>
          <td class="convert">218</td>
          <td class="convert">266</td>
          <td class="convert">13</td>
          <td class="convertw">500</td>
          <td class="converti">12.05</td>
        </tr>
        <tr>
          <td>80</td>
          <td class="convertrpm">2639</td>
          <td class="convertt">252006</td>
          <td>1750</td>
          <td class="convert">95</td>
          <td class="convert">105</td>
          <td class="convert">285</td>
          <td class="convert">335</td>
          <td class="convert">590</td>
          <td class="convert">511</td>
          <td class="convert">249</td>
          <td class="convert">285</td>
          <td class="convert">485</td>
          <td class="convert">470</td>
          <td class="convert">243</td>
          <td class="convert">249</td>
          <td class="convert">300</td>
          <td class="convert">13</td>
          <td class="convertw">715</td>
          <td class="converti">21.77</td>
        </tr>
        <tr>
          <td>90</td>
          <td class="convertrpm">3037</td>
          <td class="convertt">290012</td>
          <td>1550</td>
          <td class="convert">100</td>
          <td class="convert"></td>
          <td class="convert">300</td>
          <td class="convert">370</td>
          <td class="convert">660</td>
          <td class="convert">567</td>
          <td class="convert">276</td>
          <td class="convert">420</td>
          <td class="convert">535</td>
          <td class="convert">518</td>
          <td class="convert">265</td>
          <td class="convert">276</td>
          <td class="convert">325</td>
          <td class="convert">15</td>
          <td class="convertw">969</td>
          <td class="converti">36.60</td>
        </tr>
        <tr>
          <td>100</td>
          <td class="convertrpm">4100</td>
          <td class="convertt">391521</td>
          <td>1450</td>
          <td class="convert">120</td>
          <td class="convert"></td>
          <td class="convert">330</td>
          <td class="convert">405</td>
          <td class="convert">711</td>
          <td class="convert">626</td>
          <td class="convert">305</td>
          <td class="convert">470</td>
          <td class="convert">595</td>
          <td class="convert">572</td>
          <td class="convert">294</td>
          <td class="convert">305</td>
          <td class="convert">355</td>
          <td class="convert">16</td>
          <td class="convertw">1259</td>
          <td class="converti">56.27</td>
        </tr>
      </tbody>
    </table>

    <br>

    <ul>
      <li>Standard Single engagement couplings accommodate angular misalignment and end float without imposing appreciable axial loads on adjacent bearings.</li>
      <li>Exposed bolt design allows the use of either open end or socket wrenches.</li>
      <li>Used primarily with floating shaft assemblies to cover longer distance between shaft ends.</li>
      <li>To reach the maximum speed, balancing is dynamic balancing recommended. Please contact Rathi NA for more details.</li>
      <li>Maximum bores specified above are for uniformly loaded drives only.</li>
      <li>Maximum bore for coupling with or equivalent to DIN 6885 keys.</li>
      <li>Minimum bore are a rough stock bore.</li>
      <li>For vertical installation, higher sizes and spacer type couplings contact to Rathi NA.</li>
    </ul>
  </div>
</div>

<?php include "footer.php"; ?>