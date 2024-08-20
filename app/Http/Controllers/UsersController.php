<?php

namespace App\Http\Controllers;

use App\Models\CrossfitUsersModel;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class UsersController extends Controller {
    //
    public function createAccount() {
        //
        return view('users.create-account');
    }

    public function deleteAccount() {
        //
        return view('users.delete-account');
    }

    public function forgotPassword() {
        //
        return view('users.forgot-password');
    }

    public function newPassword() {
        //
        return view('users.new-password');
    }


    //Funciones del CRUD de Users
    public function newUser(Request $request) {
        dd($request);
        CrossfitUsersModel::create([
            'first_name' => $request->first_name, 
            'last_name' => $request->last_name, 
            'birth' => $request->birth, 
            'email' => $request->email, 
            'password' => $request->password 
        ]);
    }

    public function deleteUser (Request $request) {

    }

    public function forgotPasswordUser (Request $request) {

    }

    public function newPasswordUser (Request $request) {

    }
}
