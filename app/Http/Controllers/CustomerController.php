<?php

namespace App\Http\Controllers;



use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use Illuminate\Foundation\Http\FormRequest;


class CustomerController extends Controller
{

    public function index()
    {
        $customers = Customer::all();

        return view('pages.customers', [
            'customers' => $customers
        ]);
    }

    public function create()
    {
        return view('pages.customers-form-create');
    }

    /**
     * @param  CustomerRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(CustomerRequest $request): \Illuminate\Http\RedirectResponse
    {
        Customer::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ])->save();


        return redirect()->route('customers.index')->with('success', 'Customer has been saved successfully.');
    }


}



