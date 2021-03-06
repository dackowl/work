<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
<!--      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="renderer" content="webkit"> -->
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title></title>
        <!-- Bootstrap -->
      <link href="/xm4/Public/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="/xm4/Public/js/angular.min.js"></script>
      <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
      <script src="/xm4/Public/js/bootstrap.min.js"></script>
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>
  <body ng-app='myApp' ng-controller="myCtrl" ng-cloak class="ng-cloak">
    <div style="padding: 100px 100px 10px;">
        <button ng-click="buy()" type="button" class="btn btn-primary">购买</button>
        <button ng-click="clearRedis()" type="button" class="btn btn-warning">清空redis</button>
    </div>
  </body>
  <script type="text/javascript">
    var transform = function(data) {
        return $.param(data);
    }
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope, $http) {
        //当前商品id和用户id
        $scope.p_id = 5;
        $scope.u_id = 4;
        //准备
        $http({
            url:"<?php echo U('home/buy/before');?>",
            method:'post',
            data:{
                p_id : $scope.p_id,
                u_id : $scope.u_id
            },
            headers:{'Content-Type':'application/x-www-form-urlencoded'},
            transformRequest: transform
        }).then(function(res){
            //console.log(res.data);
            if (res.data.status == 0) {
                alert(res.data.msg);
            }
        }).catch(function (err) {
            console.log(err);
        });
        //点击购买
        $scope.buy = function(){
            if ($scope.buySt == false) {
                alert('该商品暂时不可购买');
            }else{
                console.log('buy');
                $http({
                    url:"<?php echo U('home/buy/buy');?>",
                    method:'post',
                    data:{
                        p_id : $scope.p_id,
                        u_id : $scope.u_id
                    },
                    headers:{'Content-Type':'application/x-www-form-urlencoded'},
                    transformRequest: transform
                }).then(function(res){
                    console.log(res.data);
                    alert(res.data.msg);
                    if(res.data.status == 2){
                        location.reload();
                    }
                }).catch(function (err) {
                    console.log(err);
                });
            }
        }
        //清空redis
        $scope.clearRedis = function(){
            $http({
                url:"<?php echo U('home/buy/clearRedis');?>",
                method:'post',
                data:{
                },
                headers:{'Content-Type':'application/x-www-form-urlencoded'},
                transformRequest: transform
            }).then(function(res){
                console.log(res.data);
            }).catch(function (err) {
                console.log(err);
            });
        }
    })
    </script>
</html>