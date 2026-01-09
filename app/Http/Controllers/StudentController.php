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
}
