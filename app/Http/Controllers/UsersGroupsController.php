<?php

namespace App\Http\Controllers;

use App\Models\UsersGroups;
use Illuminate\Http\Request;

class UsersGroupsController extends Controller
{
    public function index(){
        return UsersGroups::with('user', 'group')->get();
    }
}
