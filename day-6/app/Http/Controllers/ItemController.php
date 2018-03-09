<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function postItem(Request $request) {
      $this->validate($request , [ 'item' => 'required' ]);
      $Item = new Item;
      $Item->item = $request->input('item');
      $Item->done = 0;
      $Item->user = Auth::user()->name;

      $Item->save();
      // add item to database
      return redirect('/user')->with('status', 'item added to database!');
    }

    public function showItem() {
      $Item = DB::select('select * from items');
      // return $Item;
      return view('components.viewItem')->with('Item',$Item);
    }

    public function showSpecificUser() {
      $Item = DB::select('select * from items where user=\''.Auth::user()->name.'\'');
      return view('user.viewItem')->with('Item',$Item);
    }

    public function doneItem($id) {
      $Item = Item::find($id);
      $status = '';
      if($Item->done==1) {
        $Item->done = 0;
        $status = $Item->item.' task is undone.';
      } else {
        $Item->done = 1;
        $status = $Item->item.' task is done.';
      }

      $Item->save();
      return redirect('/user')->with('status' , $status);
    }

    public function deleteItem($id) {
      $Item = Item::find($id)->delete();

      return redirect('/user')->with('status', 'item deleted from database');
    }
}
