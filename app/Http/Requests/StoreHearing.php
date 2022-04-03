<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreHearing extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		if(session('account_id') == Request::input('agency_id'))
			return true;
		else
			return false;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
	        'case_hearing_title' => 'required|min:2',
	        'hearing_date' => 'required|date',
	        'hearing_notification' => 'date',
		];
	}

}
