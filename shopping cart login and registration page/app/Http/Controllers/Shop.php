<?php

namespace App\Http\Controllers;

use App\Models\Shopmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Shop extends Controller
{
    public function index(Request $request)
    {

        // echo "<pre>";
        // print_r($request);


        $name = $request->post("name");
        $email = $request->post("email");
        $password = $request->post("password");

        $data = Shopmodel::where(['email' => $email,  'password' => $password])->get();
        // echo "<pre>";
        // print_r($data);

        if (count($data) >= 1) {

            echo '<script type ="text/JavaScript">';
            echo 'alert("your email id is already registered ")';
            echo '</script>';
            return view("loginform");
        } else {
            DB::table('register')->insert(["name" => $name, "email" => $email, "password" => $password]);
            echo '<script type ="text/JavaScript">';
            echo 'alert("Registered successfully")';
            echo '</script>';
            return view("loginform");
        }
    }

    public function login(Request $request)
    {

        // $w=$request->input();
        // $request->session()->put('user', $w['email']);
        
        //     echo session('user');


        // print_r ($w);
        $email = $request->post("email");
        $password = $request->post("password");

        // echo "<pre>";
        // print_r($b);

         
        $dat = Shopmodel::where(['email' => $email, 'password' => $password])->get();
        foreach($dat as $row)

        // echo $row->name;
        // echo "<pre>";
        // print_r($dat);
        $admin = "admin";
        if ($email == "admin@gmail.com" && $password == 123) {
        } else if (count($dat) == 1) {

            $request->session()->put('user', $row->name);
            // echo session('user');

            return view('home');
        } else {
            echo '<script type ="text/JavaScript">';
            echo 'alert("you are a new user")';
            echo '</script>';
            return view('registration');
        }
    }

    public function log()
    {

        return view('loginform');
    }

    public function reg()
    {

        return view('registration');
    }
    public function logout(Request $request)
    {
     $request->session()->forget('user');
     return view('loginform');
        
    }
}
