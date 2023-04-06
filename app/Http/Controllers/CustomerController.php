<?php

namespace App\Http\Controllers;

use App\Events\OrderCreated;
use App\Http\Requests\CreateCustomerRequest;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Client\Request;


class CustomerController extends Controller
{
    public function index()
    {
        return view('pages.orders-list', [
            'customers' => Customer::all()
        ]);
    }


    public function create()
    {
        return view('pages.orders', [
            'customers' => Customer::all()
        ]);
    }
    public function store(CreateCustomerRequest $request)
    {
        $order = new Order($request->validated());
        $order->save();
        event(new OrderCreated($order));

        return redirect()->route('orders-list.index');
    }

}
