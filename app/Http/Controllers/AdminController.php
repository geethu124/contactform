<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{
    //
    public function login(){
        return view('auth.login');
    }

    public function adminlogin(Request $request){
         // Validate the request
         $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log the user in
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('admin.submissions');
        }

        return redirect()->route('admin.login')->withErrors(['email' => 'Invalid credentials']);
    }


    public function listSubmissions()
    {
        $submissions = Submission::query();

        return DataTables::of($submissions)
            ->addColumn('action', function ($submission) {
                return '<a href="' . route('admin.submission.view', $submission->id) . '" class="btn btn-primary">View</a>';
            })
            ->rawColumns(['action'])
            ->toJson();
    }

    public function submissions(){
        return view('auth.submissions');
    }
    public function showcontact($id){
        $submission = Submission::findOrFail($id);
        return view('auth.showcontact', compact('submission'));
    }


}
