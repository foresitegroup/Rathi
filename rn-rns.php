<?php
$PageTitle = "Elastomeric Coupling - Claw / N-Flex RN and RNS Type";
include "header.php";
?>

<div class="product-header-half">
  <div class="product-header">
    <div class="site-width">
      <h2>Elastomeric Coupling</h2>
      <h1>Claw / N-Flex RN &amp; RNS Type</h1>
      <em>Compare to Flender&reg; N-EUPEX style</em>
    </div>
  </div>

  <div class="site-width">
    <div class="left">
      Rathi N-Flex couplings consists of cast iron hubs and a set of "H" shaped highly resilient blocks which accommodates parallel, angular, and axial misalignment.<br>
      <br>

      Rathi N-Flex spacer couplings (Type - RNS) are suitable for "Back Pullout Pumps" in which the impeller can be disassembled without disturbing motor and pump from the base frame.<br>
      <br>

      <h3>Features</h3>
      <strong>Simplicity of construction</strong><br>
      <ul>
        <li>Easy to assemble and disassemble.</li>
        <li>Suitable for reversing operation.</li>
      </ul>
      <br>

      <strong>Varying stiffness characteristics</strong><br>
      <ul>
        <li>Special "H" shaped inserts provide progressively increasing stiffness characteristics and ensure effective shock / vibration absorption.</li>
        <li>Special elastomer can be supplied to suit specific application needs.</li>
      </ul>
      <br>

      <strong>No lubrication</strong><br>
      <ul>
        <li>RN/RNS couplings do not require lubrication of any kind.</li>
      </ul>
      <br>

      <strong>Simple / easy maintenance</strong><br>
      <ul>
        <li>No complicated mechanism to demand adjustment or maintenance.</li>
        <li>Inspection and replacement of inserts is easy.</li>
      </ul>
      <br>

      <strong>Low operational cost</strong><br>
      <ul>
        <li>Only wear part is low cost inserts which make coupling economical in long run.</li>
      </ul>
      <br>

      <strong>Smooth &amp; quiet operation</strong><br>
      <ul>
        <li>Reduces vibration &amp; noise arising from severe torque fluctuations.</li>
        <li>Operating temperature is -22°F to 212°F.</li>
      </ul>
      <br>
      <br>

      <h3>Applications</h3>
      Mainly for pump applications: water pumps, slurry pumps, sewage pumps, back pull out pumps, multistage pumps, spilt case pumps, api pumps, chemical process pumps, metering/dosing pumps, gear pumps, paper stock pumps, screw pumps, vacuum pumps, fire pumps, high pressure pumps
    </div>

    <div class="right">
      <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
      <script type="text/javascript" src="inc/jquery.cycle2.carousel.min.js"></script>

      <div class="cycle-slideshow" data-cycle-fx="carousel" data-cycle-timeout="0" data-cycle-slides="> div" data-cycle-carousel-visible="1" data-cycle-carousel-fluid="true" data-cycle-next="#next" data-cycle-prev="#prev" data-cycle-pager="#pager,#number-pager" data-cycle-pager-template="<a href='#'>{{slideNum}}</a>">
        <div style="background-image: url(images/rn-rns-fig4.jpg);"></div>
        <div style="background-image: url(images/rn-rns-fig5.jpg);"></div>
        <div style="background-image: url(images/rn-rns-fig6.jpg);"></div>
        <div style="background-image: url(images/rn-rns-fig9.jpg);"></div>

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

      <a href="pdf/RN-RNS_Spec_Sheet.pdf" class="specsheet">Download Spec Sheet <i class="fa fa-download" aria-hidden="true"></i></a>
    </div>
  </div>
</div>

