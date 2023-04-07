<?php

namespace App\Http\Controllers;

use App\Events\OrderCreated;
use App\Http\Requests\CreateCustomerRequest;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Support\Facades\DB;


class CustomerController extends Controller
{
    public function index()
    {
        $data = DB::table('customers')
            ->leftJoin('orders', 'customers.id', '=', 'orders.customer_id')
            ->select('customers.name', 'customers.email', 'orders.total')
            ->orderBy('name', 'asc')
            ->get();

        return view('pages.orders-list', compact('data'));
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
