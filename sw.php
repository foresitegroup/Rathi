<?php
$PageTitle = "Elastomeric Coupling - Straight Jaw / SW Type";
include "header.php";
?>

<div class="product-header-half">
  <div class="product-header">
    <div class="site-width">
      <h2>Elastomeric Coupling</h2>
      <h1>Straight Jaw / SW Type</h1>
      Straight Jaw with Radially Removable Split Wrap
      <em>Compare to Lovejoy&reg; LC Type</em>
    </div>
  </div>

  <div class="site-width">
    <div class="left">
      <ul>
        <li>Industry Standard design</li>
        <li>Three elastomeric material options</li>
        <li>Torque ratings from 187 in-lbs to over 95,000 in-lbs</li>
      </ul>
    </div>

    <div class="right">
      <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
      <script type="text/javascript" src="inc/jquery.cycle2.carousel.min.js"></script>

      <div class="cycle-slideshow" data-cycle-fx="carousel" data-cycle-timeout="0" data-cycle-slides="> div" data-cycle-carousel-visible="1" data-cycle-carousel-fluid="true" data-cycle-next="#next" data-cycle-prev="#prev" data-cycle-pager="#pager,#number-pager" data-cycle-pager-template="<a href='#'>{{slideNum}}</a>">
        <div style="background-image: url(images/sw-fig1.jpg);"></div>

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

    <script type="text/javascript">var rpmdec = 3; var tdec = 2;</script>
    <script type="text/javascript" src="inc/scale-convert.js"></script>

    <div class="system-toggle">
      Units:
      <a href="#" class="convertimp">Imperial</a> / <a href="#" class="convertmet">Metric</a>
    </div>

    <table class="fifteen">
      <thead>
        <tr>
          <th rowspan="3">Coupling Size</th>
          <th colspan="6">Power Rating</th>
          <th rowspan="3">Pilot Drill Size (<span class="scale">mm</span>)</th>
          <th rowspan="3">Max Bore (<span class="scale">mm</span>)</th>
          <th rowspan="3">&Oslash;A (<span class="scale">mm</span>)</th>
          <th rowspan="3">Length Thru Bore C (<span class="scale">mm</span>)</th>
          <th rowspan="3">&Oslash;B (<span class="scale">mm</span>)</th>
          <th rowspan="3">Gap G (<span class="scale">mm</span>)</th>
          <th rowspan="3">&Oslash;E (<span class="scale">mm</span>)</th>
          <th rowspan="3">L (<span class="scale">mm</span>)</th>
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
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>SW95</td>
          <td class="convertt">21.10</td>
          <td class="convertrpm">0.22</td>
          <td class="convertt">31.7</td>
          <td class="convertrpm">0.33</td>
          <td class="convertt">52.8</td>
          <td class="convertrpm">0.55</td>
          <td class="convert"></td>
          <td class="convert">28</td>
          <td class="convert">65</td>
          <td class="convert">25</td>
          <td class="convert">49</td>
          <td class="convert">2</td>
          <td class="convert">19</td>
          <td class="convert">63</td>
        </tr>
        <tr>
          <td>SW99</td>
          <td class="convertt">46.40</td>
          <td class="convertrpm">0.49</td>
          <td class="convertt">69</td>
          <td class="convertrpm">0.73</td>
          <td class="convertt">116</td>
          <td class="convertrpm">1.2</td>
          <td class="convert"></td>
          <td class="convert">30</td>
          <td class="convert">78</td>
          <td class="convert">27</td>
          <td class="convert">51</td>
          <td class="convert">2</td>
          <td class="convert">27</td>
          <td class="convert">72</td>
        </tr>
        <tr>
          <td>SW100</td>
          <td class="convertt">46.40</td>
          <td class="convertrpm">0.49</td>
          <td class="convertt">69</td>
          <td class="convertrpm">0.73</td>
          <td class="convertt">116</td>
          <td class="convertrpm">1.2</td>
          <td class="convert"></td>
          <td class="convert">35</td>
          <td class="convert">78</td>
          <td class="convert">35</td>
          <td class="convert">57</td>
          <td class="convert">2</td>
          <td class="convert">27</td>
          <td class="convert">88</td>
        </tr>
        <tr>
          <td>SW110</td>
          <td class="convertt">89</td>
          <td class="convertrpm">0.93</td>
          <td class="convertt">133</td>
          <td class="convertrpm">1.4</td>
          <td class="convertt">222</td>
          <td class="convertrpm">2.3</td>
          <td class="convert"></td>
          <td class="convert">42</td>
          <td class="convert">96</td>
          <td class="convert">43</td>
          <td class="convert">76</td>
          <td class="convert">3</td>
          <td class="convert">35</td>
          <td class="convert">108</td>
        </tr>
        <tr>
          <td>SW150</td>
          <td class="convertt">141</td>
          <td class="convertrpm">1.5</td>
          <td class="convertt">211</td>
          <td class="convertrpm">2.2</td>
          <td class="convertt">352</td>
          <td class="convertrpm">3.7</td>
          <td class="convert"></td>
          <td class="convert">48</td>
          <td class="convert">111</td>
          <td class="convert">45</td>
          <td class="convert">80</td>
          <td class="convert">3</td>
          <td class="convert">35</td>
          <td class="convert">115</td>
        </tr>
        <tr>
          <td>SW190</td>
          <td class="convertt">190</td>
          <td class="convertrpm">2</td>
          <td class="convertt">285</td>
          <td class="convertrpm">3</td>
          <td class="convertt">475</td>
          <td class="convertrpm">5</td>
          <td class="convert"></td>
          <td class="convert">60</td>
          <td class="convert">129</td>
          <td class="convert">54</td>
          <td class="convert">102</td>
          <td class="convert">3</td>
          <td class="convert">45</td>
          <td class="convert">133</td>
        </tr>
        <tr>
          <td>SW225</td>
          <td class="convertt">365</td>
          <td class="convertrpm">2.8</td>
          <td class="convertt">397</td>
          <td class="convertrpm">4.2</td>
          <td class="convertt">662</td>
          <td class="convertrpm">6.9</td>
          <td class="convert"></td>
          <td class="convert">65</td>
          <td class="convert">142</td>
          <td class="convert">64</td>
          <td class="convert">111</td>
          <td class="convert">3</td>
          <td class="convert">45</td>
          <td class="convert">153</td>
        </tr>
        <tr>
          <td>SW226</td>
          <td class="convertt">327</td>
          <td class="convertrpm">3.4</td>
          <td class="convertt">490</td>
          <td class="convertrpm">5.1</td>
          <td class="convertt">817</td>
          <td class="convertrpm">8.6</td>
          <td class="convert">25</td>
          <td class="convert">70</td>
          <td class="convert">153</td>
          <td class="convert">70</td>
          <td class="convert">119</td>
          <td class="convert">3</td>
          <td class="convert">51</td>
          <td class="convert">178</td>
        </tr>
        <tr>
          <td>SW276</td>
          <td class="convertt">532</td>
          <td class="convertrpm">5.6</td>
          <td class="convertt">798</td>
          <td class="convertrpm">8.4</td>
          <td class="convertt">1330</td>
          <td class="convertrpm">13.9</td>
          <td class="convert">25</td>
          <td class="convert">75</td>
          <td class="convert">173</td>
          <td class="convert">80</td>
          <td class="convert">127</td>
          <td class="convert">3</td>
          <td class="convert">60</td>
          <td class="convert">200</td>
        </tr>
        <tr>
          <td>SW280</td>
          <td class="convertt">782</td>
          <td class="convertrpm">8.2</td>
          <td class="convertt">1173</td>
          <td class="convertrpm">12.3</td>
          <td class="convertt">1955</td>
          <td class="convertrpm">20.5</td>
          <td class="convert">30</td>
          <td class="convert">80</td>
          <td class="convert">208</td>
          <td class="convert">80</td>
          <td class="convert">140</td>
          <td class="convert">3</td>
          <td class="convert">70</td>
          <td class="convert">200</td>
        </tr>
        <tr>
          <td>SW295</td>
          <td class="convertt">1279</td>
          <td class="convertrpm">13.4</td>
          <td class="convertt">1918</td>
          <td class="convertrpm">20.1</td>
          <td class="convertt">3197</td>
          <td class="convertrpm">33.5</td>
          <td class="convert">30</td>
          <td class="convert">95</td>
          <td class="convert">253</td>
          <td class="convert">95</td>
          <td class="convert">162</td>
          <td class="convert">3</td>
          <td class="convert">80</td>
          <td class="convert">238</td>
        </tr>
        <tr>
          <td>SW2955</td>
          <td class="convertt">3132</td>
          <td class="convertrpm">22.3</td>
          <td class="convertt">3198</td>
          <td class="convertrpm">33.5</td>
          <td class="convertt">5330</td>
          <td class="convertrpm">55.8</td>
          <td class="convert">30</td>
          <td class="convert">105</td>
          <td class="convert">253</td>
          <td class="convert">108</td>
          <td class="convert">180</td>
          <td class="convert">3</td>
          <td class="convert">80</td>
          <td class="convert">264</td>
        </tr>
        <tr>
          <td>SW300</td>
          <td class="convertt">3047</td>
          <td class="convertrpm">31.9</td>
          <td class="convertt">4570</td>
          <td class="convertrpm">47.9</td>
          <td class="convertt">7617</td>
          <td class="convertrpm">79.8</td>
          <td class="convert">30</td>
          <td class="convert">105</td>
          <td class="convert">272</td>
          <td class="convert">115</td>
          <td class="convert">180</td>
          <td class="convert">3</td>
          <td class="convert"></td>
          <td class="convert">283</td>
        </tr>
        <tr>
          <td>SW350</td>
          <td class="convertt">4308</td>
          <td class="convertrpm">45.1</td>
          <td class="convertt">6462</td>
          <td class="convertrpm">67.7</td>
          <td class="convertt">10770</td>
          <td class="convertrpm">112.8</td>
          <td class="convert">30</td>
          <td class="convert">115</td>
          <td class="convert">323</td>
          <td class="convert">128</td>
          <td class="convert">200</td>
          <td class="convert">3</td>
          <td class="convert"></td>
          <td class="convert">309</td>
        </tr>
      </tbody>
    </table>

    <br>

    <ul>
      <li>For vertical installation contact RATHI.</li>
      <li>Maximum bores can be increased in case of steel hubs.</li>
    </ul>
    <br>

    <h4>Material</h4>
    <ul>
      <li>Aluminum for sizes 095 to 110</li>
      <li>Cast Iron for sizes 095 to 350</li>
    </ul>
    <br>

    <h4>Spider</h4>
    <ul>
      <li>Polyurethane for sizes 095 to 295</li>
      <li>Hytrel for sizes 095 to 225</li>
    </ul>
    <br>

    <table class="text-table">
      <thead>
        <tr>
          <th rowspan="2">Codes</th>
          <th rowspan="2">Materials</th>
          <th rowspan="2">Features</th>
          <th colspan="3">Properties</th>
        </tr>
        <tr>
          <th class="blue">Color</th>
          <th class="blue">Hardness</th>
          <th class="blue">Temperature</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>N</td>
          <td>Synthetic Rubber</td>
          <td class="text">
            Synthetic Rubber, a highly flexible insert material that is oil resistant, is our standard elastomer. It resembles natural rubber in resilience and elasticity.
          </td>
          <td>Black</td>
          <td>80 SHA</td>
          <td>-40&deg;F to 212&deg;F</td>
        </tr>
        <tr>
          <td>U</td>
          <td>Polyurethane</td>
          <td class="text">
            Urethane has greater torque capability than Synthetic Rubber and offers good resistance to oil and chemicals. However, this material provides less dampening effect.
          </td>
          <td>Orange</td>
          <td>90 SHA</td>
          <td>-29&deg;F to 160&deg;F</td>
        </tr>
        <tr>
          <td>H</td>
          <td>Hytrel</td>
          <td class="text">
            Hytrel is a flexible elastomer designed for high torque and high temperature operations. Has an excellent resistance to oil and chemicals. It is best used in continuous load applications rather than cyclic or on/off service.
          </td>
          <td>White</td>
          <td>98 SHA</td>
          <td>-60&deg;F to 250&deg;F</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<?php include "footer.php"; ?>