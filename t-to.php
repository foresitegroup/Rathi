<?php
$PageTitle = "Elastomeric Coupling - Tire Flex / T/TO Type";
include "header.php";
?>

<div class="product-header-half">
  <div class="product-header">
    <div class="site-width">
      <h2>Elastomeric Coupling</h2>
      <h1>Tire Flex / T/TO Type</h1>
      <em>Compare to Dodge Para-Flex style</em>
    </div>
  </div>

  <div class="site-width">
    <div class="left">
      <h3>Selection Procedure</h3>
      <ol>
        <li>Service Factor: Determine the required service factor from Table 1 below.</li>
        <li>Design Power: Multiply the normal running power by the service factor. This gives the Design Power which is used as a basis for selecting the coupling.</li>
        <li>Coupling Size: Refer to Table 2; use speed and power to find the appropriate size.</li>
        <li>Bore Size: Check from Table 4 that selected coupling can accommodate required bores.</li>
      </ol>
    </div>

    <div class="right">
      <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
      <script type="text/javascript" src="inc/jquery.cycle2.carousel.min.js"></script>

      <div class="cycle-slideshow" data-cycle-fx="carousel" data-cycle-timeout="0" data-cycle-slides="> div" data-cycle-carousel-visible="1" data-cycle-carousel-fluid="true" data-cycle-next="#next" data-cycle-prev="#prev" data-cycle-pager="#pager,#number-pager" data-cycle-pager-template="<a href='#'>{{slideNum}}</a>">
        <div style="background-image: url(images/t-to-fig1.jpg);"></div>
        <div style="background-image: url(images/t-to-fig2.jpg);"></div>
        <div style="background-image: url(images/t-to-fig3.jpg);"></div>
        <div style="background-image: url(images/t-to-fig4.jpg);"></div>

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

      <a href="pdf/T-TO_Spec_Sheet.pdf" class="specsheet">Download Spec Sheet <i class="fa fa-download" aria-hidden="true"></i></a>
    </div>
  </div>
</div>

