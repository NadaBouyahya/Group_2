<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use Illuminate\Http\Request;

class TachesController extends Controller
{
    public function task_view(){
        return view('task_view');
    }

    public function Get_all_tasks(){
        $tasks = Tache::all();
        return response()->json($tasks);
    }

    public function Get_task_byID($id){
        $task = Tache::where('id', $id)->first();
        return response()->json($task);
    }

    public function insert_task(Request $req){
        $task = new Tache();
        $task->name = $req->title;
        $task->description = $req->description;
        $task->duree = $req->duration;

        $task->save();
        return $task;
    }
}
