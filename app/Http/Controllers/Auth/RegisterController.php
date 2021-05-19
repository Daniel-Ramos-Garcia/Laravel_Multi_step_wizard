<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class RegisterController extends Controller
{
    public function register()
    {
  
      return view('auth.register');
    }
  
    public function registerUser(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:tbusers',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);
        $UserFirstName = $request['firstname'];
        $UserLastName = $request['lastname'];
        $Useremail = $request['email'];
        $UserPasswordHash = Hash::make($request['password']);

        // DB::insert("INSERT INTO `tbusers`(`UserFirstName`, `UserLastName`, `email`, `UserPasswordHash`) VALUES ('$UserFirstName','$UserLastName','$Useremail','$UserPasswordHash')");
        // $listings = DB::select('SELECT * FROM `listing` ORDER BY `modified_date` DESC LIMIT 0,20');
        $id = DB::table('tbusers')->insertGetId(
            ['UserFirstName' => $UserFirstName, 'UserLastName' => $UserLastName, 'email' => $Useremail, 'UserPasswordHash' => $UserPasswordHash]
        );
        // echo $id;
        Session::put('userid', $id);
        // return;
        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);
  
        return redirect('wizard');
    }
}
