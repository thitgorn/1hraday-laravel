<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function submit(Request $request) {
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required'
      ]);

      return 'success';
    }
}
