<?php

namespace App\Http\Controllers;

use App\Models\{cart, stickers, User, comment, personalInformation};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Support\Facades\Request as QueryRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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
    public function productProfile($id){
        $searchSticker = stickers::filter(QueryRequest::only('search'))->get();
        $filters = QueryRequest::all('search');
        $product = stickers::with('user')->findOrFail($id);
        $comments = comment::with('user')->where('sticker_id',$product->id)->limit(3)->paginate(3);
        $stickers = stickers::limit(5)->get();
        return Inertia::render('StickyGo/Page/ProductProfile',[
            'Search'=>$searchSticker,
            'filters'=>$filters,
            'Product'=>$product,
            'Comment'=>$comments,
            'Stickers'=>$stickers,
        ]);
    }

    public function history(){
        $searchSticker = stickers::filter(QueryRequest::only('search'))->get();
        $filters = QueryRequest::all('search');
        $history = User::with('history')->find(auth()->id());
        
        return Inertia::render('StickyGo/Page/History',[
            'Search'=>$searchSticker,
            'filters'=>$filters,
            'History'=>$history
        ]);
    }

    public function help(){
        $searchSticker = stickers::filter(QueryRequest::only('search'))->get();
        $filters = QueryRequest::all('search');

        return Inertia::render('StickyGo/Page/Help',[
            'Search'=>$searchSticker,
            'filters'=>$filters,
        ]);
    }

    public function checkOut(){
        $searchSticker = stickers::filter(QueryRequest::only('search'))->get();
        $filters = QueryRequest::all('search');

        $cart = cart::where('user_id',Auth::user()->id)->get();
        $info = personalInformation::where('user_id',Auth::user()->id)->get()->first();
        
        return Inertia::render('StickyGo/Page/CheckOut',[
            'Search'=>$searchSticker,
            'filters'=>$filters,
            'Cart'=>$cart,
            'Info'=>$info
        ]);
    
    }

    public function thankyou(){
        $searchSticker = stickers::filter(QueryRequest::only('search'))->get();
        $filters = QueryRequest::all('search');
        return Inertia::render('StickyGo/Page/ThankYou',[
            'Search'=>$searchSticker,
            'filters'=>$filters,
            
  ]);
    }
    public function profile(){
        $searchSticker = stickers::filter(QueryRequest::only('search'))->get();
        $filters = QueryRequest::all('search');
        $artist = User::findOrFail(Auth::user()->id);
        $sticker = stickers::where('user_id',$artist->id)->get();
        return Inertia::render('StickyGo/Page/Profile',[
            'Search'=>$searchSticker,
            'filters'=>$filters,
            'Artist'=>$artist,
            'Stickers'=>$sticker,
  ]);
    }
    public function addWork(){
        $searchSticker = stickers::filter(QueryRequest::only('search'))->get();
        $filters = QueryRequest::all('search');
       
        return Inertia::render('StickyGo/Page/AddWork',[
            'Search'=>$searchSticker,
            'filters'=>$filters,
            
            
  ]);
    }
    public function artistProfile($id){
        $searchSticker = stickers::filter(QueryRequest::only('search'))->get();
        $filters = QueryRequest::all('search');
        $artist = User::findOrFail($id);
        $sticker = stickers::where('user_id',$artist->id)->get();
        return Inertia::render('StickyGo/Page/ArtistProfile',[
            'Search'=>$searchSticker,
            'filters'=>$filters,
            'Artist'=>$artist,
            'Stickers'=>$sticker
            
  ]);
    }

    public function settings(){
        $searchSticker = stickers::filter(QueryRequest::only('search'))->get();
        $filters = QueryRequest::all('search');
        return Inertia::render('StickyGo/Page/Settings',[
            'Search'=>$searchSticker,
            'filters'=>$filters,
]);
    }
}
