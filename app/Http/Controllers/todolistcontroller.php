<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\todolist;
class todolistcontroller extends Controller
{
    //

    public function index(){
        return view('welcome',['list'=>todolist::all()]);
    }
    public function saveTodo(Request $req){

        $todoObj=new todolist();
        $todoObj->title=$req->todo;

        $todoObj->save();
        // print_r($req->all());
        return redirect('/');
    }
}
