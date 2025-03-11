<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $cartData = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1'
        ]);

        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to add items to the cart.');
        }

        $cart = Cart::where('user_id', Auth::id())
            ->where('product_id', $cartData['product_id'])
            ->first();

        if ($cart) {
            $cart->increment('quantity', $cartData['quantity']);
        } else {
            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $cartData['product_id'],
                'quantity' => $cartData['quantity']
            ]);
        }

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function showCart()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in first');
        }

        $cartItems = Cart::where('user_id', Auth::id())->with('product')->get();

        return view('cart', compact('cartItems'));
    }

    public function updateCart(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cartItem = Cart::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $cartItem->update(['quantity' => $request->quantity]);

        return redirect()->back()->with('success', 'Cart updated successfully!');
    }

    public function removeFromCart($id)
    {
        $cartItem = Cart::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $cartItem->delete();

        return redirect()->back()->with('success', 'Item removed from cart.');
    }
}
