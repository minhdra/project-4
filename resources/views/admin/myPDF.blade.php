<!DOCTYPE html>
<html>
<head>
    <title>Order</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style>
        body {
            font-family: DejaVu Sans;
        }
        table, td, th {
  border: 1px solid;
}

table {
  width: 100%;
  border-collapse: collapse;
}

    </style>
</head>
<body>
    <div>
        <div style="width:50%;float:left;text-align:center;align-items:center;">
            <h2>Book Worm</h2>
            <p>Hiệu sách online cho mọi người</p>
            <p>0976994888 - 0928756999</p>
        </div>
        <div style="width:50%;float:right;text-align:center;align-items:center;">
            <h2>Hóa đơn bán hàng</h2>
            <p>Ngày tạo đơn: {{date_format($order->created_at,"d/m/Y")}}</p>
            <p>------------------------------</p>
        </div>
    </div>

    <p>Khách hàng: {{$order->customer->info->full_name}}</p>
    <p>Địa chỉ nhận hàng: {{$order->delivery_address}}</p>
    <p>Số điện thoại: {{$order->customer->info->phone}}</p>
    <table>
        <tr>
            <th style="width: 35%;">Sản phẩm</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
        </tr>
        @foreach($order->details as $orderdetail)
        <tr>
            <td style="width: 35%;">{{ $orderdetail->book->book_name }}</td>
            <td align="right">{{ number_format($orderdetail->quantity) }}</td>
            <td align="right">{{ number_format($orderdetail->single_price) }}</td>
            <td align="right">{{ number_format($orderdetail->single_price*$orderdetail->quantity) }}</td>
        </tr>
        @endforeach
        <tr>
            <td>Tổng cộng</td>
            <td></td>
            <td></td>
            <td align="right">{{number_format($order->total)}}</td>
        </tr>
    </table>
  
    <div>
        <div style="width:50%;float:left;text-align:center;align-items:center;">
            <h4>Người mua hàng</h4>
            <p>(Ký rõ họ tên)</p>
        </div>
        <div style="width:50%;float:right;text-align:center;align-items:center;">
            <p>Ngày.....Tháng.....Năm 20...</p>
            <h4>Người tạo hóa đơn</h4>
            <p>{{$staffName}}</p>
        </div>
    </div>

</body>
</html>