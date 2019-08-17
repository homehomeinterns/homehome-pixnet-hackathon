<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel_game;
use App\Spot;
use App\Option;
use App\Option_keyword_mappings;
use App\Keyword;
use App\keyword_spot_mappings;

class GameController extends Controller
{
    public function ques()
    {
	
	for ($i=1;$i<=8;$i++){
		$ques[$i] = Travel_game::where('id', $i)->first();
	}

	$question = array (
		array (
			"question" => $ques[1]->question_title,
			"answer" => array(
				Option::where('id', $ques[1]->option_A)->first()->option_content,
				Option::where('id', $ques[1]->option_B)->first()->option_content,
				Option::where('id', $ques[1]->option_C)->first()->option_content,
				Option::where('id', $ques[1]->option_D)->first()->option_content
			)
		),
		array (
			"question" => $ques[2]->question_title,
			"answer" => array(
				Option::where('id', $ques[2]->option_A)->first()->option_content,
				Option::where('id', $ques[2]->option_B)->first()->option_content,
				Option::where('id', $ques[2]->option_C)->first()->option_content,
				Option::where('id', $ques[2]->option_D)->first()->option_content
			)
		),
		array (
			"question" => $ques[3]->question_title,
			"answer" => array(
				Option::where('id', $ques[3]->option_A)->first()->option_content,
				Option::where('id', $ques[3]->option_B)->first()->option_content,
				Option::where('id', $ques[3]->option_C)->first()->option_content,
				Option::where('id', $ques[3]->option_D)->first()->option_content
			)
		),
		array (
			"question" => $ques[4]->question_title,
			"answer" => array(
				Option::where('id', $ques[4]->option_A)->first()->option_content,
				Option::where('id', $ques[4]->option_B)->first()->option_content,
				Option::where('id', $ques[4]->option_C)->first()->option_content,
				Option::where('id', $ques[4]->option_D)->first()->option_content
			)
		),
		array (
			"question" => $ques[5]->question_title,
			"answer" => array(
				Option::where('id', $ques[5]->option_A)->first()->option_content,
				Option::where('id', $ques[5]->option_B)->first()->option_content,
				Option::where('id', $ques[5]->option_C)->first()->option_content,
				Option::where('id', $ques[5]->option_D)->first()->option_content
			)
		),
		array (
			"question" => $ques[6]->question_title,
			"answer" => array(
				Option::where('id', $ques[6]->option_A)->first()->option_content,
				Option::where('id', $ques[6]->option_B)->first()->option_content,
				Option::where('id', $ques[6]->option_C)->first()->option_content,
				Option::where('id', $ques[6]->option_D)->first()->option_content
			)
		),
		array (
			"question" => $ques[7]->question_title,
			"answer" => array(
				Option::where('id', $ques[7]->option_A)->first()->option_content,
				Option::where('id', $ques[7]->option_B)->first()->option_content,
				Option::where('id', $ques[7]->option_C)->first()->option_content,
				Option::where('id', $ques[7]->option_D)->first()->option_content
			)
		),
		array (
			"question" => $ques[8]->question_title,
			"answer" => array(
				Option::where('id', $ques[8]->option_A)->first()->option_content,
				Option::where('id', $ques[8]->option_B)->first()->option_content,
				Option::where('id', $ques[8]->option_C)->first()->option_content,
				Option::where('id', $ques[8]->option_D)->first()->option_content
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

    public function spot($answer)
    {
	return $answer[1];
    }
}
