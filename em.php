<?php
$PageTitle = "Metallic Coupling - Disc / EM Type";
include "header.php";
?>

<div class="product-header-half">
  <div class="product-header">
    <div class="site-width">
      <h2>Metallic Coupling</h2>
      <h1>Disc / EM Type</h1>
      Spacer Coupling API 610 / 671
    </div>
  </div>

  <div class="site-width">
    <div class="left">
      <ul>
        <li>Couplings are have ATEX certification as standard</li>
        <li>Non-Sparking and non-standard DBSE options are vailable</li>
        <li>Weight and inertia are for maximum bores and minimum DBSE</li>
        <li>Possible hub combinations are: I/I; I/II; II/II; III/III, III/IV; IV/IV</li>
        <li>API couplings are provided with puller holes</li>
        <li>Other options are available: taper bush, shrink disc, clamping hubs, brake discs, special coating or others</li>
      </ul>
    </div>

    <div class="right">
      <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
      <script type="text/javascript" src="inc/jquery.cycle2.carousel.min.js"></script>

      <div class="cycle-slideshow" data-cycle-fx="carousel" data-cycle-timeout="0" data-cycle-slides="> div" data-cycle-carousel-visible="1" data-cycle-carousel-fluid="true" data-cycle-next="#next" data-cycle-prev="#prev" data-cycle-pager="#pager,#number-pager" data-cycle-pager-template="<a href='#'>{{slideNum}}</a>">
        <div style="background-image: url(images/em-fig1.jpg);"></div>
        <div style="background-image: url(images/em-fig2.jpg);"></div>

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

    <table class="twentyfour">
      <thead>
        <tr>
          <th rowspan="3">Coupling Size</th>
          <th rowspan="3"><span data-met="kW" data-imp="HP"></span> at 100 RPM</th>
          <th rowspan="3">Torque (<span data-met="N-m" data-imp="in-lbs"></span>)</th>
          <th rowspan="3">Max. Speed (RPM)</th>
          <th colspan="5">Bore (<span data-met="mm" data-imp="in"></span>)</th>
          <th rowspan="3">Min. DBSE S (<span data-met="mm" data-imp="in"></span>)</th>
          <th rowspan="3">Std. DBSE S (<span data-met="mm" data-imp="in"></span>)</th>
          <th rowspan="3">C1 (<span data-met="mm" data-imp="in"></span>)</th>
          <th rowspan="3">C2 (<span data-met="mm" data-imp="in"></span>)</th>
          <th rowspan="3">&Oslash;A1 (<span data-met="mm" data-imp="in"></span>)</th>
          <th rowspan="3">&Oslash;A2 (<span data-met="mm" data-imp="in"></span>)</th>
          <th rowspan="3">&Oslash;B1 (<span data-met="mm" data-imp="in"></span>)</th>
          <th rowspan="3">&Oslash;B2 (<span data-met="mm" data-imp="in"></span>)</th>
          <th rowspan="3">M1 (<span data-met="mm" data-imp="in"></span>)</th>
          <th rowspan="3">M2 (<span data-met="mm" data-imp="in"></span>)</th>
          <th rowspan="2" colspan="2">Weight (<span data-met="kg" data-imp="lbs"></span>)</th>
          <th rowspan="2" colspan="2">MI (WR&sup2;) (<span data-met="kgm2" data-imp="lb-in2"></span>)</th>
          <th rowspan="3">Torsional Stiffness (<span data-met="N-m" data-imp="in-lbs"></span> / rad)</th>
        </tr>
        <tr>
          <th class="blue" rowspan="2">Min.</th>
          <th class="blue" colspan="4">Max.</th>
        </tr>
        <tr>
          <th>Type I</th>
          <th>Type II</th>
          <th>Type III</th>
          <th>Type IV</th>
          <th class="blue">Min. Std. S</th>
          <th class="blue">Per <span data-met="m" data-imp="Inch"></span></th>
          <th class="blue">Min. Std. S</th>
          <th class="blue">Per <span data-met="m" data-imp="Inch"></span></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>4</td>
          <td data-met="0.4" data-imp="0.54"></td>
          <td data-met="33" data-imp="292"></td>
          <td>7500</td>
          <td data-met="8" data-imp="0.31"></td>
          <td data-met="19" data-imp="0.75"></td>
          <td data-met="32" data-imp="1.26"></td>
          <td data-met="24" data-imp="0.94"></td>
          <td data-met="42" data-imp="1.65"></td>
          <td data-met="51" data-imp="2.01"></td>
          <td rowspan="4">
            <span data-met="100" data-imp="3.5"></span><br>
            <span data-met="140" data-imp="5.0"></span><br>
            <span data-met="180" data-imp="7.0"></span>
          </td>
          <td data-met="25" data-imp="0.98"></td>
          <td data-met="30" data-imp="1.18"></td>
          <td data-met="61" data-imp="2.40"></td>
          <td data-met="69" data-imp="2.72"></td>
          <td data-met="32" data-imp="1.26"></td>
          <td data-met="40" data-imp="1.57"></td>
          <td data-met="70" data-imp="2.76"></td>
          <td data-met="80" data-imp="3.15"></td>
          <td data-met="1.3" data-imp="2.87"></td>
          <td data-met="1.2" data-imp="0.07"></td>
          <td data-met="0.00060" data-imp="2.05"></td>
          <td data-met="0.00010" data-imp="0.009"></td>
          <td data-met="0.0160" data-imp="1.42E+05"></td>
        </tr>
        <tr>
          <td>8</td>
          <td data-met="0.7" data-imp="0.94"></td>
          <td data-met="64" data-imp="566"></td>
          <td>7500</td>
          <td data-met="8" data-imp="0.31"></td>
          <td data-met="24" data-imp="0.94"></td>
          <td data-met="42" data-imp="1.65"></td>
          <td data-met="38" data-imp="1.50"></td>
          <td data-met="48" data-imp="1.89"></td>
          <td data-met="65" data-imp="2.56"></td>
          <td data-met="30" data-imp="1.18"></td>
          <td data-met="40" data-imp="1.57"></td>
          <td data-met="69" data-imp="2.72"></td>
          <td data-met="90" data-imp="3.54"></td>
          <td data-met="40" data-imp="4.25"></td>
          <td data-met="55" data-imp="2.17"></td>
          <td data-met="80" data-imp="3.15"></td>
          <td data-met="90" data-imp="3.54"></td>
          <td data-met="2" data-imp="4.41"></td>
          <td data-met="1.3" data-imp="0.07"></td>
          <td data-met="0.00100" data-imp="3.42"></td>
          <td data-met="0.00020" data-imp="0.017"></td>
          <td data-met="0.0310" data-imp="2.75E+05"></td>
        </tr>
        <tr>
          <td>25</td>
          <td data-met="1.7" data-imp="2.28"></td>
          <td data-met="159" data-imp="1407"></td>
          <td>7000</td>
          <td data-met="10" data-imp="0.39"></td>
          <td data-met="38" data-imp="1.50"></td>
          <td data-met="48" data-imp="1.89"></td>
          <td data-met="48" data-imp="1.89"></td>
          <td data-met="72" data-imp="2.83"></td>
          <td data-met="71" data-imp="2.80"></td>
          <td data-met="40" data-imp="1.57"></td>
          <td data-met="45" data-imp="1.77"></td>
          <td data-met="90" data-imp="3.54"></td>
          <td data-met="108" data-imp="4.25"></td>
          <td data-met="55" data-imp="2.17"></td>
          <td data-met="70" data-imp="2.76"></td>
          <td data-met="90" data-imp="3.54"></td>
          <td data-met="105" data-imp="4.13"></td>
          <td data-met="3.76" data-imp="8.29"></td>
          <td data-met="2.4" data-imp="0.13"></td>
          <td data-met="0.00380" data-imp="13.0"></td>
          <td data-met="0.00050" data-imp="0.043"></td>
          <td data-met="0.0250" data-imp="2.21E+05"></td>
        </tr>
        <tr>
          <td>65</td>
          <td data-met="5.4" data-imp="7.24"></td>
          <td data-met="516" data-imp="4567"></td>
          <td>6000</td>
          <td data-met="15" data-imp="0.59"></td>
          <td data-met="48" data-imp="1.89"></td>
          <td data-met="72" data-imp="2.83"></td>
          <td data-met="65" data-imp="2.56"></td>
          <td data-met="92" data-imp="3.62"></td>
          <td data-met="95" data-imp="3.74"></td>
          <td data-met="45" data-imp="1.77"></td>
          <td data-met="55" data-imp="2.17"></td>
          <td data-met="108" data-imp="4.25"></td>
          <td data-met="135" data-imp="5.31"></td>
          <td data-met="70" data-imp="2.76"></td>
          <td data-met="86" data-imp="3.39"></td>
          <td data-met="105" data-imp="4.13"></td>
          <td data-met="120" data-imp="4.72"></td>
          <td data-met="6" data-imp="13.2"></td>
          <td data-met="2.7" data-imp="0.15"></td>
          <td data-met="0.00900" data-imp="30.8"></td>
          <td data-met="0.00090" data-imp="0.078"></td>
          <td data-met="0.0400" data-imp="3.54E+05"></td>
        </tr>
        <tr>
          <td>125</td>
          <td data-met="9" data-imp="12.1"></td>
          <td data-met="859" data-imp="7603"></td>
          <td>5200</td>
          <td data-met="20" data-imp="0.79"></td>
          <td data-met="65" data-imp="2.56"></td>
          <td data-met="92" data-imp="3.62"></td>
          <td data-met="80" data-imp="3.15"></td>
          <td data-met="102" data-imp="4.02"></td>
          <td data-met="107" data-imp="4.21"></td>
          <td rowspan="2">
            <span data-met="140" data-imp="5.0"></span><br>
            <span data-met="180" data-imp="7.0"></span>
          </td>
          <td data-met="55" data-imp="2.17"></td>
          <td data-met="60" data-imp="2.36"></td>
          <td data-met="135" data-imp="5.31"></td>
          <td data-met="152" data-imp="5.98"></td>
          <td data-met="86" data-imp="3.39"></td>
          <td data-met="108" data-imp="4.25"></td>
          <td data-met="120" data-imp="4.72"></td>
          <td data-met="125" data-imp="4.92"></td>
          <td data-met="11.1" data-imp="24.5"></td>
          <td data-met="7" data-imp="0.39"></td>
          <td data-met="0.03000" data-imp="103"></td>
          <td data-met="0.00500" data-imp="0.434"></td>
          <td data-met="0.0950" data-imp="8.42E+05"></td>
        </tr>
        <tr>
          <td>165</td>
          <td data-met="14" data-imp="18.8"></td>
          <td data-met="1337" data-imp="11833"></td>
          <td>4800</td>
          <td data-met="25" data-imp="0.98"></td>
          <td data-met="80" data-imp="3.15"></td>
          <td data-met="102" data-imp="4.02"></td>
          <td data-met="90" data-imp="3.54"></td>
          <td data-met="120" data-imp="4.72"></td>
          <td data-met="129" data-imp="5.08"></td>
          <td data-met="55" data-imp="2.36"></td>
          <td data-met="60" data-imp="2.76"></td>
          <td data-met="135" data-imp="5.98"></td>
          <td data-met="152" data-imp="7.17"></td>
          <td data-met="86" data-imp="4.25"></td>
          <td data-met="108" data-imp="5.12"></td>
          <td data-met="120" data-imp="4.92"></td>
          <td data-met="125" data-imp="5.31"></td>
          <td data-met="11.1" data-imp="37.5"></td>
          <td data-met="7" data-imp="0.47"></td>
          <td data-met="0.03000" data-imp="205"></td>
          <td data-met="0.00500" data-imp="0.781"></td>
          <td data-met="0.0950" data-imp="1.51E+06"></td>
        </tr>
        <tr>
          <td>370</td>
          <td data-met="25" data-imp="33.5"></td>
          <td data-met="2387" data-imp="21127"></td>
          <td>4400</td>
          <td data-met="30" data-imp="1.18"></td>
          <td data-met="90" data-imp="3.54"></td>
          <td data-met="120" data-imp="4.72"></td>
          <td data-met="108" data-imp="4.25"></td>
          <td data-met="140" data-imp="5.51"></td>
          <td data-met="142" data-imp="5.59"></td>
          <td rowspan="4">
            <span data-met="180" data-imp="7.0"></span><br>
            <span data-met="250" data-imp="10.0"></span>
          </td>
          <td data-met="70" data-imp="2.76"></td>
          <td data-met="90" data-imp="3.54"></td>
          <td data-met="182" data-imp="7.17"></td>
          <td data-met="197" data-imp="7.76"></td>
          <td data-met="130" data-imp="5.12"></td>
          <td data-met="158" data-imp="6.22"></td>
          <td data-met="135" data-imp="5.31"></td>
          <td data-met="155" data-imp="6.10"></td>
          <td data-met="28.4" data-imp="62.6"></td>
          <td data-met="13.1" data-imp="0.73"></td>
          <td data-met="0.13000" data-imp="444"></td>
          <td data-met="0.02100" data-imp="1.82"></td>
          <td data-met="0.3050" data-imp="2.70E+06"></td>
        </tr>
        <tr>
          <td>390</td>
          <td data-met="35" data-imp="46.9"></td>
          <td data-met="3342" data-imp="29579"></td>
          <td>4200</td>
          <td data-met="45" data-imp="1.77"></td>
          <td data-met="108" data-imp="4.25"></td>
          <td data-met="140" data-imp="5.51"></td>
          <td data-met="127" data-imp="5.00"></td>
          <td data-met="155" data-imp="6.10"></td>
          <td data-met="153" data-imp="6.02"></td>
          <td data-met="90" data-imp="3.54"></td>
          <td data-met="95" data-imp="3.74"></td>
          <td data-met="197" data-imp="7.76"></td>
          <td data-met="225" data-imp="8.86"></td>
          <td data-met="158" data-imp="6.22"></td>
          <td data-met="181" data-imp="7.13"></td>
          <td data-met="155" data-imp="6.10"></td>
          <td data-met="160" data-imp="6.30"></td>
          <td data-met="38.3" data-imp="84.4"></td>
          <td data-met="12.8" data-imp="0.72"></td>
          <td data-met="0.23000" data-imp="786"></td>
          <td data-met="0.03600" data-imp="3.12"></td>
          <td data-met="0.4320" data-imp="3.83E+06"></td>
        </tr>
        <tr>
          <td>790</td>
          <td data-met="53" data-imp="71.1"></td>
          <td data-met="5061" data-imp="44794"></td>
          <td>4000</td>
          <td data-met="55" data-imp="2.17"></td>
          <td data-met="127" data-imp="5.00"></td>
          <td data-met="155" data-imp="6.10"></td>
          <td data-met="140" data-imp="5.51"></td>
          <td data-met="178" data-imp="7.01"></td>
          <td data-met="156" data-imp="6.14"></td>
          <td data-met="95" data-imp="3.74"></td>
          <td data-met="105" data-imp="4.13"></td>
          <td data-met="225" data-imp="8.86"></td>
          <td data-met="250" data-imp="9.84"></td>
          <td data-met="275" data-imp="7.13"></td>
          <td data-met="206" data-imp="8.11"></td>
          <td data-met="160" data-imp="6.30"></td>
          <td data-met="170" data-imp="6.69"></td>
          <td data-met="53.2" data-imp="117"></td>
          <td data-met="19.2" data-imp="1.08"></td>
          <td data-met="0.42000" data-imp="1435"></td>
          <td data-met="0.05300" data-imp="4.60"></td>
          <td data-met="0.6000" data-imp="5.31E+06"></td>
        </tr>
        <tr>
          <td>1025</td>
          <td data-met="75" data-imp="101"></td>
          <td data-met="7162" data-imp="63389"></td>
          <td>3800</td>
          <td data-met="65" data-imp="2.56"></td>
          <td data-met="140" data-imp="5.51"></td>
          <td data-met="178" data-imp="7.01"></td>
          <td data-met="155" data-imp="6.10"></td>
          <td data-met="192" data-imp="7.56"></td>
          <td data-met="169" data-imp="6.65"></td>
          <td data-met="105" data-imp="4.13"></td>
          <td data-met="115" data-imp="4.53"></td>
          <td data-met="250" data-imp="9.84"></td>
          <td data-met="275" data-imp="10.8"></td>
          <td data-met="206" data-imp="8.11"></td>
          <td data-met="223" data-imp="8.78"></td>
          <td data-met="170" data-imp="6.69"></td>
          <td data-met="190" data-imp="7.48"></td>
          <td data-met="74.4" data-imp="164"></td>
          <td data-met="27.1" data-imp="1.52"></td>
          <td data-met="0.70000" data-imp="2392"></td>
          <td data-met="0.06700" data-imp="5.82"></td>
          <td data-met="0.8000" data-imp="7.09E+06"></td>
        </tr>
        <tr>
          <td>1425</td>
          <td data-met="105" data-imp="141"></td>
          <td data-met="10027" data-imp="88746"></td>
          <td>3700</td>
          <td data-met="70" data-imp="2.76"></td>
          <td data-met="155" data-imp="6.10"></td>
          <td data-met="192" data-imp="7.56"></td>
          <td data-met="170" data-imp="6.69"></td>
          <td data-met="212" data-imp="8.35"></td>
          <td data-met="188" data-imp="7.40"></td>
          <td rowspan="2" data-met="250" data-imp="10.0"></td>
          <td data-met="115" data-imp="4.53"></td>
          <td data-met="130" data-imp="5.12"></td>
          <td data-met="275" data-imp="10.8"></td>
          <td data-met="300" data-imp="11.8"></td>
          <td data-met="223" data-imp="8.78"></td>
          <td data-met="248" data-imp="9.76"></td>
          <td data-met="190" data-imp="7.48"></td>
          <td data-met="215" data-imp="8.46"></td>
          <td data-met="98.6" data-imp="217"></td>
          <td data-met="34.6" data-imp="1.94"></td>
          <td data-met="1.10000" data-imp="3759"></td>
          <td data-met="0.14000" data-imp="12.0"></td>
          <td data-met="1.1000" data-imp="9.74E+06"></td>
        </tr>
        <tr>
          <td>1880</td>
          <td data-met="140" data-imp="188"></td>
          <td data-met="13369" data-imp="118326"></td>
          <td>3600</td>
          <td data-met="75" data-imp="2.95"></td>
          <td data-met="170" data-imp="6.69"></td>
          <td data-met="212" data-imp="8.35"></td>
          <td data-met="190" data-imp="7.48"></td>
          <td data-met="255" data-imp="10.04"></td>
          <td data-met="202" data-imp="7.95"></td>
          <td data-met="130" data-imp="5.12"></td>
          <td data-met="145" data-imp="5.71"></td>
          <td data-met="300" data-imp="11.8"></td>
          <td data-met="375" data-imp="14.8"></td>
          <td data-met="248" data-imp="9.76"></td>
          <td data-met="280" data-imp="11.0"></td>
          <td data-met="215" data-imp="8.46"></td>
          <td data-met="245" data-imp="9.65"></td>
          <td data-met="128.1" data-imp="282"></td>
          <td data-met="42.8" data-imp="2.40"></td>
          <td data-met="1.70000" data-imp="5809"></td>
          <td data-met="0.16000" data-imp="13.9"></td>
          <td data-met="1.5000" data-imp="1.33E+07"></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<?php include "footer.php"; ?>