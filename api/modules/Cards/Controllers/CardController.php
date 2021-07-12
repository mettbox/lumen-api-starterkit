<?php

namespace Modules\Cards\Controllers;

use App\Http\Controller;
use Modules\Cards\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        $cards = Card::all();

        return response()->json($cards);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'question' => 'required',
            'answer' => 'required',
        ]);

        $card = new Card;

        $card->question = $request->question;
        $card->answer = $request->answer;
        $card->save();

        return response()->json($card);
    }

    public function get($id)
    {
        $card = Card::find($id);

        return response()->json($card);
    }

    public function update(Request $request, $id)
    {
        $card = Card::find($id);

        $card->question = $request->input('question');
        $card->answer = $request->input('answer');
        $card->save();
        return response()->json($card);
    }

    public function delete($id)
    {
        $card = Card::find($id);
        $card->delete();

        return response()->json('card removed successfully');
    }
}
