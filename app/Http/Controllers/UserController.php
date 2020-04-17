<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    //
	public function index(){
		$user = Auth::user();
		return view('user.index',compact('user'));
	}

    public function update_email(Request $request){
    	$validator = Validator::make($request->all(),[
    		'email' => 'unique'
    	]);

    	if($validator->fails()){
    		return response()->json(['errors'=>$validator->getMessageBag()->toArray()]);
    	}

    	$user = Auth::user();
    	$user->email = $request->email;
    	$user->save();
    	return response()->json(['email'=>$user->email]);
    }
}
