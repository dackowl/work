<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="renderer" content="webkit">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <title>OA系统</title>

	    <!-- Bootstrap -->
	    <link href="/xm4/Public/css/bootstrap.min.css" rel="stylesheet">
	    <link href="/xm4/Public/admin/css/main.css?v=1.0" rel="stylesheet">

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body ng-app='myApp' ng-controller="myCtrl" ng-cloak>
		<div id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-2">
						<div id="content_left">
							<?php if(is_array($menuData)): $i = 0; $__LIST__ = $menuData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i; if(($value["pid"]) == "0"): ?><ul class="menu_ul">
										<div class="menu_title">
											<p class="title_p"><?php echo ($value["m_name"]); ?></p>
										</div>
										<?php if(is_array($menuData)): $i = 0; $__LIST__ = $menuData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i; if(($val["pid"]) == $value["m_id"]): ?><div class="menu_p">
													<li><p><?php echo ($val["m_name"]); ?></p></li>
												</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
									</ul><?php endif; endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="/xm4/Public/js/bootstrap.min.js"></script>
	    <script src="/xm4/Public/admin/js/main.js"></script>
	</body>
</html>