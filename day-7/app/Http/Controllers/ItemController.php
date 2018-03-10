<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Item;

class ItemController extends Controller
{
    public function getItem() {
      $username = (Auth::user()->name);
      $permission = Auth::user()->permission;
      $Items = "item";
      if($permission > 0) {
        $Items = $this->getAllItem();
      } else {
        $Items = $this->getUserItem($username);
      }
      return view('user.manage',["Items" => $Items]);
    }

    public function getItems() {
      $Items = $this->getAllItem();
      return view('inc.Item.viewTodo',["Items" => $Items]);
    }

    private function getAllItem() {
      $Items = DB::select('select * from items');
      return $Items;
    }

    private function getUserItem($username) {
      $Items = DB::select('select * from items where user = \''.$username.'\'');
      return $Items;
    }

    public function addItem(Request $request) {
      $request->validate([
        'Item' => 'required',
      ]);

      $username = (Auth::user()->name);

      $Item = new Item;
      $Item->name = $request->Item;
      $Item->user = $username;
      $Item->save();

      return redirect('/manage')->with('message','HELLO THERE');
    }

    public function deleteItem($id) {
      $Item = Item::find($id);
      if(Auth::user()->name != $Item->user) {
        return redirect('/manage')->with('message', "you don't have permission to delete ".$Item->name);
      }
      $Item->delete();
      return redirect('/manage');
    }

    public function toggleItem($id) {
      $Item = Item::find($id);
      $Item->done = !$Item->done;
      $Item->save();
      return redirect('/manage');
    }
}
