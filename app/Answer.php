<?php

namespace App;
use App\Question;


use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable =['option_1', 'option_2', 'option_3', 'option_4', 'correct', 'question_id'];

    

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
