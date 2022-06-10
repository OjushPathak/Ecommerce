<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
</head>
<body>

<h1>Order Details</h1>

Customer name:<h3>{{$order-> name}}</h3>
Customer email:<h3>{{$order-> email}}</h3>
Customer phone:<h3>{{$order-> phone}}</h3>
Customer address:<h3>{{$order-> address}}</h3>
Customer ID:<h3>{{$order-> user_id}}</h3>


Product name :<h3>{{$order-> product_title}}</h3>
Product price :<h3>Rs. {{$order-> price}}/-</h3>
Product quantity :<h3>{{$order-> quantity}}</h3>
Payment status :<h3>{{$order-> payment_status}}</h3>
Product ID:<h3>{{$order-> product_id}}</h3>
</body>
</html>