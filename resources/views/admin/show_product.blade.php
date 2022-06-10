<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin-My Hospital</title>
        
  @include('admin.css')<!-- Required meta tags -->
    
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- This is for the sidebar -->
      @include('admin.sidebar')

      <!-- This is for the navigation bar -->
      @include('admin.navbar')

      <!-- This is for the body part  -->

      
     

      <div class="container py-5" align="left">

      @if (session()->has('message'))

        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

        {{session()->get('message')}}
        </div>

        @endif

       
     
     <table class="table table-striped" >
       <thead>
         <tr align="center">
           <th style="color:white; font-weight: bold">Product Title</th>
           
           <th style="color:white; font-weight: bold">Description</th>
           <th style="color:white; font-weight: bold">Quantity</th>
           <th style="color:white; font-weight: bold">Catagory</th>
           <th style="color:white; font-weight: bold">Price</th>
           <th style="color:white; font-weight: bold">Discount Price</th>
           <th style="color:white; font-weight: bold">Product Image</th>
           <th style="color:white; font-weight: bold">Update</th>
           <th style="color:white; font-weight: bold">Delete</th>
           
           
         </tr>
       </thead>

       @foreach ($product as $pro)
   
            
       <tbody>
         <tr align="center">

           <td style="color:white">{{$pro -> title}}</td>
           <td style="color:white">{{$pro -> description}}</td>
           <td style="color:white">{{$pro -> quantity}}</td>
           <td style="color:white">{{$pro -> catagory}}</td>
           <td style="color:white">Rs. {{$pro -> price}}/-</td>
           <td style="color:white">Rs. {{$pro -> discount_price}}/-</td>
           <td style="color:white">

           <img src="product/{{$pro->image}}" alt="">
            
            </td>
            <td><a href="{{url('update_product',$pro->id)}}" class="btn btn-success">Update</a></td>
            <td><a href="{{url('delete_product',$pro->id)}}" onclick="return confirm('Are you sure to delete product?')" class="btn btn-danger">Delete</a></td>
           
           

         </tr>
         
       </tbody>
       @endforeach

       
     
       
   
     </table>



    </div>

       
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    
  </body>
</html>