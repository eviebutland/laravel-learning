<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;
use Illuminate\Support\Facades\Log;

class TodoListController extends Controller
{
    public function saveItem(Request $request) {
        Log::info(json_encode($request->all()));
        $newListItem = new ListItem;
        $newListItem->name = $request->listItem; // set the name via the params
        $newListItem->is_complete = 0;
        $newListItem->save();
    }

    public function getItems() {


        return view('welcome', ['listItems' => ListItem::all()]);
        // Log::info(json_encode($request->all()));

    }
}
