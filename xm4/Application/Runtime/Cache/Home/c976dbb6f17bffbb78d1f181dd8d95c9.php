<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="renderer" content="webkit">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <title>游记</title>

	    <!-- Bootstrap -->
	    <link href="/xm4/Public/css/bootstrap.min.css" rel="stylesheet">
	    <link href="/xm4/Public/home/css/travel.css?v=1.2" rel="stylesheet">

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body ng-app='myApp' ng-controller="myCtrl" ng-cloak><?php echo ($uname); ?>
		<div id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div id='mdd_nav'>
							<div id="mysee">
						        <div class="input-group">
						            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
						            <input type="text" class="form-control" placeholder="请输入想去的地方，如:香港">
						        </div>
							</div>
							<div class="app_d">
				                <h4><a href="#"><img src="http://images.mafengwo.net/images/app/m/logo_gonglve_v6.png?v=20150825" alt="" width="50" height="50"/></a></h4>
				                <div class="domn_in">
				                    <h5><a href="#">蚂蜂窝自由行APP下载</a></h5>
				                    <p>
				                        <a style="cursor: auto;">iPhone版</a>
				                        <span>|</span>
				                        <a style="cursor: auto;">Android版</a>
				                        <span>|</span>
				                        <a style="cursor: auto;">iPad版</a>
				                    </p>
				                </div>
				            </div>
						</div>
					</div>
					<div class="col-lg-9">
						<div>
							<div id="myCarousel" class="carousel slide" data-ride="carousel">
							    <!-- 轮播（Carousel）指标 -->
							    <ol class="carousel-indicators">
							        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							        <li data-target="#myCarousel" data-slide-to="1"></li>
							        <li data-target="#myCarousel" data-slide-to="2"></li>
							    </ol>   
							    <!-- 轮播（Carousel）项目 -->
							    <div class="carousel-inner">
							        <div class="item active">
							            <img src="https://b3-q.mafengwo.net/s10/M00/5F/84/wKgBZ1kC56qAXcSsAAOzdR07ckA15.jpeg" alt="First slide">
							        </div>
							        <div class="item">
							            <img src="https://n4-q.mafengwo.net/s10/M00/5E/2A/wKgBZ1kC5aOAEN2gAARoWlORjbE86.jpeg" alt="Second slide">
							        </div>
							        <div class="item">
							            <img src="https://n4-q.mafengwo.net/s10/M00/5E/4D/wKgBZ1kC5cqAfjLfAAL0iqzUcnM01.jpeg" alt="Third slide">
							        </div>
							    </div>
							    <!-- 轮播（Carousel）导航 -->
							    <a class="carousel-control left" href="#myCarousel" 
							        data-slide="prev">&lsaquo;
							    </a>
							    <a class="carousel-control right" href="#myCarousel" 
							        data-slide="next">&rsaquo;
							    </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="matter">
			<div class="container">
				<div class="row">
					<div class="col-lg-2">
						<div id="sidebar">
							<h4>旅游攻略导航</h4>
						</div>
						<ul id="side_ul">
							<li><a href="#">北京</a></li>
							<li><a href="#">上海</a></li>
							<li><a href="#">广州</a></li>
							<li><a href="#">深圳</a></li>
							<li><a href="#">福州</a></li>
							<li><a href="#">西安</a></li>
							<li><a href="#">香港</a></li>
							<li><a href="#">杭州</a></li>
							<li><a href="#">苏州</a></li>
							<li><a href="#">青海</a></li>
						</ul>
					</div>
					<div class="col-lg-10">
						<div id="worth_nav">
							<h3>推荐游记</h3>
						</div>
						<div id="myshow">
							<div class="panel panel-default show_div">
							    <div class="panel-heading">
							        <h3 class="panel-title show_title">
							            史上最全香港八达通攻略，教你一招玩遍全港不费劲！
							        </h3>
							    </div>
							    <div class="panel-body">
						    		<img src="/xm4/Public/img/adr/adr_5.jpg" class="show_img">
						    		<p class="show_content">去香港旅行，最麻烦的是什么？对，就是交通！别怕，在香港，只要你拥有一张八达通（香港交通卡），就可以省去大大小小排队买票找零钱的时间，乘车吃饭娱乐购物就连路边停车都可以用，轻松玩遍全港，省时又省事。去香港旅行，最麻烦的是什么？对，就是交通！别怕，在香港，只要你拥有一张八达通（香港交通卡），就可以省去大大小小排队买票找零钱的时间，乘车吃饭娱乐购物就连路边停车都可以用，轻松玩遍全港，省时又省事。去香港旅行，最麻烦的是什么？对，就是交通！别怕，在香港，只要你拥有一张八达通（香港交通卡），就可以省去大大小小排队买票找零钱的时间，乘车吃饭娱乐购物就连路边停车都可以用，轻松玩遍全港，省时又省事。去香港旅行，最麻烦的是什么？对，就是交通！别怕，在香港，只要你拥有一张八达通（香港交通卡），就可以省去大大小小排队买票找零钱的时间，乘车吃饭娱乐购物就连路边停车都可以用，轻松玩遍全港，省时又省事。去香港旅行，最麻烦的是什么？对，就是交通！别怕，在香港，只要你拥有一张八达通（香港交通卡），就可以省去大大小小排队买票找零钱的时间，乘车吃饭娱乐购物就连路边停车都可以用，轻松玩遍全港，省时又省事。去香港旅行，最麻烦的是什么？对，就是交通！别怕，在香港，只要你拥有一张八达通（香港交通卡），就可以省去大大小小排队买票找零钱的时间，乘车吃饭娱乐购物就连路边停车都可以用，轻松玩遍全港，省时又省事。</p>
							    </div>
							</div>
							<div class="panel panel-default show_div">
							    <div class="panel-heading">
							        <h3 class="panel-title show_title">
							            史上最全香港八达通攻略，教你一招玩遍全港不费劲！
							        </h3>
							    </div>
							    <div class="panel-body">
						    		<img src="/xm4/Public/img/adr/adr_5.jpg" class="show_img">
						    		<p class="show_content">去香港旅行，最麻烦的是什么？对，就是交通！别怕，在香港，只要你拥有一张八达通（香港交通卡），就可以省去大大小小排队买票找零钱的时间，乘车吃饭娱乐购物就连路边停车都可以用，轻松玩遍全港，省时又省事。去香港旅行，最麻烦的是什么？对，就是交通！别怕，在香港，只要你拥有一张八达通（香港交通卡），就可以省去大大小小排队买票找零钱的时间，乘车吃饭娱乐购物就连路边停车都可以用，轻松玩遍全港，省时又省事。去香港旅行，最麻烦的是什么？对，就是交通！别怕，在香港，只要你拥有一张八达通（香港交通卡），就可以省去大大小小排队买票找零钱的时间，乘车吃饭娱乐购物就连路边停车都可以用，轻松玩遍全港，省时又省事。去香港旅行，最麻烦的是什么？对，就是交通！别怕，在香港，只要你拥有一张八达通（香港交通卡），就可以省去大大小小排队买票找零钱的时间，乘车吃饭娱乐购物就连路边停车都可以用，轻松玩遍全港，省时又省事。去香港旅行，最麻烦的是什么？对，就是交通！别怕，在香港，只要你拥有一张八达通（香港交通卡），就可以省去大大小小排队买票找零钱的时间，乘车吃饭娱乐购物就连路边停车都可以用，轻松玩遍全港，省时又省事。去香港旅行，最麻烦的是什么？对，就是交通！别怕，在香港，只要你拥有一张八达通（香港交通卡），就可以省去大大小小排队买票找零钱的时间，乘车吃饭娱乐购物就连路边停车都可以用，轻松玩遍全港，省时又省事。</p>
							    </div>
							</div>
							<div class="panel panel-default show_div">
							    <div class="panel-heading">
							        <h3 class="panel-title show_title">
							            史上最全香港八达通攻略，教你一招玩遍全港不费劲！
							        </h3>
							    </div>
							    <div class="panel-body">
						    		<img src="/xm4/Public/img/adr/adr_5.jpg" class="show_img">
						    		<p class="show_content">去香港旅行，最麻烦的是什么？对，就是交通！别怕，在香港，只要你拥有一张八达通（香港交通卡），就可以省去大大小小排队买票找零钱的时间，乘车吃饭娱乐购物就连路边停车都可以用，轻松玩遍全港，省时又省事。去香港旅行，最麻烦的是什么？对，就是交通！别怕，在香港，只要你拥有一张八达通（香港交通卡），就可以省去大大小小排队买票找零钱的时间，乘车吃饭娱乐购物就连路边停车都可以用，轻松玩遍全港，省时又省事。去香港旅行，最麻烦的是什么？对，就是交通！别怕，在香港，只要你拥有一张八达通（香港交通卡），就可以省去大大小小排队买票找零钱的时间，乘车吃饭娱乐购物就连路边停车都可以用，轻松玩遍全港，省时又省事。去香港旅行，最麻烦的是什么？对，就是交通！别怕，在香港，只要你拥有一张八达通（香港交通卡），就可以省去大大小小排队买票找零钱的时间，乘车吃饭娱乐购物就连路边停车都可以用，轻松玩遍全港，省时又省事。去香港旅行，最麻烦的是什么？对，就是交通！别怕，在香港，只要你拥有一张八达通（香港交通卡），就可以省去大大小小排队买票找零钱的时间，乘车吃饭娱乐购物就连路边停车都可以用，轻松玩遍全港，省时又省事。去香港旅行，最麻烦的是什么？对，就是交通！别怕，在香港，只要你拥有一张八达通（香港交通卡），就可以省去大大小小排队买票找零钱的时间，乘车吃饭娱乐购物就连路边停车都可以用，轻松玩遍全港，省时又省事。</p>
							    </div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="/xm4/Public/js/bootstrap.min.js"></script>
	</body>
</html>