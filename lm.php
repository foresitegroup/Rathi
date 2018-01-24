<?php
$PageTitle = "Metallic Coupling - Disc / LM Type";
include "header.php";
?>

<div class="product-header-half">
  <div class="product-header">
    <div class="site-width">
      <h2>Metallic Coupling</h2>
      <h1>Disc / LM Type</h1>
      Spacer Coupling Non-API
    </div>
  </div>

  <div class="site-width">
    <div class="left">
      <ul>
        <li>Specify hub type with order. If nothing is selected, the smallest size for given bore, or a combination of I and II for pilot bored versions will be selected</li>
        <li>ATEX approved design; for Non-Sparking option please contact Rathi NA</li>
        <li>Weight and inertia are for maximum bore and minimum DBSE</li>
        <li>Dimension M is needed for removing bolts on type II hubs</li>
        <li>Special options are available upon request such as shrink disc, clamping hubs, brake disc, special coating</li>
      </ul>
    </div>

    <div class="right">
      <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
      <script type="text/javascript" src="inc/jquery.cycle2.carousel.min.js"></script>

      <div class="cycle-slideshow" data-cycle-fx="carousel" data-cycle-timeout="0" data-cycle-slides="> div" data-cycle-carousel-visible="1" data-cycle-carousel-fluid="true" data-cycle-next="#next" data-cycle-prev="#prev" data-cycle-pager="#pager,#number-pager" data-cycle-pager-template="<a href='#'>{{slideNum}}</a>">
        <div style="background-image: url(images/lm-fig1.jpg);"></div>

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

      <a href="pdf/LM-LMK-EM_Spec_Sheet.pdf" class="specsheet">Download Spec Sheet <i class="fa fa-download" aria-hidden="true"></i></a>
    </div>
  </div>
</div>

