﻿<?php include 'header.php';?> 
<!--banner-->
<div id="carousel-generic" class="carousel slide" data-ride="carousel">
 
  <ol class="carousel-indicators">
    <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-generic" data-slide-to="1"></li>    
  </ol>

  
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/banner01.jpg" />
    </div>
    <div class="item">
      <img src="images/banner02.jpg" />
    </div>
  </div>

  
  <a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--banner end-->
<?php include 'footer.php';?>
