<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin-My Hospital</title>
        
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
          <h1 style="font-size:30px; padding-bottom:40px;">Add Product</h1>

          <form action="{{url('add_product')}}" method="post" enctype="multipart/form-data">
              @csrf

            <div class="div_design">
                <label for=""> Product Title :    </label>
                <input style="border-radius:5px; color:black;" type="text" name="title" placeholder="Write product's title" required="">
            </div>


            <div class="div_design">
                <label for=""> Product Description :</label>
                <input style="border-radius:5px; color:black;" type="text" name="description" placeholder="Write product's description" required="">
            </div>

            <div class="div_design">
                <label for=""> Product Price :    </label>
                <input style="border-radius:5px; color:black;" type="text" name="price" placeholder="Write product's price" required="">
            </div>

            <div class="div_design">
                <label for=""> Product Quantity :    </label>
                <input style="border-radius:5px; color:black;" type="number" min="0" name="quantity" placeholder="Write product's quantity" required="">
            </div>

            <div class="div_design">
                <label for=""> Discount Price :    </label>
                <input style="border-radius:5px; color:black;" type="text" name="discount_price" placeholder="Write Discount price" >
            </div>

            <div class="div_design">
                <label for=""> Product Catagory :    </label>
                <select style="color:black; width:220px;" name="catagory" id="" required="">
                    <option value="" selected="">Add a catagory</option>

                    @foreach ($catagory as $catagory)
                    <option value="{{$catagory -> catagory_name}}">{{$catagory -> catagory_name}}</option>
                    @endforeach

                </select>
            </div>

            <div class="div_design">
                <label for=""> Product Image :  </label>
                <input type="file" name="image" required="">

            </div>

            <div class="div_design">
                
                <input class="btn btn-primary" value="Add product" type="submit" >

            </div>

            



          </div>
          </form>

      </div>
       
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    
  </body>
</html>