<div class="product-details">
  <div class="site-width">
    <h3>Details &amp; Specs</h3>

    <script type="text/javascript" src="inc/unit-convert.js"></script>

    <div class="system-toggle">
      Units:
      <a href="#" class="convertimp">Imperial</a> / <a href="#" class="convertmet">Metric</a>
    </div>

    <table class="eighteen">
      <thead>
        <tr>
          <th rowspan="3">Coupling Size</th>
          <th rowspan="3"><span data-met="kW" data-imp="HP"></span> at 100 RPM</th>
          <th rowspan="3">Torque (<span data-met="N-m" data-imp="in-lbs"></span>)</th>
          <th rowspan="3">Max. Speed (RPM)</th>
          <th colspan="3">Bore (<span data-met="mm" data-imp="in"></span>)</th>
          <th rowspan="3">Min. DBSE S (<span data-met="mm" data-imp="in"></span>)</th>
          <th rowspan="3">Std. DBSE S (<span data-met="mm" data-imp="in"></span>)</th>
          <th rowspan="3">C (<span data-met="mm" data-imp="in"></span>)</th>
          <th rowspan="3">&Oslash;A (<span data-met="mm" data-imp="in"></span>)</th>
          <th rowspan="3">&Oslash;B (<span data-met="mm" data-imp="in"></span>)</th>
          <th rowspan="3">M (<span data-met="mm" data-imp="in"></span>)</th>
          <th rowspan="2" colspan="2">Weight (<span data-met="kg" data-imp="lbs"></span>)</th>
          <th rowspan="2" colspan="2">MI (WR&sup2;) (<span data-met="kgm2" data-imp="lb-in2"></span>)</th>
          <th rowspan="3">Torsional Stiffness (<span data-met="N-m" data-imp="in-lbs"></span> / rad)</th>
        </tr>
        <tr>
          <th class="blue" rowspan="2">Min.</th>
          <th class="blue" colspan="2">Max.</th>
        </tr>
        <tr>
          <th>Type I</th>
          <th>Type II</th>
          <th class="blue">Min. Std. S</th>
          <th class="blue">Per <span data-met="m" data-imp="Inch"></span></th>
          <th class="blue">Min. Std. S</th>
          <th class="blue">Per <span data-met="m" data-imp="Inch"></span></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>5</td>
          <td data-met="0.4" data-imp="0.54"></td>
          <td data-met="33" data-imp="292"></td>
          <td>7500</td>
          <td data-met="8" data-imp="0.31"></td>
          <td data-met="20" data-imp="0.79"></td>
          <td data-met="22" data-imp="0.87"></td>
          <td data-met="41" data-imp="1.61"></td>
          <td rowspan="2">
            <span data-met="100" data-imp="3.5"></span><br>
            <span data-met="140" data-imp="5.0"></span>
          </td>
          <td data-met="25" data-imp="0.98"></td>
          <td data-met="55" data-imp="2.17"></td>
          <td data-met="30" data-imp="1.18"></td>
          <td data-met="65" data-imp="2.56"></td>
          <td data-met="0.9" data-imp="1.98"></td>
          <td data-met="2" data-imp="0.11"></td>
          <td data-met="0.00003" data-imp="1.03"></td>
          <td data-met="0.00003" data-imp="0.026"></td>
          <td data-met="16" data-imp="1.42E+08"></td>
        </tr>
        <tr>
          <td>10</td>
          <td data-met="0.7" data-imp="0.94"></td>
          <td data-met="64" data-imp="566"></td>
          <td>7500</td>
          <td data-met="10" data-imp="0.39"></td>
          <td data-met="24" data-imp="0.94"></td>
          <td data-met="25" data-imp="0.98"></td>
          <td data-met="55" data-imp="2.17"></td>
          <td data-met="30" data-imp="1.18"></td>
          <td data-met="63" data-imp="2.48"></td>
          <td data-met="35" data-imp="1.38"></td>
          <td data-met="75" data-imp="2.95"></td>
          <td data-met="1.3" data-imp="2.87"></td>
          <td data-met="2.3" data-imp="0.13"></td>
          <td data-met="0.0007" data-imp="2.39"></td>
          <td data-met="0.0004" data-imp="0.035"></td>
          <td data-met="31" data-imp="2.75E+08"></td>
        </tr>
        <tr>
          <td>35</td>
          <td data-met="1.7" data-imp="2.28"></td>
          <td data-met="159" data-imp="1407"></td>
          <td>7000</td>
          <td data-met="12" data-imp="0.47"></td>
          <td data-met="30" data-imp="1.18"></td>
          <td data-met="38" data-imp="1.50"></td>
          <td data-met="57" data-imp="2.24"></td>
          <td rowspan="3">
            <span data-met="100" data-imp="3.5"></span><br>
            <span data-met="140" data-imp="5.0"></span><br>
            <span data-met="180" data-imp="7.0"></span>
          </td>
          <td data-met="40" data-imp="1.57"></td>
          <td data-met="82" data-imp="3.23"></td>
          <td data-met="45" data-imp="1.77"></td>
          <td data-met="85" data-imp="3.35"></td>
          <td data-met="2.47" data-imp="5.45"></td>
          <td data-met="3.2" data-imp="0.18"></td>
          <td data-met="0.0021" data-imp="7.18"></td>
          <td data-met="0.0011" data-imp="0.095"></td>
          <td data-met="25" data-imp="2.21E+08"></td>
        </tr>
        <tr>
          <td>95</td>
          <td data-met="5.4" data-imp="7.24"></td>
          <td data-met="516" data-imp="4567"></td>
          <td>6000</td>
          <td data-met="17" data-imp="0.67"></td>
          <td data-met="40" data-imp="1.57"></td>
          <td data-met="50" data-imp="1.97"></td>
          <td data-met="82" data-imp="3.23"></td>
          <td data-met="45" data-imp="1.77"></td>
          <td data-met="102" data-imp="4.02"></td>
          <td data-met="57" data-imp="2.24"></td>
          <td data-met="95" data-imp="3.74"></td>
          <td data-met="4.6" data-imp="10.14"></td>
          <td data-met="3.2" data-imp="0.18"></td>
          <td data-met="0" data-imp="20.5"></td>
          <td data-met="0.0011" data-imp="0.095"></td>
          <td data-met="0.04" data-imp="3.54E+05"></td>
        </tr>
        <tr>
          <td>170</td>
          <td data-met="9" data-imp="12.1"></td>
          <td data-met="859" data-imp="7603"></td>
          <td>5200</td>
          <td data-met="17" data-imp="0.67"></td>
          <td data-met="52" data-imp="2.05"></td>
          <td data-met="70" data-imp="2.76"></td>
          <td data-met="89" data-imp="3.50"></td>
          <td data-met="55" data-imp="2.17"></td>
          <td data-met="128" data-imp="5.04"></td>
          <td data-met="77" data-imp="3.03"></td>
          <td data-met="110" data-imp="4.33"></td>
          <td data-met="8.1" data-imp="17.86"></td>
          <td data-met="7" data-imp="0.39"></td>
          <td data-met="0" data-imp="61.5"></td>
          <td data-met="0.0047" data-imp="0.408"></td>
          <td data-met="0" data-imp="8.77E+05"></td>
        </tr>
        <tr>
          <td>220</td>
          <td data-met="14" data-imp="18.8"></td>
          <td data-met="1337" data-imp="11833"></td>
          <td>4800</td>
          <td data-met="22" data-imp="0.87"></td>
          <td data-met="65" data-imp="2.56"></td>
          <td data-met="80" data-imp="3.15"></td>
          <td data-met="108" data-imp="4.25"></td>
          <td rowspan="2" class="white">
            <span data-met="140" data-imp="5.0"></span><br>
            <span data-met="180" data-imp="7.0"></span>
          </td>
          <td data-met="60" data-imp="2.36"></td>
          <td data-met="146" data-imp="5.75"></td>
          <td data-met="94" data-imp="3.70"></td>
          <td data-met="120" data-imp="4.72"></td>
          <td data-met="12.1" data-imp="26.68"></td>
          <td data-met="8.4" data-imp="0.47"></td>
          <td data-met="0" data-imp="123"></td>
          <td data-met="0.0088" data-imp="0.764"></td>
          <td data-met="0" data-imp="1.56E+06"></td>
        </tr>
        <tr>
          <td>400</td>
          <td data-met="25" data-imp="33.5"></td>
          <td data-met="2387" data-imp="21127"></td>
          <td>4400</td>
          <td data-met="27" data-imp="1.06"></td>
          <td data-met="80" data-imp="3.15"></td>
          <td data-met="100" data-imp="3.94"></td>
          <td data-met="114" data-imp="4.49"></td>
          <td data-met="70" data-imp="2.76"></td>
          <td data-met="176" data-imp="6.93"></td>
          <td data-met="115" data-imp="4.53"></td>
          <td data-met="140" data-imp="5.51"></td>
          <td data-met="20" data-imp="44.09"></td>
          <td data-met="13.1" data-imp="0.73"></td>
          <td data-met="0.009" data-imp="308"></td>
          <td data-met="0" data-imp="1.82"></td>
          <td data-met="0" data-imp="2.70E+06"></td>
        </tr>
        <tr>
          <td>520</td>
          <td data-met="35" data-imp="46.9"></td>
          <td data-met="3342" data-imp="29579"></td>
          <td>4200</td>
          <td data-met="32" data-imp="1.26"></td>
          <td data-met="90" data-imp="3.54"></td>
          <td data-met="115" data-imp="4.53"></td>
          <td data-met="126" data-imp="4.96"></td>
          <td rowspan="2" class="white">
            <span data-met="180" data-imp="7.0"></span><br>
            <span data-met="250" data-imp="10.0"></span>
          </td>
          <td data-met="90" data-imp="3.54"></td>
          <td data-met="197" data-imp="7.76"></td>
          <td data-met="132" data-imp="5.20"></td>
          <td data-met="175" data-imp="6.89"></td>
          <td data-met="30.5" data-imp="67.24"></td>
          <td data-met="21.7" data-imp="1.22"></td>
          <td data-met="0.17" data-imp="581"></td>
          <td data-met="0" data-imp="4.862"></td>
          <td data-met="0" data-imp="3.83E+06"></td>
        </tr>
        <tr>
          <td>1000</td>
          <td data-met="53" data-imp="71.1"></td>
          <td data-met="5061" data-imp="44794"></td>
          <td>4000</td>
          <td data-met="42" data-imp="1.65"></td>
          <td data-met="105" data-imp="4.13"></td>
          <td data-met="130" data-imp="5.12"></td>
          <td data-met="143" data-imp="5.63"></td>
          <td data-met="95" data-imp="3.74"></td>
          <td data-met="225" data-imp="8.86"></td>
          <td data-met="147" data-imp="5.79"></td>
          <td data-met="185" data-imp="7.28"></td>
          <td data-met="43.4" data-imp="95.68"></td>
          <td data-met="21.7" data-imp="1.22"></td>
          <td data-met="0.32" data-imp="1093"></td>
          <td data-met="0" data-imp="4.86"></td>
          <td data-met="0.6" data-imp="5.31E+06"></td>
        </tr>
        <tr>
          <td>1300</td>
          <td data-met="75" data-imp="101"></td>
          <td data-met="7162" data-imp="63389"></td>
          <td>3800</td>
          <td data-met="47" data-imp="1.85"></td>
          <td data-met="115" data-imp="4.53"></td>
          <td data-met="140" data-imp="5.51"></td>
          <td data-met="168" data-imp="6.61"></td>
          <td rowspan="3" class="white">
            <span data-met="180" data-imp="7.0"></span><br>
            <span data-met="250" data-imp="10.0"></span><br>
            <span data-met="300" data-imp="11.5"></span>
          </td>
          <td data-met="105" data-imp="4.13"></td>
          <td data-met="250" data-imp="9.84"></td>
          <td data-met="162" data-imp="6.38"></td>
          <td data-met="195" data-imp="7.68"></td>
          <td data-met="61.6" data-imp="135.80"></td>
          <td data-met="27.1" data-imp="1.52"></td>
          <td data-met="0.55" data-imp="1879"></td>
          <td data-met="0" data-imp="5.82"></td>
          <td data-met="0.8" data-imp="7.09E+06"></td>
        </tr>
        <tr>
          <td>2000</td>
          <td data-met="105" data-imp="141"></td>
          <td data-met="10027" data-imp="88746"></td>
          <td>3700</td>
          <td data-met="52" data-imp="2.05"></td>
          <td data-met="120" data-imp="4.72"></td>
          <td data-met="155" data-imp="6.10"></td>
          <td data-met="180" data-imp="7.09"></td>
          <td data-met="115" data-imp="4.53"></td>
          <td data-met="275" data-imp="10.8"></td>
          <td data-met="178" data-imp="7.01"></td>
          <td data-met="215" data-imp="8.46"></td>
          <td data-met="82" data-imp="180.78"></td>
          <td data-met="42.8" data-imp="2.40"></td>
          <td data-met="0.88" data-imp="3007"></td>
          <td data-met="0" data-imp="14.5"></td>
          <td data-met="1.5" data-imp="1.33E+07"></td>
        </tr>
        <tr>
          <td>2500</td>
          <td data-met="140" data-imp="188"></td>
          <td data-met="13369" data-imp="118326"></td>
          <td>3600</td>
          <td data-met="62" data-imp="2.44"></td>
          <td data-met="135" data-imp="5.31"></td>
          <td data-met="165" data-imp="6.50"></td>
          <td data-met="180" data-imp="7.09"></td>
          <td data-met="130" data-imp="5.12"></td>
          <td data-met="300" data-imp="11.5"></td>
          <td data-met="190" data-imp="7.48"></td>
          <td data-met="235" data-imp="9.25"></td>
          <td data-met="107.1" data-imp="236.11"></td>
          <td data-met="42.8" data-imp="2.40"></td>
          <td data-met="1.38" data-imp="4716"></td>
          <td data-met="0" data-imp="14.5"></td>
          <td data-met="1.4" data-imp="1.24E+07"></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<?php include "footer.php"; ?>