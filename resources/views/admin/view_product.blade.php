<!DOCTYPE html>
<html>
  <head> 
   
   @include('admin.css')
   
   <style type="text/css">
       
       .div_deg{

          display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;

       }

       table{

        width: 100%;
        border-collapse: collapse;
       }

       th,td{

        border: 1px solid black;
        padding: 8px;
        text-align: center;
       }

       th{

        background-color: #f2f2f2;
       }

       .table_deg{
            border: 2px solid yellowgreen;
       }

       th{
        background-color: skyblue;
        color: white;
        font-size: 20px;
        font-weight: bold;
        padding: 15px;
       }
       
       td{
        border: 1px solid skyblue;
        text-align: center;
       }

       input[type="search"]{
            width: 450px;
            height: 50px;  
            margin-left: 50px;
            border-radius: 5px;
            padding: 10px;
       }

   </style>
  </head>
  <body>

  <!--header start------->
   
   @include('admin.header')

    <!--header end------->
    <!-- Sidebar Navigation start-->

    @include('admin.sidebar')

      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">


          <form action="{{url('product_search')}}" method="get">

            @csrf

            <input type="search" name="search">
            <input class="btn btn-secondary" type="submit" value="Search">

          </form>

      
          <div class="div_deg">

             <table class="table_deg">

                <tr>

                    <th>Product Title</th>

                    <th>Description</th>

                    <th>Category</th>

                    <th>Price</th>

                    <th>Quantity</th>

                    <th>Image</th>

                    <th>Edit</th>

                    <th>Delete</th>

                </tr>

                @foreach($product as $products)

                <tr>

               
                <td>{{$products->title}}</td>

                <td>{!!Str::limit($products->description, 50)!!}</td>

                <td>{{$products->category}}</td>

                <td>{{$products->price}}</td>

                <td>{{$products->quantity}}</td>

                <td>
                    <img height="120" width="120" src="products/{{$products->image}}">
                </td>

                <td>
                    <a class=" btn btn-success" href="{{url('update_product', $products->slug)}}">Edit</a>
                </td>

                <td>
                    <a class="btn btn-danger"  onclick="confirmation(event)"
                     href="{{url('delete_product', $products->id)}}">Delete</a>
                </td>

                </tr>


                @endforeach


             </table>

             

          </div>

          <div class="div_deg">

          {{$product->onEachSide(1)->links()}}

          </div>

          </div>
      </div>
    </div>




    <!-- JavaScript files-->



    @include('admin.js')



  </body>
</html>