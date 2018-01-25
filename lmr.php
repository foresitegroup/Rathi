<?php
$PageTitle = "Metallic Coupling - Disc / LMR Type";
include "header.php";
?>

<div class="product-header-half">
  <div class="product-header">
    <div class="site-width">
      <h2>Metallic Coupling</h2>
      <h1>Disc / LMR Type</h1>
      Close DBSE Coupling
    </div>
  </div>

  <div class="site-width">
    <div class="left">
      Weight, inertia, and torsional stiffness are based on maximum bores and standard DBSE
    </div>

    <div class="right">
      <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
      <script type="text/javascript" src="inc/jquery.cycle2.carousel.min.js"></script>

      <div class="cycle-slideshow" data-cycle-fx="carousel" data-cycle-timeout="0" data-cycle-slides="> div" data-cycle-carousel-visible="1" data-cycle-carousel-fluid="true" data-cycle-next="#next" data-cycle-prev="#prev" data-cycle-pager="#pager,#number-pager" data-cycle-pager-template="<a href='#'>{{slideNum}}</a>">
        <div style="background-image: url(images/lmr-fig1.jpg);"></div>
        <div style="background-image: url(images/lmr-fig2.jpg);"></div>
        <div style="background-image: url(images/lmr-fig3.jpg);"></div>

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
          <th rowspan="2">Max Speed (RPM)</th>
          <th colspan="2">Bore (<span class="scale">mm</span>)</th>
          <th rowspan="2">DBSE G (<span class="scale">mm</span>)</th>
          <th rowspan="2">C (<span class="scale">mm</span>)</th>
          <th rowspan="2">&Oslash;A (<span class="scale">mm</span>)</th>
          <th rowspan="2">M (<span class="scale">mm</span>)</th>
          <th rowspan="2">Weight (<span class="scalew">kg</span>)</th>
          <th rowspan="2">Torsional Stiffness (<span data-met="N-m" data-imp="in-lbs"></span> / rad)</th>
          <th colspan="3">Misalignment Capacity</th>
        </tr>
        <tr>
          <th class="blue">Min</th>
          <th class="blue">Max</th>
          <th class="blue">Axial &plusmn; (<span class="scale">mm</span>)</th>
          <th class="blue">Angual (deg)</th>
          <th class="blue">Radial &plusmn; (<span class="scale">mm</span>)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>5</td>
          <td class="convertrpm">0.4</td>
          <td class="convertt">33</td>
          <td>7500</td>
          <td class="convert">8</td>
          <td class="convert">16</td>
          <td class="convert">3</td>
          <td class="convert">28</td>
          <td class="convert">55</td>
          <td class="convert">70</td>
          <td class="convertw">0.54</td>
          <td data-met="0.010" data-imp="8.86E+04"></td>
          <td class="convert">1</td>
          <td>0.75</td>
          <td class="convert">0.57</td>
        </tr>
        <tr>
          <td>10</td>
          <td class="convertrpm">0.7</td>
          <td class="convertt">64</td>
          <td>7500</td>
          <td class="convert">10</td>
          <td class="convert">19</td>
          <td class="convert">3</td>
          <td class="convert">30</td>
          <td class="convert">63</td>
          <td class="convert">75</td>
          <td class="convertw">0.75</td>
          <td data-met="0.190" data-imp="1.68E+06"></td>
          <td class="convert">1</td>
          <td>0.75</td>
          <td class="convert">0.58</td>
        </tr>
        <tr>
          <td>35</td>
          <td class="convertrpm">1.7</td>
          <td class="convertt">159</td>
          <td>7000</td>
          <td class="convert">12</td>
          <td class="convert">25</td>
          <td class="convert">3</td>
          <td class="convert">32</td>
          <td class="convert">82</td>
          <td class="convert">80</td>
          <td class="convertw">1.38</td>
          <td data-met="0.047" data-imp="4.16E+05"></td>
          <td class="convert">1</td>
          <td>0.75</td>
          <td class="convert">0.63</td>
        </tr>
        <tr>
          <td>95</td>
          <td class="convertrpm">5.4</td>
          <td class="convertt">516</td>
          <td>6000</td>
          <td class="convert">17</td>
          <td class="convert">30</td>
          <td class="convert">3</td>
          <td class="convert">48</td>
          <td class="convert">102</td>
          <td class="convert">105</td>
          <td class="convertw">3.33</td>
          <td data-met="0.083" data-imp="7.35E+05"></td>
          <td class="convert">1</td>
          <td>0.75</td>
          <td class="convert">0.92</td>
        </tr>
        <tr>
          <td>170</td>
          <td class="convertrpm">9</td>
          <td class="convertt">859</td>
          <td>5200</td>
          <td class="convert">17</td>
          <td class="convert">42</td>
          <td class="convert">3</td>
          <td class="convert">54</td>
          <td class="convert">128</td>
          <td class="convert">120</td>
          <td class="convertw">5.61</td>
          <td data-met="0.215" data-imp="1.90E+06"></td>
          <td class="convert">1</td>
          <td>0.75</td>
          <td class="convert">1.06</td>
        </tr>
        <tr>
          <td>220</td>
          <td class="convertrpm">14</td>
          <td class="convertt">1337</td>
          <td>4800</td>
          <td class="convert">22</td>
          <td class="convert">54</td>
          <td class="convert">3</td>
          <td class="convert">67</td>
          <td class="convert">146</td>
          <td class="convert">145</td>
          <td class="convertw">9.21</td>
          <td data-met="0.365" data-imp="3.23E+06"></td>
          <td class="convert">1</td>
          <td>0.75</td>
          <td class="convert">1.32</td>
        </tr>
        <tr>
          <td>400</td>
          <td class="convertrpm">25</td>
          <td class="convertt">2387</td>
          <td>4400</td>
          <td class="convert">27</td>
          <td class="convert">63</td>
          <td class="convert">5</td>
          <td class="convert">76</td>
          <td class="convert">176</td>
          <td class="convert">164</td>
          <td class="convertw">15.97</td>
          <td data-met="0.707" data-imp="6.26E+06"></td>
          <td class="convert">1</td>
          <td>0.75</td>
          <td class="convert">1.51</td>
        </tr>
        <tr>
          <td>520</td>
          <td class="convertrpm">35</td>
          <td class="convertt">3342</td>
          <td>4200</td>
          <td class="convert">32</td>
          <td class="convert">80</td>
          <td class="convert">5</td>
          <td class="convert">85</td>
          <td class="convert">197</td>
          <td class="convert">190</td>
          <td class="convertw">24.06</td>
          <td data-met="0.967" data-imp="8.57E+06"></td>
          <td class="convert">2</td>
          <td>0.75</td>
          <td class="convert">1.63</td>
        </tr>
        <tr>
          <td>1000</td>
          <td class="convertrpm">53</td>
          <td class="convertt">5061</td>
          <td>4000</td>
          <td class="convert">42</td>
          <td class="convert">86</td>
          <td class="convert">6</td>
          <td class="convert">95</td>
          <td class="convert">225</td>
          <td class="convert">205</td>
          <td class="convertw">33.91</td>
          <td data-met="1.701" data-imp="1.51E+07"></td>
          <td class="convert">2</td>
          <td>0.75</td>
          <td class="convert">1.83</td>
        </tr>
        <tr>
          <td>1300</td>
          <td class="convertrpm">75</td>
          <td class="convertt">7162</td>
          <td>3800</td>
          <td class="convert">47</td>
          <td class="convert">95</td>
          <td class="convert">6</td>
          <td class="convert">102</td>
          <td class="convert">250</td>
          <td class="convert">225</td>
          <td class="convertw">45.22</td>
          <td data-met="2.400" data-imp="2.13E+07"></td>
          <td class="convert">2</td>
          <td>0.75</td>
          <td class="convert">1.91</td>
        </tr>
        <tr>
          <td>2000</td>
          <td class="convertrpm">105</td>
          <td class="convertt">10027</td>
          <td>3700</td>
          <td class="convert">52</td>
          <td class="convert">104</td>
          <td class="convert">6</td>
          <td class="convert">108</td>
          <td class="convert">275</td>
          <td class="convert">235</td>
          <td class="convertw">58.3</td>
          <td data-met="3.074" data-imp="2.72E+07"></td>
          <td class="convert">2</td>
          <td>0.75</td>
          <td class="convert">1.99</td>
        </tr>
        <tr>
          <td>2500</td>
          <td class="convertrpm">140</td>
          <td class="convertt">13369</td>
          <td>3600</td>
          <td class="convert">62</td>
          <td class="convert">110</td>
          <td class="convert">8</td>
          <td class="convert">125</td>
          <td class="convert">300</td>
          <td class="convert">265</td>
          <td class="convertw">81.42</td>
          <td data-met="3.728" data-imp="3.30E+07"></td>
          <td class="convert">2</td>
          <td>0.75</td>
          <td class="convert">2.38</td>
        </tr>
        <tr>
          <td>2700 A</td>
          <td class="convertrpm">231.8</td>
          <td class="convertt">22133</td>
          <td>4200</td>
          <td class="convert">80</td>
          <td class="convert">140</td>
          <td class="convert">8</td>
          <td class="convert">127</td>
          <td class="convert">342</td>
          <td class="convert">210</td>
          <td class="convertw">83.11</td>
          <td data-met="4.855" data-imp="4.30E+07"></td>
          <td class="convert">9.5</td>
          <td>0.5</td>
          <td class="convert">1.9</td>
        </tr>
        <tr>
          <td>3400 A</td>
          <td class="convertrpm">322.1</td>
          <td class="convertt">30755</td>
          <td>3800</td>
          <td class="convert">80</td>
          <td class="convert">160</td>
          <td class="convert">10</td>
          <td class="convert">148</td>
          <td class="convert">372</td>
          <td class="convert">240</td>
          <td class="convertw">113.46</td>
          <td data-met="6.635" data-imp="5.88E+07"></td>
          <td class="convert">10</td>
          <td>0.5</td>
          <td class="convert">2.25</td>
        </tr>
        <tr>
          <td>4400 A</td>
          <td class="convertrpm">372.4</td>
          <td class="convertt">35560</td>
          <td>3300</td>
          <td class="convert">80</td>
          <td class="convert">180</td>
          <td class="convert">10</td>
          <td class="convert">153</td>
          <td class="convert">422</td>
          <td class="convert">250</td>
          <td class="convertw">145.46</td>
          <td data-met="8.349" data-imp="7.40E+07"></td>
          <td class="convert">12</td>
          <td>0.5</td>
          <td class="convert">2.34</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<?php include "footer.php"; ?>