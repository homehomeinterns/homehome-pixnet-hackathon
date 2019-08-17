<?php

namespace App\Http\Controllers;

use App\Travel_game;
use App\Spot;
use App\Option;
use App\Option_keyword_mappings;
use App\Keyword;
use App\keyword_spot_mappings;

use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function ques()
    {
	$ques_1 = DB::table('travel_games')->where('id', '1')->first();
	$ques_2 = DB::table('travel_games')->where('id', '2')->first();
	$ques_3 = DB::table('travel_games')->where('id', '3')->first();
	$ques_4 = DB::table('travel_games')->where('id', '4')->first();
	$ques_5 = DB::table('travel_games')->where('id', '5')->first();
	$ques_6 = DB::table('travel_games')->where('id', '6')->first();
	$ques_7 = DB::table('travel_games')->where('id', '7')->first();
	$ques_8 = DB::table('travel_games')->where('id', '8')->first();
	
	$question = array (
		array (
			"question" => $ques_1->question_title,
			"answer" => array(
				"天空漸亮的清晨",
				"陽光普照的上午",
				"天空漸暗的下午",
				"夜幕低垂的夜晚"
			)
		),
		array (
			"question" => $ques_2->question_title,
			"answer" => array(
				"天空漸亮的清晨",
				"陽光普照的上午",
				"天空漸暗的下午",
				"夜幕低垂的夜晚"
			)
		),
		array (
			"question" => $ques_3->question_title,
			"answer" => array(
				"天空漸亮的清晨",
				"陽光普照的上午",
				"天空漸暗的下午",
				"夜幕低垂的夜晚"
			)
		),
		array (
			"question" => $ques_4->question_title,
			"answer" => array(
				"天空漸亮的清晨",
				"陽光普照的上午",
				"天空漸暗的下午",
				"夜幕低垂的夜晚"
			)
		),
		array (
			"question" => $ques_5->question_title,
			"answer" => array(
				"天空漸亮的清晨",
				"陽光普照的上午",
				"天空漸暗的下午",
				"夜幕低垂的夜晚"
			)
		),
		array (
			"question" => $ques_6->question_title,
			"answer" => array(
				"天空漸亮的清晨",
				"陽光普照的上午",
				"天空漸暗的下午",
				"夜幕低垂的夜晚"
			)
		),
		array (
			"question" => $ques_7->question_title,
			"answer" => array(
				"天空漸亮的清晨",
				"陽光普照的上午",
				"天空漸暗的下午",
				"夜幕低垂的夜晚"
			)
		),
		array (
			"question" => $ques_8->question_title,
			"answer" => array(
				"天空漸亮的清晨",
				"陽光普照的上午",
				"天空漸暗的下午",
				"夜幕低垂的夜晚"
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
	$ques = DB::table('travel_games')->where('id', '1')->get();
	return $ques;
    }
}
