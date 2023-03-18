<style>
    .navbar  {
        background-color: #14141F;
    }
    .mb-4{
        font-weight: 600;
    }
</style>
@include('publicUser.navbar')
<br>
<br>
<br>
<br>

<!-- Booking Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="booking p-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-6 text-white">
                    <h6 class="text-white text-uppercase">Booking</h6>
                    <h1 class="text-white mb-4">Online Booking</h1>
                    <p class="mb-4">Reconnect with yourself and take time away from your hectic life.

                        Book one of our special offers  today and take a tour you will remember forever!

                         </p>
                    <p class="mb-4">We have the perfect destinations to book your next holiday or get-away. From well-being to sports, adventures, sun, sea and  holiday breaks,Check out some of our latest special offers:</p>
                    <a class="btn btn-outline-light py-3 px-5 mt-2" href="{{route('user.about')}}">Read More</a>
                </div>
                <div class="col-md-6">
                    <h1 class="text-white mb-4">Book A Tour</h1>
                    <form action="{{route('user.book.create',$data->id)}}" method="POST">
                        @method('GET')
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" id="name" placeholder="First Name" name="first_name" value="{{ old('first_name')}}" class="@error('first_name') is-invalid @enderror">
                                    <input type="hidden" class="form-control bg-transparent" id="name" placeholder="First Name" name="user_id" value="{{ Auth::user()->id }}">
                                    <label for="name">First Name</label>
                                    @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                   @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" id="name" placeholder="Last Name" name="last_name" value="{{ old('last_name')}}" class="@error('last_name') is-invalid @enderror">
                                    <label for="name">Last Name</label>
                                    @error('last_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                   @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" id="name" placeholder="Phone Number" name="phoneNumber" value="{{ old('phoneNumber')}}" class="@error('phoneNumber') is-invalid @enderror">
                                    <label for="name">Phone Number</label>
                                    @error('phoneNumber')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                   @enderror
                                </div>
                            </div>
                            @if($data->guest_number==1)
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control bg-transparent" id="name" placeholder="Guest Number" min="1" value="1" name="guest_number">
                                    <label for="name">Number of guest</label>
                                </div>
                            </div>
                            @endif
                            @if($data->guest_number!=1)
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="hidden" class="form-control bg-transparent" id="name"  min="1" value="{{$data->guest_number}}" name="guest_number" value="{{ old('guest_number')}}">
                                </div>
                            </div>
                            @endif

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-transparent" id="email" placeholder="Your Email" name="email" value="{{ old('email')}}" class="@error('email') is-invalid @enderror">
                                    <label for="email">Your Email</label>
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                   @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating date" id="date3" data-target-input="nearest">
                                    <input type="text"  class="form-control bg-transparent datetimepicker-input" id="date_picker" placeholder="Date" data-target="#date3" data-toggle="datetimepicker" name="res_date" value="{{ old('res_date')}}" class="@error('res_date') is-invalid @enderror" />
                                    <label for="datetime">Date</label>
                                    @error('res_date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                   @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-transparent" placeholder="Special Request" id="message" style="height: 100px" name="comment" value="{{ old('comment')}}"></textarea>
                                    <label for="message">Special Request</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-outline-light w-100 py-3" type="submit">Book Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="container" >
        <div class="booking1 p-4" style="padding-bottom: 0 !important">
            <div class="row  align-items-center" >
                <div class="col-md-12 text-white" >

                    <h5 class="text-white text-uppercase">Notes:</h5>
                    <ul>
                    {{-- <h1 class="text-white mb-4"></h1> --}}
                    <li class="mb-4" >Reservations can't be cancelled or edited when 3 days are left. </li>
                    <li class="mb-4"> Pick-up available from hotels located in the Aqaba Sea area. </li>
                    <li class="mb-4">Date and Time is calculated based on local time of destination.</li>
                    <li class="mb-4"> Meeting point instructions: Please ensure you arrive at the meeting point at least 15 minutes in advance. </li>
                    <li class="mb-4"> Children are welcome free of charge up to 6 years old, maximum 1 child per booking</li>
                    </ul>

                </div>
                <div class="col-md-6">
                    <h1 class="text-white mb-4"></h1>


                        </div>

                </div>
            </div>
        </div>
    </div>




@include('publicUser.footer')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script language="javascript">
    // var today = new Date();
    // var dd = String(today.getDate()).padStart(2, '0');
    // var mm = String(today.getMonth() + 1).padStart(2, '0');
    // var yyyy = today.getFullYear();

    // today = yyyy + '-' + mm + '-' + dd;
    // $( "#date_picker" ).attr({
    //     changeYear: true,
    //     minDate: today,
    //     maxDate: '+28D',
    // });
    $( function() {
    $( "#date_picker" ).datepicker({ minDate: 3, maxDate: "+2M" });
  } );

    // $('#date_picker').attr('min',today);
    // date_picker.max = new Date().toISOString().split("m")[0];
    // document.getElementsByName("date_picker")[0].setAttribute('max', today);

    // $('#date_picker').attr('max','+1m');

//   $("#date_picker").datepicker({
//       minDate: -3,
//       maxDate: "+1m"
//   });

</script>
