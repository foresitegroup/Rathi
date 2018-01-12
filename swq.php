<?php
$PageTitle = "Elastomeric Coupling - Staright Jaw / SWQ Type";
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
      
      <div class="cycle-slideshow" data-cycle-fx="carousel" data-cycle-timeout="0" data-cycle-carousel-visible="1" data-cycle-carousel-fluid="true" data-cycle-next="#next" data-cycle-prev="#prev" data-cycle-pager="#pager,#number-pager" data-cycle-pager-template="<a href='#'>{{slideNum}}</a>">
        <img src="images/swq-fig1.jpg" alt="">
        <img src="https://fillmurray.com/403/356" alt="">
        <img src="https://placekitten.com/403/356" alt="">

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

    <table>
      <thead>
        <tr>
          <th rowspan="2">Coupling Size</th>
          <th rowspan="2">HP at 100 RPM (Synthetic)</th>
          <th rowspan="2">DBSE S (in)</th>
          <th colspan="2">Bore (in)</th>
          <th rowspan="2">Outside Diameter &Oslash;A (in)</th>
        </tr>
        <tr>
          <th class="blue">Min.</th>
          <th class="blue">Max.</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>SWQ 095</td>
          <td>0.30</td>
          <td rowspan="6" class="rowspan">3.5, 5, 7</td>
          <td>0.39</td>
          <td>1.10</td>
          <td>2.56</td>
        </tr>
        <tr>
          <td>SWQ 100</td>
          <td>0.66</td>
          <td>0.39</td>
          <td>1.50</td>
          <td>3.07</td>
        </tr>
        <tr>
          <td>SWQ 110</td>
          <td>1.25</td>
          <td>0.59</td>
          <td>1.65</td>
          <td>3.78</td>
        </tr>
        <tr>
          <td>SWQ 150</td>
          <td>2.00</td>
          <td>0.59</td>
          <td>1.89</td>
          <td>4.37</td>
        </tr>
        <tr>
          <td>SWQ 190</td>
          <td>2.70</td>
          <td>0.79</td>
          <td>2.17</td>
          <td>5.08</td>
        </tr>
        <tr>
          <td>SWQ 225</td>
          <td>3.70</td>
          <td>0.79</td>
          <td>2.56</td>
          <td>5.59</td>
        </tr>
        <tr>
          <td>SWQ 226</td>
          <td>4.60</td>
          <td rowspan="7" class="rowspan blue">5, 7</td>
          <td>0.98</td>
          <td>2.76</td>
          <td>6.02</td>
        </tr>
        <tr>
          <td>SWQ 276</td>
          <td>7.51</td>
          <td>0.98</td>
          <td>3.15</td>
          <td>6.81</td>
        </tr>
        <tr>
          <td>SWQ 280</td>
          <td>11.0</td>
          <td>1.18</td>
          <td>3.15</td>
          <td>8.19</td>
        </tr>
        <tr>
          <td>SWQ 295</td>
          <td>18.0</td>
          <td>1.18</td>
          <td>4.13</td>
          <td>9.96</td>
        </tr>
        <tr>
          <td>SWQ 2955</td>
          <td>30.0</td>
          <td>1.18</td>
          <td>4.13</td>
          <td>9.96</td>
        </tr>
        <tr>
          <td>SWQ 300</td>
          <td>42.8</td>
          <td>1.18</td>
          <td>4.53</td>
          <td>10.71</td>
        </tr>
        <tr>
          <td>SWQ 350</td>
          <td>60.3</td>
          <td>1.18</td>
          <td>4.92</td>
          <td>12.72</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<?php include "footer.php"; ?>