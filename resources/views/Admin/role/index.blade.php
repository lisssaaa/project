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
    <link rel="stylesheet" type="text/css" href="/static/admin/css/switch.css">
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
        <h3><i class="fa fa-angle-right"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 角色管理</font></font></h3> 
        
        <!-- row --> 
        <div class="row mt"> 
         <div class="col-md-12"> 
          <div class="content-panel">
          &nbsp;&nbsp;&nbsp; 
            <div class="btn-group">
              <div class="btn-group">
                <a href="/adminroles" class="btn btn-warning active"><span class="fa fa-tasks"></span>&nbsp;&nbsp;<font style="vertical-align: inherit;">角色列表</font></a>
              </div>
              <div class="btn-group">
                <a href="/adminroles/create" class="btn btn-warning"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;<font style="vertical-align: inherit;">添加角色</font></a>
                
              </div>  

            </div>
            <div class="col-md-offset-9">
            <form class="form-inline" action="/adminroles" method="get">
                <div class="input-group">           
                  <input type="text" class="form-control" name="keywords" value="{{$k or ''}}" id="exampleInputName2" placeholder="请输入关键字">
                  <span class="input-group-btn">
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-search"></span></button>
                 </span>
                </div>
              </form>
            </div>

           <hr />
           <table class="table table-striped table-advance table-hover"> 
            <thead> 
             <tr> 
              <th><i class="fa fa-bullhorn"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> id</font></font></th> 
              <th class="hidden-phone"><i class="fa fa-question-circle"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 角色名</font></font></th> 
              <!-- <th><i class="fa fa-bookmark"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 父id</font></font></th>  -->             
              <th><i class="fa fa-edit"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 状态</font></font></th> 
               
              <th></th> 
             </tr> 
            </thead> 
            <tbody> 
              @foreach($roles as $key=>$value)
             <tr> 
              <td><a href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$key+1}}</font></font></a></td> 
              <td class="hidden-phone" id="td"><font style="vertical-align: inherit;">{{$value->name}}</font></td>                 
              <td>
                <input type="checkbox" onchange="change(this,{{$value->id}})" class="switch_1" @if($value->status==0) checked @endif>
              </td> 
              <td> 
                <table>
                  <tr>
                    <td><a href="/adminauth/{{$value->id}}" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-lock"></span></a></td>
                    <td>&nbsp;&nbsp;</td>
                    <td>
                      <form action="/adminroles/{{$value->id}}" method="post">
                      {{method_field('DELETE')}}
                      {{csrf_field()}}
                        <button type="submit" class="btn btn-danger btn-xs">
                          <i class="fa fa-trash-o"></i>
                        </button>                  
                      </form>
                    </td>
                  </tr>
                </table>           
              </td> 
             </tr>    
             @endforeach
             
             
            </tbody> 
           </table> 
           
              {{$roles->appends($k)->render()}}

          <script type='text/javascript'>
              //会员状态切换
              function change(obj,id){
                // ajax切换状态            
                //查看开关状态 checked/undefined
                bool = $(obj).attr('checked');
                //取消选中，即原状态为0，设置修改后的值为1
                //选中，即原状态为1，设置修改后的值为0
                status = bool?1:0;  
                // alert(status);           
                //ajax请求函数修改数据               
                $.get('/changestatus',{table:'role',id:id,status:status},function(data){
                  $(obj).attr('checked',!$(obj).attr('checked'));
                  alert(data);
                });
              }
          </script>
           
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
    <script src="/static/admin/js/bootstrap-switch.js"></script>
    <script src="/static/admin/js/jquery-ui-1.9.2.custom.min.js"></script>

    <!--common script for all pages-->
    <script src="/static/admin/js/common-scripts.js"></script>
    <script type="text/javascript" src="/static/admin/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="/static/admin/js/gritter-conf.js"></script>

  </script>
  <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });     
            
        });
        
        
        // function myNavFunction(id) {
        //     $("#date-popover").hide();
        //     var nav = $("#" + id).data("navigation");
        //     var to = $("#" + id).data("to");
        //     console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        // }
    </script>
  </body>
</html>
