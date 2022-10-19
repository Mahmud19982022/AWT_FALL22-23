<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Models\teacher;


class TeacherController extends Controller
{ 
  
public function teacherList(){
    // $teacher = array();
    //  for($i=0; $i<5; $i++){
    //      $teacher = array(
    // "name" => "Teacher " . ($i+1),
           
    //  );

    //  $teachers[] = (object)$teacher; 
    //  }
     $teacher = teacher::all(); 
      return view('teacher.teacherList')->with('teachers', $teacher);
}
public function teacherEdit(Request $request){
    return $request->name;
}
public function teacherCreate(){
    return view('teacher.teacherCreate');
}
public function teacherCreateSubmitted(Request $request){
    $validate = $request->validate([
        "name"=>"required|min:5|max:20",
        
        'password'=>'required',
        'email'=>'email',
        'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
    ],
    ['name.required'=>"Please put you name here"]
);
$teacher = new  Teacher();
        $teacher->name = $request->name;
         $teacher->password = $request->password;
         $teacher->email = $request->email;
         $teacher->phone = $request->phone;
        $teacher->save();
    return redirect()->route('teacherList');

}

    
public function teacherCourses(){

    $t = Teacher::where('id',1)->first();
    // return $t->id;
    //hasmany
    // return $t->courses;

    //eloquent
       return $t->assignedCourses();
   }

}