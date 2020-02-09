<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $answers = Answer::all();
        return view('answers.index')->with('answers', $answers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $questions = Question::all();
           return view('answers.create')->with('questions',$questions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'option_1'=>'required',
            'option_2'=>'required',
            'option_3'=>'required',
            'option_4'=>'required',
            'question'=>'required'

        ]);
            Answer::create([
                'option_1'=>$request->option_1,
                'option_2'=>$request->option_2,
                'option_3'=>$request->option_3,
                'option_4'=>$request->option_4,
                'correct'=>implode($request->input('correct')),
                'question_id'=>$request->question
            ]);
            return redirect()->route('answers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $answer = Answer::find($id);
        $questions = Question::all();
        return view('answers.edit')->with('answer', $answer)->with('questions', $questions);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $answer = Answer::find($id);
        $answer->update([
            'option_1'=>$request->option_1,
            'option_2'=>$request->option_2,
            'option_3'=>$request->option_3,
            'option_4'=>$request->option_4,
            'correct'=>implode($request->input('correct')),
            'question_id'=>$request->question

        ]);

        return redirect()->route('answers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $answer = Answer::find($id);
        $answer->delete();
        return redirect()->route('answers.index');
    }
}
