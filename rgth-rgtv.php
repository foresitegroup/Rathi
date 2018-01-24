<?php
$PageTitle = "Metallic Coupling - Grid Couplings / RGTH/RGTV Types";
include "header.php";
?>

<div class="product-header-half">
  <div class="product-header">
    <div class="site-width">
      <h2>Metallic Coupling</h2>
      <h1>Grid Couplings / RGTH/RGTV Types</h1>
      <em>Compare to Falk Steelflex style</em>
    </div>
  </div>

  <div class="site-width">
    <div class="left">
      <h3>RGTH Features</h3>
      <ul>
        <li>Torsionally Flexible</li>
        <li>Vibration dampening - reduced peak /shock loads</li>
        <li>Accommodates angular, parallel, and axial misalignment</li>
        <li>Low operating cost</li>
        <li>Smooth and quiet operation</li>
        <li>Overload condition causes the grid element to shear like a mechanical fuse</li>
        <li>Quick and easy installation</li>
      </ul>
      <br>

      <h3>RGTV Features</h3>
      <ul>
        <li>Vertical split cover is ideal for higher running speeds and general purpose</li>
        <li>Horizontal split is also available for specific applications</li>
        <li>Lubrication fittings: One or more lube holes in each half cover makes for easier lubrication. Fill through one and remove other plug for venting</li>
        <li>Seals: Durable synthetic material prevents loss of lubricant and entrance of water, dust, or other foreign materials</li>
        <li>Hubs: Made of steel for maximum strength</li>
        <li>Taper Grid: Made of high strength steel, quenched and tempered to spring hardness</li>
      </ul>
    </div>

    <div class="right">
      <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
      <script type="text/javascript" src="inc/jquery.cycle2.carousel.min.js"></script>

      <div class="cycle-slideshow" data-cycle-fx="carousel" data-cycle-timeout="0" data-cycle-slides="> div" data-cycle-carousel-visible="1" data-cycle-carousel-fluid="true" data-cycle-next="#next" data-cycle-prev="#prev" data-cycle-pager="#pager,#number-pager" data-cycle-pager-template="<a href='#'>{{slideNum}}</a>">
        <div style="background-image: url(images/rgth-rgtv-fig1.jpg);"></div>
        <div style="background-image: url(images/rgth-rgtv-fig2.jpg);"></div>
        <div style="background-image: url(images/rgth-rgtv-fig3.jpg);"></div>
        <div style="background-image: url(images/rgth-rgtv-fig4.jpg);"></div>
        <div style="background-image: url(images/rgth-rgtv-fig5.jpg);"></div>

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

      <a href="pdf/RGTH-RGTV_Spec_Sheet.pdf" class="specsheet">Download Spec Sheet <i class="fa fa-download" aria-hidden="true"></i></a>
    </div>
  </div>
</div>

