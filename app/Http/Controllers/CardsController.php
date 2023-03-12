<?php

namespace App\Http\Controllers;

use App\Models\Cards;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class CardsController extends Controller
{
    public function index($id = null){

        if(!empty($id)){
            return Cards::with('groups')->where('group_id', '=', $id)->get();
        }

        return Cards::with('groups')->get();
//        return DB::table('cards')->orderBy('id')->cursorPaginate(2);

    }

    public function store(Request $request){


        return Cards::create([
            'title' => $request['title'],
            'content' => $request['content'],
            'group_id' => $request['group_id'],
            'content_example' => $request['content_example'],
            'definition' => $request['definition'],
            'definition_example' => $request['definition_example'],
        ]);

    }

    public function update(Request $request, $id = null){
        $card = Cards::find($id);

        $card->title = $request['title'];
        $card->content = $request['content'];
        $card->content_example = $request['content_example'];
        $card->definition = $request['definition'];
        $card->definition_example = $request['definition_example'];
        $card->save();

        return $card;

    }

    public function destroy($id = null){
        return Cards::destroy($id);
    }
}
