<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index() {
        $departments = Course::get();

       return inertia('School',[
        'departments' => $departments
       ]);
    }
}
