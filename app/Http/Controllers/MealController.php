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
        $meal = DB::table('meals')->insertGetId(
            ['name' => $req->meal_name,
            'instrcution' => $req->instruction,
            'expert_advice' => $req->expert_advice
        ]
        );
            $id = $meal;

            $ing_name = $req->name;
            $ing_qty = $req->quantity;
            $ing_unit = $req->unit;
            $ing_ids = $req->ingid;
            $weight_id = $req->weights;
            for($i=0; $i<count($ing_name); $i++){
                $ingredients = DB::insert('insert into Ingredients ( meal_id, ingredient_id, weights, name, quantity, unit) values ( ?, ?, ?, ?, ?, ?)',
                [$id, $ing_ids[$i], $weight_id[$i], $ing_name[$i], $ing_qty[$i], $ing_unit[$i]]);
                return redirect()->route('show_meals');
            }
            
            
        
        
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
