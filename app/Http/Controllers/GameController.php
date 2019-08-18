<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel_game;
use App\Spot;
use App\Option;
use App\Option_keyword_mapping;
use App\Keyword;
use App\Keyword_spot_mapping;

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

    public function spot($ans)
    {
	for ($i=1;$i<=92;$i++){
		$spot[0][$i] = Spot::where('id', $i)->first()->start_point;
		$spot[1][$i] = $i;
	}

	for ($i=0;$i<8;$i++){
		if ($ans[$i] == "A"){
			$option_id[$i] = ($i+1)*10+1;
		}	
		else if ($ans[$i] == "B"){
			$option_id[$i] = ($i+1)*10+2;
		}
		else if ($ans[$i] == "C"){
			$option_id[$i] = ($i+1)*10+3;
		}
		else if ($ans[$i] == "D"){
			$option_id[$i] = ($i+1)*10+4;
		}
		$keyword_id[$i] = Option_keyword_mapping::where('option_id', $option_id[$i])->get();
		$keyword_id_num[$i] = count($keyword_id[$i]);
		for ($j=0;$j<$keyword_id_num[$i];$j++){
			$spot_id[$i] = Keyword_spot_mapping::where('keyword_id', $keyword_id[$i][$j]->keyword_id)->get();
			$spot_id_num[$i] = count($spot_id[$i]);
			for ($k=0;$k<$spot_id_num[$i];$k++){
				$id = Spot::where('id', $spot_id[$i][$k]->spot_id)->first()->id;
				$spot[0][$id]++;
			}
		}
	}
	arsort($spot[0]);
	$top_id = array_keys($spot[0]);

	for ($i=0;$i<3;$i++){
		$top_spot[$i][0] = Spot::where('id', $top_id[$i])->first()->spot_name;

		$article[$i] = json_decode(shell_exec('curl -X GET https://emma.pixnet.cc/blog/articles/search\?key\="' . $top_spot[$i][0] . '"\&format\=json\&per_page\=3\&orderby\=public_at_desc\&type\=tag\&site_category_id\=28'));
		$top_spot[$i][1] = $article[$i]->articles[0]->link;
	}

	$result = array (
		array (
			"spot_name" => $top_spot[0][0],
			"article_url" => $top_spot[0][1]
		),
		array (
			"spot_name" => $top_spot[1][0],
			"article_url" => $top_spot[1][1]
		),
		array (
			"spot_name" => $top_spot[2][0],
			"article_url" => $top_spot[2][1]
		)
	);
	
	array_walk_recursive($result, function(&$value, $key){
		if(is_string($value)){
			$value = urlencode($value);
		}
	});
	return urldecode(json_encode($result));
    }
}
