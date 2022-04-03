@extends('app')

@section('title', 'Active Hearing')

@section('page title')
    HEARING LIST 
@stop

@section('breadcrumb')
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Tables</a></li>
    <li class="active">Simple</li>
@stop

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                       
                        <div class="container-fluid" id="target" style="display: none">
                            <form action=""  method="post"> 
                                 
                            </form>        
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body" >
                        <div class="table-responsive" style="overflow:scroll; padding:10px;">
                             <table class="table table-bordered" id="ship" style="width:1050px" >
                                <tr>
                                <th >Action</th>
                                <th width="10">#</th>
                                <th>Status</th>
                                <th>Hearing Date</th>
                                <th>Notify Date</th>
                                <th>Name</th>
                                
                                <th>Passport</th>
                                <th>Action</th>
                                <th>Hearing Remarks</th>
                                
                                </tr>
                                
                                <td><a href="hearing.php?case_id=" onclick="popUp(this.href,'console',600,1200);return false;" target="newWin"> 
                                <button class="btn btn-default btn-sm">Review</button></a></td>      
                            </table>
                        </div><!-- /.End Table Responsive -->
                    </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div><!--box-footer-->
                </div><!-- /.box -->
            </div><!--col-md-12-->
        </div><!--row-->
    </section><!-- /.content -->
@stop