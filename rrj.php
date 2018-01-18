<?php
$PageTitle = "Elastomeric Coupling - Curved Jaw / RRJ Type";
include "header.php";
?>

<div class="product-header-half">
  <div class="product-header">
    <div class="site-width">
      <h2>Elastomeric Coupling</h2>
      <h1>Curved Jaw / RRJ Type</h1>
      <em>Compare to KTR ROTEX&reg; style</em>
    </div>
  </div>

  <div class="site-width">
    <div class="left">
      <ul>
        <li>Excellent balance due to complete machining</li>
        <li>Long life with no lubrication required</li>
        <li>Compact design with high power to weight ratio</li>
        <li>Fail safe allowing coupling to perform if spider fails</li>
        <li>Vibration dampening; torsionally flexible</li>
        <li>Axial plug-in; easy to assemble</li>
      </ul>
    </div>

    <div class="right">
      <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
      <script type="text/javascript" src="inc/jquery.cycle2.carousel.min.js"></script>

      <div class="cycle-slideshow" data-cycle-fx="carousel" data-cycle-timeout="0" data-cycle-slides="> div" data-cycle-carousel-visible="1" data-cycle-carousel-fluid="true" data-cycle-next="#next" data-cycle-prev="#prev" data-cycle-pager="#pager,#number-pager" data-cycle-pager-template="<a href='#'>{{slideNum}}</a>">
        <div style="background-image: url(images/rrj-fig1.jpg);"></div>
        <div style="background-image: url(images/rrj-fig2.jpg);"></div>
        <div style="background-image: url(images/rrj-fig3.jpg);"></div>
        <div style="background-image: url(images/rrj-fig4.jpg);"></div>

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

      <a href="pdf/RRJ_Spec_Sheet.pdf" class="specsheet">Download Spec Sheet <i class="fa fa-download" aria-hidden="true"></i></a>
    </div>
  </div>
</div>

