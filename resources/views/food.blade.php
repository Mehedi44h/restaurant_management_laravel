<section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of chickens with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">

                    @foreach ($food as $item)
                    <form action="{{url('/add_cart',$item->id)}}" method="POST">
                        @csrf
  <div class="item">
                        <div style="background-image: url('/food_images/{{$item->image}}');" class='card '>
                    <div class="price"><h6>${{$item->price}}</h6></div>
                            <div class='info'>
                              <h1 class='title'>{{$item->title}}</h1>
                              <p class='description'>{{$item->description}}</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>

<input type="number" name="quantity" min="1" style="width: 80px;">
<button style="background-color: blueviolet" type="submit">Add to cart</button>
                    </div>
                    </form>
                       
                    @endforeach
                   
                  
                </div>
            </div>
        </div>
    </section>