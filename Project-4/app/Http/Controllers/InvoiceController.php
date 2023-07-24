<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(){
        $invoices = Invoice::all();
        return view('invoices.invoices',['invoices'=>$invoices]);
    }

    public function show(){
        $invoices = Invoice::all();
        return response()->json(['invoices'=>$invoices]);
    }

    public function create(){
        return view("invoices.invoice_create",[
            "customers" => Customer::all(),
        ]);
    }

    public function store(Request $request){
        $invoice = $request->validate([
            "customer_id" => "required",
            "amount" => "required",
            "status" => "required",
            "billedDate" => "required",
            "paidDate" => "required",
        ]);

        Invoice::create($invoice);

        return redirect("customers");
    }

    public function edit(Invoice $invoice){
        return view("invoices.invoice_update",[
            "invoice" => $invoice,
            "customers" => Customer::all(),
        ]);
    }

    public function update(Invoice $invoice){
        $update = request()->validate([
            "customer_id" => "required",
            "amount" => "required",
            "status" => "required",
            "billedDate" => "required",
            "paidDate" => "required",
        ]);

        $invoice->update($update);

        return redirect("customers");
    }

    public function destroy(Invoice $invoice){
        $invoice->delete();
        return back();
    }

}