<div class="product-details">
  <div class="site-width">
    <h3>Details &amp; Specs</h3>
    
    <script type="text/javascript">var rpmdec = 3; wdecm = 2; idecm = 4;</script>
    <script type="text/javascript" src="inc/scale-convert.js"></script>

    <div class="system-toggle">
      Units:
      <a href="#" class="convertimp">Imperial</a> / <a href="#" class="convertmet">Metric</a>
    </div>

    <table class="thirteen top">
      <thead>
        <tr>
          <th rowspan="2">Coupling Size</th>
          <th rowspan="2">Rated Torque (<span class="scalet">N-m</span>)</th>
          <th rowspan="2"><span class="scalerpm">kW</span> at 100 RPM</th>
          <th rowspan="2">Max Speed RPM</th>
          <th colspan="3">Max Bore (<span class="scale">mm</span>) Part No.</th>
          <th colspan="3">Weight (<span class="scalew">kg</span>)</th>
          <th colspan="3">M.I. WR2 (<span class="scalei">kgm2</span>)</th>
        </tr>
        <tr>
          <th class="blue">1, 5</th>
          <th class="blue">4</th>
          <th class="blue">2</th>
          <th class="blue">RN(B)</th>
          <th class="blue">RN(A)</th>
          <th class="blue">RNS(H)</th>
          <th class="blue">RN(B)</th>
          <th class="blue">RN(A)</th>
          <th class="blue">RNS(H)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>68 B</td>
          <td class="convertt">34</td>
          <td class="convertrpm">0.36</td>
          <td>5000</td>
          <td class="convert">24</td>
          <td class="convert">28</td>
          <td class="convert"></td>
          <td class="convertw">0.63</td>
          <td class="convertw"></td>
          <td class="convertw"></td>
          <td class="converti">0.0003</td>
          <td class="converti"></td>
          <td class="converti"></td>
        </tr>
        <tr>
          <td>80 B,H</td>
          <td class="convertt">60</td>
          <td class="convertrpm">0.63</td>
          <td>5000</td>
          <td><span class="convert">30</span>*</td>
          <td class="convert">38</td>
          <td class="convert"></td>
          <td class="convertw">1.51</td>
          <td class="convertw"></td>
          <td>
            <span class="convertw">2.80</span><br>
            <span class="convertw">2.90</span>
          </td>
          <td class="converti">0.0012</td>
          <td class="converti"></td>
          <td>
            <span class="converti">0.0014</span><br>
            <span class="converti">0.0015</span>
          </td>
        </tr>
        <tr>
          <td>95 B,H</td>
          <td class="convertt">100</td>
          <td class="convertrpm">1.10</td>
          <td>5000</td>
          <td class="convert">42</td>
          <td class="convert">42</td>
          <td class="convert"></td>
          <td class="convertw">2.60</td>
          <td class="convertw"></td>
          <td>
            <span class="convertw">3.90</span><br>
            <span class="convertw">4.20</span>
          </td>
          <td class="converti">0.0027</td>
          <td class="converti"></td>
          <td>
            <span class="converti">0.0028</span><br>
            <span class="converti">0.0031</span>
          </td>
        </tr>
        <tr>
          <td>110 A,B,H</td>
          <td class="convertt">160</td>
          <td class="convertrpm">1.70</td>
          <td>5000</td>
          <td class="convert">48</td>
          <td class="convert">48</td>
          <td class="convert">38</td>
          <td class="convertw">3.90</td>
          <td class="convertw">3.50</td>
          <td>
            <span class="convertw">5.80</span><br>
            <span class="convertw">6.20</span><br>
            <span class="convertw">6.60</span>
          </td>
          <td class="converti">0.0055</td>
          <td class="converti">0.0047</td>
          <td>
            <span class="converti">0.0056</span><br>
            <span class="converti">0.0060</span><br>
            <span class="converti">0.0064</span>
          </td>
        </tr>
        <tr>
          <td>125 A,B,H</td>
          <td class="convertt">240</td>
          <td class="convertrpm">2.50</td>
          <td>5000</td>
          <td class="convert">55</td>
          <td class="convert">55</td>
          <td class="convert">45</td>
          <td class="convertw">6.20</td>
          <td class="convertw">5.60</td>
          <td>
            <span class="convertw">8.20</span><br>
            <span class="convertw">8.70</span><br>
            <span class="convertw">9.20</span>
          </td>
          <td class="converti">0.0107</td>
          <td class="converti">0.0095</td>
          <td>
            <span class="converti">0.0099</span><br>
            <span class="converti">0.0100</span><br>
            <span class="converti">0.0110</span>
          </td>
        </tr>
        <tr>
          <td>140 A,B,H</td>
          <td class="convertt">360</td>
          <td class="convertrpm">3.80</td>
          <td>4900</td>
          <td class="convert">60</td>
          <td class="convert">60</td>
          <td class="convert">50</td>
          <td class="convertw">6.90</td>
          <td class="convertw">7.00</td>
          <td>
            <span class="convertw">11.80</span><br>
            <span class="convertw">12.30</span>
          </td>
          <td class="converti">0.0140</td>
          <td class="converti">0.0150</td>
          <td>
            <span class="converti">0.0190</span><br>
            <span class="converti">0.0200</span>
          </td>
        </tr>
        <tr>
          <td>160 A,B,H</td>
          <td class="convertt">560</td>
          <td class="convertrpm">5.90</td>
          <td>4250</td>
          <td class="convert">65</td>
          <td class="convert">65</td>
          <td class="convert">58</td>
          <td class="convertw">9.40</td>
          <td class="convertw">9.80</td>
          <td>
            <span class="convertw">15.20</span><br>
            <span class="convertw">16.00</span>
          </td>
          <td class="converti">0.0250</td>
          <td class="converti">0.0280</td>
          <td>
            <span class="converti">0.0320</span><br>
            <span class="converti">0.0340</span>
          </td>
        </tr>
        <tr>
          <td>180 A,B,H</td>
          <td class="convertt">880</td>
          <td class="convertrpm">9.20</td>
          <td>3800</td>
          <td class="convert">75</td>
          <td class="convert">75</td>
          <td class="convert">65</td>
          <td class="convertw">14.00</td>
          <td class="convertw">14.20</td>
          <td>
            <span class="convertw">21.00</span><br>
            <span class="convertw">21.90</span>
          </td>
          <td class="converti">0.0450</td>
          <td class="converti">0.0490</td>
          <td>
            <span class="converti">0.0540</span><br>
            <span class="converti">0.0580</span>
          </td>
        </tr>
        <tr>
          <td>200 A,B,H</td>
          <td class="convertt">1340</td>
          <td class="convertrpm">14.00</td>
          <td>3400</td>
          <td class="convert">85</td>
          <td class="convert">85</td>
          <td class="convert">75</td>
          <td class="convertw">20.00</td>
          <td class="convertw">19.80</td>
          <td>
            <span class="convertw">30.30</span><br>
            <span class="convertw">30.90</span><br>
            <span class="convertw">32.10</span>
          </td>
          <td class="converti">0.0800</td>
          <td class="converti">0.0850</td>
          <td>
            <span class="converti">0.1000</span><br>
            <span class="converti">0.1050</span><br>
            <span class="converti">0.1100</span>
          </td>
        </tr>
        <tr>
          <td>225 A,B,H</td>
          <td class="convertt">2000</td>
          <td class="convertrpm">21.00</td>
          <td>3000</td>
          <td class="convert">90</td>
          <td class="convert">90</td>
          <td class="convert">85</td>
          <td class="convertw">24.50</td>
          <td class="convertw">27.00</td>
          <td>
            <span class="convertw">39.00</span><br>
            <span class="convertw">39.70</span><br>
            <span class="convertw">41.50</span>
          </td>
          <td class="converti">0.1350</td>
          <td class="converti">0.1500</td>
          <td>
            <span class="converti">0.1600</span><br>
            <span class="converti">0.1700</span><br>
            <span class="converti">0.1800</span>
          </td>
        </tr>
        <tr>
          <td>250 A,B,H</td>
          <td class="convertt">2800</td>
          <td class="convertrpm">29.00</td>
          <td>2750</td>
          <td class="convert">100</td>
          <td class="convert">100</td>
          <td class="convert">95</td>
          <td class="convertw">34.00</td>
          <td class="convertw">37.00</td>
          <td>
            <span class="convertw">54.70</span><br>
            <span class="convertw">56.50</span>
          </td>
          <td class="converti">0.2300</td>
          <td class="converti">0.2500</td>
          <td>
            <span class="converti">0.2800</span><br>
            <span class="converti">0.3000</span>
          </td>
        </tr>
      </tbody>
    </table>

    <div class="system-toggle">
      Units:
      <a href="#" class="convertimp">Imperial</a> / <a href="#" class="convertmet">Metric</a>
    </div>

    <table class="eleven top">
      <thead>
        <tr>
          <th rowspan="2">Coupling Size</th>
          <th colspan="10">Dimensions (<span class="scale">mm</span>)</th>
        </tr>
        <tr>
          <th class="blue">&Oslash;A</th>
          <th class="blue">&Oslash;B</th>
          <th class="blue">&Oslash;C</th>
          <th class="blue">&Oslash;E</th>
          <th class="blue">D1</th>
          <th class="blue">D2</th>
          <th class="blue">G</th>
          <th class="blue">K</th>
          <th class="blue">T</th>
          <th class="blue">S</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>68 B</td>
          <td class="convert">68</td>
          <td class="convert">46</td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert">20</td>
          <td class="convert"></td>
          <td class="convert">8</td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td class="convert"></td>
        </tr>
        <tr>
          <td>80 B,H</td>
          <td class="convert">80</td>
          <td class="convert">68</td>
          <td class="convert">55</td>
          <td class="convert"></td>
          <td class="convert">30</td>
          <td class="convert">45</td>
          <td class="convert">10</td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td>
            <span class="convert">100</span><br>
            <span class="convert">140</span>
          </td>
        </tr>
        <tr>
          <td>95 B,H</td>
          <td class="convert">95</td>
          <td class="convert">76</td>
          <td class="convert">70</td>
          <td class="convert"></td>
          <td class="convert">35</td>
          <td class="convert">45</td>
          <td class="convert">12</td>
          <td class="convert"></td>
          <td class="convert"></td>
          <td>
            <span class="convert">100</span><br>
            <span class="convert">140</span>
          </td>
        </tr>
        <tr>
          <td>110 A,B,H</td>
          <td class="convert">110</td>
          <td class="convert">86</td>
          <td class="convert">80</td>
          <td class="convert">62</td>
          <td class="convert">40</td>
          <td class="convert">50</td>
          <td class="convert">14</td>
          <td class="convert">20</td>
          <td class="convert">33</td>
          <td>
            <span class="convert">100</span><br>
            <span class="convert">140</span><br>
            <span class="convert">180</span>
          </td>
        </tr>
        <tr>
          <td>125 A,B,H</td>
          <td class="convert">125</td>
          <td class="convert">100</td>
          <td class="convert">90</td>
          <td class="convert">75</td>
          <td class="convert">50</td>
          <td class="convert">50</td>
          <td class="convert">18</td>
          <td class="convert">23</td>
          <td class="convert">38</td>
          <td>
            <span class="convert">100</span><br>
            <span class="convert">140</span><br>
            <span class="convert">180</span>
          </td>
        </tr>
        <tr>
          <td>140 A,B,H</td>
          <td class="convert">140</td>
          <td class="convert">100</td>
          <td class="convert">100</td>
          <td class="convert">82</td>
          <td class="convert">55</td>
          <td class="convert">65</td>
          <td class="convert">20</td>
          <td class="convert">28</td>
          <td class="convert">43</td>
          <td>
            <span class="convert">140</span><br>
            <span class="convert">180</span>
          </td>
        </tr>
        <tr>
          <td>160 A,B,H</td>
          <td class="convert">160</td>
          <td class="convert">108</td>
          <td class="convert">108</td>
          <td class="convert">95</td>
          <td class="convert">60</td>
          <td class="convert">70</td>
          <td class="convert">20</td>
          <td class="convert">28</td>
          <td class="convert">47</td>
          <td>
            <span class="convert">140</span><br>
            <span class="convert">180</span>
          </td>
        </tr>
        <tr>
          <td>180 A,B,H</td>
          <td class="convert">180</td>
          <td class="convert">125</td>
          <td class="convert">125</td>
          <td class="convert">108</td>
          <td class="convert">70</td>
          <td class="convert">80</td>
          <td class="convert">20</td>
          <td class="convert">30</td>
          <td class="convert">50</td>
          <td>
            <span class="convert">140</span><br>
            <span class="convert">180</span>
          </td>
        </tr>
        <tr>
          <td>200 A,B,H</td>
          <td class="convert">200</td>
          <td class="convert">140</td>
          <td class="convert">140</td>
          <td class="convert">122</td>
          <td class="convert">80</td>
          <td class="convert">90</td>
          <td class="convert">24</td>
          <td class="convert">32</td>
          <td class="convert">53</td>
          <td>
            <span class="convert">180</span><br>
            <span class="convert">200</span><br>
            <span class="convert">250</span>
          </td>
        </tr>
        <tr>
          <td>225 A,B,H</td>
          <td class="convert">225</td>
          <td class="convert">150</td>
          <td class="convert">150</td>
          <td class="convert">138</td>
          <td class="convert">90</td>
          <td class="convert">100</td>
          <td class="convert">18</td>
          <td class="convert">38</td>
          <td class="convert">61</td>
          <td>
            <span class="convert">180</span><br>
            <span class="convert">200</span><br>
            <span class="convert">250</span>
          </td>
        </tr>
        <tr>
          <td>250 A,B,H</td>
          <td class="convert">250</td>
          <td class="convert">165</td>
          <td class="convert">165</td>
          <td class="convert">155</td>
          <td class="convert">100</td>
          <td class="convert">110</td>
          <td class="convert">18</td>
          <td class="convert">42</td>
          <td class="convert">69</td>
          <td>
            <span class="convert">200</span><br>
            <span class="convert">250</span>
          </td>
        </tr>
      </tbody>
    </table>

    <br>
    
    * = <span class="convert">32</span> <span class="scale">mm</span> for part 5.
    <ul>
      <li>S1 = <span class="convert">2</span>-<span class="convert">4</span> <span class="scale">mm</span> for sizes 68 to 140; <span class="convert">2</span>-<span class="convert">6</span> <span class="scale">mm</span> for sizes 160 to 22; <span class="convert">3</span>-<span class="convert">8</span> <span class="scale">mm</span> for size 250</li>
      <li>S2 = <span class="convert">5</span> <span class="scale">mm</span> for sizes 80 to 140;  <span class="convert">6</span> <span class="scale">mm</span> for sizes 160 to 225 &amp; <span class="convert">8</span> <span class="scale">mm</span> for size 250.</li>
      <li>Part No. 5 is available with different length through Bores D2.</li>
      <li>Max. bore for coupling with or equivalent to DIN 6885 keys.</li>
    </ul>
  </div>
</div>

<?php include "footer.php"; ?>