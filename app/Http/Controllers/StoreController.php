<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Store;
use App\Card;

class StoreController extends Controller
{
    public function showStoreCard()
    {
        $store_cards = Store::where('user_id', Auth::id())->get();
        foreach ($store_cards as $store_card)
        {
            $cards[] = $store_card->card;
        }
        return response()->json($cards);
    }

    public function addStoreCard(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'card_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => true, 'message' => $validator->errors()]);
        }

        $data = [
            'card_id' => $request->input('card_id'),
            'user_id' => Auth::id()
        ];

        $result = Store::create($data);
        return response()->json(['error' => false, 'data' => $result]);
    }

    public function deleteStoreCard($card_id)
    {
        try {
            $store = Store::findOrFail($card_id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['error' => true, 'message' => '該收藏卡片不存在']);
        }

        if ($store->user_id == Auth::id()) {
            $result = $store->delete();
            return response()->json(['error' => $result, 'message' => '成功刪除收藏卡片']);
        }
        return response()->json(['error' => true, 'message' => '您非此張收藏卡片的擁有者！']);
    }
}
