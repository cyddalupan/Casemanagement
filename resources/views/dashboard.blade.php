@extends('app')

@section('title', 'Dashboard')

@section('page title')
    Dashboard
    <small>Control panel</small>
@stop

@section('breadcrumb')
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Tables</a></li>
    <li class="active">Simple</li>
@stop

@section('content')

    <!-- Main content -->
    <section class="content">

        <!-- Small boxes (Stat box) -->
        <div class="row">

            <div class="col-lg-3 col-xs-6">
                <div class="panel panel-info">
                    <div class="panel-body bg-info">
                        NEW CASES
                    </div>
                    <div class="panel-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </div>
            </div><!-- ./col -->
            
            <div class="col-lg-3 col-xs-6">
                <div class="panel panel-success">
                    <div class="panel-body bg-success">
                        ON PROCESS CASE
                    </div>
                    <div class="panel-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </div>
            </div><!-- ./col -->
            
            <div class="col-lg-3 col-xs-6">
                <div class="panel panel-warning">
                    <div class="panel-body bg-warning">
                        FOR HEARING CASE
                    </div>
                    <div class="panel-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </div>
            </div><!-- ./col -->
            
            <div class="col-lg-3 col-xs-6">
                <div class="panel panel-danger">
                    <div class="panel-body bg-danger">
                        CLOSDED CASE
                    </div>
                    <div class="panel-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </div>
            </div><!-- ./col -->
            
        </div><!-- /.row -->
        
        <div style="clear:both;height:30px  "></div>
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">          
              <div class="box">
                          <div class="box-header">
                        <h3 class="box-title">Priority Cases</h3>
                    </div><!-- /.box-header -->
              <table class="table table-striped">
                            <tr>
                            </tr>
                        </table>
            </div><!-- /.col -->
    </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
        </div><!-- /.row (main row) -->
    </section><!-- /.content -->
@stop