<?php
$PageTitle = "Elastomeric Coupling - Straight Jaw / L Type";
include "header.php";
?>

<div class="product-header-half">
  <div class="product-header">
    <div class="site-width">
      <h2>Elastomeric Coupling</h2>
      <h1>Straight Jaw / L Type</h1>
      Standard Straight Jaw Design
      <em>Compare to Lovejoy&reg; L Type</em>
    </div>
  </div>

  <div class="site-width">
    <div class="left">
      <ul>
        <li>Industry Standard design</li>
        <li>Three elastomeric material options</li>
        <li>Torque ratings from 3.4 in-lbs to over 40,000 in-lbs</li>
      </ul>
    </div>

    <div class="right">
      <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
      <script type="text/javascript" src="inc/jquery.cycle2.carousel.min.js"></script>

      <div class="cycle-slideshow" data-cycle-fx="carousel" data-cycle-timeout="0" data-cycle-slides="> div" data-cycle-carousel-visible="1" data-cycle-carousel-fluid="true" data-cycle-next="#next" data-cycle-prev="#prev" data-cycle-pager="#pager,#number-pager" data-cycle-pager-template="<a href='#'>{{slideNum}}</a>">
        <div style="background-image: url(images/l-fig1.jpg);"></div>
        <div style="background-image: url(images/l-fig2.jpg);"></div>
        <div style="background-image: url(images/l-fig3.jpg);"></div>

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

    <table class="fourteen">
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
          <td>L035</td>
          <td class="convertt">0.38</td>
          <td class="convertrpm">0.004</td>
          <td class="convertt">0.6</td>
          <td class="convertrpm">0.01</td>
          <td class="convertt">1.0</td>
          <td class="convertrpm">0.01</td>
          <td class="convert"></td>
          <td class="convert">10</td>
          <td class="convert">16</td>
          <td class="convert">6.5</td>
          <td class="convert">16</td>
          <td class="convert">1</td>
          <td class="convert"></td>
        </tr>
        <tr>
          <td>L050</td>
          <td class="convertt">2.80</td>
          <td class="convertrpm">0.03</td>
          <td class="convertt">4.2</td>
          <td class="convertrpm">0.04</td>
          <td class="convertt">7.0</td>
          <td class="convertrpm">0.07</td>
          <td class="convert">5</td>
          <td class="convert">16</td>
          <td class="convert">27</td>
          <td class="convert">15</td>
          <td class="convert">27</td>
          <td class="convert">1</td>
          <td class="convert"></td>
        </tr>
        <tr>
          <td>L070</td>
          <td class="convertt">4.90</td>
          <td class="convertrpm">0.05</td>
          <td class="convertt">7.4</td>
          <td class="convertrpm">0.08</td>
          <td class="convertt">12.3</td>
          <td class="convertrpm">0.13</td>
          <td class="convert">9</td>
          <td class="convert">20</td>
          <td class="convert">34.5</td>
          <td class="convert">19</td>
          <td class="convert">34.5</td>
          <td class="convert">2</td>
          <td class="convert"></td>
        </tr>
        <tr>
          <td>L075*</td>
          <td class="convertt">9.80</td>
          <td class="convertrpm">0.1</td>
          <td class="convertt">14.7</td>
          <td class="convertrpm">0.15</td>
          <td class="convertt">24.5</td>
          <td class="convertrpm">0.26</td>
          <td class="convert">9</td>
          <td class="convert">22</td>
          <td class="convert">44.5</td>
          <td class="convert">21</td>
          <td class="convert">44.5</td>
          <td class="convert">2</td>
          <td class="convert"></td>
        </tr>
        <tr>
          <td>L075**</td>
          <td class="convertt">9.80</td>
          <td class="convertrpm">0.1</td>
          <td class="convertt">14.7</td>
          <td class="convertrpm">0.15</td>
          <td class="convertt">24.5</td>
          <td class="convertrpm">0.26</td>
          <td class="convert"></td>
          <td class="convert">22</td>
          <td class="convert">44.5</td>
          <td class="convert">21</td>
          <td class="convert">39</td>
          <td class="convert">2</td>
          <td class="convert"></td>
        </tr>
        <tr>
          <td>L095</td>
          <td class="convertt">21.10</td>
          <td class="convertrpm">0.22</td>
          <td class="convertt">31.7</td>
          <td class="convertrpm">0.33</td>
          <td class="convertt">52.8</td>
          <td class="convertrpm">0.55</td>
          <td class="convert"></td>
          <td class="convert">28</td>
          <td class="convert">54</td>
          <td class="convert">25</td>
          <td class="convert">49</td>
          <td class="convert">2</td>
          <td class="convert">19</td>
        </tr>
        <tr>
          <td>L099</td>
          <td class="convertt">46.40</td>
          <td class="convertrpm">0.49</td>
          <td class="convertt">69</td>
          <td class="convertrpm">0.73</td>
          <td class="convertt">116</td>
          <td class="convertrpm">1.2</td>
          <td class="convert"></td>
          <td class="convert">30</td>
          <td class="convert">65</td>
          <td class="convert">27</td>
          <td class="convert">51</td>
          <td class="convert">2</td>
          <td class="convert">27</td>
        </tr>
        <tr>
          <td>L100</td>
          <td class="convertt">46.40</td>
          <td class="convertrpm">0.49</td>
          <td class="convertt">69</td>
          <td class="convertrpm">0.73</td>
          <td class="convertt">116</td>
          <td class="convertrpm">1.2</td>
          <td class="convert"></td>
          <td class="convert">35</td>
          <td class="convert">65</td>
          <td class="convert">35</td>
          <td class="convert">57</td>
          <td class="convert">2</td>
          <td class="convert">27</td>
        </tr>
        <tr>
          <td>L110</td>
          <td class="convertt">89</td>
          <td class="convertrpm">0.93</td>
          <td class="convertt">133</td>
          <td class="convertrpm">1.4</td>
          <td class="convertt">222</td>
          <td class="convertrpm">2.3</td>
          <td class="convert"></td>
          <td class="convert">42</td>
          <td class="convert">85</td>
          <td class="convert">43</td>
          <td class="convert">76</td>
          <td class="convert">3</td>
          <td class="convert">35</td>
        </tr>
        <tr>
          <td>L150</td>
          <td class="convertt">141</td>
          <td class="convertrpm">1.5</td>
          <td class="convertt">211</td>
          <td class="convertrpm">2.2</td>
          <td class="convertt">354</td>
          <td class="convertrpm">3.7</td>
          <td class="convert"></td>
          <td class="convert">48</td>
          <td class="convert">96</td>
          <td class="convert">45</td>
          <td class="convert">80</td>
          <td class="convert">3</td>
          <td class="convert">35</td>
        </tr>
        <tr>
          <td>L190</td>
          <td class="convertt">190</td>
          <td class="convertrpm">2</td>
          <td class="convertt">285</td>
          <td class="convertrpm">3</td>
          <td class="convertt">475</td>
          <td class="convertrpm">5</td>
          <td class="convert"></td>
          <td class="convert">60</td>
          <td class="convert">115</td>
          <td class="convert">54</td>
          <td class="convert">102</td>
          <td class="convert">3</td>
          <td class="convert">45</td>
        </tr>
        <tr>
          <td>L225</td>
          <td class="convertt">265</td>
          <td class="convertrpm">2.8</td>
          <td class="convertt">397</td>
          <td class="convertrpm">4.2</td>
          <td class="convertt">662</td>
          <td class="convertrpm">6.9</td>
          <td class="convert"></td>
          <td class="convert">65</td>
          <td class="convert">127</td>
          <td class="convert">64</td>
          <td class="convert">111</td>
          <td class="convert">3</td>
          <td class="convert">45</td>
        </tr>
        <tr>
          <td>L226</td>
          <td class="convertt">327</td>
          <td class="convertrpm">3.4</td>
          <td class="convertt">490</td>
          <td class="convertrpm">5.1</td>
          <td class="convertt">817</td>
          <td class="convertrpm">8.6</td>
          <td class="convert">25</td>
          <td class="convert">70</td>
          <td class="convert">137</td>
          <td class="convert">70</td>
          <td class="convert">119</td>
          <td class="convert">3</td>
          <td class="convert">51</td>
        </tr>
        <tr>
          <td>L276</td>
          <td class="convertt">532</td>
          <td class="convertrpm">5.6</td>
          <td class="convertt">798</td>
          <td class="convertrpm">8.4</td>
          <td class="convertt">1330</td>
          <td class="convertrpm">13.9</td>
          <td class="convert">25</td>
          <td class="convert">75</td>
          <td class="convert">157</td>
          <td class="convert">80</td>
          <td class="convert">127</td>
          <td class="convert">3</td>
          <td class="convert">60</td>
        </tr>
        <tr>
          <td>L280</td>
          <td class="convertt">782</td>
          <td class="convertrpm">8.2</td>
          <td class="convertt">1173</td>
          <td class="convertrpm">12.3</td>
          <td class="convertt">1955</td>
          <td class="convertrpm">20.5</td>
          <td class="convert">30</td>
          <td class="convert">80</td>
          <td class="convert">192</td>
          <td class="convert">80</td>
          <td class="convert">140</td>
          <td class="convert">3</td>
          <td class="convert">70</td>
        </tr>
        <tr>
          <td>L295</td>
          <td class="convertt">1279</td>
          <td class="convertrpm">13.4</td>
          <td class="convertt">1918</td>
          <td class="convertrpm">20.1</td>
          <td class="convertt">3197</td>
          <td class="convertrpm">33.5</td>
          <td class="convert">30</td>
          <td class="convert">95</td>
          <td class="convert">237</td>
          <td class="convert">95</td>
          <td class="convert">162</td>
          <td class="convert">3</td>
          <td class="convert">80</td>
        </tr>
        <tr>
          <td>L2955</td>
          <td class="convertt">2132</td>
          <td class="convertrpm">22.3</td>
          <td class="convertt">3198</td>
          <td class="convertrpm">33.5</td>
          <td class="convertt">5330</td>
          <td class="convertrpm">55.8</td>
          <td class="convert">30</td>
          <td class="convert">105</td>
          <td class="convert">237</td>
          <td class="convert">108</td>
          <td class="convert">180</td>
          <td class="convert">3</td>
          <td class="convert">80</td>
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
      <li>Sintered iron for sizes 035 to 075</li>
      <li>Aluminum for sizes 050 to 110</li>
      <li>Cast Iron for sizes 095 to 350</li>
      <li>* 075 - Aluminium</li>
      <li>** 075 - Sintered Iron</li>
    </ul>
    <br>

    <h4>Spider</h4>
    <ul>
      <li>Polyurethane for sizes 050 to 295</li>
      <li>Hytrel for sizes 050 to 225</li>
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