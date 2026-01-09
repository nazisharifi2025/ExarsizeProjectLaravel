<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class StudentController extends Controller
{
    public function shoing($id){
        $student = student::findOrfail($id);
        Gate::authorize('show' , $student);
        return $student;
    }
    public function where(){
    //    $st = student::where('score','>' , 50)->get();
    //    student::where('userId',5)->orWhere('userId',2)->get();
    // student::whereBetween('id', 12,20)->get();
    // student::whereIn('gender',[1,2,3,4,5,6,])->get();
    // student::where('name','like','%A')->get();
    // student::where('gender',"!=" , "male")->get();
    // student::where('gender','=','female')->orderBy('name','asc')->get(); desc
    // student::where('gender','male')->where(function ($static) {
    //    $static->where('name','like','%N%')->orWhere('gender','female');
    // })->get();
    //    return $st ;
    }
}
