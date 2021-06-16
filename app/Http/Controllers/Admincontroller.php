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
    public function delete($id){
        $data = Admin::find($id);
        $data->delete();

        return redirect('fetch');
    }

    public function edit($id){
        $data = Admin::find($id);

        return view('update', ['data'=> $data]);
    }

    public function update(Request $req){
        $data = Admin::find($req->id);

        $data->name = $req->name;
        $data->username = $req->uname; 
        $data->DOB = $req->DOB; 
        $data->email = $req->email;
        $data->telephone = $req->telephone; 
        $data->NIC = $req->NIC; 
        $data->gender = $req->gender; 
        $data->password = $req->pass;

        $data->save();
        return redirect('fetch');
    }
}
