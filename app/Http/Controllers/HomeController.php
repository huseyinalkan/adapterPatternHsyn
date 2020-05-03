<?php

namespace App\Http\Controllers;

use App\Http\Models\CashData;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $dolar=CashData::where('price_type','usd')
        ->orderBy('price_amount', 'asc')
        ->first();
        $euro=CashData::where('price_type','euro')
            ->orderBy('price_amount', 'asc')
            ->first();
        $siterlin=CashData::where('price_type','gbp')
            ->orderBy('price_amount', 'asc')
            ->first();

        return view('home',compact('dolar','euro','siterlin'));
    }
}
