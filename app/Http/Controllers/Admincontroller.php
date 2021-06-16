<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class Admincontroller extends Controller
{
    public function addadmin(Request $req){
        $data = new Admin;

        $data->name = $req->name;
        $data->username = $req->uname; 
        $data->DOB = $req->DOB; 
        $data->email = $req->email;
        $data->telephone = $req->telephone; 
        $data->NIC = $req->NIC; 
        $data->gender = $req->gender; 
        $data->password = $req->pass;

        $data->save();
        return redirect('admin'); 
    }
    public function getdata(){
        $data = Admin::all();
        return view('fetchdata',['data' => $data]);
    }
}
