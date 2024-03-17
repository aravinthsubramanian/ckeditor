<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function show_users(){
        $users = \App\Models\User::all();
        return view('user.users',compact('users'));
    }
    public function show_admins(){
        $admins = \App\Models\Admin::all();
        return view('admin.admins',compact('admins'));
    }
    public function update_users($id){
        //
    }
    public function update_admins($id){
        //
    }
    public function delete_users($id){
        //
    }
    public function delete_admins($id){
        //
    }
}
