<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate ;

class TeacherController extends Controller
{
    public function User(){
        $user = User::all();
        return view('student.add' , compact('user'));
    }
    public function Insert( Request $request){
        $request->validate([
            "name"=>"required|min:5|max:20",
            "phone_number"=>"required|min:10|max:13",
        ]);
        $teacher =  new teacher();
        $teacher->name = $request->name;
        $teacher->phone_number = $request->number;
        $teacher->user_id = $request->userId;
        $teacher->save();
        return redirect('/');
    }
    public function shoing($id){
        $teacher = teacher::findOrfail($id);
         Gate::authorize('show', $teacher);
        return $teacher;
    }
    public function shoingData($id){
        $teacher = teacher::where('id',$id)->get();
        return $teacher ;
    }
    public function shoingFilter(){
        $teacher = teacher::whereBetween('id',[1 ,12 ])->get();
        return $teacher;
    }

}
