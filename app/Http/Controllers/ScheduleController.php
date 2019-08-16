<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Schedule;

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
}
