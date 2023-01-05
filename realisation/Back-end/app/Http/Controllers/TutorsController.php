<?php

namespace App\Http\Controllers;

use App\Imports\TutorImport;
use App\Exports\TutorExport;

use App\Models\Tutor;
use Illuminate\Http\Request;

class TutorsController extends Controller
{
    public function tutor_view(){
        return view('tutor');
    }

    public function Get_all_tutors(){
        $tutors = Tutor::all();
        return response()->json($tutors);
    }

    public function Get_tutor_byID($id){
        $tutor = Tutor::where('id', $id )->first();
        // $tutor->Task;
        return response()->json($tutor);
    }

    public function insert_tutor(Request $req){
        $tutor = new Tutor();
        $tutor->firstname = $req->firstname;
        $tutor->lastname = $req->lastname;
        $tutor->email = $req->email;

        $tutor->save();
        return redirect('/tutor');
    }

    public function import(Request $req){
        Excel::import(new TutorImport, $req->file);
    }

    public function export(Request $req){
        Excel::download(new TutorExport, $req->file);
    }

    public function edit_tutor (Request $req, $id) {
        $tutor = Tutor::where('id', $id)->first();
        $tutor->firstname = $req->firstname;
        $tutor->lastname = $req->lastname;
        $tutor->email = $req->email;
        $tutor->save();
        return $tutor;
    }

    public function delete_tutor ($id) {
        $tutor = Tutor::where('id', $id);
        $tutor->delete();
    }
}
