<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $guarded = []; //to make our all fields fillable

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
