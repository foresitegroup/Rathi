<?php
$PageTitle = "Elastomeric Coupling - Straight Jaw / SWQ Type";
include "header.php";
?>

<div class="product-header-half">
  <div class="product-header">
    <div class="site-width">
      <h2>Elastomeric Coupling</h2>
      <h1>Straight Jaw / SWQ Type</h1>
      Straight Jaw with Radially Removable Split Wrap and Flange Adapters
      <em>Compare to Lovejoy&reg; RRC Type</em>
    </div>
  </div>

  <div class="site-width">
    <div class="left">
      <h3>Special Features</h3>
      Provides quick, easy disconnection from driving unit without disturbing drive shaft or piping, permits removal of equipment from line in three simple steps. Only two sets of bolts need to be removed.<br>
      <br>

      <h3>Applications</h3>
      For pumps in chemical industry, ideal for reciprocating pumps, diesel or gas engines, multiple generator sets and other drives where rapid disconnection without disturbing the drive or driven unit is required.
    </div>

    <div class="right">
      <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
      <script type="text/javascript" src="inc/jquery.cycle2.carousel.min.js"></script>
      
      <div class="cycle-slideshow" data-cycle-fx="carousel" data-cycle-timeout="0" data-cycle-slides="> div" data-cycle-carousel-visible="1" data-cycle-carousel-fluid="true" data-cycle-next="#next" data-cycle-prev="#prev" data-cycle-pager="#pager,#number-pager" data-cycle-pager-template="<a href='#'>{{slideNum}}</a>">
        <div style="background-image: url(images/swq-fig1.jpg);"></div>

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

      <a href="pdf/SWQ_Spec_Sheet.pdf" class="specsheet">Download Spec Sheet <i class="fa fa-download" aria-hidden="true"></i></a>
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

    <table class="nine">
      <thead>
        <tr>
          <th rowspan="2">Coupling Size</th>
          <th rowspan="2"><span class="scalerpm">kW</span> at 100 RPM (Synthetic)</th>
          <th rowspan="2">DBSE S (<span class="scale">mm</span>)</th>
          <th colspan="2">Bore (<span class="scale">mm</span>)</th>
          <th rowspan="2">Outside Diameter &Oslash;A (<span class="scale">mm</span>)</th>
          <th rowspan="2">Length Thru Bore D (<span class="scale">mm</span>)</th>
          <th rowspan="2">Adapter Diameter &Oslash;B (<span class="scale">mm</span>)</th>
          <th rowspan="2">Minimum Bolt Clearance R (<span class="scale">mm</span>)</th>
        </tr>
        <tr>
          <th class="blue">Min.</th>
          <th class="blue">Max.</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>SWQ 095</td>
          <td class="convertrpm">0.22</td>
          <td rowspan="6" class="rowspan">
            <span class="convert">100</span>, 
            <span class="convert">140</span>, 
            <span class="convert">180</span>
          </td>
          <td class="convert">10</td>
          <td class="convert">28</td>
          <td class="convert">65</td>
          <td class="convert">25</td>
          <td class="convert">54</td>
          <td class="convert">45</td>
        </tr>
        <tr>
          <td>SWQ 100</td>
          <td class="convertrpm">0.49</td>
          <td class="convert">10</td>
          <td class="convert">38</td>
          <td class="convert">78</td>
          <td class="convert">30</td>
          <td class="convert">65</td>
          <td class="convert">50</td>
        </tr>
        <tr>
          <td>SWQ 110</td>
          <td class="convertrpm">0.93</td>
          <td class="convert">15</td>
          <td class="convert">42</td>
          <td class="convert">96</td>
          <td class="convert">35</td>
          <td class="convert">76</td>
          <td class="convert">60</td>
        </tr>
        <tr>
          <td>SWQ 150</td>
          <td class="convertrpm">1.49</td>
          <td class="convert">15</td>
          <td class="convert">48</td>
          <td class="convert">111</td>
          <td class="convert">40</td>
          <td class="convert">90</td>
          <td class="convert">70</td>
        </tr>
        <tr>
          <td>SWQ 190</td>
          <td class="convertrpm">2.01</td>
          <td class="convert">20</td>
          <td class="convert">55</td>
          <td class="convert">129</td>
          <td class="convert">45</td>
          <td class="convert">102</td>
          <td class="convert">75</td>
        </tr>
        <tr>
          <td>SWQ 225</td>
          <td class="convertrpm">2.76</td>
          <td class="convert">20</td>
          <td class="convert">65</td>
          <td class="convert">142</td>
          <td class="convert">50</td>
          <td class="convert">115</td>
          <td class="convert">90</td>
        </tr>
        <tr>
          <td>SWQ 226</td>
          <td class="convertrpm">3.43</td>
          <td rowspan="7" class="rowspan blue">
            <span class="convert">140</span>, 
            <span class="convert">180</span>
          </td>
          <td class="convert">25</td>
          <td class="convert">70</td>
          <td class="convert">153</td>
          <td class="convert">50</td>
          <td class="convert">134</td>
          <td class="convert">92</td>
        </tr>
        <tr>
          <td>SWQ 276</td>
          <td class="convertrpm">5.60</td>
          <td class="convert">25</td>
          <td class="convert">80</td>
          <td class="convert">173</td>
          <td class="convert">60</td>
          <td class="convert">130</td>
          <td class="convert">107</td>
        </tr>
        <tr>
          <td>SWQ 280</td>
          <td class="convertrpm">8.20</td>
          <td class="convert">30</td>
          <td class="convert">80</td>
          <td class="convert">208</td>
          <td class="convert">60</td>
          <td class="convert">130</td>
          <td class="convert">70</td>
        </tr>
        <tr>
          <td>SWQ 295</td>
          <td class="convertrpm">13.40</td>
          <td class="convert">30</td>
          <td class="convert">105</td>
          <td class="convert">253</td>
          <td class="convert">70</td>
          <td class="convert">160</td>
          <td class="convert">75</td>
        </tr>
        <tr>
          <td>SWQ 2955</td>
          <td class="convertrpm">22.40</td>
          <td class="convert">30</td>
          <td class="convert">105</td>
          <td class="convert">253</td>
          <td class="convert">75</td>
          <td class="convert">160</td>
          <td class="convert">85</td>
        </tr>
        <tr>
          <td>SWQ 300</td>
          <td class="convertrpm">31.90</td>
          <td class="convert">30</td>
          <td class="convert">115</td>
          <td class="convert">272</td>
          <td class="convert">80</td>
          <td class="convert">180</td>
          <td class="convert">95</td>
        </tr>
        <tr>
          <td>SWQ 350</td>
          <td class="convertrpm">45.00</td>
          <td class="convert">30</td>
          <td class="convert">125</td>
          <td class="convert">323</td>
          <td class="convert">90</td>
          <td class="convert">200</td>
          <td class="convert">85</td>
        </tr>
      </tbody>
    </table>

    <br>

    <ul>
      <li>
        Maintain gap C at the time of assembly where:
        <ul>
          <li>C = <span class="convert">2</span> <span class="scale">mm</span> for SWQ 095 to SWQ 100</li>
          <li>C = <span class="convert">3</span> <span class="scale">mm</span> SWQ 110 to SWQ 350</li>
        </ul>
      </li>
      <li>Pilot bores other than specified are available on request.</li>
      <li>Non standard spacer length available on request.</li>
      <li>For vertical installation contact RATHI.</li>
    </ul>
  </div>
</div>

<?php include "footer.php"; ?>