<div class="product-details">
  <div class="site-width">
    <h3>Details &amp; Specs</h3>

    <script type="text/javascript">var wdecm = 2;</script>
    <script type="text/javascript" src="inc/scale-convert.js"></script>

    <div class="system-toggle nudge">
      Units:
      <a href="#" class="convertimp">Imperial</a> / <a href="#" class="convertmet">Metric</a>
    </div>
    
    <h4>RGTH</h4>
    <table class="fourteen">
      <thead>
        <tr>
          <th rowspan="2">Coupling Size</th>
          <th rowspan="2"><span class="scalerpm">kW</span> at 100 RPM</th>
          <th rowspan="2">Basic Torque (<span class="scalet">N-m</span>)</th>
          <th rowspan="2">Max. Speed (RPM)</th>
          <th colspan="2">Bore Dia. (<span class="scale">mm</span>)</th>
          <th colspan="6">Dimensions (<span class="scale">mm</span>)</th>
          <th rowspan="2">Lube Weight (<span class="scalew">kg</span>)</th>
          <th rowspan="2">Weight w/o Bore (<span class="scalew">kg</span>)</th>
        </tr>
        <tr>
          <th class="blue">Min.</th>
          <th class="blue">Max.</th>
          <th class="blue">&Oslash;A</th>
          <th class="blue">&Oslash;B</th>
          <th class="blue">C</th>
          <th class="blue">K</th>
          <th class="blue">L</th>
          <th class="blue">G Gap</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1020</td>
          <td class="convertrpm">0.54</td>
          <td class="convertt">52</td>
          <td>4500</td>
          <td class="convert">13</td>
          <td class="convert">30</td>
          <td class="convert" data-orig="101.5">101.5</td>
          <td class="convert" data-orig="39.7">39.7</td>
          <td class="convert" data-orig="47.5">47.5</td>
          <td class="convert" data-orig="66.5">66.5</td>
          <td class="convert">98</td>
          <td class="convert">3</td>
          <td class="convertw">0.03</td>
          <td class="convertw">1.9</td>
        </tr>
        <tr>
          <td>1030</td>
          <td class="convertrpm">1.56</td>
          <td class="convertt">149</td>
          <td>4500</td>
          <td class="convert">13</td>
          <td class="convert">36</td>
          <td class="convert">110</td>
          <td class="convert" data-orig="49.2">49.2</td>
          <td class="convert" data-orig="47.5">47.5</td>
          <td class="convert">68</td>
          <td class="convert">98</td>
          <td class="convert">3</td>
          <td class="convertw">0.03</td>
          <td class="convertw">2.6</td>
        </tr>
        <tr>
          <td>1040</td>
          <td class="convertrpm">2.61</td>
          <td class="convertt">249</td>
          <td>4500</td>
          <td class="convert">13</td>
          <td class="convert">44</td>
          <td class="convert" data-orig="117.5">117.5</td>
          <td class="convert" data-orig="57.1">57.1</td>
          <td class="convert">51</td>
          <td class="convert">70</td>
          <td class="convert" data-orig="104.5">104.5</td>
          <td class="convert">3</td>
          <td class="convertw">0.05</td>
          <td class="convertw">3.4</td>
        </tr>
        <tr>
          <td>1050</td>
          <td class="convertrpm">4.56</td>
          <td class="convertt">435</td>
          <td>4500</td>
          <td class="convert">13</td>
          <td class="convert">51</td>
          <td class="convert">138</td>
          <td class="convert" data-orig="66.7">66.7</td>
          <td class="convert">60</td>
          <td class="convert" data-orig="79.5">79.5</td>
          <td class="convert" data-orig="123.5">123.5</td>
          <td class="convert">3</td>
          <td class="convertw">0.05</td>
          <td class="convertw">5.4</td>
        </tr>
        <tr>
          <td>1060</td>
          <td class="convertrpm">7.16</td>
          <td class="convertt">684</td>
          <td>4350</td>
          <td class="convert">19</td>
          <td class="convert">57</td>
          <td class="convert" data-orig="150.5">150.5</td>
          <td class="convert" data-orig="76.2">76.2</td>
          <td class="convert" data-orig="63.5">63.5</td>
          <td class="convert">92</td>
          <td class="convert">130</td>
          <td class="convert">3</td>
          <td class="convertw">0.09</td>
          <td class="convertw">7.3</td>
        </tr>
        <tr>
          <td>1070</td>
          <td class="convertrpm">10.41</td>
          <td class="convertt">994</td>
          <td>4125</td>
          <td class="convert">19</td>
          <td class="convert">68</td>
          <td class="convert">162</td>
          <td class="convert" data-orig="87.3">87.3</td>
          <td class="convert">76</td>
          <td class="convert">95</td>
          <td class="convert" data-orig="155.5">155.5</td>
          <td class="convert">3</td>
          <td class="convertw">0.11</td>
          <td class="convertw">10</td>
        </tr>
        <tr>
          <td>1080</td>
          <td class="convertrpm">21.47</td>
          <td class="convertt">2050</td>
          <td>3600</td>
          <td class="convert">27</td>
          <td class="convert">82</td>
          <td class="convert">194</td>
          <td class="convert" data-orig="104.8">104.8</td>
          <td class="convert">89</td>
          <td class="convert">116</td>
          <td class="convert">181</td>
          <td class="convert">3</td>
          <td class="convertw">0.17</td>
          <td class="convertw">18</td>
        </tr>
        <tr>
          <td>1090</td>
          <td class="convertrpm">39.06</td>
          <td class="convertt">3730</td>
          <td>3600</td>
          <td class="convert">27</td>
          <td class="convert">95</td>
          <td class="convert">213</td>
          <td class="convert" data-orig="123.8">123.8</td>
          <td class="convert" data-orig="98.5">98.5</td>
          <td class="convert">122</td>
          <td class="convert">200</td>
          <td class="convert">3</td>
          <td class="convertw">0.25</td>
          <td class="convertw">25</td>
        </tr>
        <tr>
          <td>1100</td>
          <td class="convertrpm">65.76</td>
          <td class="convertt">6280</td>
          <td>2400</td>
          <td class="convert" data-orig="41.5">41.5</td>
          <td class="convert">110</td>
          <td class="convert">250</td>
          <td class="convert">142</td>
          <td class="convert" data-orig="120.5">120.5</td>
          <td class="convert" data-orig="155.5">155.5</td>
          <td class="convert" data-orig="245.5">245.5</td>
          <td class="convert" data-orig="4.5">4.5</td>
          <td class="convertw">0.43</td>
          <td class="convertw">42</td>
        </tr>
        <tr>
          <td>1110</td>
          <td class="convertrpm">97.6</td>
          <td class="convertt">9320</td>
          <td>2250</td>
          <td class="convert" data-orig="41.5">41.5</td>
          <td class="convert">120</td>
          <td class="convert">270</td>
          <td class="convert" data-orig="160.3">160.3</td>
          <td class="convert">127</td>
          <td class="convert" data-orig="161.5">161.5</td>
          <td class="convert" data-orig="258.5">258.5</td>
          <td class="convert" data-orig="4.5">4.5</td>
          <td class="convertw">0.51</td>
          <td class="convertw">54</td>
        </tr>
        <tr>
          <td>1120</td>
          <td class="convertrpm">143.47</td>
          <td class="convertt">13700</td>
          <td>2025</td>
          <td class="convert" data-orig="60.5">60.5</td>
          <td class="convert">140</td>
          <td class="convert">308</td>
          <td class="convert" data-orig="179.4">179.4</td>
          <td class="convert" data-orig="149.5">149.5</td>
          <td class="convert" data-orig="191.5">191.5</td>
          <td class="convert" data-orig="304.5">304.5</td>
          <td class="convert">6</td>
          <td class="convertw">0.73</td>
          <td class="convertw">81</td>
        </tr>
        <tr>
          <td>1130</td>
          <td class="convertrpm">208.39</td>
          <td class="convertt">19900</td>
          <td>1800</td>
          <td class="convert" data-orig="66.5">66.5</td>
          <td class="convert">170</td>
          <td class="convert">346</td>
          <td class="convert" data-orig="217.5">217.5</td>
          <td class="convert">162</td>
          <td class="convert">195</td>
          <td class="convert">330</td>
          <td class="convert">6</td>
          <td class="convertw">0.91</td>
          <td class="convertw">121</td>
        </tr>
        <tr>
          <td>1140</td>
          <td class="convertrpm">299.5</td>
          <td class="convertt">28600</td>
          <td>1650</td>
          <td class="convert" data-orig="66.5">66.5</td>
          <td class="convert">200</td>
          <td class="convert">384</td>
          <td class="convert">254</td>
          <td class="convert">184</td>
          <td class="convert">201</td>
          <td class="convert" data-orig="371.5">371.5</td>
          <td class="convert">6</td>
          <td class="convertw">1.13</td>
          <td class="convertw">178</td>
        </tr>
        <tr>
          <td>1150</td>
          <td class="convertrpm">416.78</td>
          <td class="convertt">39800</td>
          <td>1500</td>
          <td class="convert">108</td>
          <td class="convert">215</td>
          <td class="convert">453</td>
          <td class="convert" data-orig="269.2">269.2</td>
          <td class="convert">183</td>
          <td class="convert">271</td>
          <td class="convert">372</td>
          <td class="convert">6</td>
          <td class="convertw">1.95</td>
          <td class="convertw">234</td>
        </tr>
        <tr>
          <td>1160</td>
          <td class="convertrpm">585.38</td>
          <td class="convertt">55900</td>
          <td>1350</td>
          <td class="convert" data-orig="120.5">120.5</td>
          <td class="convert">240</td>
          <td class="convert" data-orig="501.5">501.5</td>
          <td class="convert" data-orig="304.8">304.8</td>
          <td class="convert">198</td>
          <td class="convert">279</td>
          <td class="convert">402</td>
          <td class="convert">6</td>
          <td class="convertw">2.81</td>
          <td class="convertw">317</td>
        </tr>
        <tr>
          <td>1170</td>
          <td class="convertrpm">781.21</td>
          <td class="convertt">74600</td>
          <td>1225</td>
          <td class="convert" data-orig="133.5">133.5</td>
          <td class="convert">280</td>
          <td class="convert" data-orig="566.5">566.5</td>
          <td class="convert" data-orig="355.6">355.6</td>
          <td class="convert">216</td>
          <td class="convert">304</td>
          <td class="convert">438</td>
          <td class="convert">6</td>
          <td class="convertw">3.49</td>
          <td class="convertw">448</td>
        </tr>
        <tr>
          <td>1180</td>
          <td class="convertrpm">1078.61</td>
          <td class="convertt">103000</td>
          <td>1100</td>
          <td class="convert" data-orig="152.5">152.5</td>
          <td class="convert">300</td>
          <td class="convert">630</td>
          <td class="convert" data-orig="393.7">393.7</td>
          <td class="convert">239</td>
          <td class="convert">321</td>
          <td class="convert" data-orig="483.5">483.5</td>
          <td class="convert">6</td>
          <td class="convertw">3.76</td>
          <td class="convertw">619</td>
        </tr>
        <tr>
          <td>1190</td>
          <td class="convertrpm">1434.66</td>
          <td class="convertt">137000</td>
          <td>1050</td>
          <td class="convert" data-orig="152.5">152.5</td>
          <td class="convert">335</td>
          <td class="convert" data-orig="675.5">675.5</td>
          <td class="convert" data-orig="436.9">436.9</td>
          <td class="convert">259</td>
          <td class="convert">325</td>
          <td class="convert" data-orig="524.5">524.5</td>
          <td class="convert">6</td>
          <td class="convertw">4.4</td>
          <td class="convertw">776</td>
        </tr>
        <tr>
          <td>1200</td>
          <td class="convertrpm">1947.79</td>
          <td class="convertt">186000</td>
          <td>900</td>
          <td class="convert">179</td>
          <td class="convert">360</td>
          <td class="convert">757</td>
          <td class="convert" data-orig="497.8">497.8</td>
          <td class="convert" data-orig="279.5">279.5</td>
          <td class="convert" data-orig="355.5">355.5</td>
          <td class="convert">565</td>
          <td class="convert">6</td>
          <td class="convertw">5.62</td>
          <td class="convertw">1058</td>
        </tr>
        <tr>
          <td>1210</td>
          <td class="convertrpm">2607.52</td>
          <td class="convertt">249000</td>
          <td>820</td>
          <td class="convert">178</td>
          <td class="convert">390</td>
          <td class="convert" data-orig="844.5">844.5</td>
          <td class="convert" data-orig="533.4">533.4</td>
          <td class="convert">305</td>
          <td class="convert">432</td>
          <td class="convert" data-orig="622.5">622.5</td>
          <td class="convert" data-orig="12.7">12.7</td>
          <td class="convertw">10.5</td>
          <td class="convertw">1424</td>
        </tr>
        <tr>
          <td>1220</td>
          <td class="convertrpm">3518.58</td>
          <td class="convertt">336000</td>
          <td>730</td>
          <td class="convert">203</td>
          <td class="convert">420</td>
          <td class="convert" data-orig="920.5">920.5</td>
          <td class="convert" data-orig="571.4">571.4</td>
          <td class="convert" data-orig="325.1">325.1</td>
          <td class="convert">490</td>
          <td class="convert">663</td>
          <td class="convert" data-orig="12.7">12.7</td>
          <td class="convertw">16.1</td>
          <td class="convertw">1785</td>
        </tr>
      </tbody>
    </table>

    <br>
    
    <div class="system-toggle nudge">
      Units:
      <a href="#" class="convertimp">Imperial</a> / <a href="#" class="convertmet">Metric</a>
    </div>
    
    <h4>RGTV</h4>
    <table class="fifteen">
      <thead>
        <tr>
          <th rowspan="2">Coupling Size</th>
          <th rowspan="2"><span class="scalerpm">kW</span> at 100 RPM</th>
          <th rowspan="2">Basic Torque (<span class="scalet">N-m</span>)</th>
          <th rowspan="2">Max. Speed (RPM)</th>
          <th colspan="2">Bore Dia. (<span class="scale">mm</span>)</th>
          <th colspan="7">Dimensions (<span class="scale">mm</span>)</th>
          <th rowspan="2">Lube Weight (<span class="scalew">kg</span>)</th>
          <th rowspan="2">Weight w/o Bore (<span class="scalew">kg</span>)</th>
        </tr>
        <tr>
          <th class="blue">Min.</th>
          <th class="blue">Max.</th>
          <th class="blue">&Oslash;A</th>
          <th class="blue">&Oslash;B</th>
          <th class="blue">C</th>
          <th class="blue">L</th>
          <th class="blue">N</th>
          <th class="blue">P</th>
          <th class="blue">G Gap</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1020</td>
          <td class="convertrpm">0.54</td>
          <td class="convertt">52</td>
          <td>6000</td>
          <td class="convert">13</td>
          <td class="convert">30</td>
          <td class="convert">111</td>
          <td class="convert" data-orig="39.7">39.7</td>
          <td class="convert" data-orig="47.5">47.5</td>
          <td class="convert">98</td>
          <td class="convert">24</td>
          <td class="convert" data-orig="47.5">47.5</td>
          <td class="convert">3</td>
          <td class="convertw">0.03</td>
          <td class="convertw">2</td>
        </tr>
        <tr>
          <td>1030</td>
          <td class="convertrpm">1.56</td>
          <td class="convertt">149</td>
          <td>6000</td>
          <td class="convert">13</td>
          <td class="convert">36</td>
          <td class="convert">121</td>
          <td class="convert" data-orig="49.2">49.2</td>
          <td class="convert" data-orig="47.5">47.5</td>
          <td class="convert">98</td>
          <td class="convert">24</td>
          <td class="convert" data-orig="47.5">47.5</td>
          <td class="convert">3</td>
          <td class="convertw">0.03</td>
          <td class="convertw">2.6</td>
        </tr>
        <tr>
          <td>1040</td>
          <td class="convertrpm">2.61</td>
          <td class="convertt">249</td>
          <td>6000</td>
          <td class="convert">13</td>
          <td class="convert">44</td>
          <td class="convert" data-orig="128.5">128.5</td>
          <td class="convert" data-orig="57.1">57.1</td>
          <td class="convert">51</td>
          <td class="convert" data-orig="104.5">104.5</td>
          <td class="convert" data-orig="25.5">25.5</td>
          <td class="convert">51</td>
          <td class="convert">3</td>
          <td class="convertw">0.05</td>
          <td class="convertw">3.4</td>
        </tr>
        <tr>
          <td>1050</td>
          <td class="convertrpm">4.56</td>
          <td class="convertt">435</td>
          <td>6000</td>
          <td class="convert">13</td>
          <td class="convert">51</td>
          <td class="convert" data-orig="147.5">147.5</td>
          <td class="convert" data-orig="66.7">66.7</td>
          <td class="convert" data-orig="60.5">60.5</td>
          <td class="convert" data-orig="123.5">123.5</td>
          <td class="convert">31</td>
          <td class="convert" data-orig="60.5">60.5</td>
          <td class="convert">3</td>
          <td class="convertw">0.05</td>
          <td class="convertw">5.4</td>
        </tr>
        <tr>
          <td>1060</td>
          <td class="convertrpm">7.16</td>
          <td class="convertt">684</td>
          <td>6000</td>
          <td class="convert">19</td>
          <td class="convert">57</td>
          <td class="convert">162</td>
          <td class="convert" data-orig="76.2">76.2</td>
          <td class="convert" data-orig="63.5">63.5</td>
          <td class="convert">130</td>
          <td class="convert">32</td>
          <td class="convert" data-orig="63.5">63.5</td>
          <td class="convert">3</td>
          <td class="convertw">0.09</td>
          <td class="convertw">7.3</td>
        </tr>
        <tr>
          <td>1070</td>
          <td class="convertrpm">10.41</td>
          <td class="convertt">994</td>
          <td>5500</td>
          <td class="convert">19</td>
          <td class="convert">68</td>
          <td class="convert">173</td>
          <td class="convert" data-orig="87.3">87.3</td>
          <td class="convert">76</td>
          <td class="convert" data-orig="155.5">155.5</td>
          <td class="convert" data-orig="33.5">33.5</td>
          <td class="convert">76</td>
          <td class="convert">3</td>
          <td class="convertw">0.11</td>
          <td class="convertw">10</td>
        </tr>
        <tr>
          <td>1080</td>
          <td class="convertrpm">21.47</td>
          <td class="convertt">2050</td>
          <td>4750</td>
          <td class="convert">27</td>
          <td class="convert">82</td>
          <td class="convert">200</td>
          <td class="convert" data-orig="104.8">104.8</td>
          <td class="convert">89</td>
          <td class="convert">181</td>
          <td class="convert">44</td>
          <td class="convert">89</td>
          <td class="convert">3</td>
          <td class="convertw">0.17</td>
          <td class="convertw">17.7</td>
        </tr>
        <tr>
          <td>1090</td>
          <td class="convertrpm">39.06</td>
          <td class="convertt">3730</td>
          <td>4000</td>
          <td class="convert">27</td>
          <td class="convert">95</td>
          <td class="convert">232</td>
          <td class="convert" data-orig="123.8">123.8</td>
          <td class="convert" data-orig="98.5">98.5</td>
          <td class="convert">200</td>
          <td class="convert" data-orig="47.5">47.5</td>
          <td class="convert" data-orig="98.5">98.5</td>
          <td class="convert">3</td>
          <td class="convertw">0.25</td>
          <td class="convertw">25.4</td>
        </tr>
        <tr>
          <td>1100</td>
          <td class="convertrpm">65.76</td>
          <td class="convertt">6280</td>
          <td>3250</td>
          <td class="convert" data-orig="41.5">41.5</td>
          <td class="convert">110</td>
          <td class="convert">267</td>
          <td class="convert">142</td>
          <td class="convert" data-orig="120.5">120.5</td>
          <td class="convert" data-orig="245.5">245.5</td>
          <td class="convert">60</td>
          <td class="convert" data-orig="120.5">120.5</td>
          <td class="convert" data-orig="4.5">4.5</td>
          <td class="convertw">0.43</td>
          <td class="convertw">42.2</td>
        </tr>
        <tr>
          <td>1110</td>
          <td class="convertrpm">97.6</td>
          <td class="convertt">9320</td>
          <td>3000</td>
          <td class="convert" data-orig="41.5">41.5</td>
          <td class="convert">120</td>
          <td class="convert">286</td>
          <td class="convert" data-orig="160.3">160.3</td>
          <td class="convert">127</td>
          <td class="convert" data-orig="258.5">258.5</td>
          <td class="convert">64</td>
          <td class="convert">127</td>
          <td class="convert" data-orig="4.5">4.5</td>
          <td class="convertw">0.51</td>
          <td class="convertw">54.4</td>
        </tr>
        <tr>
          <td>1120</td>
          <td class="convertrpm">143.47</td>
          <td class="convertt">13700</td>
          <td>2700</td>
          <td class="convert" data-orig="60.5">60.5</td>
          <td class="convert">140</td>
          <td class="convert">319</td>
          <td class="convert" data-orig="179.4">179.4</td>
          <td class="convert"">149</td>
          <td class="convert" data-orig="304.5">304.5</td>
          <td class="convert" data-orig="73.5">73.5</td>
          <td class="convert"">149</td>
          <td class="convert">6</td>
          <td class="convertw">0.73</td>
          <td class="convertw">81.6</td>
        </tr>
        <tr>
          <td>1130</td>
          <td class="convertrpm">208.39</td>
          <td class="convertt">19900</td>
          <td>2400</td>
          <td class="convert" data-orig="66.5">66.5</td>
          <td class="convert">170</td>
          <td class="convert">378</td>
          <td class="convert" data-orig="217.5">217.5</td>
          <td class="convert">162</td>
          <td class="convert">330</td>
          <td class="convert">75</td>
          <td class="convert">162</td>
          <td class="convert">6</td>
          <td class="convertw">0.91</td>
          <td class="convertw">122.5</td>
        </tr>
        <tr>
          <td>1140</td>
          <td class="convertrpm">299.5</td>
          <td class="convertt">28600</td>
          <td>2200</td>
          <td class="convert" data-orig="66.5">66.5</td>
          <td class="convert">200</td>
          <td class="convert">416</td>
          <td class="convert">254</td>
          <td class="convert">184</td>
          <td class="convert" data-orig="371.5">371.5</td>
          <td class="convert">78</td>
          <td class="convert">184</td>
          <td class="convert">6</td>
          <td class="convertw">1.13</td>
          <td class="convertw">180.1</td>
        </tr>
        <tr>
          <td>1150</td>
          <td class="convertrpm">416.78</td>
          <td class="convertt">39800</td>
          <td>2000</td>
          <td class="convert">108</td>
          <td class="convert">215</td>
          <td class="convert" data-orig="476.5">476.5</td>
          <td class="convert" data-orig="269.2">269.2</td>
          <td class="convert">183</td>
          <td class="convert">372</td>
          <td class="convert">107</td>
          <td class="convert">183</td>
          <td class="convert">6</td>
          <td class="convertw">1.95</td>
          <td class="convertw">230</td>
        </tr>
        <tr>
          <td>1160</td>
          <td class="convertrpm">585.38</td>
          <td class="convertt">55900</td>
          <td>1750</td>
          <td class="convert" data-orig="120.5">120.5</td>
          <td class="convert">240</td>
          <td class="convert" data-orig="533.5">533.5</td>
          <td class="convert" data-orig="304.8">304.8</td>
          <td class="convert">198</td>
          <td class="convert">402</td>
          <td class="convert" data-orig="114.5">114.5</td>
          <td class="convert">198</td>
          <td class="convert">6</td>
          <td class="convertw">2.81</td>
          <td class="convertw">321.1</td>
        </tr>
        <tr>
          <td>1170</td>
          <td class="convertrpm">781.21</td>
          <td class="convertt">74600</td>
          <td>1600</td>
          <td class="convert" data-orig="133.5">133.5</td>
          <td class="convert">280</td>
          <td class="convert">584</td>
          <td class="convert" data-orig="355.6">355.6</td>
          <td class="convert">216</td>
          <td class="convert">438</td>
          <td class="convert">120</td>
          <td class="convert">216</td>
          <td class="convert">6</td>
          <td class="convertw">3.49</td>
          <td class="convertw">448.2</td>
        </tr>
        <tr>
          <td>1180</td>
          <td class="convertrpm">1078.61</td>
          <td class="convertt">103000</td>
          <td>1400</td>
          <td class="convert" data-orig="152.5">152.5</td>
          <td class="convert">300</td>
          <td class="convert">630</td>
          <td class="convert" data-orig="393.7">393.7</td>
          <td class="convert">239</td>
          <td class="convert" data-orig="483.5">483.5</td>
          <td class="convert">130</td>
          <td class="convert">239</td>
          <td class="convert">6</td>
          <td class="convertw">3.76</td>
          <td class="convertw">591</td>
        </tr>
        <tr>
          <td>1190</td>
          <td class="convertrpm">1434.66</td>
          <td class="convertt">137000</td>
          <td>1300</td>
          <td class="convert" data-orig="152.5">152.5</td>
          <td class="convert">335</td>
          <td class="convert">685</td>
          <td class="convert" data-orig="436.9">436.9</td>
          <td class="convert">260</td>
          <td class="convert" data-orig="524.5">524.5</td>
          <td class="convert">135</td>
          <td class="convert">259</td>
          <td class="convert">6</td>
          <td class="convertw">4.4</td>
          <td class="convertw">761</td>
        </tr>
        <tr>
          <td>1200</td>
          <td class="convertrpm">1947.79</td>
          <td class="convertt">186000</td>
          <td>1100</td>
          <td class="convert">178</td>
          <td class="convert">360</td>
          <td class="convert">737</td>
          <td class="convert" data-orig="497.8">497.8</td>
          <td class="convert" data-orig="279.5">279.5</td>
          <td class="convert">565</td>
          <td class="convert">145</td>
          <td class="convert" data-orig="279.5">279.5</td>
          <td class="convert">6</td>
          <td class="convertw">5.62</td>
          <td class="convertw">1021</td>
        </tr>
      </tbody>
    </table>

    <br>

    For quality lubrication for optimal performance and long life, Rathi Special Grease (RSG) is highly recommended. After every three months or 250 operation hours, required to add grease. Every six months or every 4,000 operating hours required to replace all deteriorated grease.
  </div>
</div>

<?php include "footer.php"; ?>