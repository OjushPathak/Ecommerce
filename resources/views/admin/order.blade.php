<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin- Ecommerce</title>


  @include('admin.css')<!-- Required meta tags -->
    
  </head>
  <body>
    <div class="container-scroller">
  
      
        <!-- This is for the sidebar -->
        @include('admin.sidebar')

        <!-- This is for the navigation bar -->
        @include('admin.navbar')

        <!-- This is for the body part  -->



        <div class="main-panel">





            <div class="container" align="center" style=" padding: 20px;">


                <h1 style="font-size:30px; padding-bottom:10px;">All Orders</h1>


            </div>


            <div class="container py-5" align="center">

   
       
     
            <table class="table-striped"  >

                
                    <tr align="center">
                    <th style="color:white; font-weight: bold">Name</th>
                    <th style="color:white; font-weight: bold">Email</th>
                    <th style="color:white; font-weight: bold">Address</th>
                    <th style="color:white; font-weight: bold">Phone</th>
                    <th style="color:white; font-weight: bold">Product Title</th>
                    <th style="color:white; font-weight: bold">Quantity</th>
                    <th style="color:white; font-weight: bold">Price</th>
                    <th style="color:white; font-weight: bold">Payment Status</th>
                    <th style="color:white; font-weight: bold">Delivery Status</th>
                    <th style="color:white; font-weight: bold">Image</th>
                    <th style="color:white; font-weight: bold">Delivered</th>
                    <th style="color:white; font-weight: bold">Print PDF</th>
                   
                    
                    
                    </tr>
            

           
            @foreach ($order as $order)
                    
        
                    <tr align="center" style="padding:50px;">

                    <td style="color:white;">{{$order -> name}}</td>
                    <td style="color:white">{{$order -> email}}</td>
                    <td style="color:white">{{$order -> address}}</td>
                    <td style="color:white">{{$order -> phone}}</td>
                    <td style="color:white">{{$order -> product_title}}</td>
                    <td style="color:white">{{$order -> quantity}}</td>
                    <td style="color:white">{{$order -> price}}</td>
                    <td style="color:white">{{$order -> payment_status}}</td>
                    <td style="color:white">{{$order -> delivery_status}}</td>

                    <td style="color:white">
                        <img  style="border-radius:50%; height: 50px; width:50px;" src="product/{{$order->image}}" alt="">
                        <!-- <img  src="product/{{$order->image}}" alt=""> -->
                    </td>

                    <td>
                        @if($order->delivery_status=='Processing')
                        <a href="{{url('delivered',$order->id)}}" onclick="return confirm('Proceed to choose Delivered?')" class="btn btn-success">Delivered</a>
                        @else
                        <p class="text-white">Delivered</p>
                        @endif
                    </td>

                    <td>
                        <a href="{{url('print_pdf',$order->id)}}" class="btn btn-secondary">Print PDF</a>
                    </td>
                    
                   
                
                    </tr>
                
                

                @endforeach
      

            
            
            
        
            </table>



            </div>






        
        </div>








       

    <!-- plugins:js -->
      @include('admin.script')
    
  </body>
</html>