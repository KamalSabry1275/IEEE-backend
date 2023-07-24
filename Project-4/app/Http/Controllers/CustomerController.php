<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use COM;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customer = Customer::latest();
        if(request(['search'])){
            $customer->filter();
        }

        return view("customers.customers",[
            "customers"=>$customer->simplePaginate(5),
        ]);
    }

    public function create(){
        return view("customers.customer_create");
    }

    public function store(Request $request){
        $customer = $request->validate([
            "name" => "required",
            "type" => "required",
            "email" => "required",
            "address" => "required",
            "city" => "required",
            "state" => "required",
            "postalCode" => "required",
        ]);

        Customer::create($customer);

        return redirect("customers");
    }

    public function show(Customer $customer){
        if(request(["status"])){
            $invoices = $customer->invoices()->filter();
        }else{
            $invoices = $customer->invoices();
        }

        return view("invoices.invoices",[
            "customer" => $customer->where(["name" => $customer->name])->get(),
            "invoices" => $invoices->simplePaginate(2),
        ]);
    }

    public function edit(Customer $customer){
        return view("customers.customer_update",["customer" => $customer]);
    }

    public function update(Customer $customer){
        $update = request()->validate([
            "name" => "required|unique:customers,name,".$customer->id,
            "type" => "required",
            "email" => "required|unique:customers,email,".$customer->id,
            "address" => "required",
            "city" => "required",
            "state" => "required",
            "postalCode" => "required",
        ]);

        $customer->update($update);

        return redirect("customers");
    }

    public function destroy(Customer $customer){
        $customer->delete();
        return redirect("/customers");
    }
}