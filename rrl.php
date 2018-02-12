<?php
$PageTitle = "Elastomeric Coupling - Straight Jaw / RRL Type";
include "header.php";
?>

<div class="product-header-half">
  <div class="product-header">
    <div class="site-width">
      <h2>Elastomeric Coupling</h2>
      <h1>Straight Jaw / RRL Type</h1>
      Straight Jaw with Radially Removable Split Wrap and Longer Flange Adapters
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
        <div style="background-image: url(images/rrl-fig1.jpg);"></div>

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

    <script type="text/javascript" src="inc/scale-convert.js"></script>

    <div class="system-toggle">
      Units: 
      <a href="#" class="convertimp">Imperial</a> / <a href="#" class="convertmet">Metric</a>
    </div>

    <table class="fourteen">
      <thead>
        <tr>
          <th rowspan="2">Coupling Size</th>
          <th colspan="2">Synthetic Rubber</th>
          <th colspan="2">DBSE S (<span class="scale">mm</span>)</th>
          <th rowspan="2">Min. Bore (<span class="scale">mm</span>)</th>
          <th colspan="2">Max. Bore (<span class="scale">mm</span>)</th>
          <th rowspan="2">Outside Diameter &Oslash;A (<span class="scale">mm</span>)</th>
          <th rowspan="2">Adapter Hub Diameter &Oslash;B (<span class="scale">mm</span>)</th>
          <th colspan="2">Length Thru Bore C (<span class="scale">mm</span>)</th>
          <th colspan="2">Minimum Bolt Clearance M (<span class="scale">mm</span>)</th>
        </tr>
        <tr>
          <th class="blue">Rated Torque (<span class="scalet">N-m</span>)</th>
          <th class="blue"><span class="scalerpm">kW</span> at 100 RPM</th>
          <th class="blue">Min.</th>
          <th class="blue">Std.</th>
          <th class="blue">&#9650;</th>
          <th class="blue">Std.</th>
          <th class="blue">&#9650;</th>
          <th class="blue">Std.</th>
          <th class="blue">&#9650;</th>
          <th class="blue">Std.</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>RRL-095</td>
          <td class="convertt">21.1</td>
          <td class="convertrpm">0.22</td>
          <td class="convert">75</td>
          <td>
            <span class="convert">90</span>,
            <span class="convert">100</span>,
            <span class="convert">140</span>
          </td>
          <td class="convert">10</td>
          <td class="convert"></td>
          <td class="convert">28</td>
          <td class="convert">54</td>
          <td class="convert">54</td>
          <td class="convert"></td>
          <td class="convert">25</td>
          <td class="convert"></td>
          <td class="convert">45</td>
        </tr>
        <tr>
          <td>RRL-100</td>
          <td class="convertt">46.4</td>
          <td class="convertrpm">0.49</td>
          <td class="convert">75</td>
          <td rowspan="5" class="rowspan">
            <span class="convert">90</span>,
            <span class="convert">100</span>,
            <span class="convert">140</span>,
            <span class="convert">180</span>
          </td>
          <td class="convert">10</td>
          <td class="convert"></td>
          <td class="convert">38</td>
          <td class="convert">65</td>
          <td class="convert">65</td>
          <td class="convert"></td>
          <td class="convert">30</td>
          <td class="convert"></td>
          <td class="convert">50</td>
        </tr>
        <tr>
          <td>RRL-110</td>
          <td class="convertt">89</td>
          <td class="convertrpm">0.93</td>
          <td class="convert">75</td>
          <td class="convert">15</td>
          <td class="convert">24</td>
          <td class="convert">42</td>
          <td class="convert">85</td>
          <td class="convert">76</td>
          <td class="convert">35</td>
          <td class="convert">35</td>
          <td class="convert">36</td>
          <td class="convert">60</td>
        </tr>
        <tr>
          <td>RRL-150</td>
          <td class="convertt">141</td>
          <td class="convertrpm">1.5</td>
          <td class="convert">75</td>
          <td class="convert">15</td>
          <td class="convert">32</td>
          <td class="convert">48</td>
          <td class="convert">96</td>
          <td class="convert">90</td>
          <td class="convert">40</td>
          <td class="convert">40</td>
          <td class="convert">48</td>
          <td class="convert">70</td>
        </tr>
        <tr>
          <td>RRL-190</td>
          <td class="convertt">190</td>
          <td class="convertrpm">2</td>
          <td class="convert">75</td>
          <td class="convert">15</td>
          <td class="convert">38</td>
          <td class="convert">55</td>
          <td class="convert">115</td>
          <td class="convert">102</td>
          <td class="convert">45</td>
          <td class="convert">45</td>
          <td class="convert">48</td>
          <td class="convert">75</td>
        </tr>
        <tr>
          <td>RRL-225</td>
          <td class="convertt">265</td>
          <td class="convertrpm">2.8</td>
          <td class="convert">90</td>
          <td class="convert">15</td>
          <td class="convert">42</td>
          <td class="convert">65</td>
          <td class="convert">127</td>
          <td class="convert">115</td>
          <td class="convert">50</td>
          <td class="convert">50</td>
          <td class="convert">54</td>
          <td class="convert">90</td>
        </tr>
      </tbody>
    </table>

    <br>

    &#9650; - Triangular adapter body<br>
    <br>

    <ul>
      <li>Loosening and tightening of bolts is possible within dimension.</li>
      <li>Maintain a gap of <span class="convert">2</span> <span class="scale">mm</span> for RRL-095 and RRL-100.</li>
      <li>Maintain a gap of <span class="convert">3</span> <span class="scale">mm</span> for all other sizes at the time of assembly.</li>
      <li>Non standard DBSE available on request.</li>
      <li>For vertical installation contact RATHI.</li>
    </ul>
  </div>
</div>

<?php include "footer.php"; ?>