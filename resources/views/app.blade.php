<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Case Management -- @yield('title')</title>
        <!-- bootstrap 3.0.2 -->
        <link href="{{url()}}/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url()}}/node_modules/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="{{url()}}/node_modules/font-awesome-svg/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="{{url()}}/css/app.css" rel="stylesheet" type="text/css" />
    </head>
    <body class="container-fluid">
        <div class="header row">
            <div class="header-logo col-md-2 text-center">
                Cases
            </div>
            <div class="col-md-8"></div>
            <div class="icons col-md-2">
                <a class="user pull-right" href="#">
                    <i class="glyphicon glyphicon-user"></i>
                    <span><i class="caret"></i></span>
                </a>
                <i class="settings pull-right fa fa-tasks"></i>
            </div>
        </div>

        <div class="body row">
            <div class="sidebar col-md-2">
                <div class="list-group">
                    <a href="{{str_replace('-mincode-','/',session('return_url'))}}" class="list-group-item">
                        <!-- Sidebar user panel -->
                        <div class="user-panel">
                            <div class="pull-left image">
                            </div>
                            <div class="pull-left info">
                                <i class="fa fa-circle text-success"></i> <small>Online - BACK TO SYSTEM</small>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                    <a class="list-group-item">
                        <!-- search form -->
                        <form class="navbar-search pull-right" method="post" action="shipments.php">
                            <div class="input-group">
                                <div class="input-group">
                                    <input type="text"  class="form-control"  name="search" placeholder="Search..." />
                                    <span class="input-group-addon" id="basic-addon1">
                                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                    </span>
                                </div>
                            </div>
                        </form>
                        <div class="clearfix"></div>
                    </a>
                    <a href="{{url('/')}}" class="list-group-item">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                    <a href="{{url('/case-list/hit')}}" class="list-group-item"> 
                        <i class="glyphicon glyphicon-fire"></i> <span>Hit Applicants</span>
                    </a>
                    <a href="#case-sidebar-collapse" data-toggle="collapse" class="list-group-item">
                        <i class="glyphicon glyphicon-briefcase"></i>
                        <span>Cases</span>
                        <span class="caret pull-right"></span>
                    </a>
                    <div class="collapse" id="case-sidebar-collapse">
                        <a href="{{url('/new-case')}}" class="list-group-item">
                            <span class="glyphicon glyphicon-plus"></span> Add New
                        </a>
                        <a href="{{url('/case-list/all')}}" class="list-group-item">
                            <i class="fa fa-angle-double-right"></i> All Cases
                        </a>
                    </div>
                    <a href="#hearing-sidebar-collapse" data-toggle="collapse" class="list-group-item">
                        <i class="fa fa-bars"></i>
                        <span>Hearing</span>
                        <span class="caret pull-right"></span>  
                    </a>
                    <div class="collapse" id="hearing-sidebar-collapse">
                        <a href="{{url('/active-hearing')}}" class="list-group-item">
                            <i class="fa fa-angle-double-right"></i> Active Hearing 
                            <small class="badge pull-right bg-red">12</small>
                        </a>
                        <a href="{{url('/closed-hearing')}}" class="list-group-item">
                            <i class="fa fa-angle-double-right"></i> Closed Hearing
                        </a>
                    </div>
                    <a href="{{url('/agent-list')}}" class="list-group-item"> 
                        <i class="fa fa-list"></i> <span>Agents</span>
                    </a>
                    <a href="{{url('/employer')}}" class="list-group-item"> 
                        <i class="fa fa-list"></i> <span>Employers</span>
                    </a>
                </div>
            </div>
            <div class="content col-md-10">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @yield('page title')
                    </h1>
                    <ol class="breadcrumb">
                        @yield('breadcrumb')
                    </ol>
                </section>
                @yield('content')
            </div>
        </div>
        <!-- jQuery 2.0.2 -->
        <script src="{{url()}}/jquery-2.1.4.min.js"></script>
        <!-- Bootstrap -->
        <script src="{{url()}}/node_modules/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="{{url()}}/js/all.js" type="text/javascript"></script>
    </body>
</html>