<?php

namespace App\Http\Controllers;

use App\Models\{stickers, User};
use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    //
    public function index(){
        $stickers = stickers::with('otherImages')->limit(5)->get();
        $artist = User::limit(5)->get();
        // dd($artist);
        return Inertia::render('StickyGo/index',[
            'Stickers'=>$stickers,
            'Artist'=>$artist
        ]);
    }
    public function aboutUs(){
        return Inertia::render('StickyGo/Page/AboutUs',[
            
        ]);
    }
    public function shop(){
        $stickers = stickers::with('otherImages')->limit(20)->paginate(20);
        return Inertia::render('StickyGo/Page/Shop',[
            'Stickers'=>$stickers
        ]);
    }
    public function contact(){
        return Inertia::render('StickyGo/Page/Contact',[

        ]);
    }
}
