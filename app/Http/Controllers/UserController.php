<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
class UserController extends Controller
{
    //
function login(Request $req)
{
   $user = User::Where(['email'=>$req->email])->first();
 if(!$user || !Hash::check($req->password, $user->password))

 {
    return " Username or Password Incorrect";
 }
  else{
    $req->session()->put('user', $user);
    return redirect('/');
  }         
}



}
