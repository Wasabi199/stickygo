<?php

namespace App\Http\Controllers;

use App\Models\{cart, stickers, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Support\Facades\Request as QueryRequest;

class IndexController extends Controller
{
    //
    public function index(QueryRequest $query){
        $stickers = stickers::with('otherImages')->limit(5)->get();
        $artist = User::limit(5)->get();
      
        $searchSticker = stickers::filter($query::only('search'))->get();
        $filters = $query::all('search');
        return Inertia::render('StickyGo/index',[
            'Stickers'=>$stickers,
            'Artist'=>$artist,
            'Search'=>$searchSticker,
            'filters'=>$filters,
        ]);
    }
    public function aboutUs(QueryRequest $query){
        $searchSticker = stickers::filter($query::only('search'))->get();
        $filters = $query::all('search');
        return Inertia::render('StickyGo/Page/AboutUs',[
            'Search'=>$searchSticker,
            'filters'=>$filters,
        ]);
    }
    public function shop(QueryRequest $query){
        $searchSticker = stickers::filter($query::only('search'))->get();
        $filters = $query::all('search');
        $stickers = stickers::with('otherImages')->limit(20)->paginate(20);
        return Inertia::render('StickyGo/Page/Shop',[
            'Stickers'=>$stickers,
            'Search'=>$searchSticker,
            'filters'=>$filters,
        ]);
    }
    public function contact(QueryRequest $query){
        $searchSticker = stickers::filter($query::only('search'))->get();
        $filters = $query::all('search');
        return Inertia::render('StickyGo/Page/Contact',[
            'Search'=>$searchSticker,
            'filters'=>$filters,
        ]);
    }
 
    public function cart(QueryRequest $query){
        $searchSticker = stickers::filter($query::only('search'))->get();
        $filters = $query::all('search');
        
        $user = User::find(auth()->id());
        $cart = cart::where('user_id',$user->id)->get();
        // dd($cart);
        $cart_total = 0;
        foreach(cart::where('user_id',$user->id)->get() as $price){
            $cart_total = $cart_total + ($price->price * $price->quantity);
        }
        return Inertia::render('StickyGo/Page/Cart',[
            'Cart'=>$cart,
            'Subtotal'=>$cart_total,
            'Search'=>$searchSticker,
            'filters'=>$filters,
        ]);
    }
}
