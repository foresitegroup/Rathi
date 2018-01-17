<?php
$PageTitle = "Elastomeric Coupling - Straight Jaw / H and HR Types";
include "header.php";
?>

<div class="product-header-half">
  <div class="product-header">
    <div class="site-width">
      <h2>Elastomeric Coupling</h2>
      <h1>Straight Jaw / H &amp; HR Types</h1>
      Straight Jaw with Individual Flexing Inserts and Collars
      <em>Compare to Lovejoy&reg; H Type</em>
    </div>
  </div>

  <div class="site-width">
    <div class="left">
      <ul>
        <li>Individual free-floating load cushions held in place by outside steel collar</li>
        <li>Completely machined castings</li>
        <li>Easy to assemble &amp; disassemble</li>
        <li>Cushions easily inspected at all times</li>
        <li>Material of construction - C.I. for Size 307 to 367; S.G. Iron Size 407 to 1117</li>
        <li>For pumps in chemical industry, ideal for reciprocating pumps, diesel or gas engines, multiple generator sets and such heavy duty applications</li>
      </ul>
    </div>

    <div class="right">
      <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
      <script type="text/javascript" src="inc/jquery.cycle2.carousel.min.js"></script>

      <div class="cycle-slideshow" data-cycle-fx="carousel" data-cycle-timeout="0" data-cycle-slides="> div" data-cycle-carousel-visible="1" data-cycle-carousel-fluid="true" data-cycle-next="#next" data-cycle-prev="#prev" data-cycle-pager="#pager,#number-pager" data-cycle-pager-template="<a href='#'>{{slideNum}}</a>">
        <div style="background-image: url(images/h-hr-fig1.jpg);"></div>
        <div style="background-image: url(images/h-hr-fig2.jpg);"></div>

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
    
    <script type="text/javascript">var rpmdec = 0; dec = 3;</script>
    <script type="text/javascript" src="inc/scale-convert.js"></script>

    <div class="system-toggle">
      Units:
      <a href="#" class="convertimp">Imperial</a> / <a href="#" class="convertmet">Metric</a>
    </div>

    <table class="eleven">
      <thead>
        <tr>
          <th rowspan="2">Coupling Size</th>
          <th rowspan="2">Rated Torque (<span class="scalet">N-m</span>)</th>
          <th rowspan="2"><span class="scalerpm">kW</span> at 100 RPM (Synthetic)</th>
          <th colspan="2">Bore (<span class="scale">mm</span>)</th>
          <th rowspan="2">Outside Diameter &Oslash;A (<span class="scale">mm</span>)</th>
          <th rowspan="2">Hub Diameter &Oslash;B (<span class="scale">mm</span>)</th>
          <th rowspan="2">Length thru Bore C (<span class="scale">mm</span>)</th>
          <th rowspan="2">Overall Length L (<span class="scale">mm</span>)</th>
          <th colspan="2">Approximate Weight</th>
        </tr>
        <tr>
          <th class="blue">Min.</th>
          <th class="blue">Max.</th>
          <th class="blue">Min. Bore (<span class="scalew">kg</span>)</th>
          <th class="blue">Max. Bore (<span class="scalew">kg</span>)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>H-307</td>
          <td class="convertt">5307</td>
          <td class="convertrpm">56</td>
          <td class="convert">60</td>
          <td class="convert">105</td>
          <td class="convert">262</td>
          <td class="convert">180</td>
          <td class="convert">121</td>
          <td class="convert">295</td>
          <td class="convertw">58</td>
          <td class="convertw">55</td>
        </tr>
        <tr>
          <td>H-357</td>
          <td class="convertt">7124</td>
          <td class="convertrpm">75</td>
          <td class="convert">60</td>
          <td class="convert">115</td>
          <td class="convert">288</td>
          <td class="convert">197</td>
          <td class="convert">127</td>
          <td class="convert">314</td>
          <td class="convertw">73</td>
          <td class="convertw">67</td>
        </tr>

        <tr>
          <td>H-367</td>
          <td class="convertt">9903</td>
          <td class="convertrpm">104</td>
          <td class="convert">70</td>
          <td class="convert">130</td>
          <td class="convert">313</td>
          <td class="convert">222</td>
          <td class="convert">143</td>
          <td class="convert">353</td>
          <td class="convertw">105</td>
          <td class="convertw">99</td>
        </tr>
      </tbody>
    </table>
    <br>
    <br>

    <table class="fourteen">
      <thead>
        <tr>
          <th rowspan="3">Coupling Size</th>
          <th colspan="3"><span class="scalerpm">kW</span> at 100 RPM</th>
          <th rowspan="3">DBSE (<span class="scale">mm</span>)</th>
          <th colspan="2">Min. Bore (<span class="scale">mm</span>)</th>
          <th colspan="2">Max. Bore (<span class="scale">mm</span>)</th>
          <th rowspan="2">Diameter (<span class="scale">mm</span>)</th>
          <th colspan="2">Outside Hub Diameter (<span class="scale">mm</span>)</th>
          <th colspan="2">Length thru Bore (<span class="scale">mm</span>)</th>
        </tr>
        <tr>
          <th rowspan="2" class="blue">Synthetic Rubber</th>
          <th rowspan="2" class="blue">PU</th>
          <th rowspan="2" class="blue">Hytrel</th>
          <th rowspan="2" class="blue">Hub Type I</th>
          <th rowspan="2" class="blue">Hub Type II</th>
          <th rowspan="2" class="blue">Hub Type I</th>
          <th rowspan="2" class="blue">Hub Type II</th>
          <th class="blue">Hub Type I</th>
          <th class="blue">Hub Type II</th>
          <th class="blue">Hub Type I</th>
          <th class="blue">Hub Type II</th>
        </tr>
        <tr>
          <th class="blue">&Oslash;A</th>
          <th>&Oslash;E1</th>
          <th>&Oslash;E2</th>
          <th>D1</th>
          <th>D2</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>HR-307</td>
          <td class="convertrpm">56</td>
          <td class="convertrpm">84</td>
          <td class="convertrpm">140</td>
          <td class="convert">100</td>
          <td class="convert">30</td>
          <td class="convert">60</td>
          <td class="convert">80</td>
          <td class="convert">105</td>
          <td class="convert">266</td>
          <td class="convert">131</td>
          <td class="convert">170</td>
          <td class="convert">68</td>
          <td class="convert">85</td>
        </tr>
        <tr>
          <td>HR-357</td>
          <td class="convertrpm">75</td>
          <td class="convertrpm">112</td>
          <td class="convertrpm">187</td>
          <td class="convert">110</td>
          <td class="convert">35</td>
          <td class="convert">60</td>
          <td class="convert">85</td>
          <td class="convert">115</td>
          <td class="convert">292</td>
          <td class="convert">138</td>
          <td class="convert">180</td>
          <td class="convert">76</td>
          <td class="convert">95</td>
        </tr>
        <tr>
          <td>HR-367</td>
          <td class="convertrpm">104</td>
          <td class="convertrpm">156</td>
          <td class="convertrpm">260</td>
          <td class="convert">117</td>
          <td class="convert">40</td>
          <td class="convert">70</td>
          <td class="convert">100</td>
          <td class="convert">130</td>
          <td class="convert">317</td>
          <td class="convert">162</td>
          <td class="convert">210</td>
          <td class="convert">84</td>
          <td class="convert">105</td>
        </tr>
        <tr>
          <td>HR-407</td>
          <td class="convertrpm"></td>
          <td class="convertrpm">223</td>
          <td class="convertrpm">372</td>
          <td class="convert">126</td>
          <td class="convert">50</td>
          <td class="convert">85</td>
          <td class="convert">120</td>
          <td class="convert">155</td>
          <td class="convert">349</td>
          <td class="convert">195</td>
          <td class="convert">248</td>
          <td class="convert">95</td>
          <td class="convert">120</td>
        </tr>
        <tr>
          <td>HR-457</td>
          <td class="convertrpm"></td>
          <td class="convertrpm">302</td>
          <td class="convertrpm">502</td>
          <td class="convert">134</td>
          <td class="convert">60</td>
          <td class="convert">85</td>
          <td class="convert">140</td>
          <td class="convert">185</td>
          <td class="convert">400</td>
          <td class="convert">220</td>
          <td class="convert">294</td>
          <td class="convert">100</td>
          <td class="convert">130</td>
        </tr>
        <tr>
          <td>HR-509</td>
          <td class="convertrpm"></td>
          <td class="convertrpm">358</td>
          <td class="convertrpm">597</td>
          <td class="convert">133</td>
          <td class="convert">70</td>
          <td class="convert">90</td>
          <td class="convert">145</td>
          <td class="convert">190</td>
          <td class="convert">412</td>
          <td class="convert">230</td>
          <td class="convert">305</td>
          <td class="convert">110</td>
          <td class="convert">140</td>
        </tr>
        <tr>
          <td>HR-609</td>
          <td class="convertrpm"></td>
          <td class="convertrpm">527</td>
          <td class="convertrpm">877</td>
          <td class="convert">142</td>
          <td class="convert">85</td>
          <td class="convert">100</td>
          <td class="convert">170</td>
          <td class="convert">225</td>
          <td class="convert">461</td>
          <td class="convert">275</td>
          <td class="convert">360</td>
          <td class="convert">130</td>
          <td class="convert">170</td>
        </tr>
        <tr>
          <td>HR-709</td>
          <td class="convertrpm"></td>
          <td class="convertrpm">738</td>
          <td class="convertrpm">1230</td>
          <td class="convert">162</td>
          <td class="convert">90</td>
          <td class="convert">100</td>
          <td class="convert">190</td>
          <td class="convert">265</td>
          <td class="convert">524</td>
          <td class="convert">300</td>
          <td class="convert">425</td>
          <td class="convert">140</td>
          <td class="convert">195</td>
        </tr>
        <tr>
          <td>HR-809</td>
          <td class="convertrpm"></td>
          <td class="convertrpm"></td>
          <td class="convertrpm">1530</td>
          <td class="convert">196</td>
          <td class="convert">100</td>
          <td class="convert">120</td>
          <td class="convert">215</td>
          <td class="convert">295</td>
          <td class="convert">600</td>
          <td class="convert">345</td>
          <td class="convert">470</td>
          <td class="convert">155</td>
          <td class="convert">210</td>
        </tr>
        <tr>
          <td>HR-911</td>
          <td class="convertrpm"></td>
          <td class="convertrpm"></td>
          <td class="convertrpm">1770</td>
          <td class="convert">216</td>
          <td class="convert">110</td>
          <td class="convert">170</td>
          <td class="convert">265</td>
          <td class="convert">340</td>
          <td class="convert">667</td>
          <td class="convert">420</td>
          <td class="convert">545</td>
          <td class="convert">190</td>
          <td class="convert">240</td>
        </tr>
        <tr>
          <td>HR-1013</td>
          <td class="convertrpm"></td>
          <td class="convertrpm"></td>
          <td class="convertrpm">2644</td>
          <td class="convert">218</td>
          <td class="convert">195</td>
          <td class="convert"></td>
          <td class="convert">360</td>
          <td class="convert"></td>
          <td class="convert">805</td>
          <td class="convert">540</td>
          <td class="convert"></td>
          <td class="convert">340</td>
          <td class="convert"></td>
        </tr>
        <tr>
          <td>HR-1015</td>
          <td class="convertrpm"></td>
          <td class="convertrpm"></td>
          <td class="convertrpm">3665</td>
          <td class="convert">235</td>
          <td class="convert">215</td>
          <td class="convert"></td>
          <td class="convert">420</td>
          <td class="convert"></td>
          <td class="convert">910</td>
          <td class="convert">630</td>
          <td class="convert"></td>
          <td class="convert">340</td>
          <td class="convert"></td>
        </tr>
        <tr>
          <td>HR-1115</td>
          <td class="convertrpm"></td>
          <td class="convertrpm"></td>
          <td class="convertrpm">4450</td>
          <td class="convert">245</td>
          <td class="convert">240</td>
          <td class="convert"></td>
          <td class="convert">500</td>
          <td class="convert"></td>
          <td class="convert">960</td>
          <td class="convert">750</td>
          <td class="convert"></td>
          <td class="convert">375</td>
          <td class="convert"></td>
        </tr>
        <tr>
          <td>HR-1117</td>
          <td class="convertrpm"></td>
          <td class="convertrpm"></td>
          <td class="convertrpm">6807</td>
          <td class="convert">276</td>
          <td class="convert">290</td>
          <td class="convert"></td>
          <td class="convert">600</td>
          <td class="convert"></td>
          <td class="convert">1170</td>
          <td class="convert">900</td>
          <td class="convert"></td>
          <td class="convert">400</td>
          <td class="convert"></td>
        </tr>
      </tbody>
    </table>

    <br>

    <ul>
      <li>Maintain Gap G = <span class="convert">3</span> <span class="scale">mm</span> for size HR457 &amp; <span class="convert">6</span> <span class="scale">mm</span> for higher sizes at the time of assembly.</li>
      <li>Please specify hub type required.</li>
      <li>Non standard DBSE spacer available on request.</li>
      <li>For vertical installation contact RATHI.</li>
    </ul>
  </div>
</div>

<?php include "footer.php"; ?>