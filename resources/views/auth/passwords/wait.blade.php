<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>TAT</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="/css/ForgetPswd.css" />
    <link rel="stylesheet" type="text/css" href="/css/chinese_font.css"/>
    <style>
        .check-email>span
        {
            color:steelblue;
            font-size:30px;
        }
    </style>
    <script src="/bootstrap/js/jquery-1.11.2.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
</head>

<body style="background-color:rgba(226,226,226,1.00)">
<!--顶导航栏-->
<div class="nav nav-pills navbar-fixed-top" style="z-index:1;background-color:#222222">
    <div class="container-fluid" style="padding-left:5%;padding-right:5%">
        <!-- Brand and toggle get grouped for better mobile display -->

        <a class="navbar-brand" style="color:aliceblue;" href="#">TAT</a>

        <a class="signupbtn " style="position:relative;top:10px;float:right" href="#">注册</a>

    </div>
</div>

<!--main-->
<div class="container" style="margin-top:100px">
    <!--circle-->

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

    <div class="row">
        <div class="hidden-xs" style="height:100px"></div>
        <div class="col-lg-offset-2 col-lg-2 col-md-offset-2 col-md-2 col-sm-offset-2 col-sm-2 hidden-xs" align="center">
            <div class="circle1-done">
                <div class="circle2">
                    <span class="circle-num">1</span>
                </div>
                <p class="circle-content">填写账号</p>
            </div>
        </div>

        <div class="visible-xs col-xs-4"></div>

        <div class="col-lg-2 col-md-2  col-sm-2  col-xs-4" align="center">
            <div class="circle1-active">
                <div class="circle2">
                    <span class="circle-num">2</span>
                </div>
                <p class="circle-content">身份验证</p>
            </div>
        </div>

        <div class=" col-lg-2 col-md-2  col-sm-2 hidden-xs" align="center">
            <div class="circle1">
                <div class="circle2">
                    <span class="circle-num">3</span>
                </div>
                <p class="circle-content">重置密码</p>
            </div>
        </div>

        <div class=" col-lg-2 col-md-2 col-sm-2  hidden-xs" align="center">
            <div class="circle1">
                <div class="circle2">
                    <span class="circle-num">4</span>
                </div>
                <p class="circle-content">完成修改</p>
            </div>
        </div>

    </div>

    <!--form-->
    <br/><br/><br/><br/>
    <div class="row">
        <div class="col-lg-offset-3 col-6 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-offset-1 col-xs-10">
            <div class="step text-center">
                <span>第二步</span>
            </div>

            <div class="check-email" align="center">
                <span class="glyphicon glyphicon-envelope"></span><br/>
                <p style="margin-top:10px">我们已向您的邮箱中发送身份验证邮件，请在24小时之内查收。并点击邮件内地址进入找回密码的下一步操作。</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
