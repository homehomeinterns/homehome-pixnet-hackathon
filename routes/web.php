<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/ques', 'GameController@question');
Route::get('/question', function() {
	//return view('welcome');

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
});

Route::get('/a_1/{a_1}', function ($answer) {
	//return view('welcome');
	return $answer;
});
