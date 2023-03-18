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
<div class="vh-100 d-flex justify-content-center align-items-center ">
    <div class="col-md-5 p-5 shadow-sm border rounded-5 border-primary bg-white">
        <h2 class="text-center mb-4 text-primary">Sign Up Form</h2>
        <form  action="{{route('user.signup.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Your name</label>
                <input type="text" class="form-control border border-primary" name="name" id="exampleInputName1" value="{{ old('name')}}"  aria-describedby="emailHelp" class="@error('name') is-invalid @enderror">

                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
               @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control border border-primary" name="email" id="exampleInputEmail1" value="{{ old('email')}}" aria-describedby="emailHelp" class="@error('email') is-invalid @enderror">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
               @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone numper</label>
                <input type="number" class="form-control border border-primary" name="phone" id="exampleInputEmail1" value="{{ old('phone')}}" aria-describedby="emailHelp" class="@error('phone') is-invalid @enderror">
                @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
               @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control border border-primary" id="exampleInputPassword1" name="password" value="{{ old('password')}}" class="@error('password') is-invalid @enderror">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
               @enderror
            </div>
            {{-- <p class="small"><a class="text-primary" href="forget-password.html">Forgot password?</a></p> --}}
            <div class="d-grid">
                <button class="btn btn-primary" type="submit">Sign Up</button>
            </div>
        </form>
        <div class="mt-3">
            <p class="mb-0  text-center">Do you have an account? <a href="{{route('user.login')}}"
                    class="text-primary fw-bold">Login</a></p>
        </div>
    </div>
</div>

@include('publicUser.footer')
