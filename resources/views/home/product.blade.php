

<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
               
            </div>
            <div class="row">



            @foreach ($product as $pro)



               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('product_details',$pro->id)}}" class="option1">
                           Product Details
                           </a>


                           <form action="{{url('add_cart',$pro -> id)}}" method="post">
                              @csrf

                              <div class="row"> 

                                 <div class="" >

                                    <input type="number" name="quantity" value="1" min="1" style="width:100px; margin-top:5px; border-radius:20px; text-align:center;">
                                    

                                 </div>

                                 <div class="" >

                                    <input type="submit" value="Add to cart" style="border-radius:20px;"   class="option2">

                                 </div>

                              </div>
                              


                           </form>
                           


                        </div>
                     </div>
                     <div class="img-box">
                        <img src="product/{{$pro->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                          {{$pro -> title}}
                        </h5>

                        @if($pro->discount_price != null)

                        

                        <h6 style="text-decoration:line-through; color:red">
                        Rs {{$pro -> price}}
                        </h6><br>

                        <h6>
                        Rs {{$pro -> discount_price}}
                        </h6>

                        @else

                        <h6>
                        Rs {{$pro -> price}}
                        </h6>

                        @endif

                       


                        
                     </div>
                  </div>
               </div>

               @endforeach

               <span style="padding-top:20px">

               

               </span>
              
         
           
         </div>
      </section>
      <!-- end product section -->