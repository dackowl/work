<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>login</title>

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
          <a class="btn btn-default" href="<?php echo U('home/login/index');?>">登录</a>
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
            <form class="form-horizontal" accept-charset="utf-8" name="myForm">
              <legend class="text-center">登录</legend>
              <div class="form-group">
                <label for="formInput">用户名</label>
                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                  <input type="text" class="form-control" id="uname" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="formInput">密码</label>
                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                  <input type="password" class="form-control" id="pwd" placeholder="">
                </div>
              </div>
              <div class="row text-center">
                <button type="button" class="btn btn-warning" id="mylogin">登录</button>
                <a class="btn btn-primary" href="<?php echo U('home/register/index');?>">注册</a>
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
    <script src="/hf161026/Public/js/login.js?v=1.0"></script>
    <script type="text/javascript">
      var loginUrl = "<?php echo U('home/Login/login');?>";
      var centerUrl = "<?php echo U('home/center/index');?>";
    </script>
<!--     <script src="/hf161026/Public/js/angular.min.js"></script> -->
  </body>
  
</html>