<?php

namespace App;
use App\Category;
use App\Answer;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'title', 'desc', 'category_id'
    ];

    public function category()
    {

        return $this->belongsTo(Category::class);
    }
    public function answer()
    {
        return $this->hasOne(Answer::class);
    }
}
