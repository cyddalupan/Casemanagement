@extends('app')

@section('title', 'Edit Applicant')

@section('page title')
    Edit Applicant
@stop

@section('breadcrumb')
    <li><a href="{{url()}}/case-list/hit"><i class="glyphicon glyphicon-fire"></i> Case List</a></li>
    <li class="active">Edit Applicant</li>
@stop

@section('content')

	@if ($errors->has())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				 {{$error}}<br>        
			@endforeach
		</div>
	@endif

	<form action="{{url()}}/edit-case/{{$applicant->id}}" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="applicant_id" value="{{$applicant->id}}">
		<input type="hidden" name="agency_id" value="{{$applicant->agency_id}}">
        <div class="modal-header">
            <h4 class="modal-title text-capitalize"><i class="fa fa-edit-o"></i> {{$applicant->fname}} {{$applicant->mname}} {{$applicant->lname}} </h4>
        </div>
        <br>
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab">Profile</a></li>
			<li><a href="{{url()}}/applicant-hearing/{{$applicant->id}}">Hearing</a></li>
		</ul>
		<div class="tab-content">
			<!-- /.Edit Profile Applicant -->
			<div class="tab-pane active" id="tab1-{{$applicant->id}}">
				<div style="clear:both;height:15px"></div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="exampleInputPassword1">Case Status</label>
							<select class="form-control" name="casestatus_id">
								@foreach ($casestatuses as $casestatus)
                                <option value='{{$casestatus->id}}'
                                	@if ($applicant->casestatus_id == $casestatus->id)
									    selected
									@endif
                                >
                                	<b>{{$casestatus->case_status}}</b>
                                </option>
                                @endforeach									
							</select>
						</div>
					</div>
					
					<div class="col-sm-4">
						<div class="form-group">
							<label for="exampleInputPassword1">Date File</label>
							<input type="date" class="form-control"  name="file_date" value="{{$applicant->file_date}}" />
						</div>
					</div>
					
					<div class="col-sm-4">
						<div class="form-group">
							<label for="exampleInputPassword1">File/Applicant No.</label>
							<input type="text" class="form-control"  name="file_no" value="{{$applicant->file_no}}" />
						</div>
					</div>
					<div style="clear:both;height:3px"></div>
			
					<div class="col-sm-4">
						<div class="form-group">
							<label for="exampleInputPassword1">First Name</label>
							<input type="text" class="form-control" name="fname" value="{{$applicant->fname}}" />
						</div>
					</div>
					
					<div class="col-sm-4">
						<div class="form-group">
							<label for="exampleInputPassword1">Middle Name</label>
							<input type="text" class="form-control"  name="mname" value="{{$applicant->mname}}" />
						</div>
					</div>										
					
					<div class="col-sm-4">
						<div class="form-group">
							<label for="exampleInputPassword1">Last Name</label>
							<input type="text" class="form-control"  name="lname" value="{{$applicant->lname}}" />
						</div>
					</div>
					<div style="clear:both;height:3px"></div>

					<div class="col-sm-4">
						<div class="form-group">
							<label for="exampleInputPassword1">Contact Details</label>
							<input type="text" class="form-control"  name="contact_num" value="{{$applicant->contact_num}}" />
						</div>
					</div>
					
					<div class="col-sm-4">
						<div class="form-group">
							<label for="exampleInputPassword1">Passport</label>
							<input type="text" class="form-control"  name="passport" value="{{$applicant->passport}}" />
						</div>
					</div>										
					
					<div class="col-sm-4">
						<div class="form-group">
							<label for="exampleInputPassword1">Date Deployed</label>
							<input type="date" class="form-control"  name="date_deployed" value="{{$applicant->date_deployed}}" />
						</div>
					</div>
					<div style="clear:both;height:3px"></div>	

					<div class="col-sm-5">
						<div class="form-group">
							<label for="exampleInputPassword1">Country Deployed</label>
							<input type="text" class="form-control"  name="country_deployed" value="{{$applicant->country_deployed}}" />
						</div>
					</div>
					
					<div class="col-sm-5">
						<div class="form-group">
							<label for="exampleInputPassword1">Salary</label>
							<input type="text" class="form-control"  name="salary" value="{{$applicant->salary}}" />
						</div>
					</div>										
					
					<div style="clear:both;height:3px"></div>
					<div class="col-sm-5">
						<div class="form-group">
							<label for="exampleInputPassword1">Employer</label>
							<input type="text" class="form-control"  name="employer_id" value="{{$applicant->employer['employer_name']}}" disabled/>
						</div>
					</div>
				
					<div class="col-sm-5">
						<div class="form-group">
							<label for="exampleInputPassword1">Agency</label>
							<input type="text" class="form-control"  name="agency_id" value="{{$applicant->Agency->agency_name}}"  disabled/>
						</div>
					</div>
				<div style="clear:both;height:3px"></div>	
				<div class="clearfix visible-xs-block"></div>							
			</div>
			<!-- /end Profile Applicant -->	
		</div>
		<br><br>
		<button type="submit" class="btn btn-primary pull-right"> Save </button>
		@if(session('account_id') == $applicant->agency_id)
		<h3><a href="{{url()}}/delete-applicant/{{$applicant->id}}" class="text-danger" onClick="if(!confirm('Are you sure you want to Delete?')){return false;}">Delete Applicant</a></h3> 
		@endif
    </form>	
    <br><br><br><br>
@stop




