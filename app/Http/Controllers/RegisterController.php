<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use View;
use Session;
use Redirect;
class RegisterController extends Controller
{
	public function register(Request $request){
		return View::make('User.register');
	}

	public function createaccount(Request $request){
		if(\Request::isMethod('post')){

			$usr=new User();

			$usr->fname=$request->fname;
			$usr->lname=$request->lname;
			$usr->email=$request->email;
			$usr->mobile=$request->mobile;
			$usr->dob=date('Y-m-d',strtotime($request->dob));
			//$sdt=new DateTime($usr->dob);
			//$dt=new DateTime();
			//$years=$dt->diff($sdt);
			//$usr->age=$years;
			$usr->location=$request->location;
			$usr->status=1;
			if($usr->save()){
				Session::flash('message','User Added Successfully');
				return redirect('users');
			}
		}
	}
}
?>