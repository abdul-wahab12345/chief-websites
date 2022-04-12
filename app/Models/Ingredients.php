<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Meal;

class Ingredients extends Model
{
    use HasFactory;
    protected $guarded;

    public function meals(){
        return $this->belongsTo(Meal::class);
    }
}
