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
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>




      <div class="hero_area">
         







        @include('home.header') <!-- header section -->







        




      
         
    





        


      <div class="col-sm-6 col-md-4 col-lg-4" style="margin:auto; width:50%; padding:30px;">
      <div align="center">
                  
                     <div class="img-box" style="padding:20px;">
                        <img src="product/{{$product->image}}"  height="350" width="350" alt="">
                     </div>
                     
                     <div class="detail-box">
                        <h5>
                          {{$product -> title}}
                        </h5>

                        @if($product->discount_price != null)

                        

                        <h6 >
                        <div style="text-decoration:line-through; color:red"> Rs {{$product -> price}} </div>
                        </h6>

                        <h6>
                        Rs {{$product -> discount_price}}
                        </h6>

                        @else

                        <h6>
                         Price: Rs {{$product -> price}}
                        </h6>

                        @endif

                        <h6>

                        <div style="font-weight:bold;"> Product Catagory: <span style="font-weight:normal;"> {{$product -> catagory}}</span></div> 

                        </h6>

                        <h6>

                        {{$product -> description}}

                        </h6>

                        <h6>

                        
                        <div style="font-weight:bold;"> Product Quantity: <span style="font-weight:normal;"> {{$product -> quantity}}</span></div> 

                        </h6>
                        <div style="padding:20px;">

                        <form action="{{url('add_cart',$product -> id)}}" method="post">
                              @csrf

                              <div class="row"> 

                                 <div class=""   >

                                    <input  type="number" name="quantity" value="1" min="1" style="width:100px; margin-top:5px; border-radius:20px; text-align:center;" class="">

                                 </div>

                                 <div class="" >

                                    <input type="submit" value="Add to cart" style="border-radius:20px;"   class="option2">

                                 </div>

                              </div>


                           </form>
                        </div>

                        </div>


                        
                     </div>
                  </div>
               </div>

      
         







         @include('home.footer') <!-- footer section -->






      
      
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="#">Ecommece</a><br>
         
        
         
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