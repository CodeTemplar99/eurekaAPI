<?php

namespace App\Http\Controllers\API\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class DetailsController extends Controller{
  public $successStatus = 200;
  /**
  * user details API
  */
  public function Userdetails(){
    $user =Auth::user();
    return response()->json(['success'=>$user],$this->successStatus);
  }
}

