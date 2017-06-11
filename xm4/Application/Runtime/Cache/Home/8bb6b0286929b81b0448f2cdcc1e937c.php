<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>register</title>

    <!-- Bootstrap -->
    <link href="/hf161026/Public/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="nav">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
            <img class="img-responsive center-block" src="http://www.sojump.com/images/index2016/sojumpwjxlogonew.png"  alt="Image">
          </div>
          <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1 text-center"></div>
          <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1 text-center">
            <p>首页</p>
          </div>
          <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1 text-center">
            <p>应用展示</p>
          </div>
          <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1 text-center">
            <p>企业服务</p>
          </div>
          <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1 text-center">
            <p>样本服务</p>
          </div>
          <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1 text-center>
            <p>问券中心</p>
          </div>
          <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1"></div>
          <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1 text-center">
          <a class="btn btn-warning" href="<?php echo U('home/register/index');?>">注册</a>
          </div>
          <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1 text-center">
          <a class="btn btn-default" href="<?php echo U('home/Login/index');?>">登录</a>
          </div>
          <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1 text-center">
          <p><span class="glyphicon glyphicon-user"></span>QQ登录</p>
          </div>
        </div>
      </div>
    </div>
    <div id="content">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <img src="http://www.sojump.com/images/login/login_lbg2016.jpg" class="img-responsive" alt="Image">
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <form class="form-horizontal" accept-charset="utf-8" ng-app='loginApp' ng-controller="loginCtrl" name="myForm" ng-cloak novalidate>
              <legend class="text-center">登录</legend>
              <div class="form-group">
                <label for="formInput">用户名</label>
                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                  <input type="text" class="form-control" id="formInput" placeholder="" ng-model="myname" pattern="^[A-Za-z0-9]{6,18}$" ng-blur="rename()" required name="user">
                  
                </div>
                <div class='check_span'>
                  <span style="color:red" ng-show="myForm.user.$dirty && myForm.user.$invalid" >
                    <span ng-show="myForm.user.$error.required">*</span>
                    <span ng-show="myForm.user.$error.pattern">6-18位英文或数字</span>
                  </span>
                </div>
              </div>
              <div class="form-group">
                <label for="formInput">密码</label>
                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                  <input type="password" class="form-control" id="formInput" placeholder="" ng-model="mypwd" name="pwd" pattern="^[A-Za-z0-9]{6,18}$" required>
                </div>
              </div>
              <div class='check_span'>
                <span style="color:red" ng-show="myForm.pwd.$dirty && myForm.pwd.$invalid" >
                  <span ng-show="myForm.pwd.$error.required">*</span>
                  <span ng-show="myForm.pwd.$error.pattern">6-18位英文或数字</span>
                </span>
            </div>
              <div class="form-group">
                <label for="formInput">确认密码</label>
                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                  <input type="password" class="form-control" id="formInput" placeholder="" ng-model="repwd" name="rpwd" required>
                </div>
              </div>
              <div class='check_span'>
                <span style="color:red" ng-show="myForm.rpwd.$dirty && (myForm.rpwd.$invalid || mypwd!=repwd)" >
                  <span ng-show="myForm.pwd.$error.required">*</span>
                  <span ng-show="mypwd!=repwd">密码不一致</span>
                </span>
            </div>
              <div class="row text-center">
                <button type="button" class="btn btn-warning" ng-disabled="myForm.user.$invalid || myForm.pwd.$invalid || mypwd!=repwd || nameOl" ng-click='regAction()'>注册</button>
                <a class="btn btn-primary" href="<?php echo U('home/login/index');?>">返回登录</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/hf161026/Public/js/bootstrap.min.js"></script>
    <script src="/hf161026/Public/js/angular.min.js"></script>
  </body>
  <script type="text/javascript">
    var app = angular.module('loginApp', []);
    app.controller('loginCtrl', function($scope, $http) {
      //$scope.nameOl=true;
      $scope.rename=function(){
      $http({
        url:"<?php echo U('home/Login/rename');?>",
        method:'post',   
          data:{myname:$scope.myname} 
        }).then(function(res){
         if (res.data.statu==0) {
          alert(res.data.msg);
          $scope.nameOl=true;
         }else{
          $scope.nameOl=false;
         }
        }).catch(function (err) {
          console.log(err);
        }); 
      };
      $scope.regAction=function(){
      $http({
        url:"<?php echo U('home/Login/reg');?>",
        method:'post',   
          data:{
            myname:$scope.myname,
            mypwd:$scope.mypwd
          } 
        }).then(function(res){
         if (res.data.statu==0) {
          alert(res.data.msg);
         }else{
          alert(res.data.msg);
          location.href="<?php echo U('home/Login/index');?>";
         }
        }).catch(function (err) {
          console.log(err);
        }); 
      };
    });
  </script>
</html>