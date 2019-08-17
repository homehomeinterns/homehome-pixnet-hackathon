<?php

namespace App\Http\Controllers;

class GameController extends Controller
{
    public function ques()
    {
	$question = array (
		array (
			"question" => "睜開眼睛，你發現眼前有一扇如同《霍爾的移動城堡》的魔法之門，你覺得當你轉開門把時，門外的世界正處於？",
			"answer" => array(
				"A" => "A. 天空漸亮的清晨",
				"B" => "B. 陽光普照的上午",
				"C" => "C. 天空漸暗的下午",
				"D" => "D. 夜幕低垂的夜晚"
			)
		),
		array (
			"question" => "睜開眼睛，你發現眼前有一扇如同《霍爾的移動城堡》的魔法之門，你覺得當你轉開門把時，門外的世界正處於？",
			"answer" => array(
				"A" => "A. 天空漸亮的清晨",
				"B" => "B. 陽光普照的上午",
				"C" => "C. 天空漸暗的下午",
				"D" => "D. 夜幕低垂的夜晚"
			)
		),
		array (
			"question" => "睜開眼睛，你發現眼前有一扇如同《霍爾的移動城堡》的魔法之門，你覺得當你轉開門把時，門外的世界正處於？",
			"answer" => array(
				"A" => "A. 天空漸亮的清晨",
				"B" => "B. 陽光普照的上午",
				"C" => "C. 天空漸暗的下午",
				"D" => "D. 夜幕低垂的夜晚"
			)
		),
		array (
			"question" => "睜開眼睛，你發現眼前有一扇如同《霍爾的移動城堡》的魔法之門，你覺得當你轉開門把時，門外的世界正處於？",
			"answer" => array(
				"A" => "A. 天空漸亮的清晨",
				"B" => "B. 陽光普照的上午",
				"C" => "C. 天空漸暗的下午",
				"D" => "D. 夜幕低垂的夜晚"
			)
		),
		array (
			"question" => "睜開眼睛，你發現眼前有一扇如同《霍爾的移動城堡》的魔法之門，你覺得當你轉開門把時，門外的世界正處於？",
			"answer" => array(
				"A" => "A. 天空漸亮的清晨",
				"B" => "B. 陽光普照的上午",
				"C" => "C. 天空漸暗的下午",
				"D" => "D. 夜幕低垂的夜晚"
			)
		),
		array (
			"question" => "睜開眼睛，你發現眼前有一扇如同《霍爾的移動城堡》的魔法之門，你覺得當你轉開門把時，門外的世界正處於？",
			"answer" => array(
				"A" => "A. 天空漸亮的清晨",
				"B" => "B. 陽光普照的上午",
				"C" => "C. 天空漸暗的下午",
				"D" => "D. 夜幕低垂的夜晚"
			)
		),
		array (
			"question" => "睜開眼睛，你發現眼前有一扇如同《霍爾的移動城堡》的魔法之門，你覺得當你轉開門把時，門外的世界正處於？",
			"answer" => array(
				"A" => "A. 天空漸亮的清晨",
				"B" => "B. 陽光普照的上午",
				"C" => "C. 天空漸暗的下午",
				"D" => "D. 夜幕低垂的夜晚"
			)
		),
		array (
			"question" => "睜開眼睛，你發現眼前有一扇如同《霍爾的移動城堡》的魔法之門，你覺得當你轉開門把時，門外的世界正處於？",
			"answer" => array(
				"A" => "A. 天空漸亮的清晨",
				"B" => "B. 陽光普照的上午",
				"C" => "C. 天空漸暗的下午",
				"D" => "D. 夜幕低垂的夜晚"
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

    public function spot($result)
    {
		
    }
}
