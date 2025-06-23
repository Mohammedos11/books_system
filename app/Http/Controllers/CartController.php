<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function ajaxAdd(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $price = $request->input('price');
        $quantity = $request->input('quantity');

        $cart = session('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity;
            $cart[$id]['subtotal'] = $cart[$id]['quantity'] * $cart[$id]['price'];
        } else {
            $cart[$id] = [
                'name' => $name,
                'price' => $price,
                'quantity' => $quantity,
                'subtotal' => $price * $quantity
            ];
        }

        session(['cart' => $cart]);

        $totalItems = array_sum(array_column($cart, 'quantity'));
        $totalPrice = array_sum(array_column($cart, 'subtotal'));

        session(['cart_total_items' => $totalItems, 'cart_total_price' => $totalPrice]);

        return response()->json([
            'status' => 'success',
            'total_items' => $totalItems,
            'total_price' => $totalPrice
        ]);
    }
}
