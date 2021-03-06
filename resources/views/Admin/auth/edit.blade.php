<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="/static/admin/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="/static/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/static/admin/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="/static/admin/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="/static/admin/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="/static/admin/css/style.css" rel="stylesheet">
    <link href="/static/admin/css/style-responsive.css" rel="stylesheet">

    <script src="/static/admin/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      @extends('Admin.public') 
      @section('content')    
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      
      <section id="main-content"> 
       <section class="wrapper"> 
        <h3><i class="fa fa-angle-right"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 权限管理</font></font></h3> 
        
        <!-- row --> 
        <div class="row mt"> 
         <div class="col-md-12"> 
          <div class="content-panel"> 
           <h4><i class="fa fa-angle-right"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 修改权限信息</font></font></h4> 
           <hr />
           <form class="form-horizontal style-form" action="/adminauths/{{$data->id}}" method="post">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="form-group">
                    <label class="col-sm-1 col-sm-1 col-sm-offset-1 control-label"><font style="vertical-align: inherit;">权限名称：</font></label>
                    <div class="col-sm-6">
                    <input type="text" name="name" value="{{$data->name}}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1 col-sm-1 col-sm-offset-1 control-label"><font style="vertical-align: inherit;">控制器：</font></label>
                  <div class="col-sm-6">
                    <input type="text" name="mname" value="{{$data->mname}}" class="form-control">
                  </div>         
                </div> 
                <div class="form-group">
                  <label class="col-sm-1 col-sm-1 col-sm-offset-1 control-label"><font style="vertical-align: inherit;">方法：</font></label>
                  <div class="col-sm-6">
                    <input type="text" name="aname" value="{{$data->aname}}" class="form-control">
                  </div>         
                </div> 
                <div class="form-group">
                  <label class="col-sm-1 col-sm-1 col-sm-offset-1 control-label"><font style="vertical-align: inherit;">权限状态：</font></label>
                  <div class="col-sm-6">
                    <input type="radio" name="status" value="0"@if($data->status==0) checked @endif>启用&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="status" value="1"@if($data->status==1) checked @endif>禁用
                  </div>         
                </div> 
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-warning">确认</button>
                    <button type="reset" class="btn btn-warning">重置</button>
                    <a type="button" href="/adminauths" class="btn btn-default">取消</a>
                  </div>
                </div>                      
                      
            </form>
          </div>
          <!-- /content-panel --> 
         </div>
         <!-- /col-md-12 --> 
        </div>
        <!-- /row --> 
       </section>
       <!-- /wrapper --> 
      </section>

      <!--main content end-->
      <!--footer start-->
@endsection
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/static/admin/js/jquery.js"></script>
    <script src="/static/admin/js/jquery-1.8.3.min.js"></script>
    <script src="/static/admin/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="/static/admin/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="/static/admin/js/jquery.scrollTo.min.js"></script>
    <script src="/static/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="/static/admin/js/jquery.sparkline.js"></script>

    <!--common script for all pages-->
    <script src="/static/admin/js/common-scripts.js"></script>   

    <!--script for this page-->
    <script src="/static/admin/js/sparkline-chart.js"></script>    
	  <script src="/static/admin/js/zabuto_calendar.js"></script>	

  </body>
</html>
