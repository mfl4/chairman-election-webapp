<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Leader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function index(){
        $leader = Leader::all();
        return view('user.choose_leader', [
            "leader" => $leader,
        ]);
    }

    public function store(Request $request){
        $dataValidate = $request->validate([
            'choose' => 'required',
        ]);

        $user_id = Auth::id();
        
        User::where('id', $user_id)->update([
            "choose" => 1,
            "leader_id" => $dataValidate["choose"]
        ]);

        return redirect("/choose-leader");
    }
}
