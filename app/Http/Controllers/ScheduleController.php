<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Schedule;
use App\Card;
use App\Card_schedule;

class ScheduleController extends Controller
{
    public function showSchedule()
    {
        $schedule_list = Schedule::where('owner_id', Auth::id())->get();
        return response()->json($schedule_list);
    }

    public function addSchedule(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['error' => true, 'message' => $validator->errors()]);
        }

        $data = [
            'name' => $request->input('name'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'owner_id' => Auth::id()
        ];

        $result = Schedule::create($data);
        return response()->json(['error' => false, 'data' => $result]);
    }

    public function editSchedule(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['error' => true, 'message' => $validator->errors()]);
        }

        try {
            $schedule = Schedule::findOrFail($id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['error' => true, 'message' => '該行程表不存在']);
        }
        
        if ($schedule->owner_id == Auth::id()) {
            $schedule->name = $request->input('name');
            $schedule->start_date = $request->input('start_date');
            $schedule->end_date = $request->input('end_date');
            $result = $schedule->save();
            return response()->json(['error' => $result, 'message' => '刪除成功']);
        }
        return response()->json(['error' => true, 'message' => '擁有者才可以修改！']);
    }

    public function deleteSchedule($id)
    {
        try {
            $schedule = Schedule::findOrFail($id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['error' => true, 'message' => '該行程表不存在']);
        }

        if ($schedule->owner_id == Auth::id()) {
            $result = $schedule->delete();
            return response()->json(['error' => $result, 'message' => '刪除成功']);
        }
        return response()->json(['error' => true, 'message' => '擁有者才可以刪除！']);
    }

    public function showScheduleCard()
    {
        $card_list = Card::where('owner_id', Auth::id())->get();
        return response()->json($card_list);
    }

    public function showCardInSchedule($id)
    {
        try {
            $schedule = Schedule::findOrFail($id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['error' => true, 'message' => '該行程卡片不存在']);
        }
        // 多對多關聯關係會回傳多值
        $card_list = $schedule->cards()->where('owner_id', Auth::id())->get();
        return response()->json($card_list);
    }

    public function addScheduleCard(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'describe' => 'required|max:255',
            'article_url' => 'required|max:255',
            'article_content' => 'required|max:255',
            'image_url' => 'required|max:255',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['error' => true, 'message' => $validator->errors()]);
        }

        $data = [
            'title' => $request->input('title'),
            'describe' => $request->input('describe'),
            'article_url' => $request->input('article_url'),
            'article_content' => $request->input('article_content'),
            'image_url' => $request->input('image_url'),
            'owner_id' => Auth::id()
        ];

        $result = Card::create($data);
        return response()->json(['error' => false, 'data' => $result]);
    }

    public function editScheduleCard(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'describe' => 'required|max:255',
            'article_url' => 'required|max:255',
            'article_content' => 'required|max:255',
            'image_url' => 'required|max:255',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['error' => true, 'message' => $validator->errors()]);
        }

        try {
            $card = Card::findOrFail($id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['error' => true, 'message' => '該行程卡片不存在']);
        }
        
        if ($card->owner_id == Auth::id()) {
            $card->title = $request->input('title');
            $card->describe = $request->input('describe');
            $card->article_url = $request->input('article_url');
            $card->article_content = $request->input('article_content');
            $card->image_url = $request->input('image_url');
            $result = $card->save();
            return response()->json(['error' => $result, 'message' => '刪除成功']);
        }
        return response()->json(['error' => true, 'message' => '擁有者才可以修改！']);
    }

    public function deleteScheduleCard($id)
    {
        try {
            $card = Card::findOrFail($id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['error' => true, 'message' => '該行程卡片不存在']);
        }

        if ($card->owner_id == Auth::id()) {
            $result = $card->delete();
            return response()->json(['error' => $result, 'message' => '刪除成功']);
        }
        return response()->json(['error' => true, 'message' => '擁有者才可以刪除！']);
    }

    //pull and toll schedule card -> scheduled card
    public function showScheduledCard($id)
    {
	$schedule = Schedule::findOrFail($id);
	if (!$schedule) {
		return response()->json(['error' => true, 'message' => '您未有行程規劃']);
	}

        try {
            $schedule = Schedule::findOrFail($id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['error' => true, 'message' => '該行程卡片不存在']);
        }
	
	$scheduled_cards = Card_schedule::where('schedule_id', $id)->get();
        return response()->json($scheduled_cards);
    }

    public function addScheduledCard(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'schedule_id' => 'required|max:10',
            'card_id' => 'required|max:10',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['error' => true, 'message' => $validator->errors()]);
	}


        $data = [
            'schedule_id' => $request->input('schedule_id'),
            'card_id' => $request->input('card_id'),
            'start_time' => $request->input('start_time'),
            'end_time' => $request->input('end_time'),
        ];

        $result = Card_schedule::create($data);
        return response()->json(['error' => false, 'data' => $result]);
    }

    public function editScheduledCard(Request $request, $schedule_id, $card_id)
    {
	$validator = Validator::make($request->all(), [
            'start_time' => 'required',
            'end_time' => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['error' => true, 'message' => $validator->errors()]);
        }


	$card = count(Card_schedule::where('card_id', $card_id)->get());
	$scheduled = count(Card_schedule::where('schedule_id', $schedule_id)->get());
	
	if (0 == $card) {
            return response()->json(['error' => true, 'message' => '該卡片不存在']);
	} elseif (0 == $scheduled) { 
            return response()->json(['error' => true, 'message' => '該行程表不存在']);
	}
	

	$schedule = Schedule::findOrfail($schedule_id);
	$scheduled_card = Card_schedule::where('schedule_id', $schedule_id)->where('card_id', $card_id)->first();
	
	if ($schedule->owner_id == Auth::id()) {
            $scheduled_card->start_time = $request->input('start_time');
            $scheduled_card->end_time = $request->input('end_time');
            $result = $scheduled_card->save();
            return response()->json(['error' => $result, 'message' => '修改成功']);
        }
        return response()->json(['error' => true, 'message' => '擁有者才可以修改！']);
    }

    public function deleteScheduledCard($schedule_id, $card_id)
    {
	$card = count(Card_schedule::where('card_id', $card_id)->get());
	$scheduled = count(Card_schedule::where('schedule_id', $schedule_id)->get());
	
	if (0 == $card) {
            return response()->json(['error' => true, 'message' => '該卡片不存在']);
	} elseif (0 == $scheduled) { 
            return response()->json(['error' => true, 'message' => '該行程表不存在']);
	}
	
	
	$scheduled_card = Card_schedule::where('schedule_id', $schedule_id)->where('card_id', $card_id)->first();

	$schedule = Schedule::findOrfail($schedule_id);
        if ($schedule->owner_id == Auth::id()) {
            $result = $scheduled_card->delete();
            return response()->json(['error' => $result, 'message' => '刪除成功']);
        }
        return response()->json(['error' => true, 'message' => '擁有者才可以刪除！']);
    }
}
