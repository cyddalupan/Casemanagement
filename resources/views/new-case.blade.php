@extends('app')

@section('title', 'New Case')

@section('page title')
    New Case <a href="{{url('/case-list')}}"><i></i> <button class="btn btn-info btn-sm btn-flat">View Cases</button></a>
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
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                     
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="insert-case" method="post">
                        <input type="hidden" class="form-control" value="BENCHSTONE ENTERPRISES INC" name="agency_name"/>
                        <div class="box-body">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <div style="clear:both;height:1px"></div>
                            <h3 STYLE="text-align:center;color:#6666CC">Applicant Information</h3>
                            <div style="clear:both;height:1px"></div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>File Date:</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="date" class="form-control"  name="file_date"/>
                                    </div><!-- /.input group -->
                                </div><!-- /.form group -->
                            </div>
                        
                             <div class="col-sm-3">
                               <div class="form-group">
                                    <label for="exampleInputPassword1">Case Status</label>
                                    <select class="form-control" name="case_status_id">
                                        @foreach ($casestatuses as $casestatus)
                                        <option value='{{$casestatus->status_id}}'><b>{{$casestatus->case_status}}</b></option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        
                             <div style="clear:both;height:1px"></div>
                             
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">File/Applicant No.</label>
                                    <input type="text" class="form-control" id="file_no" name="file_no" placeholder="File/Applicant No." required/>
                                </div>
                            </div>
                            
                                
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">First Name</label>
                                    <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required/>
                                </div>
                            </div>
                            
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Middle Name</label>
                                    <input type="text" class="form-control" id="mname" name="mname" placeholder="Middle Name" required/>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Last Name</label>
                                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required/>
                                </div>
                            </div>
                            
                            <div style="clear:both;height:1px"></div>
                            
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Contact Details</label>
                                    <input type="text" class="form-control" id="contact_num" name="contact_num" placeholder="Contact Details" required/>
                                </div>
                            </div>
                            
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Passport Number</label>
                                    <input type="text" class="form-control" id="passport" name="passport" placeholder="Passport Number" required/>
                                </div>
                            </div>
                            
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Date Deployed</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="date" class="form-control"  name="date_deployed"/>
                                    </div><!-- /.input group -->
                                </div><!-- /.form group -->
                            </div>
                            
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Deployed Country</label>
                                    <input type="text" class="form-control" id="country_deployed" name="country_deployed" placeholder="Deployed Country" required/>
                                </div>
                            </div>

                            <div style="clear:both;height:1px"></div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Salary Deduction</label>
                                    <input type="text" class="form-control" id="salary" name="salary" placeholder="Salary Deduction" required/>
                                </div>
                            </div>
                            
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Employer</label>
                                    <select class="form-control" id="employer" name="employer_id" placeholder="Employer" required>
                                        @foreach ($employers as $employer)
                                        <option value='{{$employer->employer_id}}'><b>{{$employer->employer_name}}</b></option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
							
							  <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Agent</label>
                                    <select class="form-control" id="employer" name="agent_id" placeholder="Agents" required>
                                         <option value='0'><b>NO AGENT</b></option>
										@foreach ($agents as $agent)
                                        <option value='{{$agent->id}}'><b>{{$agent->agent_fname}} {{$agent->agent_lname}}</b></option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div style="clear:both;height:5px"></div>
                                <div style="clear:both;height:1px"></div>
                                    <h3 STYLE="text-align:center;color:#6666CC">Complaint / Concern of OFW</h3>
                                <div style="clear:both;height:1px"></div>
                            <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Complaint / Concern of OFW</label>   
                                <br>
                                @foreach ($complaints as $complaint)
                                <div class=" checkbox">
                                    <label>
                                        <input type="checkbox" name="complaints[]" value="{{$complaint->complaint_name}}">
                                        {{$complaint->complaint_name}}
                                    </label>
                                </div>
                                @endforeach
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">others/specify</label>
                                        <input type="text" class="form-control" id="employer" name="complain2" placeholder="others/specify" />
                                    </div>
                                </div>
                            </div>
                            <div style="clear:both;height:5px"></div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Case Remarks</label>
                                        <textarea class="form-control" rows="5" name="case_remarks" placeholder="Remarks..."></textarea>
                                    </div>
                                </div>
                            <div style="clear:both;height:3px"></div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary" name="newcase">Add Case</button>
                        </div>
                    </form>
                </div><!--box-primary-->
            </div><!--col-md-12-->
        </div><!--row -->
    </section><!-- /.content -->
@stop