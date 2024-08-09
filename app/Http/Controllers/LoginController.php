<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    function login(Request $request)
    {
        //single data store
        $request->session()->put("user", $request->input("name"));

        //all data store
        $request->session()->put("alldata", $request->input());


        return redirect("profile");
    }


    function logout()
    {
        session()->pull("user");
        return redirect("profile");

    }


    // flash session

    function adduser(Request $request)
    {
        $request->session()->flash('massage','User has been added successfully');

        return redirect('login');
    }
}
