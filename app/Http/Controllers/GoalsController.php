<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoalsController extends Controller
{
    public function index(){
        return view('pages.user-goals.index');
    }

    public function create(Request $request, $id){
        //
    }

    public function delete($id){
        //
    }
}
