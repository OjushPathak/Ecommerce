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
    <div class="main-panel">

    @if (session()->has('message'))

    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

    {{session()->get('message')}}
    </div>

    @endif
      
    <div class="container" align="center" style=" padding: 40px;">
        <h1 style="font-size:30px; padding-bottom:40px;">Add Catagory</h1>

        <div class="" style="  border-radius: 10px; border:1px solid white; padding:20px; ">
            <form action="{{url('add_catagory')}}" method="post">

            @csrf
                
                <input style="border-radius:5px; color:black;" type="text" name="name" placeholder="Enter catagory"><br>
                <div class="" style="padding:10px;">
                <input type="submit" class="btn btn-primary" Value="Add catagory">
                </div>
            </form>
        </div>















        <div class="container py-5" align="left">
     
     <table class="table table-striped" >
       <thead>
         <tr align="center">
           <th style="color:white; font-weight: bold">Catagory Name</th>
           
           <th style="color:white; font-weight: bold">Action</th>
           
           
         </tr>
       </thead>
   
       @foreach ($data as $data)
       
       <tbody>
         <tr align="center">

           <td style="color:white">{{$data -> catagory_name}}</td>
           
           <td>
               <button>
                   <a class="btn btn-danger" onclick="return confirm('Are You sure to delete this catagory?')"  href="{{url('delete_catagory',$data->id)}}" >Delete</a> 
                </button>
           </td>

         </tr>
         
       </tbody>

       @endforeach
     
       
   
     </table>



    </div>

    </div>


    



        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    
  </body>
</html>