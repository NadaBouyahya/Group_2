<?php

namespace App\Http\Controllers;

use App\Models\Brief;
use Illuminate\Http\Request;

class BriefController extends Controller
{
    public function Brief_view(){
        return view('brief_view');
    }

    public function Get_all_briefs(){
        $briefs = Brief::all();
        return response()->json($briefs);
    }
}
