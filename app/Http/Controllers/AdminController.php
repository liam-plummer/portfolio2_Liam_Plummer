<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Skill;
use App\Models\Fact;
use App\Models\Portfolio;

class AdminController extends Controller
{
    public function index(){
        $users = User::all();
        $skills = Skill::all();
        $facts = Fact::all();
        $portfolios = Portfolio::all();
        return view('adminhome',compact("users","skills","portfolios","facts"));
    }
}
