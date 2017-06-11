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
    <table class="table">
   <thead>
      <tr>
         <th>商品</th>
         <th>操作</th>
      </tr>
   </thead>
   <tbody>
      <tr ng-repeat="x in myData">
         <td>{{shopData[x.goods_id-1].s_name}}</td>
         <td><button ng-click="pay(x)">付款</button></td>
      </tr>
   </tbody>
</table>
  </body>
  <script type="text/javascript">
    var transform = function(data) {
        return $.param(data);
    }
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope, $http) {
        //当前商品id和用户id
        $scope.u_id = 4;
        //准备
        $http({
            url:"<?php echo U('home/dingdan/before');?>",
            method:'post',
            data:{
                u_id : $scope.u_id
            },
            headers:{'Content-Type':'application/x-www-form-urlencoded'},
            transformRequest: transform
        }).then(function(res){
            //console.log(res.data);
            $scope.myData = res.data.data;
            $scope.shopData = res.data.shopData;
        }).catch(function (err) {
            console.log(err);
        });
        //点击付款
        $scope.pay = function($i){
            if (confirm('是否确定付款？')) {
                $http({
                    url:"<?php echo U('home/dingdan/pay');?>",
                    method:'post',
                    data:{
                        p_id : $i.goods_id,
                        u_id : $scope.u_id
                    },
                    headers:{'Content-Type':'application/x-www-form-urlencoded'},
                    transformRequest: transform
                }).then(function(res){
                    console.log(res.data);
                }).catch(function (err) {
                    console.log(err);
                });
            }
        }
    })
    </script>
</html>