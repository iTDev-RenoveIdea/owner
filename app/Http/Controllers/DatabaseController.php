<?php

namespace App\Http\Controllers;

use App\Models\Mysqluser;
use App\Models\Userdatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DatabaseController extends Controller
{

    public function viewdatabase()
    {
        $mysqluser = Mysqluser::all();
        $userdata = Userdatabase::all();
        return view('database', compact('mysqluser', 'userdata'));
    }

    public function createdatabase(Request $request)
    {
        // dd($request->all());
        $database = new Userdatabase();
            $database->user_id = 1;
            $database->database_name = $request->data_name;
            $database->save();
            if ($database->save()) {
                return redirect()->back()->with('success', 'You have successfully Created database!');

            } else {
                return redirect()->back()->with('failed', 'Unable to Create database!');
            }
    }

    public function createuser(Request $request)
    {
        $mysql = new Mysqluser();
        $mysql->user_id = 1;
        $mysql->username = $request->username;
        $mysql->password = Hash::make($request->password);
        // $mysql->save();
         if ($request->password === $request->conf_password) {
            if($mysql->save()){
                return redirect()->back()->with('success', 'You have successfully added User!');
            } else {
                return redirect()->back()->with('failed', 'Unable to add User!');
            }
            } else {
            return redirect()->back()->with('failed', 'Confirm Password does not match!');
        }
    }


    public function linkdatabaseuser(Request $request)
    {
        $mysqluserid = $request->username;
        $databaseId = $request->database;
        Userdatabase::where('id', $databaseId)->update(['mysqluser_id' => $mysqluserid]);
        return redirect()->back()->with('success', 'You have successfully add User to Database!');
    }
}
