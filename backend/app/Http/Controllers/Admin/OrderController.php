<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\OrderDatatable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Order\UpdateOrderRequest;
use App\Models\Order;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(OrderDatatable $orderDatatable)
    {
        return $orderDatatable->render('admin.order.index', [$orderDatatable]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order): View
    {
        return view('admin.order.edit')->with(['order' => $order]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  User  $user
     */
    public function update(UpdateOrderRequest $request, Order $order): RedirectResponse
    {
        try {
            $order->update($request->validated());

            if ($order) {
                return redirect()->route('order.index')->withSuccess('Order successfully Updated');
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
    public function destroy(Order $order): RedirectResponse
    {
        try {
            $order->delete();

            return redirect()->back()->withSuccess('Order successfully deleted');
        } catch (Exception $ex) {
            return back()->withError('Order not deleted');
        }
    }
}
