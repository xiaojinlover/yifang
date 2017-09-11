<?php include 'header.php';?> 
<!--banner-->
<div id="carousel-generic" class="carousel slide  hidden-xs" data-ride="carousel">
	<div class="count-box animated fadeInLeftBig fadeIn">
		<h3>议房神算</h3>
		<form>
			<div class="input-group input-group-sm">
			  <span class="input-group-btn ">
				<span class="btn btn-default">小区名称</span>
			  </span>
			  <input type="text" class="form-control" placeholder="">
			</div>
			<div class="input-group input-group-sm">
			  <span class="input-group-btn">
				<span class="btn btn-default">户型</span>
			  </span>
				<select class="form-control">
					<option>大户型</option>
				</select>
			</div>
			<div class="input-group input-group-sm">
			  <span class="input-group-btn">
				<span class="btn btn-default">面积</span>
			  </span>
			  <input type="text" class="form-control" placeholder="">
			</div>
			<div class="input-group input-group-sm">
			  <span class="input-group-btn">
				<span class="btn btn-default">楼层</span>
			  </span>
			  <input type="text" class="form-control" placeholder="">
			</div>
			<button type="button" class="btn btn-primary btn-block">优惠计算</button>
		</form>
	</div>
	
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
		<span class="iconfont icon-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
		<span class="iconfont icon-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<!--banner end-->
<div class="container home01">
	<div class="col-xs-02" style="margin-left: 0;">
		<img src="images/home-icon-01.png" />
		<p>议房头条</p>
	</div>
	<div class="col-xs-02">
		<img src="images/home-icon-02.png" />
		<p>百答大咖</p>
	</div>
	<div class="col-xs-02">
		<img src="images/home-icon-03.png" />
		<p>智能配房</p>
	</div>
	<div class="col-xs-02">
		<img src="images/home-icon-04.png" />
		<p>议房神算</p>
	</div>
	<div class="col-xs-02">
		<img src="images/home-icon-05.png" />
		<p>新房推荐</p>
	</div>
	<div class="clearfix"></div>
	<br />
	<br />
	<div class="pull-left hidden-xs" >
		<div class="h3 mt5">百答大咖</div>
	</div>
	<div class="pull-right hidden-xs">
		<form class="pull-left">			
			<div class="input-group input-group-sm">
				<input class="form-control input-sm" />
				<div class="input-group-btn">
					<button class="btn btn-default btn-sm" style="min-height: 0;">搜索</button>
				</div>
			</div>
		</form>
		<a class="pull-right mt5 ml10 size14 text-333" href="#">查看更多>></a>
	</div>
</div>
<br />
<div class="container-fluid nopadding">
	<img width="100%" src="images/test1.png" />
</div>
<?php include 'footer.php';?>
<script>
	$(function(){
		//计算BOX距离
        $(window).resize(function () {
            var left = ($(window).width() - $('.container').width()) / 2;
			var top = ($('.carousel').height() - $('.count-box').height())/2
            $('.count-box').css('left', left);
			$('.count-box').css('top', top);
        })		
		var top = ($('.carousel').height() - $('.count-box').height())/2
        var left = ($(window).width() - $('.container').width()) / 2;
        $('.count-box').css('left', left);
		$('.count-box').css('top', top);
	})
</script>