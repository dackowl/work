<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="renderer" content="webkit">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <title>user</title>

	    <!-- Bootstrap -->
	    <link href="/hf161026/Public/css/bootstrap.min.css" rel="stylesheet">

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body ng-app='myApp' ng-controller="myCtrl" ng-cloak><?php echo ($uname); ?>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="/hf161026/Public/js/bootstrap.min.js"></script>
    	<script src="/hf161026/Public/js/angular.min.js"></script>
	</body>
	<script type="text/javascript">
	    var app = angular.module('myApp', []);
	    app.controller('myCtrl', function($scope, $http) {
	      	
	    });
  	</script>
</html>