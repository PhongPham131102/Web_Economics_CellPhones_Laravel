<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function seacrh(request $request)
    {
        return redirect()->route('TimKiem1',$request->content);
    }
}
