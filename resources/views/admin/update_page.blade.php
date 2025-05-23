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

       label{
        display: inline-block;
        width: 200px;
        margin-bottom: 10px;
        font-size: 20px;
        font-weight: bold;
        padding: 20px;
       }

       input[type= 'text']
         {
          width: 200px;
          height: 30px;
         }

         input[type= 'submit']
         {
          margin-top: 20px;
         }

       textarea{
        width: 350px;
        height: 90px;
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

         
        <h1>Update Product</h1>


        <div class="div_deg">


           <form action="{{url('edit_product',$data->id)}}" method="post" enctype="multipart/form-data">

            @csrf

           <div>
                <label>Title</label>
                <input type="text" name="title" value="{{$data->title}}">
           </div>

           <div>
                <label>Description</label>
                <textarea name="description">{{$data->description}}</textarea>
           </div>

           <div>
                <label>Price</label>
                <input type="text" name="price" value="{{$data->price}}">
           </div>

              <div>
                 <label>Quantity</label>
                 <input type="number" name="quantity" value="{{$data->quantity}}">
            </div>

            <div>
                <label>Category</label>

                <select name="category">

                <option value="{{$data->category}}">{{$data->category}}
                </option>    
              
                @foreach($category as $category)

                <option value="{{$category->category_name}}">{{$category->category_name}}
                </option>

                @endforeach

                </select>

            </div>


            <div>
                <label>Current Image</label>
                <img width="150" src="/products/{{$data->image}}">

              </div>

              <div>
                <label>New Image</label>
                <input type="file" name="image">
              </div>


                <div>
                    <input class="btn btn-success" type="submit" name="submit" value="Update Product">
                </div>


           
           </form>


        </div>



          </div>
      </div>
    </div>
    <!-- JavaScript files-->
   

    @include('admin.js')


  </body>
</html>