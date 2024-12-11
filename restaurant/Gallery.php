<?php
require("Master/header.php");
?>
<br />
<div class="container text-center">
  <div class="heading">
    <h2>Dishes</h2>
    <p>Where every ingredient tells a story, where your food dreams come true.
      The Good Food Experience, there's a recipe for every life.</p>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div id="portfolio">
        <ul class="filters list-inline">
          <li> <a class="active" data-filter="*" href="#">All</a> </li>
          <li> <a data-filter=".photography" href="#">Continental</a> </li>
          <li> <a data-filter=".branding" href="#">Chinese</a> </li>
          <li> <a data-filter=".web" href="#">Traditional</a> </li>
        </ul>
        <ul class="items list-unstyled clearfix animated fadeInRight showing" data-animation="fadeInRight" style="position: relative; height: 438px;">
          <li class="item branding" style="position: absolute; left: 0px; top: 0px;"> <a href="images/work/1.jpg" class="fancybox"> <img src="images/work/1.jpg" alt="">
              <div class="overlay"> <span>View Image</span> </div>
            </a> </li>
          <li class="item photography" style="position: absolute; left: 292px; top: 0px;"> <a href="images/work/2.jpg" class="fancybox"> <img src="images/work/2.jpg" alt="">
              <div class="overlay"> <span>View Image</span> </div>
            </a> </li>
          <li class="item branding" style="position: absolute; left: 585px; top: 0px;"> <a href="images/work/3.jpg" class="fancybox"> <img src="images/work/3.jpg" alt="">
              <div class="overlay"> <span>View Image</span> </div>
            </a> </li>
          <li class="item photography" style="position: absolute; left: 877px; top: 0px;"> <a href="images/work/4.jpg" class="fancybox"> <img src="images/work/4.jpg" alt="">
              <div class="overlay"> <span>View Image</span> </div>
            </a> </li>
          <li class="item photography" style="position: absolute; left: 0px; top: 219px;"> <a href="images/work/5.jpg" class="fancybox"> <img src="images/work/5.jpg" alt="">
              <div class="overlay"> <span>View Image</span> </div>
            </a> </li>
          <li class="item web" style="position: absolute; left: 292px; top: 219px;"> <a href="images/work/6.jpg" class="fancybox"> <img src="images/work/6.jpg" alt="">
              <div class="overlay"> <span>View Image</span> </div>
            </a> </li>
          <li class="item photography" style="position: absolute; left: 585px; top: 219px;"> <a href="images/work/7.jpg" class="fancybox"> <img src="images/work/7.jpg" alt="">
              <div class="overlay"> <span>View Image</span> </div>
            </a> </li>
          <li class="item web" style="position: absolute; left: 877px; top: 219px;"> <a href="images/work/8.jpg" class="fancybox"> <img src="images/work/8.jpg" alt="">
              <div class="overlay"> <span>View Image</span> </div>
            </a> </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<br /><br /><br />
<?php
require("Master/footer.php");
?>