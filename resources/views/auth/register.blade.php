@extends('layouts.auth')

@section('content')
<section class="sign-in-page">
    <div class="container">
        <div class="row justify-content-center align-items-center height-self-center">
            <div class="col-lg-5 col-md-12 align-self-center">
                <div class="sign-user_card ">                    
                    <div class="sign-in-page-data">
                    <div class="sign-in-from w-100 m-auto">
                        <h3 class="mb-3 text-center">Sign Up</h3>
                        <form class="mt-4" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">                                 
                                <input id="name" type="text" class="form-control mb-0 @error('name') is-invalid @enderror" placeholder="Enter Full Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">                                 
                                <input id="email" type="email" class="form-control mb-0 @error('email') is-invalid @enderror" placeholder="Enter email" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">                                 
                                <input id="password" type="password" class="form-control mb-0 @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>  
                            <div class="form-group">                                 
                                <input id="password-confirm" type="password" class="form-control mb-0" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">    
                            </div>  
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                <label class="custom-control-label" for="customCheck">I accept <a href="#" class="text-primary"> Terms and Conditions</a></label>
                            </div>                      
                            
                            <button type="submit" class="btn btn-primary">Sign Up</button>
                                                                
                        </form>
                    </div>
                    </div>    
                    <div class="mt-3">
                    <div class="d-flex justify-content-center links">
                        Already have an account? <a href="{{ route('login') }}" class="text-primary ml-2">Sign In</a>
                    </div>                        
                    </div>
                </div>
            </div>
        </div>
    <!-- Sign up END -->
    <!-- color-customizer -->
    </div>
</section>
@endsection
