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
        <h2 class="text-center mb-4 text-primary">Login Form</h2>
        <form action="{{route('user.login.check')}}" method="post">
            @method('GET')

            @csrf

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" class="@error('email') is-invalid @enderror" value="{{ old('email')}}">

                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
               @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control border border-primary" id="exampleInputPassword1" name="password" class="@error('password') is-invalid @enderror" value="{{ old('password')}}">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
               @enderror
            </div>
            {{-- <p class="small"><a class="text-primary" href="forget-password.html">Forgot password?</a></p> --}}
            <div class="d-grid">
                <button class="btn btn-primary" type="submit">Login</button>
            </div>
        </form>
        <div class="mt-3">
            <p class="mb-0  text-center">Don't have an account? <a href="{{route('user.signup.index')}}"
                    class="text-primary fw-bold">Sign
                    Up</a></p>
        </div>
    </div>
</div>

@include('publicUser.footer')
