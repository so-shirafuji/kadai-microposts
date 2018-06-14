<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserfavoriteController extends Controller
{

    public function store(Request $request, $id)
    {
       \Auth::user()->favorite($id);
        return redirect()->back();
    }

    public function destroy($id)
    {
         \Auth::user()->unfavorite($id);
        return redirect()->back();
    }
}
