<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>新旧书店后台</title>

    <!-- Bootstrap Core CSS -->
    <link href="/Public/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/Public/admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/Public/admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/Public/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h2 style="color: indigo">&nbsp;&nbsp;新旧书店后台管理系统</h2>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    欢迎您,**
                </a>
                <!-- /.dropdown-messages -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i>设置</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i>退出</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table fa-fw"></i> 管理员<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="adminInfo.html">查看管理员信息</a>
                            </li>
                            <li>
                                <a href="register.html">添加管理员</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa fa-edit fa-fw"></i>自定义菜单<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="menu.html">查看菜单</a>
                            </li>
                            <li>
                                <a href="manageMenu.html">管理菜单</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i>店铺活动<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="addPictureText.html">上传活动图文</a>
                            </li>
                            <li>
                                <a href="managePictureText.html">管理活动图文</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o fa-fw"></i>图书管理<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="manageBooks.html">管理图书</a>
                            </li>
                            <li>
                                <a href="manageBookType.html">管理图书分类</a>
                            </li>
                            <li>
                                <a href="addBook.html">添加图书</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-dashboard fa-fw"></i>订单管理<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="order1.html">查看订单信息</a>
                            </li>
                            <li>
                                <a href="order2.html">管理订单</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h5><a href="#">首页</a>&nbsp;&nbsp;>>&nbsp;上传活动图文</h5>
            </div>
            <!-- /.col-lg-12 -->
        </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           添加图文消息
                        </div>
                        <div class="panel-body">
                            <div class="row" style="margin: auto" />
                                <div class="col-lg-6">
                                    <form role="form">
                                    <div class="form-group">
                                            <label>标题</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>缩略图media_id</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>创建时间</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>描述</label>
                                            <td><textarea name="digest" class="common-textarea"  cols="30" style="width: 98%;" rows="3"></textarea></td>
                                            
                                        </div>
                                        <div class="form-group">
                                        <label>原文地址</label>
                                        <input class="form-control">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-info">添加</button>
                                        <button type="submit" class="btn btn-default">返回</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->

                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/Public/admin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/Public/admin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/Public/admin/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/Public/admin/dist/js/sb-admin-2.js"></script>

</body>

</html>