<?php

namespace App\Http\Controllers;

use App\Events\OrderCreated;
use App\Http\Requests\CreateCustomerRequest;
use App\Models\Customer;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('customer')->get();

        return view('pages.orders',[
            'orders' => $orders
        ]);
    }

    public function create()
    {
        $orders = Order::with('customer')->get();

        return view('pages.create-orders',[
            'orders' => $orders
        ]);
    }
    public function store(CreateCustomerRequest $request)
    {
        $order = new Order($request->validated());
        $order->save();
        event(new OrderCreated($order));

        return redirect()->route('orders.index');
    }

}
