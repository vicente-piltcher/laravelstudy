<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request){

        $request->get('id');  
        $series = [
            'BreakingBad',
            'THTH',
            'Lucifer',
        ];

        return view('series.index', compact('series'));
    }
}
