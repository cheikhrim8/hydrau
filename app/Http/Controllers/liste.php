<?php

namespace App\Http\Controllers;

use App\Models\Signale;
use Illuminate\Http\Request;

class liste extends Controller
{
    public function index()
    {
        $signales = signale::all();
        return view('pages.table_list',compact('signales'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }
}
