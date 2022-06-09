<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\File;

class MemberController extends Controller
{
    function addData(Request $req)
    {
        $req ->validate([
            'id','name','department','level','term','file'=>'required'
    
        ]);

        $student = new Student;
        $student ->id = $req->id;
        $student ->name = $req->name;
        $student ->email = $req->email;
        $student ->department = $req->department;
        $student ->level = $req->level;
        $student ->term = $req->term;
       
        if($req -> hasfile('file'))
        {
            $file = $req->file('file');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/', $filename);
            $student -> image = $filename;
            
        }
       
        $student ->save();
        return redirect('insert');
        

    }

    function show()
    {
        $data=Student::all();
        return view('home',['students' => $data]);
    }

    function delete($id)
    {
        $data = Student::find($id);
        $data->delete();
        return redirect('home');
    }

    function showdata($id)
    {
        $student= Student::find($id);
        return view('update',compact('student'));
    }

    function update(Request $request , $id)
    {
        $student= Student::find($id);
    
        $student ->name = $request->name;
        $student ->email = $request->email;
        $student ->department = $request->department;
        $student ->level = $request->level;
        $student ->term = $request->term;

        //$old_image = $request->old_image;
        $file = $request->file('file');

        if($file)
        {
                if($request -> hasfile('file'))
                {
                $destination = 'uploads/'.$student->image;
                if(File::exists($destination))
                    {
            
                        File::delete($destination);
                    }
            
                    $extention = $file->getClientOriginalExtension();
                    $filename = time().'.'.$extention;
                    $file->move('uploads/', $filename);
                    $student -> image = $filename;
            
        }
        else{
            $extention = $file->getClientOriginalExtension();
                    $filename = time().'.'.$extention;
                    $file->move('uploads/', $filename);
                    $student -> image = $filename;
        }
    }
        //unlink($old_image);
        

       
        $student ->update();
        return redirect('home');
        

    }
}