<div class="product-details">
  <div class="site-width">
    <h3>Details &amp; Specs</h3>
    
    <script type="text/javascript">var wdecm = 2;</script>
    <script type="text/javascript" src="inc/scale-convert.js"></script>

    <div class="system-toggle nudge">
      Units:
      <a href="#" class="convertimp">Imperial</a> / <a href="#" class="convertmet">Metric</a>
    </div>
    
    <h4>Aluminum (AL)*</h4>
    <table class="seventeen">
      <thead>
        <tr>
          <th rowspan="2">Coupling Size</th>
          <th rowspan="2">Coupling Type</th>
          <th colspan="2"><span class="scalerpm">kW</span> at 100 RPM</th>
          <th rowspan="2">Max. Speed RPM</th>
          <th colspan="2">Finish Bore - D</th>
          <th rowspan="2">A (<span class="scale">mm</span>)</th>
          <th rowspan="2">B (<span class="scale">mm</span>)</th>
          <th rowspan="2">C (<span class="scale">mm</span>)</th>
          <th rowspan="2">D (<span class="scale">mm</span>)</th>
          <th rowspan="2">F (<span class="scale">mm</span>)</th>
          <th rowspan="2">G (<span class="scale">mm</span>)</th>
          <th rowspan="2">L (<span class="scale">mm</span>)</th>
          <th rowspan="2">M (<span class="scale">mm</span>)</th>
          <th rowspan="2">N (<span class="scale">mm</span>)</th>
          <th rowspan="2">Weight (<span class="scalew">kg</span>)**</th>
        </tr>
        <tr>
          <th class="blue">Red</th>
          <th class="blue">Yellow</th>
          <th class="blue">Min.</th>
          <th class="blue">Max.</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>RRJ 19</td>
          <td>I</td>
          <td class="convertrpm">0.17</td>
          <td class="convertrpm">0.10</td>
          <td>14000</td>
          <td class="convert">6</td>
          <td class="convert">19</td>
          <td class="convert">41</td>
          <td class="convert">32</td>
          <td class="convert">18</td>
          <td class="convert">16</td>
          <td class="convert">12</td>
          <td class="convert">2</td>
          <td class="convert">66</td>
          <td class="convert">20</td>
          <td class="convert">25</td>
          <td class="convertw">0.11</td>
        </tr>
        <tr>
          <td>RRJ 19</td>
          <td>II</td>
          <td class="convertrpm">0.17</td>
          <td class="convertrpm">0.10</td>
          <td>14000</td>
          <td class="convert">19</td>
          <td class="convert">24</td>
          <td class="convert">41</td>
          <td class="convert">41</td>
          <td class="convert">18</td>
          <td class="convert">16</td>
          <td class="convert">12</td>
          <td class="convert">2</td>
          <td class="convert">66</td>
          <td class="convert">20</td>
          <td class="convert">25</td>
          <td class="convertw">0.14</td>
        </tr>
        <tr>
          <td>RRJ 24</td>
          <td>I</td>
          <td class="convertrpm">0.60</td>
          <td class="convertrpm">0.35</td>
          <td>10600</td>
          <td class="convert">9</td>
          <td class="convert">24</td>
          <td class="convert">56</td>
          <td class="convert">40</td>
          <td class="convert">27</td>
          <td class="convert">18</td>
          <td class="convert">14</td>
          <td class="convert">2</td>
          <td class="convert">78</td>
          <td class="convert">24</td>
          <td class="convert">30</td>
          <td class="convertw">0.24</td>
        </tr>
        <tr>
          <td>RRJ 24</td>
          <td>II</td>
          <td class="convertrpm">0.60</td>
          <td class="convertrpm">0.35</td>
          <td>10600</td>
          <td class="convert">22</td>
          <td class="convert">28</td>
          <td class="convert">56</td>
          <td class="convert">56</td>
          <td class="convert">27</td>
          <td class="convert">18</td>
          <td class="convert">14</td>
          <td class="convert">2</td>
          <td class="convert">78</td>
          <td class="convert">24</td>
          <td class="convert">30</td>
          <td class="convertw">0.34</td>
        </tr>
        <tr>
          <td>RRJ 28</td>
          <td>I</td>
          <td class="convertrpm">1.60</td>
          <td class="convertrpm">0.95</td>
          <td>8500</td>
          <td class="convert">10</td>
          <td class="convert">28</td>
          <td class="convert">66</td>
          <td class="convert">48</td>
          <td class="convert">30</td>
          <td class="convert">20</td>
          <td class="convert">15</td>
          <td class="convert">2.50</td>
          <td class="convert">90</td>
          <td class="convert">28</td>
          <td class="convert">35</td>
          <td class="convertw">0.39</td>
        </tr>
        <tr>
          <td>RRJ 28</td>
          <td>II</td>
          <td class="convertrpm">1.60</td>
          <td class="convertrpm">0.95</td>
          <td>8500</td>
          <td class="convert">28</td>
          <td class="convert">38</td>
          <td class="convert">66</td>
          <td class="convert">66</td>
          <td class="convert">30</td>
          <td class="convert">20</td>
          <td class="convert">15</td>
          <td class="convert">2.50</td>
          <td class="convert">90</td>
          <td class="convert">28</td>
          <td class="convert">35</td>
          <td class="convertw">0.54</td>
        </tr>
      </tbody>
    </table>

    <br>

    <h4>Cast Iron (CI)*</h4>
    <table class="seventeen">
      <thead>
        <tr>
          <th rowspan="2">Coupling Size</th>
          <th rowspan="2">Coupling Type</th>
          <th colspan="2"><span class="scalerpm">kW</span> at 100 RPM</th>
          <th rowspan="2">Max. Speed RPM</th>
          <th colspan="2">Finish Bore - D</th>
          <th rowspan="2">A (<span class="scale">mm</span>)</th>
          <th rowspan="2">B (<span class="scale">mm</span>)</th>
          <th rowspan="2">C (<span class="scale">mm</span>)</th>
          <th rowspan="2">D (<span class="scale">mm</span>)</th>
          <th rowspan="2">F (<span class="scale">mm</span>)</th>
          <th rowspan="2">G (<span class="scale">mm</span>)</th>
          <th rowspan="2">L (<span class="scale">mm</span>)</th>
          <th rowspan="2">M (<span class="scale">mm</span>)</th>
          <th rowspan="2">N (<span class="scale">mm</span>)</th>
          <th rowspan="2">Weight (<span class="scalew">kg</span>)**</th>
        </tr>
        <tr>
          <th class="blue">Red</th>
          <th class="blue">Yellow</th>
          <th class="blue">Min.</th>
          <th class="blue">Max.</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>RRJ 38</td>
          <td>I</td>
          <td class="convertrpm">3.25</td>
          <td class="convertrpm">1.90</td>
          <td>7100</td>
          <td class="convert">12</td>
          <td class="convert">40</td>
          <td class="convert">80</td>
          <td class="convert">66</td>
          <td class="convert">38</td>
          <td class="convert">24</td>
          <td class="convert">18</td>
          <td class="convert">3</td>
          <td class="convert">114</td>
          <td class="convert">37</td>
          <td class="convert">45</td>
          <td class="convertw">2.00</td>
        </tr>
        <tr>
          <td>RRJ 38</td>
          <td>II</td>
          <td class="convertrpm">3.25</td>
          <td class="convertrpm">1.90</td>
          <td>7100</td>
          <td class="convert">38</td>
          <td class="convert">48</td>
          <td class="convert">80</td>
          <td class="convert">78</td>
          <td class="convert">38</td>
          <td class="convert">24</td>
          <td class="convert">18</td>
          <td class="convert">3</td>
          <td class="convert">114</td>
          <td class="convert">37</td>
          <td class="convert">45</td>
          <td class="convertw">2.40</td>
        </tr>
        <tr>
          <td>RRJ 38</td>
          <td>III</td>
          <td class="convertrpm">3.25</td>
          <td class="convertrpm">1.90</td>
          <td>7100</td>
          <td class="convert">12</td>
          <td class="convert">48</td>
          <td class="convert">80</td>
          <td class="convert">78</td>
          <td class="convert">38</td>
          <td class="convert">24</td>
          <td class="convert">18</td>
          <td class="convert">3</td>
          <td class="convert">164</td>
          <td class="convert">62</td>
          <td class="convert">70</td>
          <td class="convertw">3.60</td>
        </tr>
        <tr>
          <td>RRJ 42</td>
          <td>I</td>
          <td class="convertrpm">4.50</td>
          <td class="convertrpm">2.65</td>
          <td>6000</td>
          <td class="convert">14</td>
          <td class="convert">45</td>
          <td class="convert">95</td>
          <td class="convert">75</td>
          <td class="convert">46</td>
          <td class="convert">26</td>
          <td class="convert">20</td>
          <td class="convert">3</td>
          <td class="convert">126</td>
          <td class="convert">40</td>
          <td class="convert">50</td>
          <td class="convertw">3.20</td>
        </tr>
        <tr>
          <td>RRJ 42</td>
          <td>II</td>
          <td class="convertrpm">4.50</td>
          <td class="convertrpm">2.65</td>
          <td>6000</td>
          <td class="convert">42</td>
          <td class="convert">55</td>
          <td class="convert">95</td>
          <td class="convert">94</td>
          <td class="convert">46</td>
          <td class="convert">26</td>
          <td class="convert">20</td>
          <td class="convert">3</td>
          <td class="convert">126</td>
          <td class="convert">40</td>
          <td class="convert">50</td>
          <td class="convertw">3.80</td>
        </tr>
        <tr>
          <td>RRJ 42</td>
          <td>III</td>
          <td class="convertrpm">4.50</td>
          <td class="convertrpm">2.65</td>
          <td>6000</td>
          <td class="convert">14</td>
          <td class="convert">55</td>
          <td class="convert">95</td>
          <td class="convert">94</td>
          <td class="convert">46</td>
          <td class="convert">26</td>
          <td class="convert">20</td>
          <td class="convert">3</td>
          <td class="convert">176</td>
          <td class="convert">65</td>
          <td class="convert">75</td>
          <td class="convertw">5.50</td>
        </tr>
        <tr>
          <td>RRJ 48</td>
          <td>I</td>
          <td class="convertrpm">5.25</td>
          <td class="convertrpm">3.10</td>
          <td>5600</td>
          <td class="convert">15</td>
          <td class="convert">52</td>
          <td class="convert">105</td>
          <td class="convert">85</td>
          <td class="convert">51</td>
          <td class="convert">28</td>
          <td class="convert">21</td>
          <td class="convert" data-orig="3.5">3.5</td>
          <td class="convert">140</td>
          <td class="convert">45</td>
          <td class="convert">56</td>
          <td class="convertw">4.40</td>
        </tr>
        <tr>
          <td>RRJ 48</td>
          <td>II</td>
          <td class="convertrpm">5.25</td>
          <td class="convertrpm">3.10</td>
          <td>5600</td>
          <td class="convert">48</td>
          <td class="convert">62</td>
          <td class="convert">105</td>
          <td class="convert">104</td>
          <td class="convert">51</td>
          <td class="convert">28</td>
          <td class="convert">21</td>
          <td class="convert" data-orig="3.5">3.5</td>
          <td class="convert">140</td>
          <td class="convert">45</td>
          <td class="convert">56</td>
          <td class="convertw">5.20</td>
        </tr>
        <tr>
          <td>RRJ 48</td>
          <td>III</td>
          <td class="convertrpm">5.25</td>
          <td class="convertrpm">3.10</td>
          <td>5600</td>
          <td class="convert">15</td>
          <td class="convert">62</td>
          <td class="convert">105</td>
          <td class="convert">104</td>
          <td class="convert">51</td>
          <td class="convert">28</td>
          <td class="convert">21</td>
          <td class="convert" data-orig="3.5">3.5</td>
          <td class="convert">188</td>
          <td class="convert">69</td>
          <td class="convert">80</td>
          <td class="convertw">4.20</td>
        </tr>
        <tr>
          <td>RRJ 55</td>
          <td>I</td>
          <td class="convertrpm">6.85</td>
          <td class="convertrpm">4.10</td>
          <td>4750</td>
          <td class="convert">20</td>
          <td class="convert">60</td>
          <td class="convert">120</td>
          <td class="convert">98</td>
          <td class="convert">60</td>
          <td class="convert">30</td>
          <td class="convert">22</td>
          <td class="convert">4</td>
          <td class="convert">160</td>
          <td class="convert">52</td>
          <td class="convert">65</td>
          <td class="convertw">6.60</td>
        </tr>
        <tr>
          <td>RRJ 55</td>
          <td>II</td>
          <td class="convertrpm">6.85</td>
          <td class="convertrpm">4.10</td>
          <td>4750</td>
          <td class="convert">55</td>
          <td class="convert">74</td>
          <td class="convert">120</td>
          <td class="convert">118</td>
          <td class="convert">60</td>
          <td class="convert">30</td>
          <td class="convert">22</td>
          <td class="convert">4</td>
          <td class="convert">160</td>
          <td class="convert">52</td>
          <td class="convert">65</td>
          <td class="convertw">7.50</td>
        </tr>
        <tr>
          <td>RRJ 55</td>
          <td>III</td>
          <td class="convertrpm">6.85</td>
          <td class="convertrpm">4.10</td>
          <td>4750</td>
          <td class="convert">20</td>
          <td class="convert">74</td>
          <td class="convert">120</td>
          <td class="convert">118</td>
          <td class="convert">60</td>
          <td class="convert">30</td>
          <td class="convert">22</td>
          <td class="convert">4</td>
          <td class="convert">210</td>
          <td class="convert">77</td>
          <td class="convert">90</td>
          <td class="convertw">10.20</td>
        </tr>
        <tr>
          <td>RRJ 65</td>
          <td>I</td>
          <td class="convertrpm">9.40</td>
          <td class="convertrpm">6.25</td>
          <td>4250</td>
          <td class="convert">22</td>
          <td class="convert">70</td>
          <td class="convert">135</td>
          <td class="convert">115</td>
          <td class="convert">68</td>
          <td class="convert">35</td>
          <td class="convert">26</td>
          <td class="convert" data-orig="4.5">4.5</td>
          <td class="convert">185</td>
          <td class="convert">61</td>
          <td class="convert">75</td>
          <td class="convertw">10.10</td>
        </tr>
        <tr>
          <td>RRJ 65</td>
          <td>II</td>
          <td class="convertrpm">9.40</td>
          <td class="convertrpm">6.25</td>
          <td>4250</td>
          <td class="convert">65</td>
          <td class="convert">80</td>
          <td class="convert">135</td>
          <td class="convert">133</td>
          <td class="convert">68</td>
          <td class="convert">35</td>
          <td class="convert">26</td>
          <td class="convert" data-orig="4.5">4.5</td>
          <td class="convert">185</td>
          <td class="convert">61</td>
          <td class="convert">75</td>
          <td class="convertw">11.50</td>
        </tr>
        <tr>
          <td>RRJ 65</td>
          <td>III</td>
          <td class="convertrpm">9.40</td>
          <td class="convertrpm">6.25</td>
          <td>4250</td>
          <td class="convert">22</td>
          <td class="convert">80</td>
          <td class="convert">135</td>
          <td class="convert">133</td>
          <td class="convert">68</td>
          <td class="convert">35</td>
          <td class="convert">26</td>
          <td class="convert" data-orig="4.5">4.5</td>
          <td class="convert">235</td>
          <td class="convert">86</td>
          <td class="convert">100</td>
          <td class="convertw">15.00</td>
        </tr>
        <tr>
          <td>RRJ 75</td>
          <td>I</td>
          <td class="convertrpm">19.20</td>
          <td class="convertrpm">12.80</td>
          <td>3550</td>
          <td class="convert">30</td>
          <td class="convert">80</td>
          <td class="convert">160</td>
          <td class="convert">135</td>
          <td class="convert">80</td>
          <td class="convert">40</td>
          <td class="convert">30</td>
          <td class="convert">5</td>
          <td class="convert">210</td>
          <td class="convert">69</td>
          <td class="convert">85</td>
          <td class="convertw">16.00</td>
        </tr>
        <tr>
          <td>RRJ 75</td>
          <td>II</td>
          <td class="convertrpm">19.20</td>
          <td class="convertrpm">12.80</td>
          <td>3550</td>
          <td class="convert">75</td>
          <td class="convert">95</td>
          <td class="convert">160</td>
          <td class="convert">158</td>
          <td class="convert">80</td>
          <td class="convert">40</td>
          <td class="convert">30</td>
          <td class="convert">5</td>
          <td class="convert">210</td>
          <td class="convert">69</td>
          <td class="convert">85</td>
          <td class="convertw">18.20</td>
        </tr>
        <tr>
          <td>RRJ 75</td>
          <td>III</td>
          <td class="convertrpm">19.20</td>
          <td class="convertrpm">12.80</td>
          <td>3550</td>
          <td class="convert">30</td>
          <td class="convert">95</td>
          <td class="convert">160</td>
          <td class="convert">158</td>
          <td class="convert">80</td>
          <td class="convert">40</td>
          <td class="convert">30</td>
          <td class="convert">5</td>
          <td class="convert">260</td>
          <td class="convert">84</td>
          <td class="convert">110</td>
          <td class="convertw">21.20</td>
        </tr>
        <tr>
          <td>RRJ 90</td>
          <td>I</td>
          <td class="convertrpm">36.00</td>
          <td class="convertrpm">24.00</td>
          <td>2800</td>
          <td class="convert">40</td>
          <td class="convert">97</td>
          <td class="convert">200</td>
          <td class="convert">160</td>
          <td class="convert">100</td>
          <td class="convert">45</td>
          <td class="convert">34</td>
          <td class="convert" data-orig="5.5">5.5</td>
          <td class="convert">245</td>
          <td class="convert">81</td>
          <td class="convert">100</td>
          <td class="convertw">27.50</td>
        </tr>
        <tr>
          <td>RRJ 90</td>
          <td>II</td>
          <td class="convertrpm">36.00</td>
          <td class="convertrpm">24.00</td>
          <td>2800</td>
          <td class="convert">90</td>
          <td class="convert">110</td>
          <td class="convert">200</td>
          <td class="convert">198</td>
          <td class="convert">100</td>
          <td class="convert">45</td>
          <td class="convert">34</td>
          <td class="convert" data-orig="5.5">5.5</td>
          <td class="convert">245</td>
          <td class="convert">81</td>
          <td class="convert">100</td>
          <td class="convertw">36.30</td>
        </tr>
        <tr>
          <td>RRJ 90</td>
          <td>III</td>
          <td class="convertrpm">36.00</td>
          <td class="convertrpm">24.00</td>
          <td>2800</td>
          <td class="convert">40</td>
          <td class="convert">110</td>
          <td class="convert">200</td>
          <td class="convert">198</td>
          <td class="convert">100</td>
          <td class="convert">45</td>
          <td class="convert">34</td>
          <td class="convert" data-orig="5.5">5.5</td>
          <td class="convert">295</td>
          <td class="convert">106</td>
          <td class="convert">125</td>
          <td class="convertw">44.80</td>
        </tr>
      </tbody>
    </table>

    <br>

    * Alternative hub material available on request - Steel (sizes 19 to 90), S.G. Iron (Sizes 38 to 90)<br>
    ** Weight of coupling assembly refer to maximum finish bore without keyway<br>
    <br>

    <h5>Selection Procedure</h5>
    <ol>
      <li>Determine Application Nominal Torque</li>
      <li>Calculate application service factor using following charts. Total service SF = SF1 x SF2 x SF3</li>
      <li>Calculate Application Maximum Torque (Tmax) Tmax = Tnom X SF </li>
      <li>Select the proper spider showing Tnom greater than application nominal torque. Then, select spider showing Tmax greater than application maximum torque. Select the higher of two.</li>
      <li>Ensure that application rpm and max. bore requirements are less than or equal to selected coupling max. rpm and max. bore size otherwise select next size coupling.</li>
    </ol>

    <br><br>
    
    <div class="system-toggle nudge">
      Units:
      <a href="#" class="convertimp">Imperial</a> / <a href="#" class="convertmet">Metric</a>
    </div>

    <h4>Technical Data - Polyurethane Spiders</h4>
    <table class="five">
      <thead>
        <tr>
          <th rowspan="2">Spider Size</th>
          <th colspan="2">Red (std.)</th>
          <th colspan="2">Yellow</th>
        </tr>
        <tr>
          <th class="blue">Tnom (<span class="scalet">N-m</span>)</th>
          <th class="blue">Tmax (<span class="scalet">N-m</span>)</th>
          <th class="blue">Tnom (<span class="scalet">N-m</span>)</th>
          <th class="blue">Tmax (<span class="scalet">N-m</span>)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>RRJ 19</td>
          <td class="convertt">17</td>
          <td class="convertt">34</td>
          <td class="convertt">10</td>
          <td class="convertt">20</td>
        </tr>
        <tr>
          <td>RRJ 24</td>
          <td class="convertt">60</td>
          <td class="convertt">120</td>
          <td class="convertt">35</td>
          <td class="convertt">70</td>
        </tr>
        <tr>
          <td>RRJ 28</td>
          <td class="convertt">160</td>
          <td class="convertt">320</td>
          <td class="convertt">95</td>
          <td class="convertt">190</td>
        </tr>
        <tr>
          <td>RRJ 38</td>
          <td class="convertt">325</td>
          <td class="convertt">650</td>
          <td class="convertt">190</td>
          <td class="convertt">380</td>
        </tr>
        <tr>
          <td>RRJ 42</td>
          <td class="convertt">450</td>
          <td class="convertt">900</td>
          <td class="convertt">265</td>
          <td class="convertt">530</td>
        </tr>
        <tr>
          <td>RRJ 48</td>
          <td class="convertt">525</td>
          <td class="convertt">1050</td>
          <td class="convertt">310</td>
          <td class="convertt">620</td>
        </tr>
        <tr>
          <td>RRJ 55</td>
          <td class="convertt">685</td>
          <td class="convertt">1370</td>
          <td class="convertt">410</td>
          <td class="convertt">820</td>
        </tr>
        <tr>
          <td>RRJ 65</td>
          <td class="convertt">940</td>
          <td class="convertt">1880</td>
          <td class="convertt">625</td>
          <td class="convertt">1250</td>
        </tr>
        <tr>
          <td>RRJ 75</td>
          <td class="convertt">1920</td>
          <td class="convertt">3840</td>
          <td class="convertt">1280</td>
          <td class="convertt">2560</td>
        </tr>
        <tr>
          <td>RRJ 90</td>
          <td class="convertt">3600</td>
          <td class="convertt">7200</td>
          <td class="convertt">2400</td>
          <td class="convertt">4800</td>
        </tr>
        <tr>
          <td>Hardness</td>
          <td>95 Shore A</td>
          <td>95 Shore A</td>
          <td>92 Shore A</td>
          <td>92 Shore A</td>
        </tr>
        <tr>
          <td>Temperature</td>
          <td><span class="converttemp">-40</span>&deg;<span class="scaletemp">C</span> to <span class="converttemp">90</span>&deg;<span class="scaletemp">C</span></td>
          <td><span class="converttemp">-40</span>&deg;<span class="scaletemp">C</span> to <span class="converttemp">90</span>&deg;<span class="scaletemp">C</span></td>
          <td><span class="converttemp">-40</span>&deg;<span class="scaletemp">C</span> to <span class="converttemp">90</span>&deg;<span class="scaletemp">C</span></td>
          <td><span class="converttemp">-40</span>&deg;<span class="scaletemp">C</span> to <span class="converttemp">90</span>&deg;<span class="scaletemp">C</span></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<?php include "footer.php"; ?>