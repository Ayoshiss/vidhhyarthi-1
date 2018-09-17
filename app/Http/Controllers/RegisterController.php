<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
class RegisterController extends Controller
{
  public function create(){
    return view('register');
  }
public function store(){
    $this->validate(request(),[
      'email'=>'required|email|max:255|min:4',
      'password'=>'required|min:8',
      'password2'=>'required|min:8',
      'isstudent'=>'required',

    ]);

    $user=User::create(request(['email','password','isstudent']));

    return redirect()->route('getloginpage');
}
}
