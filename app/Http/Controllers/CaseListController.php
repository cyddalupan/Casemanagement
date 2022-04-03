<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;

use App\Casestatus;
use App\Employer;
use App\Agent;
use App\Complaint;
use App\Case_file;
use App\Account;
use App\Case_hearing;

use App\Events\SendSmsEvent;

use App\Http\Requests\StoreHearing;
use App\Http\Requests\StoreApplicant;

class CaseListController extends Controller {

	/**
	 * Display a listing of the resource.
	 * show list type by $showType
	 * @return Response
	 */
	public function index($showType = 'all')
	{

		$message = session('message');
		$hit_ids = session('hit_ids');

		if($showType == 'hit' && isset($hit_ids)){
			$casefiles = Case_file::whereIn('id',$hit_ids)->paginate(15);
			$casefiles->setPath(url().'/case-list/hit');
		}else{
			$casefiles = Case_file::where('agency_id',session('account_id'))->paginate(15);
			$casefiles->setPath(url().'/case-list/all');
		}

		return view('caselist')
			->withMessage($message)
			->withCasefiles($casefiles);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function review($id)
	{
		$applicant = Case_file::find($id);
		$casestatuses = Casestatus::all();

		return view('review')
			->withCasestatuses($casestatuses)
			->withApplicant($applicant);
	}

	public function applicant_hearing($id)
	{
		$applicant = Case_file::find($id);
		$casestatuses = Casestatus::all();

		return view('applicant-hearing')
			->withCasestatuses($casestatuses)
			->withApplicant($applicant);
	}

	public function new_hearing(StoreHearing $request){

		//if add or edit
		if(Request::input('hearing_id') == '')
			$hearing = new Case_hearing;
		else	
			$hearing = Case_hearing::find(Request::input('hearing_id'));

		$hearing->case_file_id = Request::input('applicant_id');
		$hearing->case_hearing_title = Request::input('case_hearing_title');
		$hearing->hearing_status = Request::input('hearing_status');
		$hearing->hearing_date = Request::input('hearing_date');
		$hearing->hearing_notification = Request::input('hearing_notification');
		$hearing->hearing_action = Request::input('hearing_action');
		$hearing->hearing_remarks = Request::input('hearing_remarks');
		$hearing->save();

		return redirect('applicant-hearing/'.Request::input('applicant_id'))->with('message', 'Saved!');
	}

	public function applicant_edit_hearing($applicantId,$hearingId){
		$applicant = Case_file::find($applicantId);
		$hearing = Case_hearing::find($hearingId);
		$casestatuses = Casestatus::all();

		return view('applicant-hearing')
			->withCasestatuses($casestatuses)
			->withHearing($hearing)
			->withApplicant($applicant);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$casestatuses = Casestatus::all();
		$employers = Employer::all();
		$agents =Agent::all();
		$complaints = Complaint::all();

		return view('new-case')
			->withCasestatuses($casestatuses)
			->withEmployers($employers)
			->withAgents($agents)
			->withComplaints($complaints);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$request = Request::input();

		//add all complaints to array
		$complaintsArr = Request::input('complaints');
		//add other complaints to complaintsArr
		$complaintsArr[] = Request::input('complain2');

		$complaintsJson = json_encode($complaintsArr);

		$caseFile = new Case_file;
		$caseFile->agent_id = Request::input('agent_id');
		$caseFile->agency_id = 1;
		$caseFile->file_date = Request::input('file_date');
		$caseFile->id = Request::input('case_status_id');
		$caseFile->file_no = Request::input('file_no');
		$caseFile->fname = Request::input('fname');
		$caseFile->mname = Request::input('mname');
		$caseFile->lname = Request::input('lname');
		$caseFile->contact_num = Request::input('contact_num');
		$caseFile->passport = Request::input('passport');
		$caseFile->date_deployed = Request::input('date_deployed');
		$caseFile->country_deployed = Request::input('country_deployed');
		$caseFile->salary = Request::input('salary');
		$caseFile->employer_id = Request::input('employer_id');
		$caseFile->complain = $complaintsJson;
		$caseFile->case_remarks = Request::input('case_remarks');
		$caseFile->save();

		return redirect('case-list')->with('message', Request::input('fname').' '.Request::input('lname').'  Added');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(StoreApplicant $request)
	{

		$appl = Case_file::find(Request::input('applicant_id'));
		$appl->casestatus_id = Request::input('casestatus_id');
		$appl->file_date = Request::input('file_date');
		$appl->file_no = Request::input('file_no');
		$appl->fname = Request::input('fname');
		$appl->mname = Request::input('mname');
		$appl->lname = Request::input('lname');
		$appl->contact_num = Request::input('contact_num');
		$appl->passport = Request::input('passport');
		$appl->date_deployed = Request::input('date_deployed');
		$appl->country_deployed = Request::input('country_deployed');
		$appl->salary = Request::input('salary');
		$appl->save();

		return redirect('review/'.Request::input('applicant_id'));
	}

	public function trash_functions(){

		
		 
		//sms code, remove if sms is already working
		// $meesage = 'REMINDER! '.Request::input('fname').' '.Request::input('lname').' Hearing is on '.Request::input('hearing_date');
		// event(new SendSmsEvent('APIWF72T9DFKO','APIWF72T9DFKOWF72T','iWeb','09335844995',$meesage));
		// event(new SendSmsEvent('APIWF72T9DFKO','APIWF72T9DFKOWF72T','iWeb','09054949927',$meesage));
		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function delete_hearing($applicantId,$hearingId)
	{
		$applicant = Case_hearing::find($hearingId);
		$applicant->delete();	

		return redirect('applicant-hearing/'.$applicantId)->with('message', 'Deleted!');
	}

	public function delete_applicant($applicantId)
	{
		$applicant = Case_file::find($applicantId);
		$applicant->delete();	

		return redirect('case-list/hit')->with('message', 'Applicant Deleted!');
	}

}
