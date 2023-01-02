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

    public function Get_brief_byID($id){
        $briefs = Brief::where('id', $id )->first();
        $briefs->Task;
        return response()->json($briefs);
    }

    public function insert_brief(Request $req){
        $briefs = new Brief();
        $briefs->name = $req->title;
        $briefs->description = $req->description;
        $briefs->duree = $req->duration;

        $briefs->save();
        return $briefs;
    }

    public function edit_brief (Request $req, $id) {
        $brief = Brief::where('id', $id)->first();
        $brief->name = $req->name;
        $brief->description = $req->description;
        $brief->duree = $req->duree;
        $brief->save();
        return $brief;
    }

    public function delete_brief ($id) {
        $brief = Brief::where('id', $id);
        $brief->delete();
    }
}
