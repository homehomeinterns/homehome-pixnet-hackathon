<?php

namespace App\Http\Controllers;

use App\Travel_game;
use App\Spot;
use App\Option;
use App\Option_keyword_mappings;
use App\Keyword;
use App\keyword_spot_mappings;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    public function ques()
    {
	$ques_1 = Travel_game::where('id', '1')->first();
	$ques_2 = Travel_game::where('id', '2')->first();
	$ques_3 = Travel_game::where('id', '3')->first();
	$ques_4 = Travel_game::where('id', '4')->first();
	$ques_5 = Travel_game::where('id', '5')->first();
	$ques_6 = Travel_game::where('id', '6')->first();
	$ques_7 = Travel_game::where('id', '7')->first();
	$ques_8 = Travel_game::where('id', '8')->first();
	
	$question = array (
		array (
			"question" => $ques_1->question_title,
			"answer" => array(
				Option::where('id', $ques_1->option_A)->first()->option_content,
				Option::where('id', $ques_1->option_B)->first()->option_content,
				Option::where('id', $ques_1->option_C)->first()->option_content,
				Option::where('id', $ques_1->option_D)->first()->option_content
			)
		),
		array (
			"question" => $ques_2->question_title,
			"answer" => array(
				Option::where('id', $ques_2->option_A)->first()->option_content,
				Option::where('id', $ques_2->option_B)->first()->option_content,
				Option::where('id', $ques_2->option_C)->first()->option_content,
				Option::where('id', $ques_2->option_D)->first()->option_content
			)
		),
		array (
			"question" => $ques_3->question_title,
			"answer" => array(
				Option::where('id', $ques_3->option_A)->first()->option_content,
				Option::where('id', $ques_3->option_B)->first()->option_content,
				Option::where('id', $ques_3->option_C)->first()->option_content,
				Option::where('id', $ques_3->option_D)->first()->option_content
			)
		),
		array (
			"question" => $ques_4->question_title,
			"answer" => array(
				Option::where('id', $ques_4->option_A)->first()->option_content,
				Option::where('id', $ques_4->option_B)->first()->option_content,
				Option::where('id', $ques_4->option_C)->first()->option_content,
				Option::where('id', $ques_4->option_D)->first()->option_content
			)
		),
		array (
			"question" => $ques_5->question_title,
			"answer" => array(
				Option::where('id', $ques_5->option_A)->first()->option_content,
				Option::where('id', $ques_5->option_B)->first()->option_content,
				Option::where('id', $ques_5->option_C)->first()->option_content,
				Option::where('id', $ques_5->option_D)->first()->option_content
			)
		),
		array (
			"question" => $ques_6->question_title,
			"answer" => array(
				Option::where('id', $ques_6->option_A)->first()->option_content,
				Option::where('id', $ques_6->option_B)->first()->option_content,
				Option::where('id', $ques_6->option_C)->first()->option_content,
				Option::where('id', $ques_6->option_D)->first()->option_content
			)
		),
		array (
			"question" => $ques_7->question_title,
			"answer" => array(
				Option::where('id', $ques_7->option_A)->first()->option_content,
				Option::where('id', $ques_7->option_B)->first()->option_content,
				Option::where('id', $ques_7->option_C)->first()->option_content,
				Option::where('id', $ques_7->option_D)->first()->option_content
			)
		),
		array (
			"question" => $ques_8->question_title,
			"answer" => array(
				Option::where('id', $ques_8->option_A)->first()->option_content,
				Option::where('id', $ques_8->option_B)->first()->option_content,
				Option::where('id', $ques_8->option_C)->first()->option_content,
				Option::where('id', $ques_8->option_D)->first()->option_content
			)
		)
	);
	
	array_walk_recursive($question, function(&$value, $key){
		if(is_string($value)){
			$value = urlencode($value);
		}
	});
	return urldecode(json_encode($question));
    }

    public function spot($spot)
    {
		
    }

    public function test()
    {
	//$ques = DB::table('travel_games')->where('id', '1')->first();
	//$question = $ques->question_title;
	
	$ques = Travel_game::where('id', '1')->first();
	$question_title = $ques->question_title;
	return response()->json($question_title);
    }
}
