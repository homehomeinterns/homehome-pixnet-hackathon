<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Schedule;
use App\Card;

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

}
