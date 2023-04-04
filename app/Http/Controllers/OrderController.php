<?php

namespace App\Http\Controllers;

use App\Events\OrderCreated;
use App\Http\Requests\CreateCustomerRequest;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('pages.list', [
            'customers' => Customer::all()
        ]);
    }

    public function create(CreateCustomerRequest $request)
    {
        $order = new Order($request->validated());
        $order->save();
        event(new OrderCreated($order));

        return redirect()->route('list.index');
    }
    public function store()
    {
        return view('orders', [
            'customers' => Customer::all(),
        ]);
    }

}
