<?php

namespace App\Http\Controllers;

use App\Models\{stickers,cart, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{DB,Auth};
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UpdateQuantityRequest as updateRequest;
use App\Http\Requests\DeleteItemCartRequest as deleteItemRequest;
use App\Http\Requests\AddCartRequest as cartRequest;
use App\Http\Requests\StickerCreateRequest as stickerRequest;

class StickersController extends Controller
{
    //
    public function addToCart(cartRequest $request){
        $validated_data = $request->validated();
        // dd($validated_data);
        $user= User::find(auth()->id());
        $addToCart = stickers::findOrFail($validated_data['id']);
        $exist_sticker = cart::where('user_id',$user->id)
        ->where('sticker_id',$validated_data['id'])->get()->first();
        if($exist_sticker == null){
            $user = User::find(auth()->id());
            $user->cart()->create([
                'title'=>$addToCart->title,
                'sticker_id'=>$addToCart->id,
                'type'=>$validated_data['type'],
                'size'=>$validated_data['size'],
                'price'=>$addToCart->price,
                'product_profile'=>$addToCart->product_profile,
            ]);
     
        // dd('Success');
        }
        else{
            $exist_sticker->update([
                'quantity'=> $exist_sticker->quantity + 1
            ]);
        }
        return Redirect::route('cart');
    }
    public function btnUpdateQuantity(updateRequest $request){
        $validated_data = $request->validated();
        $cart = cart::findOrFail($validated_data['id']);
        $cart->update($validated_data);
        return Redirect::back();
    }
    public function cartDeleteItem(deleteItemRequest $deleteRequest){
        $itemToDelete = cart::findOrFail($deleteRequest->validated()['id']);
        $itemToDelete->delete();
            return Redirect::back();
    }
    public function checkout(){
        $user = User::findOrFail(auth()->id());
        foreach(cart::where('user_id',auth()->id())->get() as $cartItem){
        //    dd($cartItem);
            $user->history()->create([
                'title'=>$cartItem->title,
                'price'=>$cartItem->price,
                'total'=>$cartItem->price * $cartItem->quantity,
                'size'=>$cartItem->size,
                'type'=>$cartItem->type,
                'product_profile'=>$cartItem->product_profile,
                'quantity'=>$cartItem->quantity,
                'status'=>'COMPLETED',
                'sticker_id'=>$cartItem->sticker_id,
            ]);
            $cartItem->delete();
            return Redirect::route('thankyou');
        }
    }

    public function addsticker(stickerRequest $request){
        $validated_data = $request->validated();
        $user = User::find(Auth::user()->id);
        // dd($validated_data);
        // if($request->has('product_profile')){
            // $path = $validated_data['product_profile']->storePublicly('ComplaintImages',  ['disk'=>'public']);
            $user->sticker()->create([
                'title'=>$validated_data['title'],
                'price'=>$validated_data['price'],
                'description'=>$validated_data['description'],
                'product_profile'=>'../../../../storage/images/Sticker.png'
            ]);
            
        // }else{
        //     // No Image
        // }
        dd('success');
       
    }
}
