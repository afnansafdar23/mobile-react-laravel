<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ParentCategory\StoreCategoryRequest;
use App\Http\Requests\ParentCategory\UpdateCategoryRequest;
use App\Models\ParentCategory;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ParentCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $parentCategories = ParentCategory::all();

        return view('admin.parent-category.index')->with(['parentCategories' => $parentCategories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request): RedirectResponse
    {
        try {
            $parentCategory = ParentCategory::create($request->validated());

            if ($request['image']) {
                $parentCategory->addMedia(storage_path('tmp/uploads/' . $request['image']))->toMediaCollection('parentCategory.image');
            }
            if ($parentCategory) {
                return redirect()->route('parent.category.index')->withSuccess('Parent Category successfully created');
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
     * Update the specified resource in storage.
     *
     * @param  User  $user
     */
    public function update(UpdateCategoryRequest $request, ParentCategory $parentCategory): RedirectResponse
    {
        try {
            $parentCategory->update($request->validated());

            if (isset($request['image']) == null) {
                $parentCategory->clearMediaCollection('parentCategory.image');
            } else {
                if (!file_exists(storage_path('tmp/uploads/' . $request['image']))) {
                    return redirect()->route('parent.category.index')->withSuccess('Parent Category successfully Updated');
                }
                $parentCategory->media()->delete();
                $parentCategory->addMedia(storage_path('tmp/uploads/' . $request['image']))->toMediaCollection('parentCategory.image');
            }

            if ($parentCategory) {
                return redirect()->route('parent.category.index')->withSuccess('Parent Category successfully Updated');
            } else {
                return back()->withError('Something went wrong !');
            }
        } catch (Exception $ex) {
            return back()->withError($ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ParentCategory $parentCategory): RedirectResponse
    {
        try {
            $parentCategory->delete();

            return redirect()->back()->withSuccess('Parent Category successfully deleted');
        } catch (Exception $ex) {
            return back()->withError('Parent Category not deleted');
        }
    }
}
