<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Task;
use Validator;

class TodoController extends Controller
{
    public function index()
    {
        $list = \App\Task::get();
    	return view('index',compact('list'));
    }


    public function store(Request $request)
    {
    	$task = $request->task;
    	$description = $request->description;
        $deadline = $request->deadline;

        // validation check for all inputs
        $validator = Validator::make($request->all(), [
            'task' => 'required',
            'deadline' => 'required',
            'description' => 'required',
            
        ]);
        if ($validator->fails()) {
            return redirect('index/task')
                        ->withErrors($validator)
                        ->withInput();
        }

        $list = new \App\Task;
        $list->task = $task;
        $list->description = $description;
        $list->deadline = $deadline;

    	$list->save();

        $lists = \App\Task::get();  // get()  or all()
        return view('todo-list')->with('mylists', $lists);
    	}



public function show($id){
//$lists = \App\Task::orderBy('id','DESC')->first(); //return the last record
$lists = \App\Task::where('id',$id)->first();
return view('single-task',compact('lists'));
    
}


public function delete($id)
{
    $lists = \App\Task::where('id',$id)->delete();
    return redirect('/');
}


public function edit($id)
{
    $lists = \App\Task::where('id',$id)->first();
    return view('edit',compact('lists'));
}


public function update(Request $request, $id)
{
        $task = $request->task;
        $description = $request->description;
        $deadline = $request->deadline;

        // validation check for all inputs
        $validator = Validator::make($request->all(), [
            'task' => 'required',
            'deadline' => 'required',
            'description' => 'required',
            
        ]);
        if ($validator->fails()) {
            return redirect('index/task')
                        ->withErrors($validator)
                        ->withInput();
        }

        $lists = \App\Task::find($id);
        $lists->task = $task;
        $lists->description = $description;
        $lists->deadline = $deadline;

        $lists->save();

        $lists = \App\Task::get();  // get()  or all()
        return view('task')->with('mylists', $lists);

        
}

}
