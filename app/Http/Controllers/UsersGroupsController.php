<?php

namespace App\Http\Controllers;

use App\Models\UsersGroups;
use Illuminate\Http\Request;

class UsersGroupsController extends Controller
{
    public function index($id){
        if($id){
            return UsersGroups::with('user', 'group')->where('user_id', '=', $id)->get();
        }
        return UsersGroups::with('user', 'group')->get();
    }










}
