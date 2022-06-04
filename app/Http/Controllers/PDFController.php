<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orders;
use Barryvdh\DomPDF\Facade as PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF($id,$staffName)
    {
        $order= orders::where('is_active',1)->where('id',$id)->first();
        $customer = $order->customer;
        $customer->info;
        $orderdetails = $order->details;
        foreach($orderdetails as $orderdetail){
            $book = $orderdetail->book;
            $book->prices;
        }
        $data = [
            'order' => $order,
            'staffName' => $staffName
        ];

        $pdf = PDF::loadView('admin.myPDF', $data);
     
        return $pdf->download('order.pdf');
    }
}
