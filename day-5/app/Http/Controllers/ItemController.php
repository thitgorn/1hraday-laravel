<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Item;

class ItemController extends Controller
{
    public function addItem($name) {
      $item = new Item;
      $item->item = $name;
      $item->done = 0;
      $item->save();

      return $item->id;
    }

    public function getItem() {
      return DB::select('select * from items');
    }

    public function deleteItem($id) {
      $Item = Item::find($id)->delete();
      return "";
    }

    public function doneItem($id) {
      $Item = Item::find($id);
      if($Item->done==1) {
        $Item->done = 0;
      } else {
        $Item->done = 1;
      }
      $Item->save();

      return "";
    }
}
