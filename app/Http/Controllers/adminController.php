<?php

namespace App\Http\Controllers;

use App\Mail\sendPassword;
use Illuminate\Support\Str;
use App\Models\Email;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    public function sendAllEmail(Request $request)
    {
        $email = Email::all();
        // $data = [
        //     'email' => ,
        // ];

        foreach ($email as $e){
            $password = Str::random(15);
            $data = ([
                "email" => $e->email,
                "password" => $password
            ]);

            $dataHash = ([
                "email" => $e->email,
                "password" => Hash::make($password)
            ]);

            User::create($dataHash);

            Mail::to($e->email)->send(new sendPassword($data));
        }

        return redirect("/input-leader");

        // return view('admin.input_leader',  [
        //     'leader' => $leader,
        //     'user' => $user,
        // ]);
    }
}
