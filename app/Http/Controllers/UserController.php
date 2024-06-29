<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show(){
        $users=DB::table('users') ->get();
        return view('allusers',['data'=>$users]);
    }
    public function singleUser(string $id){
        $user=DB::table('users')->where('id',$id)->get();
        return view('singleuser',['data'=>$user]);
    }

    public function deleteUser(string $id){
        $user=DB::table('users')->where('id',$id)->delete();
        //id data is deleted then $user=true else false
        if($user){
            return redirect()->route('home');

        }
    }

    public function addUser(Request $req){
        $user=DB::table('users')->insert([
            'name'=>$req->username,
            'email'=>$req->useremail,
            'age'=>$req->userage,
            'city'=>$req->usercity,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        if($user){
            if($user){
                return redirect()->route('home');
    
            }
            // echo"<h1>Data Successfully Added</h1>"; 
               }
            else{
                echo"<h1>Data Not Added</h1>";
            }
    }

    public function updatePage(string $id){
        $user=DB::table('users')->find($id);
        return view('updateuser',['data'=>$user]);
    }
    public function updateUser(Request $req,string $id){
          $user=DB::table('users')->where('id',$id)
                                  ->update([ 'name'=>$req->username,
                                  'email'=>$req->useremail,
                                  'age'=>$req->userage,
                                  'city'=>$req->usercity,
                                  'created_at'=>now(),
                                  'updated_at'=>now()]);

                                  if($user){
                                    if($user){
                                        return redirect()->route('home');
                            
                                    }
                                    // echo"<h1>Data Successfully Updated</h1>"; 
                                       }
                                    else{
                                        echo"<h1>Data Not Updated</h1>";
                                    }
    }
}
 