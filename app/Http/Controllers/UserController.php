<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    function addUser(Request $request)
    {
        //all data of adduser form
        //  echo $request;  

        //  //single data   {name or email or address }
        echo "The user Name is: $request->name";
        echo "<br>";

        echo "The user Email is: $request->email";
        echo "<br>";
        echo "The user City is: $request->city";
        echo "<br>";
        echo "The user Gender is: $request->gender";
        echo "<br>";
        print_r($request->skill);

        // return $request;
        $request->validate(
            [
                //default message
                "name" => "required |uppercase|min:3 |max:10",
                "email" => "required | email",
                "city" => "required ",
                "gender" => "required",
            ],
            [

                //if you want custom message
                "name.required" => "Required*",
                "name.min" => "min character should be 3",
                "name.max" => "Max character limit will be 15",
                "name.uppercase" => "name must be in uppercase",
                "email.required" => "Required*",
                "email.email" => "please write correct email type",
                "gender.required" => "Required*",
            ]
        );

    }

    function getUser()
    {
        $response = Http::get('https://64b28ad538e74e386d553c36.mockapi.io/mytodo');
        return $response;
        // return $response->body();
        // return $response->headers();
        // return $response->status();


    }


    function quiries()
    {
        // $result = DB::table("users")->get();
        // $result = DB::table("users")->where("name","Abdul Nasir")->get();
        //insert data
        // $result = DB::table("users")->insert([
        //     "name" => "naeem Khan",
        //     "email" => "naeem@gmail.com",
        //     "password" => "12345",
        // ]);
        // if ($result) {
        //     return "data inserted";
        // } else {
        //     return "data not insert";
        // }

            //// delete data
            // $result = DB::table("users")->where("name" , "yasir khan")->update(
            //     [
            //     "name" => "naeem khattak",
            //     "email" => "naeemktk@gmail.com",
            //     "password" => "123456",
            // ]);
            // if ($result) {
            //     return "data updated";
            // } else {
            //     return "data not update";
            // }
        //// delete data
        // $result = DB::table("users")->where("name" , "naseem khan")->delete();
       
        // if ($result) {
        //     return "data deleted";
        // } else {
        //     return "data not delete";
        // }



        //get data from model
        $response = User::get();
        return $response;

    }
}
