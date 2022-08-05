<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return inertia('Home');
    }

    public function mdcbuilding(){
        return inertia('MdcBuilding');
    }

    public function teacher(){
        return inertia('Teacher');
    }

    public function contact(){
        return inertia('Contact');
    }

}
