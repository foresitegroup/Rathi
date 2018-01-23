<?php
$PageTitle = "Elastomeric Coupling - Polygear Coupling / RPG Type";
include "header.php";
?>

<div class="product-header-half">
  <div class="product-header">
    <div class="site-width">
      <h2>Elastomeric Coupling</h2>
      <h1>Polygear Coupling / RPG Type</h1>
      <em>Compare to KTR BoWex&reg; style</em>
    </div>
  </div>

  <div class="site-width">
    <div class="left">
      <h3>Design Features</h3>
      <ul>
        <li>Accommodated axial, parallel, and angular shaft misalignment</li>
        <li>Suitable for vertical and horizontal application</li>
        <li>Simple and easy to assemble with axial plug-in</li>
        <li>Low weight and low inertia</li>
        <li>Maintenance free due to combination of steel and nylon</li>
        <li>Operating temp range from <span class="converttemp">-25</span>&deg;<span class="scaletemp">C</span> to <span class="converttemp">+100</span>&deg;<span class="scaletemp">C</span></li>
      </ul>
    </div>

    <div class="right">
      <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
      <script type="text/javascript" src="inc/jquery.cycle2.carousel.min.js"></script>

      <div class="cycle-slideshow" data-cycle-fx="carousel" data-cycle-timeout="0" data-cycle-slides="> div" data-cycle-carousel-visible="1" data-cycle-carousel-fluid="true" data-cycle-next="#next" data-cycle-prev="#prev" data-cycle-pager="#pager,#number-pager" data-cycle-pager-template="<a href='#'>{{slideNum}}</a>">
        <div style="background-image: url(images/rpg-fig1.jpg);"></div>
        <div style="background-image: url(images/rpg-fig2.jpg);"></div>
        <div style="background-image: url(images/rpg-fig3.jpg);"></div>

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

      <a href="pdf/RPG_Spec_Sheet.pdf" class="specsheet">Download Spec Sheet <i class="fa fa-download" aria-hidden="true"></i></a>
    </div>
  </div>
</div>

