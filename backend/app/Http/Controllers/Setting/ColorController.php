<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Http\Requests\Color\StoreColorRequest;
use App\Http\Requests\Color\UpdateColorRequest;
use App\Models\Color;
use Exception;
use Illuminate\Http\RedirectResponse;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colors = Color::all();
        return view('admin.setting.color')->with('colors', $colors);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreColorRequest $request): RedirectResponse
    {
        try {
            Color::create($request->validated());

            return redirect()->route('color.index')->withSuccess('Color created successfully');
        } catch (Exception $ex) {
            return back()->withError('Something Went Wrong');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateColorRequest $request, Color $color): RedirectResponse
    {
        try {
            $color->update($request->validated());


            return redirect()->route('color.index')->withSuccess('Color updated successfully');
        } catch (Exception $ex) {
            return back()->withError('Something Went Wrong');
        }
    }


    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Color $color): RedirectResponse
    {
        try {
            // Delete the Color record
            $color->delete();

            return redirect()->route('color.index')->withSuccess('Color deleted successfully');
        } catch (Exception $ex) {
            return back()->withError('Something Went Wrong');
        }
    }
}
