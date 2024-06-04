<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Module;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index(): View
    {
        return view('welcome', [
            'modules' => Module::all(),
        ]);
    }


    public function show(Request $request, string $id): View
    {
        $module = Module::findOrFail($id);
        return view('modules.show', [
            'module' => $module,
            'products' => $module->products,
        ]);
    }

    public function cart(Request $request)//: View
    {
        $products = [];
        $total_price = 0;
        $request->collect('products')->each(function (string $product_id) use (&$products, &$total_price) {
            $product = Product::findOrFail($product_id);
            $total_price += $product->price;

            $products[] = $product;
        });

        return view('modules.cart', [
                    'products' => $products,
                    'total_price' => $total_price
                ]);
    }
}
