<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterModel;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterMail;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crudapp.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation applied
        $request->validate([
            "name"=>"required",
            "email"=>"required",
            "pass"=>"required",
            "cpass"=>"required",
            "phone"=>"required|min:10|max:10",
            "address"=>"required"
        ]); 
        
        // insert data in contact table
        date_default_timezone_set("Asia/calcutta");
        $data=array(
         "name"=>$request->name,
         "email"=>$request->email,
         "password"=>$request->pass,
         "mobile"=>$request->phone,  
         "address"=>$request->address
        );
        //elequent query builder using ORM(object relational mapping model)
        RegisterModel::create($data);
        
          // sending email from mail package from package name
        Mail::to('araniyaayushi@gmail.com')->send(new RegisterMail($data));

        //return view("crudapp.register")
        return redirect('/register')->with('success','Thanks for contact with us we will sucessfully ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=RegisterModel::all();
        return view('crudapp.admin.managecoustomer',["data"=>$data]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete from tablename where id='id';
        RegisterModel::where('id',$id)->delete();
        return redirect('admin-login/managecoustomer')->with('del','your contact sucessfully deleted');
    }
}
