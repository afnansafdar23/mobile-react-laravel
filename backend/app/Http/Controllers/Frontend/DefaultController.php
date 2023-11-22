<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ChildCategory;
use App\Models\ParentCategory;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DefaultController extends Controller
{
    public function home()
    {
        $parentCategories = ParentCategory::all();

        $products = Product::all();
        $subCategories = SubCategory::all();
        $products = Product::all();

        return view('frontend.home')->with(['parentCategories' => $parentCategories, 'subCategories' => $subCategories, 'products' => $products]);
    }

    public function navbar()
    {
        $parentCategories = ParentCategory::all();

        $products = Product::all();
        return view('frontend.assets.navbar')->with(
            [
                'parentCategories' => $parentCategories,
                'products' => $products
            ]
        );
    }

    public function productByCat(ParentCategory $parentCategory): View
    {
        $allProducts = Product::with('subCategory')->paginate(4);
        $parentCategories = ParentCategory::with('childCategories.subCategories.products')->get();

        // Initialize an empty array to store products
        $products = [];

        foreach ($parentCategories as $parentCat) {
            foreach ($parentCat->childCategories as $childCategory) {
                foreach ($childCategory->subCategories as $subCategory) {
                    foreach ($subCategory->products as $product) {
                        $mediaUrl = $product->getFirstMediaUrl('product.image');
                    }
                    $products = $subCategory->products;
                }
            }
        }
        return view('frontend.product-parent-cat')->with([
            'parentCategory' => $parentCategory,
            'parentCategories' => $parentCategories,
            'products' => $products,
            'product' => $product,
            'allProducts' => $allProducts,
            'mediaUrl' => $mediaUrl
        ]);
    }


    public function productByChildCat(int $id): View
    {
        $products = Product::all();
        $allProducts = Product::with('subCategory')->paginate(4);
        $childCategory = ChildCategory::find($id);
        $parentCategories = ParentCategory::with('childCategories')->get();
        $subCategories = SubCategory::with('products', 'childCategory')->get();
        foreach ($subCategories as $subCategory) {
            $products = $subCategory->products;
        }
        return view('frontend.product-child-cat')->with(['childCategory' => $childCategory, 'subCategories' => $subCategories, 'parentCategories' => $parentCategories, 'products' => $products, 'allProducts' => $allProducts]);
    }

    public function productBySubCat(SubCategory $subCategory): View
    {
        $allProducts = Product::with('subCategory')->paginate(4);
        $parentCategories = ParentCategory::with('childCategories')->get();
        $subCategories = SubCategory::with('products', 'childCategory')->get();
        foreach ($subCategories as $subCategory) {
            $products = $subCategory->products;
        }
        $products = Product::all();
        return view('frontend.product-sub-cat')->with(['products' => $products, 'subCategory' => $subCategory, 'subCategories' => $subCategories, 'parentCategories' => $parentCategories, 'products' => $products, 'allProducts' => $allProducts]);
    }

    public function detailedProduct(Product $product): View
    {
        $allProducts = Product::paginate(4);
        $parentCategories = ParentCategory::all();
        $childCategories = ChildCategory::all();

        $products = Product::all();

        return view('frontend.single-product')->with(['products' => $products, 'parentCategories' => $parentCategories, 'childCategories' => $childCategories, 'product' => $product, 'allProducts' => $allProducts]);
    }

    public function contact()
    {
        $parentCategories = ParentCategory::all();

        $products = Product::all();
        $childCategories = ChildCategory::all();

        return view('frontend.contact')->with(['parentCategories' => $parentCategories, 'childCategories' => $childCategories, 'products' => $products]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->discounted_price,
                "image" => $product->getFirstMediaUrl('product.image')
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function updateCart(Request $request)
    {
        dd('as');
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function removeCart(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }


    public function career()
    {
        $parentCategories = ParentCategory::all();

        $products = Product::all();
        return view('frontend.career')->with(
            [
                'parentCategories' => $parentCategories,
                'products' => $products
            ]
        );
    }

    public function about()
    {
        $parentCategories = ParentCategory::all();

        $products = Product::all();
        return view('frontend.about')->with(
            [
                'parentCategories' => $parentCategories,
                'products' => $products
            ]
        );
    }

    public function allBlog()
    {
        $parentCategories = ParentCategory::all();

        $products = Product::all();
        return view('frontend.all-blogs')->with(
            [
                'parentCategories' => $parentCategories,
                'products' => $products
            ]
        );
    }

    public function singleBlog()
    {
        $parentCategories = ParentCategory::all();

        $products = Product::all();
        return view('frontend.single-blog')->with(
            [
                'parentCategories' => $parentCategories,
                'products' => $products
            ]
        );
    }

    public function webLogin()
    {
        $parentCategories = ParentCategory::all();

        $products = Product::all();
        return view('frontend.auth.login')->with(
            [
                'parentCategories' => $parentCategories,
                'products' => $products
            ]
        );
    }

    public function termCondition()
    {
        $parentCategories = ParentCategory::all();

        $products = Product::all();
        return view('frontend.term-conditions')->with(
            [
                'parentCategories' => $parentCategories,
                'products' => $products
            ]
        );
    }

    public function dataPrivacy()
    {
        $parentCategories = ParentCategory::all();

        $products = Product::all();
        return view('frontend.data-privacy')->with(
            [
                'parentCategories' => $parentCategories,
                'products' => $products
            ]
        );
    }
}
