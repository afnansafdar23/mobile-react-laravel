<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\StoreOrderRequest;
use App\Models\Order;
use App\Models\ParentCategory;
use App\Models\Product;
use App\Models\SubCategory;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Stripe;

class CheckoutController extends Controller
{

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */

    public function cart(): View
    {
        $parentCategories = ParentCategory::all();
        $cartData = session('cart', []);

        // Convert array data to Product models
        $products = collect($cartData)->map(function ($productData, $productId) {
            $product = new Product($productData);
            $product->id = $productId; // Set the product ID
            return $product;
        });

        return view('frontend.cart')->with(['parentCategories' => $parentCategories, 'products' => $products]);
    }
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        if (session('cart'));
        foreach (session('cart') as $id => $details) {
            $total = $details['price'] * $details['quantity'];
            $user = Auth::user();
            $customer = Customer::create(array(
                "address" => $user->address,
                "email" => $user->email,
                "name" => $user->name,
                "source" => $request->stripeToken
            ));
            Charge::create([
                "amount" => $total * 100,
                "currency" => "usd",
                "customer" => $customer->id,
                "description" => 'dsada',
                "shipping" => [
                    "name" => "Jenny Rosen",
                    "address" => [
                        "line1" => "510 Townsend St",
                        "postal_code" => "98140",
                        "city" => "San Francisco",
                        "state" => "CA",
                        "country" => "US",
                    ],
                ]
            ]);
        }
        Session::flash('success', 'Payment successful!');
        return back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeOrder(StoreOrderRequest $request): RedirectResponse
    {
        try {
            $order = Order::create($request->validated());

            if ($order) {
                return redirect()->route('home')->withSuccess('Order Placed successfully');
            } else {
                return back()->withError('Something went wrong !');
            }
        } catch (Exception $ex) {
            return back()->withError('Something went wrong !');
        }
    }
}