<div class="product-details">
  <div class="site-width">
    <h3>Details &amp; Specs</h3>
    
    <script type="text/javascript">var idec = 0; var idecm = 2; var wdecm = 2;</script>
    <script type="text/javascript" src="inc/scale-convert.js"></script>

    <div class="system-toggle">
      Units:
      <a href="#" class="convertimp">Imperial</a> / <a href="#" class="convertmet">Metric</a>
    </div>

    <table class="sixteen">
      <thead>
        <tr>
          <th rowspan="2">Coupling Size</th>
          <th rowspan="2">Rating at 100 RPM (<span class="scalerpm">kW</span>)</th>
          <th rowspan="2">Rated Torque (<span class="scalet">N-m</span>)</th>
          <th rowspan="2">Max. Speed (RPM)</th>
          <th rowspan="2">Max. Bore (&Oslash;D1, &Oslash;D2) (<span class="scale">mm</span>)</th>
          <th rowspan="2">&Oslash;A (<span class="scale">mm</span>)</th>
          <th rowspan="2">&Oslash;B1, &Oslash;B2 (<span class="scale">mm</span>)</th>
          <th rowspan="2">C1, C2 (<span class="scale">mm</span>)</th>
          <th rowspan="2">G (<span class="scale">mm</span>)</th>
          <th rowspan="2">M (<span class="scale">mm</span>)</th>
          <th rowspan="2">N1, N2 (<span class="scale">mm</span>)</th>
          <th rowspan="2">Weight (<span class="scalew">kg</span>)</th>
          <th rowspan="2">MI (WR&sup2;) (<span class="scalei">kgm2</span>)</th>
          <th colspan="3">Maximum Misalignment</th>
        </tr>
        <tr>
          <th class="blue">Axial &plusmn; (<span class="scale">mm</span>)</th>
          <th class="blue">Radial &plusmn; (<span class="scale">mm</span>)</th>
          <th class="blue">Angular &plusmn; (deg)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>RPG-14</td>
          <td class="convertrpm">0.10</td>
          <td class="convertt">10</td>
          <td>14000</td>
          <td class="convert">15</td>
          <td class="convert">40</td>
          <td class="convert">25</td>
          <td class="convert">23</td>
          <td class="convert">4</td>
          <td class="convert">37</td>
          <td class="convert" data-orig="6.5">6.5</td>
          <td class="convertw">0.10</td>
          <td class="converti">0.26</td>
          <td class="convert">1</td>
          <td class="convert" data-orig="0.3">0.3</td>
          <td>1</td>
        </tr>
        <tr>
          <td>RPG-19</td>
          <td class="convertrpm">0.17</td>
          <td class="convertt">16</td>
          <td>11800</td>
          <td class="convert">20</td>
          <td class="convert">48</td>
          <td class="convert">32</td>
          <td class="convert">25</td>
          <td class="convert">4</td>
          <td class="convert">37</td>
          <td class="convert" data-orig="8.5">8.5</td>
          <td class="convertw">0.23</td>
          <td class="converti">0.47</td>
          <td class="convert">1</td>
          <td class="convert" data-orig="0.3">0.3</td>
          <td>1</td>
        </tr>
        <tr>
          <td>RPG-24</td>
          <td class="convertrpm">0.21</td>
          <td class="convertt">20</td>
          <td>10600</td>
          <td class="convert">24</td>
          <td class="convert">52</td>
          <td class="convert">36</td>
          <td class="convert">26</td>
          <td class="convert">4</td>
          <td class="convert">41</td>
          <td class="convert" data-orig="7.5">7.5</td>
          <td class="convertw">0.32</td>
          <td class="converti">0.93</td>
          <td class="convert">1</td>
          <td class="convert" data-orig="0.4">0.4</td>
          <td>1</td>
        </tr>
        <tr>
          <td>RPG-28</td>
          <td class="convertrpm">0.47</td>
          <td class="convertt">45</td>
          <td>8500</td>
          <td class="convert">28</td>
          <td class="convert">66</td>
          <td class="convert">44</td>
          <td class="convert">40</td>
          <td class="convert">4</td>
          <td class="convert">46</td>
          <td class="convert">19</td>
          <td class="convertw">0.74</td>
          <td class="converti">3.09</td>
          <td class="convert">1</td>
          <td class="convert" data-orig="0.4">0.4</td>
          <td>1</td>
        </tr>
        <tr>
          <td>RPG-32</td>
          <td class="convertrpm">0.63</td>
          <td class="convertt">60</td>
          <td>7500</td>
          <td class="convert">32</td>
          <td class="convert">76</td>
          <td class="convert">50</td>
          <td class="convert">40</td>
          <td class="convert">4</td>
          <td class="convert">48</td>
          <td class="convert">18</td>
          <td class="convertw">0.95</td>
          <td class="converti">5.48</td>
          <td class="convert">1</td>
          <td class="convert" data-orig="0.4">0.4</td>
          <td>1</td>
        </tr>
        <tr>
          <td>RPG-38</td>
          <td class="convertrpm">0.84</td>
          <td class="convertt">80</td>
          <td>6700</td>
          <td class="convert">38</td>
          <td class="convert">83</td>
          <td class="convert">58</td>
          <td class="convert">40</td>
          <td class="convert">4</td>
          <td class="convert">48</td>
          <td class="convert">18</td>
          <td class="convertw">1.23</td>
          <td class="converti">8.68</td>
          <td class="convert">1</td>
          <td class="convert" data-orig="0.4">0.4</td>
          <td>1</td>
        </tr>
        <tr>
          <td>RPG-42</td>
          <td class="convertrpm">1.00</td>
          <td class="convertt">100</td>
          <td>6000</td>
          <td class="convert">42</td>
          <td class="convert">92</td>
          <td class="convert">65</td>
          <td class="convert">42</td>
          <td class="convert">4</td>
          <td class="convert">50</td>
          <td class="convert">19</td>
          <td class="convertw">1.5</td>
          <td class="converti">14.28</td>
          <td class="convert">1</td>
          <td class="convert" data-orig="0.4">0.4</td>
          <td>1</td>
        </tr>
        <tr>
          <td>RPG-48</td>
          <td class="convertrpm">1.50</td>
          <td class="convertt">140</td>
          <td>5600</td>
          <td class="convert">48</td>
          <td class="convert">95</td>
          <td class="convert">68</td>
          <td class="convert">50</td>
          <td class="convert">4</td>
          <td class="convert">50</td>
          <td class="convert">27</td>
          <td class="convertw">1.81</td>
          <td class="converti">18.34</td>
          <td class="convert">1</td>
          <td class="convert" data-orig="0.4">0.4</td>
          <td>1</td>
        </tr>
        <tr>
          <td>RPG-65</td>
          <td class="convertrpm">4.00</td>
          <td class="convertt">380</td>
          <td>4000</td>
          <td class="convert">65</td>
          <td class="convert">132</td>
          <td class="convert">96</td>
          <td class="convert">55</td>
          <td class="convert">4</td>
          <td class="convert">68</td>
          <td class="convert">23</td>
          <td class="convertw">4.35</td>
          <td class="converti">84.80</td>
          <td class="convert">1</td>
          <td class="convert" data-orig="0.4">0.4</td>
          <td>1</td>
        </tr>
      </tbody>
    </table>

    <br><br>

    <h4>Guidelines for Assembly</h4>
    <ul>
      <li>Both the hubs must be assembled so they are flush with shaft ends</li>
      <li>Maintain gap 'G' as mentioned in the Technical Data table; if it is difficult to measure dimension 'G', use overall length</li>
      <li>The maximum speed and maximum misalignment cannot be used at the same time. The presence of misalignment reduces the maximum speed. With constant torque and well-aligned shafts, Rathi polygear couplings can be used up to the maximum torque.</li>
      <li>It is important that the sleeve slides easily in the axial direction. Accurate alignment of shafts improves the life of this coupling.</li>
    </ul>
  </div>
</div>

<?php include "footer.php"; ?>