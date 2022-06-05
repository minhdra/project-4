<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\customer_infos;
use App\Models\customers;
use App\Models\order_details;
use App\Models\orders;
use Illuminate\Http\Request;
use DB;
class ordersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = customer_infos::where('is_active', 1)->get();
        $orders = orders::where('is_active', 1)->get();
        foreach ($orders as $order) {
            $c = $order->customer;
            $c->info;
            $details = $order->details;
            $order->status;
            $order->discount;
            foreach ($details as $detail) {
                $b = $detail->book;
                $b->prices;
                $b->book_languages;
                $b->authors;
                $b->publishers;
                $b->categories;
            }
        }
        return ['orders'=>$orders, 'customers'=>$customers];
    }


    //ADMIN
    public function get_all(){
        $orders = orders::where('is_active', 1)->get();
        foreach ($orders as $order) {
            $c = $order->customer;
            $c->info;
            $details = $order->details;
            foreach($details as $detail){
                $detail->book;
            }
            $order->status;
        }
        return $orders;
    }

    public function update_status(Request $request){
        $db = orders::find($request->id);
        $db->order_status_id = $request->order_status_id;
        $db->save();
    }
    //ADMIN

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
        $db = new orders();
        $db->customer_id = $request->customer_id;
        $db->delivery_address = $request->delivery_address;
        $db->total = $request->total;
        $db->order_status_id = 1;
        $db->discount_id = $request->discount_id ?? null;
        $db->save();
        $details = $request->details;
        if($details) {
            $detail = new order_details();
            foreach($details as $item) {
                $detail->insertDetail($item, $db->id);
            }
        }

        return $this->show($db->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = orders::where('is_active', 1)->find($id);
        $c = $order->customer;
        $c->info;
        $details = $order->details;
        $order->status;
        $order->discount;
        foreach ($details as $detail) {
            $b = $detail->book;
            $b->prices;
            $b->book_languages;
            $b->authors;
            $b->publishers;
            $b->categories;
        }
        return $order;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $db = orders::where('is_active', 1)->find($id);
        $db->delivery_address = $request->delivery_address;
        $db->discount_id = $request->discount_id ?? null;
        $db->total = $request->total;
        $db->order_status_id = $request->order_status_id;
        $db->save();

        return $this->show($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = orders::findOrFail($id);
        $db->is_active = 0;
        $db->save();

        $details = order_details::where('order_id', $id)->get();
        if($details) {
            foreach($details as $item) {
                $item->is_active = 0;
                $item->save();
            }
        }

        return "Deleted";
    }

    public function getSellYear(){
        $order_group_by_month = orders::where('is_active',1)->whereYear('created_at',date('Y'))->get()->groupBy(function($data){
            return $data->created_at->format('m');
        });
        return $order_group_by_month;
    }

    public function getTopProductSell(){
        $count_quantity = order_details::whereMonth('created_at', date('m'))->get()->sum('quantity');
        $orderdetail_books =order_details::whereMonth('created_at', date('m'))->get()->groupBy(function($data){
            return $data->book_id;
        });

        foreach($orderdetail_books as $books){
            $sum_quantity = $books->sum('quantity');
            foreach($books as $book){
                $tmp_book = $book->book;
                $tmp_book->prices;
                $tmp_book->sum_quantity = $sum_quantity;
                $tmp_book->progress = $sum_quantity*100/$count_quantity;;
            }   
        }
        return [$orderdetail_books,$count_quantity];
    }

    public function getOrderToday(){
        return orders::whereDay('created_at',date('d'))->get()->count();
    }

    public function getSumPriceMonth(){
        return orders::whereMonth('created_at',date('m'))->get()->sum('total');
    }

    public function getQuantityCustomers(){
        return customers::whereMonth('created_at',date('m'))->get()->count();
    }

    public function getStatusAnalysis(){
        $orders = orders::where('is_active',1)->get();
        $status_1 = 0;
        $status_2 = 0;
        $status_3 = 0;
        $status_4 = 0;
        $status_5 = 0;
        $status_6 = 0;
        foreach($orders as $od){
            if($od->order_status_id == 1){
                $status_1++;
            }
            else if($od->order_status_id == 2){
                $status_2++;
            }
            else if($od->order_status_id == 3){
                $status_3++;
            }
            else if($od->order_status_id == 4){
                $status_4++;
            }
            else if($od->order_status_id == 5){
                $status_5++;
            }
            else{
                $status_6++;
            }
        }
        return [$status_1,$status_2,$status_3,$status_4,$status_5,$status_6];
    }
}
