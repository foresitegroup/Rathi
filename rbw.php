<?php
$PageTitle = "Elastomeric Coupling - Sleeve Flex / RBW Type";
include "header.php";
?>

<div class="product-header-half">
  <div class="product-header">
    <div class="site-width">
      <h2>Elastomeric Coupling</h2>
      <h1>Sleeve Flex / RBW Type</h1>
      <em>Compare to Lovejoy&reg; S-Flex style</em>
    </div>
  </div>

  <div class="site-width">
    <div class="left">
      <h3>Features</h3>
      <ul>
        <li>Sleeve-Flex can be installed quickly and easily because there are no bolts, gaskets, covers, or seals.</li>
        <li>Alignment can be checked with a straight edge placed across the outside of the precision machined flanges. No special tools are need for the installation, alignment, or removal.</li>
        <li>The teeth of the sleeve lock into the teeth of the flanges without clamps or screws and tighten under torque to provide smooth transmission of power.</li>
        <li>There is no rubbing action of metal against rubber to cause wear. This eliminates the need for lubrication or maintenance, and provides a clean, dependable, and quiet performance.</li>
      </ul>
    </div>

    <div class="right">
      <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
      <script type="text/javascript" src="inc/jquery.cycle2.carousel.min.js"></script>

      <div class="cycle-slideshow" data-cycle-fx="carousel" data-cycle-timeout="0" data-cycle-slides="> div" data-cycle-carousel-visible="1" data-cycle-carousel-fluid="true" data-cycle-next="#next" data-cycle-prev="#prev" data-cycle-pager="#pager,#number-pager" data-cycle-pager-template="<a href='#'>{{slideNum}}</a>">
        <div style="background-image: url(images/rbw-fig1.jpg);"></div>
        <div style="background-image: url(images/rbw-fig2.jpg);"></div>
        <div style="background-image: url(images/rbw-fig3.jpg);"></div>
        <div style="background-image: url(images/rbw-fig4.jpg);"></div>
        <div style="background-image: url(images/rbw-fig5.jpg);"></div>
        <div style="background-image: url(images/rbw-fig6.jpg);"></div>

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

      <a href="pdf/RBW_Spec_Sheet.pdf" class="specsheet">Download Spec Sheet <i class="fa fa-download" aria-hidden="true"></i></a>
    </div>
  </div>
</div>

