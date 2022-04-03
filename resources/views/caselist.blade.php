@extends('app')

@section('title', 'Case List')

@section('page title')
    CASE  INDIVIDUAL <a href="{{url('/new-case')}}"><i></i> <button class="btn btn-info btn-sm btn-flat">Add New</button></a>
@stop

@section('breadcrumb')
    <li><a href="{{url()}}/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Tables</a></li>
    <li class="active">Simple</li>
@stop

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                @if (isset($message))
                    <div class="alert alert-success" role="alert">{{$message or ''}}</div>
                @endif
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Applicants with Case</h3>
                </div><!-- /.box-header -->
                <br/>
                <div class="box-body" >
                  <div class="table-responsive" style="overflow:scroll; padding:10px;">
                     <table class="table table-bordered" style="width:1300px;font-size:12px" >
                        <tr>
                        <th>#</th>
						<th>Status</th>
                        <th>File_Date</th>
						<th>Applicant</th>
                       <th>Passport</th>
                        <th style="width:250px">Complain</th>
						 <th style="width:200px">Remarks</th>
                        <th>Employer</th>
						<th>Agent</th>   
						<th>Country</th>
                        <th>Date Deployed</th>
                        
                        </tr>
						 @foreach($casefiles as $casefile)
						 <tr>   
							
							<td><a href="{{url()}}/review/{{$casefile->id}}">
							<button class="btn btn-default btn-flat btn-sm"> 
							Review</button></a></td>
							
							<td>
								@if ($casefile->casestatus_id === 1)
									<h4><span class="label label-primary"> {{$casefile->casestatus['case_status']}}</span></h4>
								@elseif ($casefile->casestatus_id === 2)
									<h4><span class="label label-warning"> {{$casefile->casestatus['case_status']}}</span></h4>
								@elseif ($casefile->casestatus_id === 3)
									<h4><span class="label label-success"> {{$casefile->casestatus['case_status']}}</span></h4>
								@endif	
							</td>

							<td>{{date("d M Y",strtotime($casefile->file_date))}}</td> 
							<td><b>{{$casefile->fname}} {{$casefile->lname}}</b> <span class="label label-default">{{$casefile->Agency->agency_name}}</span></td> 
							<td>{{$casefile->passport}}</td>
							<td>
							    <div style="overflow-y:auto;height:50px">
									@foreach(json_decode($casefile->complain) as $complain)
									<div class="complainvalue">*{{$complain}}</div>
									@endforeach
								</div>	
							</td>
							<td style="color:red">{{$casefile->case_remarks or 'default'}}</td>
							<td>{{$casefile->employer['employer_name']}}</td>
							<td>{{$casefile->agent['agent_fname'] or ''}} {{$casefile->agent['agent_lname'] or ''}}</td>
							<td>{{$casefile->country_deployed}}</td>
							<td>{{date("d M Y",strtotime($casefile->date_deployed))}}</td>
						</tr>	
						@endforeach 
                    </table>
					@if (count($casefiles) === 0)
						<h5>-- No Records Found --</h5>
					@endif
                </div><!-- /.End Table Responsive -->
            </div><!-- /.box-body -->
            <?php 
	            echo $casefiles->render(); 
	        ?>
        </div><!-- /.box -->
    </section><!-- /.content -->
   
@stop




