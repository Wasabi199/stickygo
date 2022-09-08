<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    //
    public function index(){
        return Inertia::render('StickyGo/index',[

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
    public function contact(){
        return Inertia::render('StickyGo/Page/Contact',[

        ]);
    }
}
