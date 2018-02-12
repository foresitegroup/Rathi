<?php
$PageTitle = "Pin and Bushing Coupling - B-Flex / RB Type";
include "header.php";
?>

<div class="product-header-half">
  <div class="product-header">
    <div class="site-width">
      <h2>Pin and Bushing Coupling</h2>
      <h1>B-Flex / RB Type</h1>
    </div>
  </div>

  <div class="site-width">
    <div class="left">
      <h3>Simplicity of Construction</h3>
      <ul>
        <li>Easy to assemble and disassemble</li>
        <li>Suitable for independent running of the drive</li>
      </ul>
      <br>

      <h3>Varying Stiffness Characteristics</h3>
      <ul>
        <li>Special barrel shaped bushes provide progressively increasing stiffness characteristics and provides effective shock / vibration absorption</li>
      </ul>
      <br>

      <h3>No Lubrication</h3>
      <ul>
        <li>B-flex couplings never require lubrication</li>
      </ul>
      <br>

      <h3>Simple / Easy Maintenance</h3>
      <ul>
        <li>No complicated adjustment or maintenance</li>
        <li>Inspection and replacement of bushings is easy</li>
        <li>Bushes can be quickly fitted without dismantling or moving either of coupled shafts</li>
      </ul>
      <br>

      <h3>Low Operational Cost</h3>
      <ul>
        <li>Only wearing part is low cost bushes which make coupling economical in long run</li>
      </ul>
      <br>

      <h3>Smooth &amp; Quiet Operation</h3>
      <ul>
        <li>Reduces vibration and noise arising from severe torque fluctuations</li>
      </ul>
    </div>

    <div class="right">
      <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
      <script type="text/javascript" src="inc/jquery.cycle2.carousel.min.js"></script>

      <div class="cycle-slideshow" data-cycle-fx="carousel" data-cycle-timeout="0" data-cycle-slides="> div" data-cycle-carousel-visible="1" data-cycle-carousel-fluid="true" data-cycle-next="#next" data-cycle-prev="#prev" data-cycle-pager="#pager,#number-pager" data-cycle-pager-template="<a href='#'>{{slideNum}}</a>">
        <div style="background-image: url(images/rb-fig1.jpg);"></div>
        <div style="background-image: url(images/rb-fig2.jpg);"></div>
        <div style="background-image: url(images/rb-fig3.jpg);"></div>
        <div style="background-image: url(images/rb-fig4.jpg);"></div>
        <div style="background-image: url(images/rb-fig5.jpg);"></div>

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

      <a href="pdf/RB_Spec_Sheet.pdf" class="specsheet">Download Spec Sheet <i class="fa fa-download" aria-hidden="true"></i></a>
    </div>
  </div>
</div>

