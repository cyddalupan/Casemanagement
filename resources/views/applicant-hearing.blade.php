@extends('app')

@section('title', 'Applicant Hearing')

@section('page title')
    Applicant Hearing
@stop

@section('breadcrumb')
    <li><a href="{{url()}}/case-list/hit"><i class="glyphicon glyphicon-fire"></i> Case List</a></li>
    <li class="active">Applicant Hearing</li>
@stop

@section('content')
	@if ($errors->has())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				 {{$error}}<br>        
			@endforeach
		</div>
	@endif

	@if(null !== session('message'))
	<div class="alert alert-success" role="alert"><h4>{{session('message')}}</h4></div>
	@endif

	<form action="{{url()}}/new-hearing/{{$applicant->id}}" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="applicant_id" value="{{$applicant->id}}">
		<input type="hidden" name="agency_id" value="{{$applicant->agency_id}}">
		<input type="hidden" name="hearing_id" value="{{$hearing->id or ''}}">
        <div class="modal-header">
            <h4 class="modal-title text-capitalize"><i class="fa fa-edit-o"></i> {{$applicant->fname}} {{$applicant->mname}} {{$applicant->lname}} </h4>
        </div>
        <br>
		<ul class="nav nav-tabs">
			<li><a href="{{url()}}/review/{{$applicant->id}}">Profile</a></li>
			<li class="active"><a data-toggle="tab">Hearing</a></li>
		</ul>
		<!-- /.Start of hearing -->
		<div class="tab-pane" id="tab2-{{$applicant->id}}">
			<div style="clear:both;height:15px"></div>	
			<div class="col-sm-10">	
				 <div class="form-group">
					<label>Hearing Title/Case</label>
						<input type="text" class="form-control"  name="case_hearing_title" value="{{$hearing->case_hearing_title or ''}}" />
				 </div>
			</div>
		 
			<div style="clear:both;height:3px"></div>	
			 <div class="col-sm-5">	
				<div class="form-group">
	                    <label for="exampleInputPassword1">Hearing Status</label>
	                      <select class="form-control" name="hearing_status">
							<option value='FOR HEARING' @if(isset($hearing) && $hearing->hearing_status == 'FOR HEARING') selected @endif><b>FOR HEARING</b></option>
							<option value='FOR FOLLOW UP' @if(isset($hearing) && $hearing->hearing_status == 'FOR FOLLOW UP') selected @endif><b>FOR FOLLOW UP</b></option>
							<option value='CLOSED' @if(isset($hearing) && $hearing->hearing_status == 'CLOSED') selected @endif><b>CLOSED</b></option>
	                    </select>
				</div>
			</div>
			<div class="col-sm-5">	
				 <div class="form-group">
					<label>Hearing Date</label>
					<div class="input-group">
						<div class="input-group-addon">
						<i class="fa fa-calendar"></i>
						</div>
						<input type="date" class="form-control"  name="hearing_date" value="{{$hearing->hearing_date or ''}}" />
					</div><!-- /.input group -->
				 </div>
			</div>
			<div style="clear:both;height:3px"></div>	
				

			<div class="col-sm-5">	
				 <div class="form-group">
					<label>Notification Date</label>
					<div class="input-group">
						<div class="input-group-addon">
						<i class="fa fa-calendar"></i>
						</div>
						<input type="date" class="form-control"  name="hearing_notification" value="{{$hearing->hearing_notification or ''}}" />
					</div><!-- /.input group -->
				 </div>
			 </div>						 
		 
			<div style="clear:both;height:3px"></div>	
			<div style="clear:both;height:5px"></div>
			<div class="form-group">
				<span>Action:</span>
				<textarea name="hearing_action" id="hearing_action" class="form-control" placeholder="Action" style="height: 120px;">{{$hearing->hearing_action or ''}}</textarea>
			</div>
			<div style="clear:both;height:5px"></div>
			<div class="form-group">
				<span>Hearing Remakrs:</span>
				<textarea name="hearing_remarks" id="hearing_remarks" class="form-control" placeholder="Hearing Remakrs" style="height: 120px;">{{$hearing->hearing_remarks or ''}}</textarea>
			</div>
		</div>
		<button type="submit" class="btn btn-primary pull-right"> Save </button> 
		
		<!-- /.End of hearing -->	
	</form>

	<div class="clearfix"></div>
	<hr>

	@if (count($applicant->case_hearing) > 0)
	<div class="panel panel-default">
	<!-- Default panel contents -->
	<div class="panel-heading">Cases</div>
		<!-- Table -->
		<table class="table">
			<tr>
				<th>
				</th>
				<th>
					Title
				</th>
				<th>
					Action
				</th>
				<th>
					Status
				</th>
				<th>
					Hearing Date
				</th>
				<th>
					Notification Date
				</th>
				<th>
					Remarks
				</th>
				@if(session('account_id') == $applicant->agency_id)
				<th>
				</th>
				@endif
			</tr>
			@foreach ($applicant->case_hearing as $per_hearing)
			<tr>
				<td>
					<a href="{{url()}}/applicant-edit-hearing/{{$applicant->id}}/{{$per_hearing->id}}">Edit</a>
				</td>
				<td>
					{{$per_hearing->case_hearing_title}}
				</td>
				<td>
					{{$per_hearing->hearing_action}}
				</td>
				<td>
					{{$per_hearing->hearing_status}}
				</td>
				<td>
					{{$per_hearing->hearing_date}}
				</td>
				<td>
					{{$per_hearing->hearing_notification}}
				</td>
				<td>
					{{$per_hearing->hearing_remarks}}
				</td>
				@if(session('account_id') == $applicant->agency_id)
				<td>
					<a class="text-danger" href="{{url()}}/delete-hearing/{{$applicant->id}}/{{$per_hearing->id}}" onClick="if(!confirm('Are you sure you want to Delete?')){return false;}">Delete</a>
				</td>
				@endif
			</tr>
			@endforeach
		</table>
	</div>
	@else
		<h3>-- No Hearing --</h3>
	@endif

@stop
