<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Costumer;

class CostumerController extends Controller
{
	public function showForm (Request $request){
    	return view ('costumerRegistrationForm');
    }

    public function addCostumer (Request $request){
        $costumer = new Costumer;
        $costumer->userName = $request->userName;
        $costumer->passWord = $request->passWord;
        $costumer->save();
        return redirect('/outblank'); 
    }

     public function processRegistration (Request $request){
    	$costumers = Costumer::all();
        return view('outblank', compact('costumers'));
    }




     public function login() {
    // Getting all post data
    $data = Input::all();
    // Applying validation rules.
    $rules = array(
		'userName' => 'required|userName',
		'passWord' => 'required|min:6',
	     );
    $validator = Validator::make($data, $rules);
    if ($validator->fails()){
      // If validation falis redirect back to login.
      return Redirect::to('/login')->withInput(Input::except('passWord'))->withErrors($validator);
    }
    else {
      $userdata = array(
		    'userName' => Input::get('userName'),
		    'passWord' => Input::get('passWord')
		  );
      // doing login.
      if (Auth::validate($userdata)) {
        if (Auth::attempt($userdata)) {
          return Redirect::intended('/');
        }
      } 
      else {
        // if any error send back with message.
        Session::flash('error', 'Something went wrong'); 
        return Redirect::to('login');
      }
    }
  }
}
