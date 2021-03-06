﻿<!DOCTYPE html>
<html lang="en">
 <head> 
  <title>My Account</title> 
  <meta charset="utf-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
  <!-- GOOGLE WEB FONTS --> 
  <link rel="stylesheet" href="/static/home/css/font-awesome.min.css" /> 
  <!-- BOOTSTRAP 3.3.7 CSS --> 
  <link rel="stylesheet" href="/static/home/css/bootstrap.min.css" /> 
  <!-- SLICK v1.6.0 CSS --> 
  <link rel="stylesheet" href="/static/home/css/slick-1.6.0/slick.css" /> 
  <link rel="stylesheet" href="/static/home/css/jquery.fancybox.css" /> 
  <link rel="stylesheet" href="/static/home/css/yith-woocommerce-compare/colorbox.css" /> 
  <link rel="stylesheet" href="/static/home/css/owl-carousel/owl.carousel.min.css" /> 
  <link rel="stylesheet" href="/static/home/css/owl-carousel/owl.theme.default.min.css" /> 
  <link rel="stylesheet" href="/static/home/css/js_composer/js_composer.min.css" /> 
  <link rel="stylesheet" href="/static/home/css/woocommerce/woocommerce.css" /> 
  <link rel="stylesheet" href="/static/home/css/yith-woocommerce-wishlist/style.css" /> 
  <link rel="stylesheet" href="/static/home/css/custom.css" /> 
  <link rel="stylesheet" href="/static/home/css/app-orange.css" id="theme_color" /> 
  <link rel="stylesheet" href="" id="rtl" /> 
  <link rel="stylesheet" href="/static/home/css/app-responsive.css" /> 
 </head> 
 <body class="page woocommerce-account woocommerce-page"> 
 @extends('Home.public') 
 @section('location','个人中心')
 @section('title','我的')
 @section('content')
   <div class="container"> 
    <div class="row"> 
     <div id="contents" role="main" class="main-page  col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
      <div class="post-6 page type-page status-publish hentry"> 
       <div class="entry"> 
        <div class="entry-content"> 
         <header> 
          <h2 class="entry-title">个人中心</h2> 
         </header> 
         <div class="entry-content"> 
          <div class="woocommerce"> 
           <nav class="woocommerce-MyAccount-navigation"> 
            <ul> 
             <li> <a href="/myaccount">我的订单</a></li> 
             <li> <a href="/mycart">我的购物车</a></li> 
             <li> <a href="/mywish">我的收藏夹</a> </li> 
             <li id="set"> <a href="javascript:void(0)">设置</a> </li> 
             <li> <a href="/myaccount/{{$uid}}/edit">个人资料</a> </li> 
             <li class="is-active"> <a href="/myaddress">收货地址</a> </li>
             <li> <a href="">账户安全</a> </li> 
            </ul> 
           </nav>
           <script>
              $('#set').click(function(){
                $(this).nextAll('li').toggle();
              });
           </script>  
           <div class="woocommerce-MyAccount-content">                 
            <div class="u-column1 col-1 woocommerce-Address addresses">
             <h4><a href="/myaddress/create" class="col-md-offset-10">+ 添加新地址</a></h4><hr/>
             <table class="table" style="width:900px;">
              @if(count($addr)>0)
              @foreach($addr as $value)
                <tr>
                  <td style="width:60px;"><div style="width:60px;height:60px;border-radius:30px;background:#d9d9d9;color:white;vertical-align:middle;text-align:center"><h1>{{mb_substr($value->name,0,1)}}</h1></div>
                  </td>
                  <td style="width:780px;">
                    <header class="woocommerce-Address-title title"> 
                      <h3>{{$value->name}}&nbsp;&nbsp;&nbsp;{{$value->phone}}</h3> 
                      <a href="/myaddress/{{$value->id}}/edit" class="edit">编辑</a>
                      <a href="/myaddress/{{$value->id}}" class="edit">设为默认地址&nbsp;&nbsp;|&nbsp;&nbsp;</a>
                                           
                    </header> 
                    <address>
                      @if($default==$value->id)
                      <span class="badge" style="background-color:orange">默认</span>
                      @endif
                      {{$value->adds}}</address>  
                  </td>
                </tr>
              @endforeach
              @else 
              <tr><td>您还未设置收货地址！</td></tr>
              @endif

            </table>
            </div>
           </div> 
          </div> 
         </div> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
   @endsection 
 </body>
</html>