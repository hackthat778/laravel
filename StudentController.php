<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Students;
use resouces\views\index;

class StudentController extends Controller

{
    public function store(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());

        $students = new students;
        $students->name = $request['name'];
        $students->father = $request['father'];
        $students->mother = $request['mother'];
        $students->phone = $request['phone'];
        $students->gender = $request['gender'];
        $students->address = $request['address'];
        $students->save();
        
        return redirect('/')->with('message', 'IT WORKS!');
           
            // return  view ('index');xxxxxx    

    }


    public function show()
    {

        $student=students::all();
        return view ('index',compact('student'));
    }
            //   data delete

    function delete($id){

         $data= Students::find($id);
         $data->delete();
         return redirect('/');
    }

    
                        //  Data edit

    public function edit($id)
    {
        $student = Students::find($id);
        return view('employee.update', compact('students'));
    }
}

