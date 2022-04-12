<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meal;
use Illuminate\Support\Facades\DB;

class MealController extends Controller
{
    public function chief_callback(){
        return view('chief');
    }
    public function show_meal_callback(){
        return view('show_meals', [
            'meals' => Meal::all()
        ]);
    }
    public function add_meal_callback(){
        
        return view('add_meal');
    }
    public function add_new_meal_callback(Request $req){
        /*$validator = $req->validate([
            'name' => 'required|max:250|min:6',
            'instruction' => 'required|max:250|min:6',
            'expert_advice' => 'required|max:250|min:6',
        ]);
        if ($validator->fails()) { 
            return $validator->errors(); 
        } */
        DB::insert('insert into meals ( name, instrcution, expert_advice) values ( ?, ?, ?)',
            [$req->name, $req->instruction, $req->expert_advice]);
            return redirect()->route('show_meals');
        
        
    }
    public function edit_meal_callback(Meal $meal){
        return view('edit_meal', compact('meal'));
    }
    public function update_meal_callback(Meal $meal, Request $req){
        $meal->name = $req->mname;
        $meal->instrcution = $req->instruction;
        $meal->expert_advice = $req->advice;
        $meal->save();
        return redirect()->route('show_meals');
    }
    public function delete_meal_callback(Meal $meal){
        $meal->delete();
        return back();

    }
}
