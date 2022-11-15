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

    // public function delete(todolist $todolist,$id){
   
    //     $row=$todolist::destroy($id);
    //         return back();
    // }

    public function delete($id){
        $data=todolist::find($id);
        $data->delete();
        return redirect('/');
    }

    public function edit($id){
        $data=todolist::find($id);
        return view('edit',['data'=>$data]);
    }

    public function updateTodo(Request $req){

        $todoObj=todolist::find($req->id);
        $todoObj->title=$req->todo;

        $todoObj->save();
        // print_r($req->all());
        return redirect('/');
    }}
