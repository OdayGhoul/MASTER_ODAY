<style>
    .navbar  {
        background-color: #14141F;
    }
</style>

@include('publicUser.navbar')
<br>
<br>
<br>
<br>

<div class="container my-5">

    <div class="card details-card p-0">
        {{-- @foreach ($data as $value) --}}
{{-- {{dd($data)}} --}}
        <div class="row">

            <div class="col-md-6 col-sm-12">
                <?php $img=$data[0]['image2']?>
                {{-- <img src="{{URL::asset("storage/image/$img")}}" alt="" style="width: 75px"> --}}
                <img class="img-fluid details-img" src="{{URL::asset("storage/image/$img")}}" alt="" height="575px">
            </div>
            <div class="col-md-6 col-sm-12 description-container p-5">
                <div class="main-description">
                    <p class="product-category mb-0">{{$data[0]['category']}}</p>
                    <h3>{{$data[0]['name']}}</h3>
                    <hr>
                    <p class="product-price">{{$data[0]['price']}} JD / {{$data[0]['guest_number']}} Person</p>
                    {{-- <form class="add-inputs" method="post">
                     <input type="number" class="form-control" id="cart_quantity" name="cart_quantity" value="1" min="1" max="10">
                        <button name="add_to_cart" type="submit" class="btn btn-primary btn-lg">Add to cart</button>
                    </form> --}}
                    <form action="{{route('user.book',$data[0]['id'])}}" class="add-inputs" method="post">
                    @method('GET')
                        @csrf
                        {{-- <a href="{{route('user.book')}}"> --}}
                            <button name="add_to_cart" type="submit" class="btn btn-primary btn-lg">Book Now</button>
                        {{-- </a> --}}
                    </form>
                    <div style="clear:both"></div>

                    <hr>


                    <p class="product-title mt-4 mb-1">About this place</p>
                    <p class="product-description mb-4">
                        {{$data[0]['long_description']}}

                    </p>

                    <hr>

                </div>

            </div>
        </div>
        {{-- @endforeach --}}
        {{-- <div class="row">

            <div class="col-md-6 col-sm-12">
                <img class="img-fluid details-img" src="/users/img/Candi_Resort.png" alt="">
            </div>
            <div class="col-md-6 col-sm-12 description-container p-5">
                <div class="main-description">
                    <p class="product-category mb-0">Bali</p>
                    <h3>Candi Resort</h3>
                    <hr>
                    <p class="product-price">00. $</p>

                    <form action="{{route('user.book',1)}}" class="add-inputs" method="get">
                    @method('GET')
                        @csrf
                        <a href="{{route('user.book')}}">
                            <button name="add_to_cart" type="submit" class="btn btn-primary btn-lg">Book Now</button>
                        </a>
                    </form>
                    <div style="clear:both"></div>

                    <hr>


                    <p class="product-title mt-4 mb-1">About this place</p>
                    <p class="product-description mb-4">
                        Welcome to the Candi Resort to escape from the hustle and bustle, and embrace the tranquility.
                        Nestled along a private beach in Mendira Bay, Candi Beach Resort & Spa features 3 outdoor pools including an infinity pool and free Wi-Fi. It offers a variety of water sports including sailing and scuba diving. Three restaurant and two bars are available
                        Rooms each have a balcony or terrace with views of the garden or pool. Decorated with Balinese touches, rooms have a minibar and tea and coffee-making facilities. A safety deposit box and hairdryer are provided.
                        Candi Beach Resort & Spa is 50 km from Denpasar and an approximately 1 hour 15 minute-drive from Ngurah Rai International Airport.

                    </p>

                    <hr>

                </div>

            </div>
        </div> --}}
        <!-- End row -->
    </div>
    </div>

@include('publicUser.footer')
