<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use App\Models\Brief;
use Illuminate\Http\Request;

class BriefController extends Controller
{
    public function get_all_briefs()
    {
        $briefs_data = Brief::all();
        return response()->json($briefs_data);
    }

    public function get_brief_byId($id)
    {
        $briefs_data = Brief::where('id_brief', $id)->first();
        $briefs_data->task;
        $briefs_data->students;
        foreach ($briefs_data->students as $student) {
            $student->tasks;
        }

        return response()->json($briefs_data);
    }


    public function insert_brief(Request $req)
    {
        $brief = new Brief();
        $brief->name = $req->name;
        $brief->description = $req->description;
        $brief->duration = $req->duration;
        $brief->task;

        $brief->save();
        return $brief;
    }

    public function delete_brief($id)
    {
        $targeted_brief = Brief::where('id_brief', $id)->first();
        $targeted_brief->delete();
        return response()->json(null, 204);
    }

    public function edit_brief(Request $req, $id)
    {
        $updated_brief = Brief::where('id', $id)->first();
        $updated_brief->titre = $req->titre;
        $updated_brief->creation_date = $req->creation_date;
        $updated_brief->livraison_date = $req->livraison_date;

        $updated_brief->save();
        return $updated_brief;
    }


    public function attachBrief($brief_id, $student_id)
    {
        $student = Apprentice::where('id_student', $student_id)->first();
        $student->briefs()->attach($brief_id);
    }

    public function detachBrief($brief_id, $student_id)
    {
        $student = Apprentice::where('id_student', $student_id)->first();
        $student->briefs()->detach($brief_id);
    }

    public function assignAll($briefId)
    {
        $student = Apprentice::all();
        foreach ($student as $student) {
            $student->briefs()->attach($briefId);
        }
        // return redirect('BriefAssign/' . $briefId);
    }
}
