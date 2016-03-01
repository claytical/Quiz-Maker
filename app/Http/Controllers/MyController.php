<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Question;

class MyController extends Controller
{
    public function index() {
    	$obj = new \stdClass();
    	$obj->firstName = "Clay";
    	$obj->lastName = "Ewing";
    	return view('frontend.hello', ["obj" => $obj]);
    }

    public function gotWhatever(Request $request) {
    	$obj = new \stdClass();
    	$obj->firstName = $request->input('whatever');;
    	$obj->lastName = "Stuff";
    	return view('frontend.hello', ["obj" => $obj]);
    }



    
    public function questions() {
    	$questions = Question::all();
    	return view('frontend.questions', ["questions" => $questions]);
    }

    public function new_question(Request $request) {
    	$question = new Question;
    	$question->question = $request->question;
    	$question->points = $request->points;
    	$question->question_type = 1;
    	$question->quiz_id = 1;
    	$question->save();
    	$questions = Question::all();
    	return view('frontend.questions', ["questions" => $questions]);

    }

}
