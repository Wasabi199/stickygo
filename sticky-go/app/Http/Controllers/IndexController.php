<?php

namespace App\Http\Controllers;

use App\Models\stickers;
use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    //
    public function index(){
        $stickers = stickers::with('otherImages')->limit(5)->get();
        // dd($stickers);
        return Inertia::render('StickyGo/index',[
            'Stickers'=>$stickers
        ]);
    }
    public function aboutUs(){
        return Inertia::render('StickyGo/Page/AboutUs',[
            
        ]);
    }
    public function shop(){
        return Inertia::render('StickyGo/Page/Shop',[
            
        ]);
    }
}