<div class="product-details">
  <div class="site-width">
    <h3>Details &amp; Specs</h3>

    <br>
    
    <h4>Table 1: Service Factors</h4>
    <table class="text-six">
      <thead>
        <tr>
          <th rowspan="3" class="text">
            <strong>SPECIAL CLASSES</strong><br>
            For applications where substantial shock, vibration and torque fluctuations occur and for reciprocating machines e.g. internal combustion engines, piston pumps and compressors Refer to Rathi Transpower Pvt. Ltd. with full application details for analysis.
          </th>
          <th colspan="6">Type of Driving Unit</th>
        </tr>
        <tr>
          <th colspan="3" class="blue">Electric Motors, Steam Turbines</th>
          <th colspan="3" class="blue">Internal Combustion Engines, Steam Engines, Water Engines</th>
        </tr>
        <tr>
          <th colspan="3">Hours per Day Duty</th>
          <th colspan="3">Hours per Day Duty</th>
        </tr>
        <tr>
          <th class="blue">Type of Driven Machine</th>
          <th class="blue">Up to 10</th>
          <th class="blue">10 to 16</th>
          <th class="blue">Over 16</th>
          <th class="blue">Up to 10</th>
          <th class="blue">10 to 16</th>
          <th class="blue">Over 16</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text">
            <strong>CLASS 1</strong><br>
            Agitators, Brewing machinery, Centrifugal compressors and pumps, Belt Conveyors, Dynamometers, Lineshafts, Fans up to 7.5kW / 10HP, Blower and exhausters (except positive displacement) &amp; Generators.
          </td>
          <td>0.8</td>
          <td>0.9</td>
          <td>1.0</td>
          <td>1.3</td>
          <td>1.4</td>
          <td>1.5</td>
        </tr>
        <tr>
          <td class="text">
            <strong>CLASS 2</strong><br>
            Clay working machinery, General machine tools, Paper mill beaters and winders, Rotary pumps, Rubber extruders, Rotary Screens, Textile Machinery, Marine Propellers &amp; Fans over 7.5kW / 10HP.
          </td>
          <td>1.3</td>
          <td>1.4</td>
          <td>1.5</td>
          <td>1.8</td>
          <td>1.9</td>
          <td>2.0</td>
        </tr>
        <tr>
          <td class="text">
            <strong>CLASS 3</strong><br>
            Bucket elevators, Cooling tower fans, Piston compressors &amp; pumps, Foundry machinery, Metal presses, Paper mills, Calenders, Hammer mills, Presses and pulp grinders, Rubber Calenders, Pulverisers &amp; Positive displacement blowers.
          </td>
          <td>1.8</td>
          <td>1.9</td>
          <td>2.0</td>
          <td>2.3</td>
          <td>2.4</td>
          <td>2.5</td>
        </tr>
        <tr>
          <td class="text">
            <strong>CLASS 4</strong><br>
            Reciprocating conveyors, Gyratory crushers, Mills (ball, pebble and rod), Rubber Machinery (Banbury Mixers and Mills) &amp; Vibratory screens.
          </td>
          <td>2.3</td>
          <td>2.4</td>
          <td>2.5</td>
          <td>2.8</td>
          <td>2.9</td>
          <td>3.0</td>
        </tr>
      </tbody>
    </table>

    <br><br>
    
    <script type="text/javascript">var wdec = 1;</script>
    <script type="text/javascript" src="inc/scale-convert.js"></script>

    <div class="system-toggle nudge">
      Units:
      <a href="#" class="convertimp">Imperial</a> / <a href="#" class="convertmet">Metric</a>
    </div>
    
    Table 4: Dimensional Data
    <table class="eighteen">
      <thead>
        <tr>
          <th rowspan="2">Coupling Size &amp; Type</th>
          <th rowspan="2"><span class="scalerpm">kW</span> at 100 RPM</th>
          <th rowspan="2">Max Speed RPM</th>
          <th rowspan="2"># Bush Size</th>
          <th colspan="2">Bore (<span class="scale">mm</span>)</th>
          <th colspan="3">Type F/H</th>
          <th colspan="2">Type B</th>
          <th rowspan="2">&Oslash;A (<span class="scale">mm</span>)</th>
          <th rowspan="2">&Oslash;D (<span class="scale">mm</span>)</th>
          <th rowspan="2">&Oslash;B (<span class="scale">mm</span>)</th>
          <th rowspan="2">M (<span class="scale">mm</span>)</th>
          <th rowspan="2">G (<span class="scale">mm</span>)</th>
          <th rowspan="2">Weight per Coupling (<span class="scalew">kg</span>)</th>
          <th rowspan="2">M.I. WR2 per Coupling (<span class="scalei">kgm2</span>)</th>
        </tr>
        <tr>
          <th class="blue">PB</th>
          <th class="blue">Max.</th>
          <th class="blue">L (<span class="scale">mm</span>)</th>
          <th class="blue">C (<span class="scale">mm</span>)</th>
          <th class="blue">J (<span class="scale">mm</span>)</th>
          <th class="blue">L (<span class="scale">mm</span>)</th>
          <th class="blue">C (<span class="scale">mm</span>)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>T-4 B</td>
          <td class="convertrpm">0.25</td>
          <td>4500</td>
          <td></td>
          <td class="convert">10</td>
          <td class="convert">32</td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert">68</td>
          <td class="convert">22</td>
          <td class="convert">104</td>
          <td class="convert">82</td>
          <td class="convert"></td>
          <td class="convert">17</td>
          <td class="convert">24</td>
          <td class="convertw">1.9</td>
          <td class="converti">0.00161</td>
        </tr>
        <tr>
          <td>T-4 F/H</td>
          <td class="convertrpm">0.25</td>
          <td>4500</td>
          <td>1008</td>
          <td class="convert"></td>
          <td class="convert">25</td>
          <td class="convert">68</td>
          <td class="convert">22</td>
          <td class="convert">29</td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert">104</td>
          <td class="convert">82</td>
          <td class="convert"></td>
          <td class="convert">17</td>
          <td class="convert">24</td>
          <td class="convertw">1.7</td>
          <td class="converti">0.00148</td>
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