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
  <body>
  	<div class="container" style="margin-top: 20px">
	    <form class="bs-example bs-example-form" role="form" name='myPwd' ng-app='myApp' ng-controller="myCtrl" ng-cloak novalidate>
        <div class="input-group input-group-md">
          <span class="input-group-addon">旧的密码</span>
          <input type="password" class="form-control" id="oldpwd" name="oldpwd" ng-blur="yzpwd()" ng-model="oldpwd" pattern="^[A-Za-z0-9]{6,18}$" required>
        </div>
        <label style="color:red" ng-show="myPwd.oldpwd.$dirty && (myPwd.oldpwd.$invalid||old_p==false)" >
          <label ng-show="myPwd.oldpwd.$error.required">必填</label>
          <label ng-show="myPwd.oldpwd.$error.pattern">6-18位英文或数字</label>
          <label ng-show="old_p==false" ng-bind="old_msg"></label>
        </label>
        <br>
        <div class="input-group input-group-md">
          <span class="input-group-addon">新的密码</span>
          <input type="password" class="form-control" id="newpwd" name="newpwd" ng-model="newpwd" pattern="^[A-Za-z0-9]{6,18}$" required>
        </div>
        <label style="color:red" ng-show="myPwd.newpwd.$dirty && myPwd.newpwd.$invalid" >
          <label ng-show="myPwd.newpwd.$error.required">必填</label>
          <label ng-show="myPwd.newpwd.$error.pattern">6-18位英文或数字</label>
        </label>
        <br>
        <div class="input-group input-group-md">
          <span class="input-group-addon">重复密码</span>
          <input type="password" class="form-control" id="repwd" name="repwd" ng-model="repwd" required>
        </div>
        <label style="color:red" ng-show="myPwd.repwd.$dirty && (reg.pwds.$invalid || newpwd!=repwd) ">
          <label ng-show="myPwd.repwd.$error.required">必填</label>
          <label ng-show="newpwd!=repwd">密码不一致</label>
        </label>
        <br>
        <button class="btn btn-primary btn-block" ng-disabled="myPwd.oldpwd.$invalid || myPwd.newpwd.$invalid || myPwd.repwd.$invalid || newpwd!=repwd || old_p==false" type="button" ng-click='cgpwd()'>确定</button>
	    </form>
  	</div>
    <script type="text/javascript">
      var transform = function(data) {
          return $.param(data);
      }
      var app = angular.module('myApp', []);
      app.controller('myCtrl', function($scope, $http) {
        //验证旧密码是否错误
        $scope.yzpwd = function(){
          if($scope.oldpwd!=undefined){
            $http({
              url:"<?php echo U('admin/center/yzpwd');?>",
              method:'post',
              data:{
                oldpwd : $scope.oldpwd
              },
              headers:{'Content-Type':'application/x-www-form-urlencoded'},
              transformRequest: transform
            }).then(function(res){
              console.log(res.data);
              if (res.data.status==0) {
                $scope.old_p = false;
                $scope.old_msg = res.data.msg;
              }else{
                $scope.old_p = true;
              }
            }).catch(function (err) {
              console.log(err);
            });
          }
        }
        $scope.cgpwd = function(){
          if($scope.newpwd!=undefined){
            $http({
              url:"<?php echo U('admin/center/cgpwd');?>",
              method:'post',
              data:{
                newpwd : $scope.newpwd
              },
              headers:{'Content-Type':'application/x-www-form-urlencoded'},
              transformRequest: transform
            }).then(function(res){
              alert(res.data.msg);
              $scope.oldpwd = '';
              $scope.newpwd = '';
              $scope.repwd = '';
            }).catch(function (err) {
              console.log(err);
            });
          }
        }
      })
    </script>
  </body>
  
</html>