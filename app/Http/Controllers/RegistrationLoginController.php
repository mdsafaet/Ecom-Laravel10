<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon as SupportCarbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegistrationLoginController extends Controller
{
    public function UserAdminRegistration(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:user_admins',
            'password' => 'required|min:6',
        ]);
        if ($validator->fails()) {

            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }
        else{
            $sl = IdGenerator::generate(['table' => 'user_admins','field'=>'sl', 'length' => 6, 'prefix' =>'safaet-']);

            $name = $request->name;
            $email = $request->email;
            $password = Hash::make($request->password); 

            DB::table('user_admins')->insert([
                'sl' => $sl,
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'role' => 'user',
                'is_active' => 1,
                'created_at' => Carbon::now(),
           
              
            ]);
            return redirect()->route('user.login')->with('success','Registration Successfully');

        
        }

    }

    public function LoginValidate (Request $request){

        $validator = Validator::make($request->all(), [
           
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if ($validator->fails()) {

            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

    }
      



}
