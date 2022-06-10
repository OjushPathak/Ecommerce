<!DOCTYPE html>
<html>
   <head>
    <base href="/public">
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="home/images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">

      <style>
        .img_deg{
            height: 60px;
            width: 60px;
            border-radius:50%;

        }
      </style>



   </head>
   <body>




      <div class="hero_area">
         







        @include('home.header') <!-- header section -->

        @if (session()->has('message'))

        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

        {{session()->get('message')}}
        </div>

        @endif





        <div class="container py-5" align="center">

     

       
     
     <table class="table table-striped" >
       <thead>
         <tr align="center">
           <th style="font-weight: bold">Product Title</th>
           
           <th style="font-weight: bold">Product Quantity</th>
           
           <th style="font-weight: bold">Price</th>
           
           <th style="font-weight: bold">Product Image</th>

           <th style="font-weight: bold">Action</th>
         
           
           
         </tr>
       </thead>

       <?php $totalprice=0;?>


        @foreach ($cart as $cart)
            
       <tbody>
         <tr align="center">

           <td>{{$cart->product_title}}</td>
           <td>{{$cart->quantity}}</td>
           <td>Rs {{$cart->price}}/-</td>
           <td>
            <img class="img_deg" src="/product/{{$cart->image}}" alt="">
           </td>
           <td><a href="{{url('remove_cart',$cart->id)}}" onclick="return confirm('Are you sure to remove the item from cart?')" class="btn btn-danger">Remove</a></td>
          

           
           

         </tr>

         <?php $totalprice = $totalprice + $cart->price ?>
         
         
         
       </tbody>

       @endforeach
      
    

       
     
       
   
     </table>

     <div class="">
        <h1 style="font-size:20px; padding: 40px; font-family: 'Open Sans', sans-serif; ">Total Price = {{$totalprice}} </h1>
     </div>

     <div class="">
            <h1 style="font-size:25px; padding-bottom:15px;  font-family: 'Open Sans', sans-serif;font-weight:bold;">Proceed To Order</h1>
            <a href="{{url('cash_order')}}" class="btn btn-info">Cash On Delivery</a>
            <a href="" class="btn btn-info">Pay Using Card</a>



         </div>
     
     </div>



    











      
         
      </div>












         






      
      
      <div class="cpy_">
         <p class="mx-auto">© 2022 All Rights Reserved By <a>Ecommerce</a><br>
         
           
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>