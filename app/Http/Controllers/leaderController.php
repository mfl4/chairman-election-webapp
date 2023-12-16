<?php

namespace App\Http\Controllers;

use App\Models\Leader;
use App\Models\User;
use Illuminate\Http\Request;

class leaderController extends Controller
{
    public function index()
    {
        $leader = Leader::withCount('User')->get();
        $user = User::all();
        return view('admin.input_leader',  [
            'leader' => $leader,
            'user' => $user,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'rationalization' => 'required',
            'photo' => 'required|image|file',
        ]);

        $ext = $request->photo->extension();
        $fileName = $request->fullname . date('dmYhis') . '.' . $ext;
        $photo = $request->file('photo')->storeAs('photo', $fileName);

        Leader::create([
            'name' => $request->name,
            'rationalization' => $request->rationalization,
            'photo' => $photo,
        ]);
        
        return redirect('/input-leader');
    }

    public function outputLeader()
    {
        $data = [
            'leader' => Leader::withCount('User')->orderBy('user_count', 'desc')->first(),
            'leaders' => Leader::withCount('User')->orderBy('user_count','desc')->get()
        ];
        return view('admin.output_leader',$data);
    }
}
