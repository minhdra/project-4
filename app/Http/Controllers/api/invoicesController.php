<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\invoice_details;
use App\Models\invoices;
use App\Models\books;
use DateTime;
use Illuminate\Http\Request;

class invoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = invoices::where('is_active',1)->get();
        foreach($invoices as $invoice){
            $invoice->publishers;
            $invoice->staff;
        }
        return $invoices;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $invoice = new invoices();
        $invoice->publisher_id = $request->publisher_id;
        $invoice->staffID = $request->staffID;
        $invoice->invoice_date = new DateTime();
        $invoice->total = $request->total;
        $invoice->discount = $request->discount;
        $invoice->status = 1;
        $invoice->save();

        $id = $invoice->id;

        $invoice_details = $request['invoice_details'];
        foreach($invoice_details as $invoice_detail){
            $db_book = books::where('is_active',1)->find($invoice_detail['bookID']);
            $db_book->quantity += $invoice_detail['quantity'];
            $db_book->save();
            $db_invoice_detail = new invoice_details();
            $db_invoice_detail->invoiceID = $id;
            $db_invoice_detail->bookID = $invoice_detail['bookID'];
            $db_invoice_detail->quantity = $invoice_detail['quantity'];
            $db_invoice_detail->discount = $invoice_detail['discount'];
            $db_invoice_detail->price = $invoice_detail['price'];

           
            $db_invoice_detail->total = $invoice_detail['total'];
            $db_invoice_detail->save();
        }
        return $invoice;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\invoices  $invoices
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice = invoices::find($id);
        $invoice_details = $invoice->invoice_details;
        $invoice->publishers;
        $invoice->staff;
        foreach($invoice_details as $invoice_detail){
            $invoice_detail->books;
        }
        return $invoice;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\invoices  $invoices
     * @return \Illuminate\Http\Response
     */
    public function edit(invoices $invoices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\invoices  $invoices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $invoice = invoices::find($id);
        $invoice->publisher_id = $request->publisher_id;
        $invoice->staffID = $request->staffID;
        $invoice->total = $request->total;
        $invoice->discount = $request->discount;
        $invoice->status = $request->status;
        $invoice->save();

        $invoice_details = $request['invoice_details'];
        foreach($invoice_details as $invoice_detail){

            $db_book = books::where('is_active',1)->find($invoice_detail['bookID']);
            

            $db_invoice_detail = invoice_details::find($invoice_detail['id']);
            $db_invoice_detail->bookID = $invoice_detail['bookID'];
            $margin_quantity =  $db_invoice_detail->quantity - $invoice_detail['quantity'];
            if($margin_quantity > 0){
                //Giảm số lượng
                $db_book->quantity -= $margin_quantity;
            }
            else if($margin_quantity == 0){
                continue;
            }
            else{
                //Tăng số lượng
                $db_book->quantity += $margin_quantity;
            }
            $db_book->save();

            $db_invoice_detail->quantity = $invoice_detail['quantity'];
            $db_invoice_detail->discount = $invoice_detail['discount'];
            $db_invoice_detail->price = $invoice_detail['price'];
            $db_invoice_detail->total = $invoice_detail['total'];
            $db_invoice_detail->save();
        }
        return $invoice;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\invoices  $invoices
     * @return \Illuminate\Http\Response
     */
    public function destroy(invoices $invoices)
    {
        //
    }
}