<div class="product-details">
  <div class="site-width">
    <h3>Details &amp; Specs</h3>
    
    <script type="text/javascript">var rpmdecm = 0; var idecm = 4;</script>
    <script type="text/javascript" src="inc/scale-convert.js"></script>

    <div class="system-toggle">
      Units:
      <a href="#" class="convertimp">Imperial</a> / <a href="#" class="convertmet">Metric</a>
    </div>

    <table class="seventeen small">
      <thead>
        <tr>
          <th rowspan="2">Coupling Size</th>
          <th rowspan="2"><span class="scalerpm">kW</span> at 100 RPM</th>
          <th rowspan="2">Torque (<span class="scalet">N-m</span>)</th>
          <th rowspan="2">Max Speed (RPM)</th>
          <th rowspan="2">Min. Bore (<span class="scale">mm</span>)</th>
          <th colspan="2">Max. Bore (<span class="scale">mm</span>)</th>
          <th rowspan="2">&Oslash;A (<span class="scale">mm</span>)</th>
          <th rowspan="2">&Oslash;D1 (<span class="scale">mm</span>)</th>
          <th rowspan="2">&Oslash;D2 (<span class="scale">mm</span>)</th>
          <th rowspan="2">L (<span class="scale">mm</span>)</th>
          <th rowspan="2">S (<span class="scale">mm</span>)</th>
          <th rowspan="2">Weight (<span class="scalew">kg</span>)</th>
          <th rowspan="2">MI (WR&sup2;) (<span class="scalei">kgm2</span>)</th>
          <th colspan="3">Max. Misalignment (&plusmn;)</th>
        </tr>
        <tr>
          <th class="blue">&Oslash;B1</th>
          <th class="blue">&Oslash;B2</th>
          <th class="blue">Axial (<span class="scale">mm</span>)</th>
          <th class="blue">Radial (<span class="scale">mm</span>)</th>
          <th class="blue">Angular (deg)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>RB-105-3</td>
          <td class="convertrpm">1.0</td>
          <td class="convertt">95</td>
          <td>7200</td>
          <td class="convert">11</td>
          <td class="convert">30</td>
          <td class="convert">32</td>
          <td class="convert">105</td>
          <td class="convert">48</td>
          <td class="convert">50</td>
          <td class="convert">45</td>
          <td><span class="convert">2</span>-<span class="convert">6</span></td>
          <td class="convertw">2</td>
          <td class="converti">0.0030</td>
          <td class="convert">2</td>
          <td class="convert" data-orig="0.3">0.3</td>
          <td>1</td>
        </tr>
        <tr>
          <td>RB-116-4</td>
          <td class="convertrpm" data-orig="2">1.5</td>
          <td class="convertt">146</td>
          <td>6100</td>
          <td class="convert">12</td>
          <td class="convert">39</td>
          <td class="convert">42</td>
          <td class="convert">116</td>
          <td class="convert">60</td>
          <td class="convert">68</td>
          <td class="convert">45</td>
          <td><span class="convert">2</span>-<span class="convert">6</span></td>
          <td class="convertw">2.6</td>
          <td class="converti">0.0050</td>
          <td class="convert">2</td>
          <td class="convert" data-orig="0.3">0.3</td>
          <td>1</td>
        </tr>
        <tr>
          <td>RB-125-4</td>
          <td class="convertrpm" data-orig="2">1.7</td>
          <td class="convertt">166</td>
          <td>5500</td>
          <td class="convert">14</td>
          <td class="convert">45</td>
          <td class="convert">50</td>
          <td class="convert">125</td>
          <td class="convert">68</td>
          <td class="convert">78</td>
          <td class="convert">50</td>
          <td><span class="convert">2</span>-<span class="convert">6</span></td>
          <td class="convertw">3.1</td>
          <td class="converti">0.0070</td>
          <td class="convert">2</td>
          <td class="convert" data-orig="0.4">0.4</td>
          <td>1</td>
        </tr>
        <tr>
          <td>RB-144-6</td>
          <td class="convertrpm" data-orig="3">3.3</td>
          <td class="convertt">318</td>
          <td>4900</td>
          <td class="convert">18</td>
          <td class="convert">50</td>
          <td class="convert">60</td>
          <td class="convert">144</td>
          <td class="convert">82</td>
          <td class="convert">91</td>
          <td class="convert">55</td>
          <td><span class="convert">2</span>-<span class="convert">6</span></td>
          <td class="convertw">4.3</td>
          <td class="converti">0.012</td>
          <td class="convert">2</td>
          <td class="convert" data-orig="0.4">0.4</td>
          <td>1</td>
        </tr>
        <tr>
          <td>RB-162-6</td>
          <td class="convertrpm" data-orig="6">5.5</td>
          <td class="convertt">525</td>
          <td>4500</td>
          <td class="convert">22</td>
          <td class="convert">60</td>
          <td class="convert">65</td>
          <td class="convert">162</td>
          <td class="convert">89</td>
          <td class="convert">100</td>
          <td class="convert">60</td>
          <td><span class="convert">2</span>-<span class="convert">6</span></td>
          <td class="convertw" data-orig="8">7.5</td>
          <td class="converti">0.030</td>
          <td class="convert">2</td>
          <td class="convert" data-orig="0.4">0.4</td>
          <td>1</td>
        </tr>
        <tr>
          <td>RB-178-6</td>
          <td class="convertrpm" data-orig="7">6.7</td>
          <td class="convertt">643</td>
          <td>3800</td>
          <td class="convert">24</td>
          <td class="convert">70</td>
          <td class="convert">75</td>
          <td class="convert">178</td>
          <td class="convert">105</td>
          <td class="convert">115</td>
          <td class="convert">70</td>
          <td><span class="convert">2</span>-<span class="convert">6</span></td>
          <td class="convertw">10</td>
          <td class="converti">0.040</td>
          <td class="convert">2</td>
          <td class="convert" data-orig="0.5">0.5</td>
          <td>1</td>
        </tr>
        <tr>
          <td>RB-198-10</td>
          <td class="convertrpm">13</td>
          <td class="convertt">1248</td>
          <td>3400</td>
          <td class="convert">28</td>
          <td class="convert">80</td>
          <td class="convert">90</td>
          <td class="convert">198</td>
          <td class="convert">124</td>
          <td class="convert">135</td>
          <td class="convert">80</td>
          <td><span class="convert">2</span>-<span class="convert">6</span></td>
          <td class="convertw">13</td>
          <td class="converti">0.062</td>
          <td class="convert">2</td>
          <td class="convert" data-orig="0.5">0.5</td>
          <td>1</td>
        </tr>
        <tr>
          <td>RB-228-11</td>
          <td class="convertrpm">21</td>
          <td class="convertt">2050</td>
          <td>3000</td>
          <td class="convert">28</td>
          <td class="convert">90</td>
          <td class="convert">100</td>
          <td class="convert">228</td>
          <td class="convert">133</td>
          <td class="convert">146</td>
          <td class="convert">90</td>
          <td><span class="convert">4</span>-<span class="convert">10</span></td>
          <td class="convertw">18</td>
          <td class="converti">0.100</td>
          <td class="convert">3</td>
          <td class="convert" data-orig="0.6">0.6</td>
          <td>1</td>
        </tr>
        <tr>
          <td>RB-252-12</td>
          <td class="convertrpm">32</td>
          <td class="convertt">3069</td>
          <td>2700</td>
          <td class="convert">38</td>
          <td class="convert">105</td>
          <td class="convert">115</td>
          <td class="convert">252</td>
          <td class="convert">156</td>
          <td class="convert">167</td>
          <td class="convert">100</td>
          <td><span class="convert">4</span>-<span class="convert">10</span></td>
          <td class="convertw">24</td>
          <td class="converti">0.17</td>
          <td class="convert">3</td>
          <td class="convert" data-orig="0.6">0.6</td>
          <td>1</td>
        </tr>
        <tr>
          <td>RB-285-11</td>
          <td class="convertrpm">48</td>
          <td class="convertt">4552</td>
          <td>2400</td>
          <td class="convert">48</td>
          <td class="convert">115</td>
          <td class="convert">125</td>
          <td class="convert">285</td>
          <td class="convert">170</td>
          <td class="convert">186</td>
          <td class="convert">110</td>
          <td><span class="convert">4</span>-<span class="convert">10</span></td>
          <td class="convertw">35</td>
          <td class="converti">0.31</td>
          <td class="convert">3</td>
          <td class="convert" data-orig="0.7">0.7</td>
          <td>1</td>
        </tr>
        <tr>
          <td>RB-320-12</td>
          <td class="convertrpm">64</td>
          <td class="convertt">6099</td>
          <td>2100</td>
          <td class="convert">55</td>
          <td class="convert">125</td>
          <td class="convert">135</td>
          <td class="convert">320</td>
          <td class="convert">196</td>
          <td class="convert">212</td>
          <td class="convert">125</td>
          <td><span class="convert">4</span>-<span class="convert">10</span></td>
          <td class="convertw">51</td>
          <td class="converti">0.53</td>
          <td class="convert">3</td>
          <td class="convert" data-orig="0.7">0.7</td>
          <td>1</td>
        </tr>
        <tr>
          <td>RB-360-11</td>
          <td class="convertrpm">93</td>
          <td class="convertt">8900</td>
          <td>1900</td>
          <td class="convert">65</td>
          <td class="convert">135</td>
          <td class="convert">150</td>
          <td class="convert">360</td>
          <td class="convert">212</td>
          <td class="convert">232</td>
          <td class="convert">140</td>
          <td><span class="convert">4</span>-<span class="convert">12</span></td>
          <td class="convertw">73</td>
          <td class="converti">1.02</td>
          <td class="convert">4</td>
          <td class="convert" data-orig="0.9">0.9</td>
          <td>1</td>
        </tr>
        <tr>
          <td>RB-400-10</td>
          <td class="convertrpm">126</td>
          <td class="convertt">12051</td>
          <td>1700</td>
          <td class="convert">75</td>
          <td class="convert">160</td>
          <td class="convert">160</td>
          <td class="convert">410</td>
          <td class="convert">230</td>
          <td class="convert">230</td>
          <td class="convert">160</td>
          <td><span class="convert">4</span>-<span class="convert">12</span></td>
          <td class="convertw">101</td>
          <td class="converti">1.70</td>
          <td class="convert">4</td>
          <td class="convert">1.1</td>
          <td>1</td>
        </tr>
        <tr>
          <td>RB-450-12</td>
          <td class="convertrpm">195</td>
          <td class="convertt">18602</td>
          <td>1500</td>
          <td class="convert">85</td>
          <td class="convert">180</td>
          <td class="convert">180</td>
          <td class="convert">450</td>
          <td class="convert">260</td>
          <td class="convert">260</td>
          <td class="convert">180</td>
          <td><span class="convert">4</span>-<span class="convert">12</span></td>
          <td class="convertw">137</td>
          <td class="converti">2.90</td>
          <td class="convert">4</td>
          <td class="convert">1.1</td>
          <td>0.5</td>
        </tr>
        <tr>
          <td>RB-500-14</td>
          <td class="convertrpm">270</td>
          <td class="convertt">25802</td>
          <td>1350</td>
          <td class="convert">95</td>
          <td class="convert">200</td>
          <td class="convert">200</td>
          <td class="convert">500</td>
          <td class="convert">290</td>
          <td class="convert">290</td>
          <td class="convert">200</td>
          <td><span class="convert">4</span>-<span class="convert">12</span></td>
          <td class="convertw">180</td>
          <td class="converti">4.70</td>
          <td class="convert">4</td>
          <td class="convert">1.1</td>
          <td>0.4</td>
        </tr>
        <tr>
          <td>RB-560-10</td>
          <td class="convertrpm">325</td>
          <td class="convertt">31003</td>
          <td>1200</td>
          <td class="convert">95</td>
          <td class="convert">225</td>
          <td class="convert">225</td>
          <td class="convert">560</td>
          <td class="convert">320</td>
          <td class="convert">320</td>
          <td class="convert">220</td>
          <td><span class="convert">4</span>-<span class="convert">8</span></td>
          <td class="convertw">278</td>
          <td class="converti">10.70</td>
          <td class="convert">2</td>
          <td data-met="2" data-imp="0.06"></td>
          <td>0.3</td>
        </tr>
        <tr>
          <td>RB-630-12</td>
          <td class="convertrpm">440</td>
          <td class="convertt">41998</td>
          <td>1050</td>
          <td class="convert">100</td>
          <td class="convert">250</td>
          <td class="convert">250</td>
          <td class="convert">630</td>
          <td class="convert">355</td>
          <td class="convert">355</td>
          <td class="convert">240</td>
          <td><span class="convert">4</span>-<span class="convert">8</span></td>
          <td class="convertw">365</td>
          <td class="converti">17.4</td>
          <td class="convert">2</td>
          <td data-met="2" data-imp="0.06"></td>
          <td>0.3</td>
        </tr>
        <tr>
          <td>RB-710-12</td>
          <td class="convertrpm">785</td>
          <td class="convertt">75000</td>
          <td>950</td>
          <td class="convert">100</td>
          <td class="convert">260</td>
          <td class="convert">260</td>
          <td class="convert">710</td>
          <td class="convert">385</td>
          <td class="convert">385</td>
          <td class="convert">260</td>
          <td><span class="convert">5</span>-<span class="convert">9</span></td>
          <td class="convertw">516</td>
          <td class="converti">33</td>
          <td class="convert">2</td>
          <td data-met="2" data-imp="0.07"></td>
          <td>0.3</td>
        </tr>
        <tr>
          <td>RB-800-14</td>
          <td class="convertrpm">1047</td>
          <td class="convertt">100000</td>
          <td>850</td>
          <td class="convert">100</td>
          <td class="convert">280</td>
          <td class="convert">280</td>
          <td class="convert">800</td>
          <td class="convert">420</td>
          <td class="convert">420</td>
          <td class="convert">290</td>
          <td><span class="convert">5</span>-<span class="convert">9</span></td>
          <td class="convertw">691</td>
          <td class="converti">53</td>
          <td class="convert">2</td>
          <td data-met="2" data-imp="0.07"></td>
          <td>0.3</td>
        </tr>
        <tr>
          <td>RB-900-16</td>
          <td class="convertrpm">1623</td>
          <td class="convertt">154998</td>
          <td>750</td>
          <td class="convert">100</td>
          <td class="convert">305</td>
          <td class="convert">305</td>
          <td class="convert">900</td>
          <td class="convert">465</td>
          <td class="convert">465</td>
          <td class="convert">320</td>
          <td><span class="convert">5</span>-<span class="convert">9</span></td>
          <td class="convertw">927</td>
          <td class="converti">86</td>
          <td class="convert">2</td>
          <td data-met="2" data-imp="0.07"></td>
          <td>0.3</td>
        </tr>
        <tr>
          <td>RB-1000-18</td>
          <td class="convertrpm">2042</td>
          <td class="convertt">194997</td>
          <td>680</td>
          <td class="convert">125</td>
          <td class="convert">320</td>
          <td class="convert">320</td>
          <td class="convert">1000</td>
          <td class="convert">515</td>
          <td class="convert">515</td>
          <td class="convert">350</td>
          <td><span class="convert">5</span>-<span class="convert">10</span></td>
          <td class="convertw">1224</td>
          <td class="converti">142.8</td>
          <td class="convert">2</td>
          <td data-met="2" data-imp="0.08"></td>
          <td>0.1</td>
        </tr>
        <tr>
          <td>RB-1120-18</td>
          <td class="convertrpm">2827</td>
          <td class="convertt">269997</td>
          <td>600</td>
          <td class="convert">135</td>
          <td class="convert">350</td>
          <td class="convert">350</td>
          <td class="convert">1120</td>
          <td class="convert">560</td>
          <td class="convert">560</td>
          <td class="convert">380</td>
          <td><span class="convert">6</span>-<span class="convert">11</span></td>
          <td class="convertw">1584</td>
          <td class="converti">231</td>
          <td class="convert">2</td>
          <td data-met="2" data-imp="0.09"></td>
          <td>0.1</td>
        </tr>
        <tr>
          <td>RB-1250-20</td>
          <td class="convertrpm">3613</td>
          <td class="convertt">344997</td>
          <td>550</td>
          <td class="convert">150</td>
          <td class="convert">380</td>
          <td class="convert">380</td>
          <td class="convert">1250</td>
          <td class="convert">610</td>
          <td class="convert">610</td>
          <td class="convert">420</td>
          <td><span class="convert">6</span>-<span class="convert">11</span></td>
          <td class="convertw">2070</td>
          <td class="converti">368</td>
          <td class="convert">2</td>
          <td data-met="2" data-imp="0.09"></td>
          <td>0.1</td>
        </tr>
        <tr>
          <td>RB-1400-20</td>
          <td class="convertrpm">5550</td>
          <td class="convertt">529999</td>
          <td>490</td>
          <td class="convert">175</td>
          <td class="convert">440</td>
          <td class="convert">440</td>
          <td class="convert">1400</td>
          <td class="convert">700</td>
          <td class="convert">700</td>
          <td class="convert">480</td>
          <td><span class="convert">6</span>-<span class="convert">12</span></td>
          <td class="convertw">3060</td>
          <td class="converti">693</td>
          <td class="convert">2</td>
          <td data-met="3" data-imp="0.11"></td>
          <td>0.1</td>
        </tr>
        <tr>
          <td>RB-1600-24</td>
          <td class="convertrpm">7854</td>
          <td class="convertt">749995</td>
          <td>430</td>
          <td class="convert">200</td>
          <td class="convert">480</td>
          <td class="convert">480</td>
          <td class="convert">1600</td>
          <td class="convert">770</td>
          <td class="convert">770</td>
          <td class="convert">540</td>
          <td><span class="convert">6</span>-<span class="convert">12</span></td>
          <td class="convertw">3960</td>
          <td class="converti">1155</td>
          <td class="convert">2</td>
          <td data-met="3" data-imp="0.12"></td>
          <td>0.1</td>
        </tr>
        <tr>
          <td>RB-1800-23</td>
          <td class="convertrpm">10210</td>
          <td class="convertt">974996</td>
          <td>380</td>
          <td class="convert">255</td>
          <td class="convert">540</td>
          <td class="convert">540</td>
          <td class="convert">1800</td>
          <td class="convert">870</td>
          <td class="convert">870</td>
          <td class="convert">600</td>
          <td><span class="convert">8</span>-<span class="convert">16</span></td>
          <td class="convertw">5760</td>
          <td class="converti">2205</td>
          <td class="convert">2</td>
          <td data-met="3" data-imp="0.13"></td>
          <td>0.1</td>
        </tr>
        <tr>
          <td>RB-2000-26</td>
          <td class="convertrpm">13614</td>
          <td class="convertt">1299997</td>
          <td>340</td>
          <td class="convert">250</td>
          <td class="convert">600</td>
          <td class="convert">600</td>
          <td class="convert">2000</td>
          <td class="convert">960</td>
          <td class="convert">960</td>
          <td class="convert">660</td>
          <td><span class="convert">8</span>-<span class="convert">16</span></td>
          <td class="convertw">7020</td>
          <td class="converti">3255</td>
          <td class="convert">2</td>
          <td data-met="4" data-imp="0.15"></td>
          <td>0.1</td>
        </tr>
    </table>
  </div>
</div>

<?php include "footer.php"; ?>