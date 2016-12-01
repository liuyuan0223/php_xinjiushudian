<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <title>立即购买</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link href="/wechat(g)/Public/bookstore/lib/weui.min.css" type="text/css" rel="stylesheet"/>
    <link href="/wechat(g)/Public/bookstore/css/jquery-weui.min.css" type="text/css" rel="stylesheet"/>
    <script type="text/javascript" src="/wechat(g)/Public/bookstore/js/jquery.1.4.2-min.js"></script>
    <script type="text/javascript" src="/wechat(g)/Public/bookstore/js/payfor.js"></script>
    <style>
        .weui_media_title1{
            font-size: 30px;
        }
        .weui_tabbar_label{
            text-align: center;
        }
        .weui_media_title2{
            color: #ff6600;
        }
        .swiper-container img {
            display: block;
            width: 100%;
        }
        .jiajian{
            margin-right: 5px;
        }



    </style>
</head>
<body>
<!--搜索栏开始-->
<div class="weui_search_bar" id="search_bar">
    <form class="weui_search_outer">
        <div class="weui_search_inner">
            <i class="weui_icon_search"></i>
            <input type="search" class="weui_search_input" id="search_input" placeholder="搜索" required/>
            <a href="javascript:" class="weui_icon_clear" id="search_clear"></a>
        </div>
        <label for="search_input" class="weui_search_text" id="search_text">
            <i class="weui_icon_search"></i>
            <span>搜索</span>
        </label>
    </form>
    <a href="javascript:" class="weui_search_cancel" id="search_cancel">取消</a>
</div>
<!--搜索栏结束-->
<!--顶部幻灯片开始-->
<div class="swiper-container" data-space-between='10' data-pagination='.swiper-pagination' data-autoplay="1000">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="/wechat(g)/Public/bookstore/images/001.jpg" alt=""></div>
        <div class="swiper-slide"><img src="/wechat(g)/Public/bookstore/images/002.jpg" alt=""></div>
        <div class="swiper-slide"><img src="/wechat(g)/Public/bookstore/images/004.jpg" alt=""></div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
</div>
<!--顶部幻灯片结束-->
<!--图书名称开始-->
<div class="weui_panel weui_panel_access">
    <div class="weui_panel_bd">
        <div class="weui_media_box weui_media_text">
            <h1 class="weui_media_title1">图书名称</h1>
            <h2 class="weui_media_title2">价格</h2>
            <p class="weui_media_desc">免运费 &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;剩余：10</p>
        </div>
    </div>
</div>
<!--图书名称结束-->

<!--列表开始-->
<div class="weui_cells weui_cells_access">
    <a class="weui_cell" href="index.html">
        <div class="weui_cell_hd">
            <img src="/wechat(g)/Public/bookstore/images/e1.jpg" alt="icon" style="width:20px;margin-right:5px;display:block">
        </div>
        <div class="weui_cell_bd weui_cell_primary">
            <p>河北师大新旧书店</p>
        </div>
        <div class="weui_cell_ft">
            进入店铺
        </div>
    </a>
    <span class="weui_cell" href="index.html">
        <div class="weui_cell_hd">
            <img src="/wechat(g)/Public/bookstore/images/f4.jpg" alt="icon" style="width:20px;margin-right:5px;display:block">
        </div>
        <div class="weui_cell_bd weui_cell_primary">
            <p>选择图书数量</p>
        </div>
        <div class="weui_cell_ft">
            请选择
        </div>
    </span>


        <div class="jiajian" style="float: right; padding-top: 0px" />
            <a class="reduce" onClick="setAmount.reduce('#qty_item_1')" href="javascript:void(0)">
                -</a>
            <input type="text" name="qty_item_1" value="1" id="qty_item_1" onKeyUp="setAmount.modify('#qty_item_1')" class="text" />
            <a class="add" onClick="setAmount.add('#qty_item_1')" href="javascript:void(0)">
                +</a>
        </div>

</div>

<!--列表结束-->

<!--tabbar开始-->
<div class="weui_tab">
    <div class="weui_tab_bd">

    </div>
    <div class="weui_tabbar">
<a href="javascript:;" class="weui_tabbar_item weui_bar_item_on">
            <div class="weui_tabbar_icon">
                <img src="/wechat(g)/Public/bookstore/images/icon_nav_button.png" alt="">
            </div>

        </a>

        <a href="javascript:;" class="weui_tabbar_item">
            <div class="weui_tabbar_icon">
                <img src="/wechat(g)/Public/bookstore/images/icon_nav_msg.png" alt="">
            </div>

        </a>
        <!--<a href="javascript:;" class="weui_tabbar_item">-->
            <p class="weui_tabbar_label"><a href="order.html" class="weui_btn weui_btn_warn">立即购买</a></p>
            <p class="weui_tabbar_label"><a href="cart.html" class="weui_btn weui_btn_primary">加入购物车</a></p>
        <!--</a>-->
    </div>
</div>
<!--tabbar结束-->
</body>
<script type="text/javascript" src="/wechat(g)/Public/bookstore/lib/jquery-2.1.4.js"></script>
<script type="text/javascript" src="/wechat(g)/Public/bookstore/lib/jquery-weui.min.js"></script>
<script type='text/javascript' src='/wechat(g)/Public/bookstore/js/swiper.js'></script>
<script>
    $(".swiper-container").swiper({
        loop: true,
        autoplay: 3000
    });
</script>
</html>