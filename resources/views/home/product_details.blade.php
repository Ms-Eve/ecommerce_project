<!DOCTYPE html>
<html>

<head>
  
  @include('home.css')

  <style type="text/css">
    .div_center {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      padding: 30px;
    }

    .image-container {
      flex: 1;
      text-align: center;
      padding-right: 20px; /* Space between image and title */
    }

    .details-container {
      flex: 2;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      margin-top: 15px;
    }

    .detail-box {
      padding: 15px 0;
    }
  </style>

</head>

<body>
  <div class="hero_area">
    <!-- header section starts -->
      @include('home.header')
    <!-- end header section -->
  </div>

  <!-- Product details section -->
  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>



      <div class="row">
        <div class="col-md-12">
          <div class="box">

            <div class="div_center">
              <div class="image-container">
                <img width="400" src="/products/{{$data->image}}" alt="">
              </div>


              <div class="details-container detail-box">
                <h1>{{$data->title}}</h1>
                <br>
                <h6>Price: <span>R{{$data->price}}</span></h6>
                <br>
                <h6>Available Quantity: <span>{{$data->quantity}}</span></h6>

                <br>


                <div class="detail-box">

                <a class="btn btn-primary" href="{{url('add_cart',$data->id)}}">Add to Cart</a>


                </div>
                
              </div>
             
            </div>

            <h6>Category: {{$data->category}}</h6>
            <h4 style="font-weight: bold"> Product Information</h4>
            <p>{{$data->description}}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Product details section end -->

  <!-- info section -->
  @include('home.footer')

</body>

</html>