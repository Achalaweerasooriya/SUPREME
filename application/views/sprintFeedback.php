
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script language=JavaScript>
        function reload(form){
        var val=form.project.options[form.project.options.selectedIndex].value;

        self.location='sprintFeedback.php?project=' + val ;
        }
    </script>

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>_include/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>_include/css/sb-admin.css" rel="stylesheet" type="text/css">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>_include/css/plugins/morris.css" rel="stylesheet" type="text/css">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>_include/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!--<link href=”views/admin/css/datepicker.css” rel=”stylesheet”>-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--<script language="JavaScript" type="text/javascript" src=”views/admin/js/jquery.js”></script>-->
    <!--<script language="JavaScript" type="text/javascript" src=”views/admin/js/bootstrap-datepicker.js”></script>-->
    <!--<script language="JavaScript" type="text/javascript" src=”views/admin/js/bootstrap.js”></script>-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> User<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="PM.html"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                    <li>
                        <a href="projects.html"><i class="fa fa-fw fa-bar-chart-o"></i> Projects</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-table"></i> Schedule</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-edit"></i>Reports</a></li>
                
                    <li>
                        <a href="#"><i class="fa fa-fw fa-wrench"></i> Calander</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i>Company Profile</a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="createSprint"><i class="fa fa-fw fa-bar-chart-o"></i> Create Sprint</a>
                    </li>
<!--                    <li>
                        <a href="Createsprint.html"><i class="fa fa-fw fa-table"></i> Create Team</a>
                    </li>
               -->
                </ul>
                
                
            </div>
            
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            SUPREME <small>Complete Agile Project Management Solution  </small>
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        
                    </div>
                </div>
                <!-- /.row -->

                
                <!-- /.row -->
                    <div class="col-sm-4">
                      <div class="panel panel-primary">
                          <div class="panel-heading">Sprint Feedback Form</div>
                            <div class="panel-body">                                                              
                                <form role="form" method="POST" action="add_Feedback">
                                  <?php echo form_open('add_Feedback');?>                                                                                  
                                  <?php 
                                  echo "";
                                  echo $message;
                                  echo "";
                                  ?>   
                                <div class="form-group">
                                     <label>Project Name</label><br/>
                                           
                                        <?php  
                                           
                                                $pro = array("Select Project");
                                                foreach($dropdown as $pr){
                                                    $pro[$pr->project_id]=$pr->name;
                                                }
                                        echo form_dropdown('project', $pro);
                                                ?>
                                      <font color="#ff0000"><?php echo form_error('project'); ?></font>
                                                
                                   <div class="form-group">
                                     <label> Sprint Name</label><br/>
                                           
                                        <?php  
                                           
                                                $sp = array("Select Sprint");
                                                foreach($Sdropdown as $s){
                                                    $sp[$s->sprint_id]=$s->name;
                                                }
                                        echo form_dropdown('sprint', $sp);
                                                ?>
                                      <font color="#ff0000"><?php echo form_error('sprint'); ?></font>
                                </div>
                                     <div class="form-group">   
                                    <label>Work load completed</label><br/>
                                  <input type="checkbox" name="complete" value="0-25%">0-25%</input>
                                  <input type="checkbox" name="complete" value="25-50%">25-50%</input>
                                  <input type="checkbox" name="complete" value="50-75%">50-75%</input>
                                  <input type="checkbox" name="complete" value="75-100%">75-100%</input>
                                  

                                    <font color="#ff0000"><?php echo form_error('complete'); ?></font>
                                </div>
                               
                                <div class="form-group">
                                    <label>Comments</label><br/>
                                    <?php echo form_textarea('comments', set_value('comments','')); ?>
                                        <font color="#ff0000"><?php echo form_error('comments'); ?></font>
                                </div>
                               
                             
                            </div>                                                                                                                               
                       </div>                               
                                <?php                                     
                                echo form_submit('create','Create');
                                echo form_reset('reset','Reset');                             
                                echo form_close();                                
                                ?>
                            </form>
                                
                                
                          </div>
                        </div>
                    </div>
                <div class="row">
                  <!-- /#page-wrapper -->
                  <div>
                  
                </div>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>_include/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>_include/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url();?>_include/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url();?>_include/js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url();?>_include/js/plugins/morris/morris-data.js"></script>

</body>

</html>
