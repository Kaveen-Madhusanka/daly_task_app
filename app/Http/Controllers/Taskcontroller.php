<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class Taskcontroller extends Controller
{
    public function store(Request $request){
            //dd($request->all());

            $task = new Task;

            $this->validate($request,[
                'task'=>'required|max:100|min:5',
            ]);
            $task->task=$request->task;
            $task->save();

            $data=Task::all();
            //dd($data);
            return view('task')->with('tasks',$data);

    }

    public function updatetaskascompleted($id){
        $task=Task::find($id);
        $task->iscompleted=1;
        $task->save();
        return redirect()->back();
    }

    public function updatetasnotkascompleted($id){
        $task=Task::find($id);
        $task->iscompleted=0;
        $task->save();
        return redirect()->back();

    }

}
