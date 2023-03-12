<?php

namespace App\Http\Controllers;
use App\Models\Cards;
use App\Models\Groups;
use Illuminate\Http\Request;

class GroupsController extends Controller
{

    public function index(){

        return Groups::all();
//        return DB::table('cards')->orderBy('id')->cursorPaginate(2);

    }

    public function store(Request $request){

        return Groups::create([
            'title' => $request['title'],
            'level' => 'begginer',
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
