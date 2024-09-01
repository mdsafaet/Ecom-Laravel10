<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon as SupportCarbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


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


    //Login //

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

        else{
         
            $email = $request->email;
            $password = $request->password ; 

            $fatch_employee = DB::table('user_admins')->where('email',$email)->first();
        
           if ($fatch_employee){
            if($fatch_employee->is_active === 1){
                $verify_password =Hash::check($password,$fatch_employee->password);
                   
                if($verify_password === true){
                    
                   $accessToken =  md5(Str::random(120));
                   $tiemlimit = Carbon::now()->addHours(24);
                    DB::table('user_admin_login_sessions')->insert([
                        'sl'=>$fatch_employee->sl,
                        'accestoken'=>$accessToken,
                        'timelimit'=>$tiemlimit,
                        'created_at' => Carbon::now()
                    ]);

                   $payload =[
                      'name' =>  $fatch_employee->name,
                      'email' => $fatch_employee->email,
                      'sl' =>$fatch_employee->sl,
                      'role' => $fatch_employee->role,
                   ];

                   Cache::put($accessToken,$payload,$tiemlimit);
                   Session::put($accessToken);

                   if($fatch_employee->role === 'user'){
                    return redirect()->route('user.dashboard');
                   }else{
                    return redirect()->route('admin.dashboard');
                   }
                }
                else{
                   return redirect()->back()
                   ->withErrors('Password did not match');
                }
            }else{
                return redirect()->back()
                ->withErrors('You are not allowed to access');

            }

           }else{
            return redirect()->back()
            ->withErrors('User is not registered ');
           }

        }
    }
      



}