<div class="product-details">
  <div class="site-width">
    <h3>Details &amp; Specs</h3>
    
    <script type="text/javascript">var tdec = 1; var tdecm = 2; var wdecm = 1;</script>
    <script type="text/javascript" src="inc/scale-convert.js"></script>

    <div class="system-toggle">
      Units:
      <a href="#" class="convertimp">Imperial</a> / <a href="#" class="convertmet">Metric</a>
    </div>

    <table class="fifteen">
      <thead>
        <tr>
          <th rowspan="2">Coupling Size</th>
          <th rowspan="2">Flange Type</th>
          <th rowspan="2">Sleeve Type</th>
          <th rowspan="2"><span class="scalerpm">kW</span> at 100 RPM</th>
          <th rowspan="2">Rated Torque (<span class="scalet">N-m</span>)</th>
          <th rowspan="2">Max. Speed (RPM)</th>
          <th colspan="2">Bore (<span class="scale">mm</span>)</th>
          <th colspan="6">Dimensions (<span class="scale">mm</span>)</th>
          <th rowspan="2">Weight (<span class="scalew">kg</span>)</th>
        </tr>
        <tr>
          <th class="blue">PB</th>
          <th class="blue">Max.</th>
          <th class="blue">C</th>
          <th class="blue">D</th>
          <th class="blue">G</th>
          <th class="blue">H</th>
          <th class="blue">L</th>
          <th class="blue">X</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>RBW 3</td>
          <td>J</td>
          <td rowspan="10" class="rowspan">JE, JES</td>
          <td class="convertrpm">0.08</td>
          <td class="convertt">7.64</td>
          <td>9200</td>
          <td class="convert">10</td>
          <td class="convert">22</td>
          <td class="convert">20</td>
          <td class="convert">52</td>
          <td class="convert">9</td>
          <td class="convert">38</td>
          <td class="convert">49</td>
          <td class="convert">16</td>
          <td class="convertw">0.3</td>
        </tr>
        <tr>
          <td>RBW 4</td>
          <td>J</td>
          <td class="convertrpm">0.15</td>
          <td class="convertt">14.32</td>
          <td>7600</td>
          <td class="convert">13</td>
          <td class="convert">25</td>
          <td class="convert">22</td>
          <td class="convert">63</td>
          <td class="convert">16</td>
          <td class="convert">41</td>
          <td class="convert">60</td>
          <td class="convert">16</td>
          <td class="convertw">0.5</td>
        </tr>
        <tr>
          <td rowspan="2">RBW 5</td>
          <td>J</td>
          <td rowspan="2" class="convertrpm">0.30</td>
          <td rowspan="2" class="convertt">28.65</td>
          <td rowspan="2">7600</td>
          <td rowspan="2" class="convert">13</td>
          <td rowspan="2" class="convert">29</td>
          <td class="convert">26</td>
          <td rowspan="2" class="convert">83</td>
          <td class="convert">18</td>
          <td rowspan="2" class="convert">48</td>
          <td class="convert">70</td>
          <td class="convert">23</td>
          <td rowspan="2" class="convertw">1.1</td>
        </tr>
        <tr>
          <td class="white">S</td>
          <td class="convert white">34</td>
          <td class="convert white">19</td>
          <td class="convert white">71</td>
          <td class="convert white">30</td>
        </tr>
        <tr>
          <td rowspan="2" class="blue">RBW 6</td>
          <td class="blue">J</td>
          <td rowspan="2" class="convertrpm blue">0.52</td>
          <td rowspan="2" class="convertt blue">49.66</td>
          <td rowspan="2" class="blue">6000</td>
          <td rowspan="2" class="convert blue">16</td>
          <td rowspan="2" class="convert blue">35</td>
          <td class="convert blue">33</td>
          <td rowspan="2" class="convert blue">102</td>
          <td class="convert blue">22</td>
          <td rowspan="2" class="convert blue">63</td>
          <td class="convert blue">88</td>
          <td class="convert blue">28</td>
          <td rowspan="2" class="convertw blue">2</td>
        </tr>
        <tr>
          <td>S</td>
          <td class="convert">44</td>
          <td class="convert">21</td>
          <td class="convert">88</td>
          <td class="convert">36</td>
        </tr>
        <tr>
          <td>RBW 7</td>
          <td>S</td>
          <td class="convertrpm">0.90</td>
          <td class="convertt">85.94</td>
          <td>5250</td>
          <td class="convert">16</td>
          <td class="convert">48</td>
          <td class="convert">47</td>
          <td class="convert">118</td>
          <td class="convert">25</td>
          <td class="convert">71</td>
          <td class="convert">100</td>
          <td class="convert">34</td>
          <td class="convertw">2.8</td>
        </tr>
        <tr>
          <td>RBW 8</td>
          <td>S</td>
          <td class="convertrpm">1.34</td>
          <td class="convertt">127.96</td>
          <td>4500</td>
          <td class="convert">19</td>
          <td class="convert">54</td>
          <td class="convert">53</td>
          <td class="convert">138</td>
          <td class="convert">28</td>
          <td class="convert">98</td>
          <td class="convert">112</td>
          <td class="convert">38</td>
          <td class="convertw">4.8</td>
        </tr>
        <tr>
          <td>RBW 9</td>
          <td>S</td>
          <td class="convertrpm">2.16</td>
          <td class="convertt">206.26</td>
          <td>3750</td>
          <td class="convert">22</td>
          <td class="convert">64</td>
          <td class="convert">61</td>
          <td class="convert">161</td>
          <td class="convert">36</td>
          <td class="convert">98</td>
          <td class="convert">128</td>
          <td class="convert">45</td>
          <td class="convertw">7.2</td>
        </tr>
        <tr>
          <td>RBW 10</td>
          <td>S</td>
          <td class="convertrpm">3.43</td>
          <td class="convertt">327.54</td>
          <td>3600</td>
          <td class="convert">29</td>
          <td class="convert">73</td>
          <td class="convert">69</td>
          <td class="convert">191</td>
          <td class="convert">41</td>
          <td class="convert">111</td>
          <td class="convert">144</td>
          <td class="convert">51</td>
          <td class="convertw">11.2</td>
        </tr>
        <tr>
          <td>RBW 11</td>
          <td>S</td>
          <td rowspan="3" class="rowspan">E</td>
          <td class="convertrpm">5.37</td>
          <td class="convertt">512.80</td>
          <td>3600</td>
          <td class="convert">32</td>
          <td class="convert">87</td>
          <td class="convert">87</td>
          <td class="convert">219</td>
          <td class="convert">48</td>
          <td class="convert">133</td>
          <td class="convert">180</td>
          <td class="convert">61</td>
          <td class="convertw">18</td>
        </tr>
        <tr>
          <td>RBW 12</td>
          <td>S</td>
          <td class="convertrpm">8.50</td>
          <td class="convertt">811.69</td>
          <td>2800</td>
          <td class="convert">38</td>
          <td class="convert">98</td>
          <td class="convert">104</td>
          <td class="convert">254</td>
          <td class="convert">60</td>
          <td class="convert">146</td>
          <td class="convert">210</td>
          <td class="convert">68</td>
          <td class="convertw">28</td>
        </tr>
        <tr>
          <td>RBW 13</td>
          <td>S</td>
          <td class="convertrpm">13.43</td>
          <td class="convertt">1282.47</td>
          <td>2400</td>
          <td class="convert">51</td>
          <td class="convert">100</td>
          <td class="convert">111</td>
          <td class="convert">299</td>
          <td class="convert">68</td>
          <td class="convert">171</td>
          <td class="convert">235</td>
          <td class="convert">78</td>
          <td class="convertw">48</td>
        </tr>
      </tbody>
    </table>

    <br>

    <ul>
      <li>Size 3 and Size 4 Flanges are available in Aluminum.</li>
      <li>Size 5 to Size 13 Flanges are available in Cast Iron.</li>
      <li>The weight is approximate with solid flanges.</li>
      <li>For vertical installation contact Rathi NA.</li>
    </ul>
  </div>
</div>

<?php include "footer.php"; ?>