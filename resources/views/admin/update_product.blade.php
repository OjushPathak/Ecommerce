<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    <title>Admin-Ecommerce</title>
        
  @include('admin.css')<!-- Required meta tags -->
  <style>
      label{    
          display: inline-block;
          width: 200px;
      }
      .div_design{
          padding-bottom:15px;
      }
  </style>
    
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- This is for the sidebar -->
      @include('admin.sidebar')

      <!-- This is for the navigation bar -->
      @include('admin.navbar')

      <!-- This is for the body part  -->
      <div class="main-panel">

      @if (session()->has('message'))

        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

        {{session()->get('message')}}
        </div>

        @endif





      <div class="container" align="center" style=" padding: 40px;">
          <h1 style="font-size:30px; padding-bottom:40px;">Update Product</h1>

          <form action="{{url('update_product_confirm',$product->id)}}" method="post" enctype="multipart/form-data">
              @csrf

            <div class="div_design">
                <label for=""> Product Title :    </label>
                <input style="border-radius:5px; color:black;" type="text" name="title" placeholder="Write product's title" required="" value="{{$product->title}}">
            </div>


            <div class="div_design">
                <label for=""> Product Description :</label>
                <input style="border-radius:5px; color:black;" type="text" name="description" placeholder="Write product's description" required="" value="{{$product->description}}">
            </div>

            <div class="div_design">
                <label for=""> Product Price :    </label>
                <input style="border-radius:5px; color:black;" type="text" name="price" placeholder="Write product's price" required="" value="{{$product->price}}">
            </div>

            <div class="div_design">
                <label for=""> Product Quantity :    </label>
                <input style="border-radius:5px; color:black;" type="number" min="0" name="quantity" placeholder="Write product's quantity" required="" value="{{$product->quantity}}">
            </div>

            <div class="div_design">
                <label for=""> Discount Price :    </label>
                <input style="border-radius:5px; color:black;" type="text" name="discount_price" placeholder="Write Discount price"  value="{{$product->discount_price}}">
            </div>

            <div class="div_design">
                <label for=""> Product Catagory :    </label>
                <select style="color:black; width:220px;" name="catagory" id="" required="">
                    <option value="{{$product->catagory}}" selected="">{{$product->catagory}}</option>

                    
                    @foreach ($catagory as $catagory)
                    <option value="{{$catagory -> catagory_name}}">{{$catagory -> catagory_name}}</option>
                    @endforeach
                   

                </select>
            </div>

            <div class="div_design">
                <label for=""> Current Product Image  </label>
                <img src="/product/{{$product -> image}}" alt="" height="100" width="100">

            </div>

            <div class="div_design">
                <label for=""> Change Product Image :  </label>
                <input type="file" name="image">

            </div>

            <div class="div_design">
                
                <input class="btn btn-primary" value="Update product" type="submit" >

            </div>

            



          </div>
          </form>

      </div>






      </div>
       
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    
  </body>
</html>