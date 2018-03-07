<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function postItem(Request $request) {
      $this->validate($request , [ 'item' => 'required' ]);
      $Item = new Item;
      $Item->item = $request->input('item');
      $Item->done = 0;

      $Item->save();
      // add item to database
      return redirect('/')->with('status', 'item added to database!');
    }

    public function showItem() {
      $Item = DB::select('select * from items');
      // return $Item;
      return view('layout.app')->with('Item',$Item);
    }

    public function doneItem($id) {
      $Item = Item::find($id);
      if($Item->done==1) {
        $Item->done = 0;
      } else {
        $Item->done = 1;
      }

      $Item->save();
      return redirect('/')->with('status' , $Item->item.' task is done.');
    }

    public function deleteItem($id) {
      $Item = Item::find($id)->delete();

      return redirect('/')->with('status', 'item deleted from database');
    }
}
