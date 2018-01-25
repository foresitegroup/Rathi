<?php
$PageTitle = "Metallic Coupling - Disc / RSK Type";
include "header.php";
?>

<div class="product-header-half">
  <div class="product-header">
    <div class="site-width">
      <h2>Metallic Coupling</h2>
      <h1>Disc / RSK Type</h1>
      Spacer Coupling API 610 / 671
    </div>
  </div>

  <div class="site-width">
    <div class="left">
      To get the weight of the complete unit, add 2 hubs and 1 transmission unit.
    </div>

    <div class="right">
      <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
      <script type="text/javascript" src="inc/jquery.cycle2.carousel.min.js"></script>
      
      <div class="cycle-slideshow" data-cycle-fx="carousel" data-cycle-timeout="0" data-cycle-slides="> div" data-cycle-carousel-visible="1" data-cycle-carousel-fluid="true" data-cycle-next="#next" data-cycle-prev="#prev" data-cycle-pager="#pager,#number-pager" data-cycle-pager-template="<a href='#'>{{slideNum}}</a>">
        <div style="background-image: url(images/rsk-fig1.jpg);"></div>
        <div style="background-image: url(images/rsk-fig2.jpg);"></div>

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

    <table class="nineteen">
      <thead>
        <tr>
          <th rowspan="2">Coupling Size</th>
          <th rowspan="2"><span data-met="kW" data-imp="HP"></span> at 100 RPM</th>
          <th rowspan="2">Nominal Torque (<span data-met="N-m" data-imp="in-lbs"></span>)</th>
          <th rowspan="2">Peak Torque (<span data-met="N-m" data-imp="in-lbs"></span>)</th>
          <th rowspan="2">Max. Speed (RPM)</th>
          <th colspan="2">Wt. of Trans Unit</th>
          <th colspan="2">Wt. of Unbored Hub</th>
          <th colspan="2">Max Bore</th>
          <th rowspan="2">Min. DBSE S (<span data-met="mm" data-imp="in"></span>)</th>
          <th rowspan="2">Standard DBSE S (<span data-met="mm" data-imp="in"></span>)</th>
          <th rowspan="2">C1 (<span data-met="mm" data-imp="in"></span>)</th>
          <th rowspan="2">&Oslash;A1 (<span data-met="mm" data-imp="in"></span>)</th>
          <th rowspan="2">&Oslash;B1 (<span data-met="mm" data-imp="in"></span>)</th>
          <th rowspan="2">M (<span data-met="mm" data-imp="in"></span>)</th>
          <th colspan="2">Misalignment Capacity</th>
        </tr>
        <tr>
          <th class="blue">Std (<span data-met="kg" data-imp="lbs"></span>)</th>
          <th class="blue">Extra DBSE (<span data-met="kg/m" data-imp="lbs/in"></span>)</th>
          <th class="blue">Type I (<span data-met="kg" data-imp="lbs"></span>)</th>
          <th class="blue">Type II (<span data-met="kg" data-imp="lbs"></span>)</th>
          <th class="blue">Type I (<span data-met="mm" data-imp="in"></span>)</th>
          <th class="blue">Type II (<span data-met="mm" data-imp="in"></span>)</th>
          <th class="blue">Axial &plusmn; (<span data-met="mm" data-imp="in"></span>)</th>
          <th class="blue">Parallel &plusmn; (<span data-met="mm" data-imp="in"></span>)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>13</td>
          <td data-met="1.3" data-imp="1.74"></td>
          <td data-met="124" data-imp="1097"></td>
          <td data-met="310" data-imp="2744"></td>
          <td>25500</td>
          <td data-met="1.5" data-imp="3.31"></td>
          <td data-met="3.1" data-imp="0.17"></td>
          <td data-met="1" data-imp="2.20"></td>
          <td data-met="1.9" data-imp="4.19"></td>
          <td data-met="36" data-imp="1.42"></td>
          <td data-met="51" data-imp="2.01"></td>
          <td data-met="75" data-imp="2.95"></td>
          <td rowspan="2">
            <span data-met="100" data-imp="3.5"></span><br>
            <span data-met="140" data-imp="5.0"></span><br>
            <span data-met="180" data-imp="7.0"></span>
          </td>
          <td data-met="40" data-imp="1.57"></td>
          <td data-met="86" data-imp="3.39"></td>
          <td data-met="54" data-imp="2.13"></td>
          <td data-met="90" data-imp="3.54"></td>
          <td data-met="1" data-imp="0.04"></td>
          <td data-met="0.3" data-imp="0.01"></td>
        </tr>
        <tr>
          <td>33</td>
          <td data-met="3.3" data-imp="4.43"></td>
          <td data-met="315" data-imp="2788"></td>
          <td data-met="790" data-imp="6992"></td>
          <td>20000</td>
          <td data-met="3" data-imp="6.61"></td>
          <td data-met="5" data-imp="0.28"></td>
          <td data-met="1.4" data-imp="3.09"></td>
          <td data-met="3.1" data-imp="6.83"></td>
          <td data-met="46" data-imp="1.81"></td>
          <td data-met="70" data-imp="2.76"></td>
          <td data-met="90" data-imp="3.54"></td>
          <td data-met="45" data-imp="1.77"></td>
          <td data-met="105" data-imp="4.13"></td>
          <td data-met="69" data-imp="2.72"></td>
          <td data-met="105" data-imp="4.13"></td>
          <td data-met="1.25" data-imp="0.05"></td>
          <td data-met="0.36" data-imp="0.01"></td>
        </tr>
        <tr>
          <td>75</td>
          <td data-met="7.5" data-imp="10.06"></td>
          <td data-met="716" data-imp="6337"></td>
          <td data-met="1790" data-imp="15843"></td>
          <td>16500</td>
          <td data-met="5.6" data-imp="12.35"></td>
          <td data-met="6.5" data-imp="0.36"></td>
          <td data-met="3.6" data-imp="7.94"></td>
          <td data-met="5.8" data-imp="12.79"></td>
          <td data-met="65" data-imp="2.56"></td>
          <td data-met="90" data-imp="3.54"></td>
          <td data-met="107" data-imp="4.21"></td>
          <td rowspan="3">
            <span data-met="140" data-imp="5.0"></span><br>
            <span data-met="180" data-imp="7.0"></span><br>
            <span data-met="250" data-imp="10.0"></span>
          </td>
          <td data-met="55" data-imp="2.17"></td>
          <td data-met="130" data-imp="5.12"></td>
          <td data-met="90" data-imp="3.54"></td>
          <td data-met="120" data-imp="4.72"></td>
          <td data-met="1.5" data-imp="0.06"></td>
          <td data-met="0.45" data-imp="0.02"></td>
        </tr>
        <tr>
          <td>135</td>
          <td data-met="13.5" data-imp="18.10"></td>
          <td data-met="1289" data-imp="11409"></td>
          <td data-met="3220" data-imp="28499"></td>
          <td>14400</td>
          <td data-met="9.3" data-imp="20.50"></td>
          <td data-met="10.5" data-imp="0.59"></td>
          <td data-met="5.9" data-imp="13.01"></td>
          <td data-met="8.7" data-imp="19.18"></td>
          <td data-met="80" data-imp="3.15"></td>
          <td data-met="102" data-imp="4.02"></td>
          <td data-met="127" data-imp="5.00"></td>
          <td data-met="62" data-imp="2.44"></td>
          <td data-met="152" data-imp="5.98"></td>
          <td data-met="112" data-imp="4.41"></td>
          <td data-met="127" data-imp="5.00"></td>
          <td data-met="2" data-imp="0.08"></td>
          <td data-met="0.55" data-imp="0.02"></td>
        </tr>
        <tr>
          <td>230</td>
          <td data-met="23" data-imp="30.84"></td>
          <td data-met="2196" data-imp="19436"></td>
          <td data-met="5490" data-imp="48591"></td>
          <td>12000</td>
          <td data-met="14" data-imp="30.86"></td>
          <td data-met="13" data-imp="0.73"></td>
          <td data-met="9" data-imp="19.84"></td>
          <td data-met="14" data-imp="30.86"></td>
          <td data-met="90" data-imp="3.54"></td>
          <td data-met="121" data-imp="4.76"></td>
          <td data-met="133" data-imp="5.24"></td>
          <td data-met="70" data-imp="2.76"></td>
          <td data-met="179" data-imp="7.05"></td>
          <td data-met="131" data-imp="5.16"></td>
          <td data-met="135" data-imp="5.31"></td>
          <td data-met="2.5" data-imp="0.10"></td>
          <td data-met="0.6" data-imp="0.02"></td>
        </tr>
        <tr>
          <td>350</td>
          <td data-met="35" data-imp="46.94"></td>
          <td data-met="3342" data-imp="29579"></td>
          <td data-met="8360" data-imp="73992"></td>
          <td>10500</td>
          <td data-met="18.7" data-imp="41.23"></td>
          <td data-met="22" data-imp="1.23"></td>
          <td data-met="16.4" data-imp="36.16"></td>
          <td></td>
          <td data-met="115" data-imp="4.53"></td>
          <td></td>
          <td data-met="139" data-imp="5.47"></td>
          <td rowspan="5" class="white">
            <span data-met="180" data-imp="7.0"></span><br>
            <span data-met="250" data-imp="10.0"></span>
          </td>
          <td data-met="90" data-imp="3.54"></td>
          <td data-met="197" data-imp="7.76"></td>
          <td data-met="163" data-imp="6.42"></td>
          <td></td>
          <td data-met="2.75" data-imp="0.11"></td>
          <td data-met="0.64" data-imp="0.03"></td>
        </tr>
        <tr>
          <td>500</td>
          <td data-met="50" data-imp="67.05"></td>
          <td data-met="4775" data-imp="42262"></td>
          <td data-met="11940" data-imp="105678"></td>
          <td>9500</td>
          <td data-met="25.6" data-imp="56.44"></td>
          <td data-met="22" data-imp="1.23"></td>
          <td data-met="21" data-imp="46.30"></td>
          <td></td>
          <td data-met="127" data-imp="5.00"></td>
          <td></td>
          <td data-met="141" data-imp="5.55"></td>
          <td data-met="95" data-imp="3.74"></td>
          <td data-met="222" data-imp="8.74"></td>
          <td data-met="181" data-imp="7.13"></td>
          <td></td>
          <td data-met="3.25" data-imp="0.13"></td>
          <td data-met="0.65" data-imp="0.03"></td>
        </tr>
        <tr>
          <td>740</td>
          <td data-met="74" data-imp="99.24"></td>
          <td data-met="7066" data-imp="62539"></td>
          <td data-met="17670" data-imp="156393"></td>
          <td>8000</td>
          <td data-met="34.2" data-imp="75.40"></td>
          <td data-met="27.5" data-imp="1.54"></td>
          <td data-met="30" data-imp="66.14"></td>
          <td></td>
          <td data-met="140" data-imp="5.51"></td>
          <td></td>
          <td data-met="143" data-imp="5.63"></td>
          <td data-met="107" data-imp="4.21"></td>
          <td data-met="247" data-imp="9.72"></td>
          <td data-met="206" data-imp="8.11"></td>
          <td></td>
          <td data-met="3.75" data-imp="0.16"></td>
          <td data-met="0.68" data-imp="0.03"></td>
        </tr>
        <tr>
          <td>930</td>
          <td data-met="93" data-imp="124.71"></td>
          <td data-met="8881" data-imp="78603"></td>
          <td data-met="22200" data-imp="196487"></td>
          <td>7000</td>
          <td data-met="44" data-imp="97.00"></td>
          <td data-met="40" data-imp="2.24"></td>
          <td data-met="38" data-imp="83.78"></td>
          <td></td>
          <td data-met="155" data-imp="6.10"></td>
          <td></td>
          <td data-met="155" data-imp="6.10"></td>
          <td data-met="115" data-imp="4.53"></td>
          <td data-met="272" data-imp="10.71"></td>
          <td data-met="223" data-imp="8.78"></td>
          <td></td>
          <td data-met="4.25" data-imp="0.17"></td>
          <td data-met="0.72" data-imp="0.03"></td>
        </tr>
        <tr>
          <td>1400</td>
          <td data-met="140" data-imp="187.74"></td>
          <td data-met="13369" data-imp="118326"></td>
          <td data-met="33400" data-imp="295615"></td>
          <td>6000</td>
          <td data-met="54" data-imp="119.05"></td>
          <td data-met="40" data-imp="2.24"></td>
          <td data-met="52.1" data-imp="114.86"></td>
          <td></td>
          <td data-met="172" data-imp="6.77"></td>
          <td></td>
          <td data-met="175" data-imp="6.89"></td>
          <td data-met="130" data-imp="5.12"></td>
          <td data-met="297" data-imp="11.69"></td>
          <td data-met="248" data-imp="9.76"></td>
          <td></td>
          <td data-met="5" data-imp="0.20"></td>
          <td data-met="0.83" data-imp="0.03"></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<?php include "footer.php"; ?>