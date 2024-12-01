<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function addUser(Request $req)
    public function addUser(UserRequest $req)
    {
        // $req->validate([
        //     'username' => 'required',
        //     'useremail' => 'required | email',
        //     'userpass' => 'required | alpha_num | min:6',
        //     'userage' => 'required | numeric | between:18,21',
        //     'usercity' => 'required',
        // ], [
        //     // custom error message individual form
        //     "username.required" => 'User name is required!',
        // ]);
        // return $req->all();

        // Specific field showing
        // return $req->only(['username', 'usercity']);
        // Specific field except
        return $req->except(['userpass', 'usercity']);
    }
}
