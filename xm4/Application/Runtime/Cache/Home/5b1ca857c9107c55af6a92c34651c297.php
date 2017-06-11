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
      <script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular.min.js"></script>
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
        <form class="bs-example bs-example-form" role="form">
            <div class="input-group">
                <span class="input-group-addon">商品ID</span>
                <input ng-model="p_id" type="text" class="form-control" placeholder="">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon">用户ID</span>
                <input ng-model="u_id" type="text" class="form-control" placeholder="">
            </div>
            <br>
            <div class="input-group">
                <button ng-click="buy()" type="button" class="btn btn-primary">购买</button>
            </div>
            <br>
        </form>
    </div>
  </body>
  <script type="text/javascript">
    var transform = function(data) {
        return $.param(data);
    }
      var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope, $http) {
        //添加角色
        $scope.buy = function(){
          if ($scope.p_id == undefined || $scope.p_id == '' || $scope.u_id == undefined || $scope.u_id == '') {
            alert('请先完善信息');
          }else{
            $http({
              url:"<?php echo U('home/pro/buy');?>",
              method:'post',
                  data:{
                      p_id : $scope.p_id,
                      u_id : $scope.u_id
                  },
                  headers:{'Content-Type':'application/x-www-form-urlencoded'},
                  transformRequest: transform
              }).then(function(res){
                console.log(res.data);
                // if (res.data.rol == 0) {
                //   alert(res.data.Msg);
                // }else{
                //   alert(res.data.Msg);
                // }
              }).catch(function (err) {
                console.log(err);
              });
          }
        }
    })
    </script>
</html>