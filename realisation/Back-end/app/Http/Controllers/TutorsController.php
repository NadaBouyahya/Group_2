<?php

namespace App\Http\Controllers;

use App\Imports\TutorImport;
use App\Exports\TutorExport;

use App\Models\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;

class TutorsController extends Controller
{
    public function tutor_view()
    {
        return view('tutor');
    }

    
    public function Get_all_tutors(){
        $tutors = Tutor::paginate(3);
        return view('tutor', compact('tutors'));
    }

    // public function GetMoreTutors( Request $request ){
    //     if( $request->ajax()) {
    //         $tutor = Tutor::paginate(3);
    //         return view('tutor-table-only', compact('tutors'))->render();

    //     }
    // }
    // public function GetMoreTutors(Request $req)
    // {
    //     $currentPage = $req->page_num;

    //     Paginator::currentPageResolver(function () use ($currentPage) {
    //         return $currentPage;
    //     });

    //     $tutors = Tutor::paginate(3);
    //     return view('tutor', compact('tutors'));
    // }


    public function Get_tutor_byID($id)
    {
        $tutor = Tutor::where('id', $id)->first();
        // $tutor->Task;
        return response()->json($tutor);
    }


    public function Add_tutor_view()
    {
        return view('Add-tutor');
    }


    public function insert_tutor(Request $req)
    {

        $file_name = $req->image->getClientOriginalName();
        $file_path = 'upload/' . $file_name;

        $path = Storage::disk('public')->put($file_path, file_get_contents($req->image));

        $tutor = new Tutor();
        $tutor->firstname = $req->firstname;
        $tutor->lastname = $req->lastname;
        $tutor->email = $req->email;
        $tutor->imgURL = $file_name;

        $tutor->save();
        return redirect('tutors');
    }

    // public function import(Request $req){
    //     Excel::import(new TutorImport, $req->file);
    // }

    // public function export(Request $req){
    //     Excel::download(new TutorExport, $req->file);
    // }

    public function edit_tutor(Request $req, $id)
    {
        $tutor = Tutor::where('id', $id)->first();
        $tutor->firstname = $req->firstname;
        $tutor->lastname = $req->lastname;
        $tutor->email = $req->email;
        $tutor->save();
        return $tutor;
    }

    public function delete_tutor($id)
    {
        $tutor = Tutor::where('id', $id);
        $tutor->delete();
        return redirect('tutors');
    }
}
