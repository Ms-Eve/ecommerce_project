<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">


      @foreach($product as $products)


        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="{{url('product_details',$products->id)}}">
             <div class="img-box">
              <img src="products/{{$products->image}}" alt="">
              </div>
              <div class="detail-box">
                <h6 style="color: #514f4f; font-weight: 1px;">
                  {{$products->title}} 
                </h6>
               </div>
               <div class="detail-box">
                <h6>
                R{{$products->price}}
                </h6>
               </div>
                
              <div class="new">
                <span style="color: green; font-weight: bold;">
                  New
                </span>
              </div>
            </a>
           

             <!-- <div style="padding: 10px;">


                <a style="color:white" href="{{url('product_details',$products->id)}}" class="btn btn-success">
                  Buy Now
                </a>

                <a class="btn btn-primary" href="{{url('add_cart',$products->id)}}">Add to Cart</a>



            </div>
-->


          </div>
        </div>


        @endforeach
     
      </div>
      
    </div>
  </section>