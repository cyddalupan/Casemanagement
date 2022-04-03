<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Case_file;
use App\Employer;
use App\Agency;
use App\Account;

class ApiController extends Controller {

	/**
	 * Hit Applicant
	 * Get Applicant Info From Json
	 * Hit Name, Passport number and contact number
	 * Test if applicant is wrong
	 */
	public function hitApplicants($url_data){
		$data = json_decode($url_data);

		$hitStatus = 'cleared';
		$apireturn['hit_id'] = '';
		$apireturn['hearing_date'] = '';


		//comparing hit
		$fullname = Case_file::where('fname', $data->fname)->where('lname', $data->lname)->where('casestatus_id','!=', 3)->count();
		if($fullname > 0){
			$hitStatus = 'hit';
			$applicant = Case_file::where('fname', $data->fname)->where('lname', $data->lname)->get();
			$apireturn['hit_id'] = $applicant[0]->id;
		}

		if($data->passport_number != ''){
			$passportNumber = Case_file::where('passport', $data->passport_number)->where('casestatus_id','!=', 3)->count();
			if($passportNumber > 0){
				$hitStatus = 'hit';
				$applicant = Case_file::where('passport', $data->passport_number)->get();
				$apireturn['hit_id'] = $applicant[0]->id;
			}
		}
		if($data->contacts != ''){
			$contactNumber = Case_file::where('contact_num', $data->contacts)->where('casestatus_id','!=', 3)->count();
			if($contactNumber > 0){
				$hitStatus = 'hit';
				$applicant = Case_file::where('contact_num', $data->contacts)->get();
				$apireturn['hit_id'] = $applicant[0]->id;
			}
		}


		if(($apireturn['hit_id'] != '') && isset($applicant[0]->case_hearing->hearing_date)){
			$apireturn['hearing_date'] = $applicant[0]->case_hearing->hearing_date;
		}

		$apireturn['hit_status'] = $hitStatus;

		echo json_encode($apireturn);
	}

	/**
	 * Confirm User login by
	 * Getting Email From Json
	 * Compare Email Get User from DB
	 * Convert DB name to Hash
	 * Compare Hash
	 * Save account ID, and Hits Id to Session
	 */
	public function login($url_data){
		$data = json_decode($url_data);
		if(Account::where('email', $data->email)->count()){
			$account = Account::where('email', $data->email)->get();
			$account_key = md5(date('YmdH').$account[0]->name);
			if($data->auth == $account_key){
				if(isset($data->hit_ids))
					session(['hit_ids' => $data->hit_ids]);
				session(['account_id' => $account[0]->id]);
				session(['return_url' => $data->return_url]);
				return redirect(str_replace('-mincode-','/',$data->path));
			}else{
				return redirect('error')->with('message', 'Authentication Error, Make Sure Username is Sycs from Our DB');
			}
		}else{
			return redirect('error')->with('message', 'Email does not Exist. invalid User');
		}
	}

}
