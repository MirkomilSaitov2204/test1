<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Category;
use App\Question;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }
    public function question()
    {
        $items = Answer::inRandomOrder()->take(20)->get();

        return view('question')->with('items', $items);
    }

    public function questionStore(Request $request)
    {
        //  dd($request);
        $count = 0;
        // $category_data = array(
        //     'name'   => 'default',
        //     'count'  => 0
        // );

        foreach($request->question_id as $request_id)
        {
            $correct = 'correct_'.$request_id;
            //   dd($request->$correct);
                $answer = Answer::where('question_id', $request_id)->where('correct', $request->$correct)->first();
                $question = Question::where('id', $request_id)->first();
                $category = Category::where('id', $question->category_id)->first();
                $category_all = Category::all();

                if($answer)
                {
                    $count++;
                    $data[] = array(
                        'category'      => $category->name,
                        'category_id'   => $category->id,
                        'category_all'  => $category_all,
                        // 'category_count'=> $category_count,
                        'title'         => $question->title,
                        'result'        => 'true'
                    );
                    // $category_name = Category::where('id', $question->category_id)->first();

                    $category_data1 = Question::join('categories', 'categories.id', 'questions.category_id')
                                            ->where('questions.id', $answer->question_id)->first();


                    $category_data[] = array(
                        'name'  => $category_data1->name,
                        'count' => 1
                    );






                    // $category_data[] = array(
                    //     'name'  => $category_name->name,
                    //     'count' => 1
                    // );

                    // foreach($category_data as $demo_data)
                    // {
                    //     if($demo_data == $category_name->name)
                    //     {
                    //         dd($category_data);
                    //         $category_data['count'] = $category_data['count']+1;
                    //     }
                    // }

                    // foreach($category_data as $ddd)
                    // {
                    //     $qwe[] = array_intersect($ddd, $ddd);
                    // }

                }else{
                    $data[] = array(
                        'category'      => $category->name,
                        'category_id'   => $category->id,
                        'category_all'  => $category_all,
                        'title'         => $question->title,
                        'result'        => 'false'
                    );
                }
        }
        // dd($qwe);
        // dd($category_data);

        $result = array();
        foreach ($category_data as $element) {
            $result[$element['name']][] = $element;
        }

        // dd($result);



        return view('check')->with([
            'answer' => $answer,
            'count'  => $count,
            'data'   => $data,
            'category_data' => $category_data,
            'result'    => $result
         ]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
