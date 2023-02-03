<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CartController extends Controller
{
    public function cart_page()
    {
        $user = auth()->user();
        $cartItem = Cart::with('KitchenSet')->where('user_id', $user->id)->latest()->get();
        return view('cart', compact(["cartItem"]));
    }

    public function add_cart($id, Request $request)
    {
        User::find($id);

        $cart = new Cart();
        $cart = new Cart;
        $cart->nama = $request->nama;
        $cart->user_id = Auth::user()->id;
        $cart->cart_id = Auth::user()->id;
        $cart->harga = $request->harga;
        $cart->quantity = $request->quantity;
        $cart->image = $request->image;
        $cart->save();
        return redirect('/cart')->with('addItem', 'Berhasil Masuk Keranjang😍');
    }

    public function update_cart($id, $quantity)
    {
        $cart = Cart::findOrFail($id);
        $cart->quantity = $quantity;
        $cart->save();
        return redirect('/cart')->with('updateItem', 'Berhasil Masuk Keranjang😍');
    }

    public function destroy_cart($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return redirect("/cart");
    }

    // public function pesanbyDetail( $id, Request $request )
    // {
    //     User::find($id);
    //     $pesanan = new Cart();
    //     $pesanan = new Cart;
    //     $pesanan->nama = $request->nama;
    //     $pesanan->user_id = Auth::user()->id;
    //     $pesanan->cart_id = Auth::user()->id;
    //     $pesanan->harga = $request->harga;
    //     $pesanan->quantity = $request->quantity;
    //     $pesanan->image = $request->image;
    //     $pesanan->save();
    // }
}
