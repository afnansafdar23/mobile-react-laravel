<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ProductDatatable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\Color;
use App\Models\SubCategory;
use App\Models\Product;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $products = Product::all();
        $subCategories = SubCategory::all();
        $colors = Color::all();
        return view('admin.product.index')->with(['products' => $products, 'subCategories' => $subCategories, 'colors' => $colors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Media $media): View
    {
        $subCategories = SubCategory::all();
        $images = $media->get();

        return view('admin.product.create')->with(['subCategories' => $subCategories, 'images' => $images]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request): RedirectResponse
    {

        try {
            $product = Product::create($request->validated());

            if ($request['image']) {
                $product->addMedia(storage_path('tmp/uploads/' . $request['image']))->toMediaCollection('product.image');
            }
            if ($product) {
                return redirect()->route('product.index')->withSuccess('Product successfully created');
            } else {
                return back()->withError('Something went wrong !');
            }
        } catch (Exception $ex) {
            return back()->withError($ex->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product): View
    {
        $subCategories = SubCategory::all();

        return view('admin.product.edit')->with(['product' => $product, 'subCategories' => $subCategories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product): RedirectResponse
    {
        try {
            $product->update($request->validated());

            if (isset($request['image']) == null) {
                $product->clearMediaCollection('product.image');
            } else {
                if (!file_exists(storage_path('tmp/uploads/' . $request['image']))) {
                    return redirect()->route('product.index')->withSuccess('Product successfully Updated');
                }
                $product->media()->delete();
                $product->addMedia(storage_path('tmp/uploads/' . $request['image']))->toMediaCollection('product.image');
            }

            if ($product) {
                return redirect()->route('product.index')->withSuccess('Product successfully Updated');
            } else {
                return back()->withError('Something went wrong !');
            }
        } catch (Exception $ex) {
            return back()->withError('Something went wrong !');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): RedirectResponse
    {
        try {
            $product->delete();

            return redirect()->back()->withSuccess('Product successfully deleted');
        } catch (Exception $ex) {
            return back()->withError('Child Category not deleted');
        }
    }
}
