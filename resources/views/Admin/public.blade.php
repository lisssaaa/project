<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="/static/admin/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="/static/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="/static/admin/css/style.css" rel="stylesheet">
    <link href="/static/admin/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="/admin" class="logo"><b>ETRO STORES</b></a>
            <!--logo end-->
            <!-- <div class="nav notify-row" id="top_menu">
               
                <ul class="nav top-menu">
                   
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">DashGum Admin Panel</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="/static/admin/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="/static/admin/img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="/static/admin/img/ui-danro.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new .
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="/static/admin/img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                   
                </ul>
                
            </ div>-->
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="/adminloginout">注销</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- ******************************************************************************************
     
      ******************************************************************************************-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="/static/admin/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">{{session('admin')}}</h5>
              	  	
                  <li class="mt">
                      <a href="/admin">
                          <i class="fa fa-desktop"></i>
                          <span>首页</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="/adminusers" >
                          <span class="glyphicon glyphicon-user"></span>
                          <span>&nbsp;&nbsp;&nbsp;管理员管理</span>
                      </a>                      
                  </li>
                  <li class="sub-menu">
                      <a href="/adminroles" >
                          <span class="glyphicon glyphicon-bookmark"></span>
                          <span>&nbsp;&nbsp;&nbsp;角色管理</span>
                      </a>                      
                  </li>
                  <li class="sub-menu">
                      <a href="/adminauths" >
                          <span class="glyphicon glyphicon-lock"></span>
                          <span>&nbsp;&nbsp;&nbsp;权限管理</span>
                      </a>                      
                  </li>
                  <li class="sub-menu">
                      <a href="/adminuser" >
                          <i class="fa fa-th"></i>
                          <span>会员管理</span>
                      </a>                      
                  </li>
                  <li class="sub-menu">
                      <a href="/adminclassify" >
                          <i class="fa fa-cogs"></i>
                          <span>分类管理</span>
                      </a>                     
                  </li> 
                  <li class="sub-menu">
                      <a href="/adminorder" >
                          <span class="glyphicon glyphicon-list-alt"></span>
                          <span>&nbsp;&nbsp;&nbsp;订单管理</span>
                      </a>                      
                  </li>  
                                 
                  <li class="sub-menu"> 
                      <a href="javascript:;" >                     
                          <i class="fa fa-book"></i>
                          <span>页面</span> 
                      </a>                     
                      <ul class="sub">
                          <li><a  href="blank.html">空白模板</a></li>
                          <li><a  href="login.html">登录</a></li>
                          <li><a  href="lock_screen.html">锁屏</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>表单</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">表单组件</a></li>
                      </ul>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>图表</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.html">Morris</a></li>
                          <li><a  href="chartjs.html">Chartjs</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      
      @section('content')
      @show
      
  </section>
  
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/static/admin/js/jquery.js"></script>
    <script src="/static/admin/js/bootstrap.min.js"></script>
    <script src="/static/admin/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="/static/admin/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="/static/admin/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="/static/admin/js/jquery.scrollTo.min.js"></script>
    <script src="/static/admin/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="/static/admin/js/common-scripts.js"></script>

    <!--script for this page-->
    <script type="text/javascript" src="/static/admin/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="/static/admin/js/gritter-conf.js"></script>
   
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
  <!-- 登录信息 -->
  @if(session('login'))
  <div id="gritter-notice-wrapper">
   <div id="gritter-item-1" class="gritter-item-wrapper my-sticky-class" style="">
    <div class="gritter-top"></div>
    <div class="gritter-item">
       <div class="gritter-close" style="display: none;"></div>
       <img src="/static/admin/img/ui-sam.jpg" class="gritter-image" />
       <div class="gritter-with-image">
        <span class="gritter-title">欢迎登录ETRO STORES后台管理系统！</span>
        <p>在这里，您可以管理数据库信息，若没有权限，请联系<a href="" target="_blank" style="color:#ffd777">超级管理员</a>.</p>
       </div>
   <div style="clear:both"></div>
  </div>
    <div class="gritter-bottom"></div>
   </div>
  </div>
  @endif
  <!-- 提醒信息 -->
  @if(session('success'))
  <div id="gritter-notice-wrapper">
   <div id="gritter-item-1" class="gritter-item-wrapper my-sticky-class" style="">
    <div class="gritter-top"></div>
    <div class="gritter-item">    
      <span class="gritter-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><span class="glyphicon glyphicon-thumbs-up"></span></font></font></span>
      <p style="color:#ffd777"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{session('success')}}</font></font></p>
     
     <div style="clear:both"></div>
    </div>
    <div class="gritter-bottom"></div>
   </div>
  </div>
  @endif
  @if(session('error'))
  <div id="gritter-notice-wrapper">
   <div id="gritter-item-1" class="gritter-item-wrapper my-sticky-class" style="">
    <div class="gritter-top"></div>
    <div class="gritter-item">    
      <span class="gritter-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><span class="glyphicon glyphicon-thumbs-down"></font></font></span>
      <p style="color:#ffd777"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{session('error')}}</font></font></p>
     
     <div style="clear:both"></div>
    </div>
    <div class="gritter-bottom"></div>
   </div>
  </div>
  @endif
  <!-- 表单校验提醒信息 -->
  @if(count($errors)>0)
  <div id="gritter-notice-wrapper">
   <div id="gritter-item-1" class="gritter-item-wrapper my-sticky-class" style="">
    <div class="gritter-top"></div>
    <div class="gritter-item">    
      <span class="gritter-title"><span class="glyphicon glyphicon-warning-sign"></span></span>
      
        @foreach($errors->all() as $error)
        
          <p style="color:#ffd777"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$error}}</font></font></p>
        
        @endforeach
           
     <div style="clear:both"></div>
    </div>
    <div class="gritter-bottom"></div>
   </div>
  </div>
  @endif
  <script>
      $('#gritter-notice-wrapper').fadeIn();
      setTimeout(function(){
        $("#gritter-notice-wrapper").fadeOut();
      },4000);
  </script>
  </body>
</html>
