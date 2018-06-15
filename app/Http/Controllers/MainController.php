<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkLogin(Request $request)
    {
       $this->validate($request, [
           'email' => 'required|email',
           'password' => 'required|alphaNum|min:3'
       ]);

       $email = $request->get('email');
       $password = $request-> get('password');
     
       
       $user = User::where('email',$email)->where('password', $password)->get();
        
    //    $email = $request->input('email');
    //    $password = $request->input('password');
       
    //    $user = DB::table('users')->where(['email' => $email, 'password' => $password])->get();

        // print_r($user);
        
       if(count($user) > 0){
        $name = $user[0]['name'];
        $id = $user[0]['id'];
       // print_r($user[0]['name']) ;
        session()->put('name', $name);
        session()->put('id', $id);
         return redirect('/dashboard')->with('info', 'Login successfully');
       }
       else{
        return back()->with('info', 'Wrong Login Details');
       }
    }

    public function logout(){
      session()->flush();
      return redirect('/');
   }
}
