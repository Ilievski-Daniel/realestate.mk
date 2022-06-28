@extends('layouts.auth')

@section('content')
<section class="signup">
    <div style="margin-top: 10vh; margin-bottom: 10vh;" class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Sign up</h2>
                <form method="POST" action="{{ route('register') }}" class="register-form" id="register-form">
                    @csrf
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account-box material-icons-name"></i></label>
                        <input type="text" name="name" value="{{ old('name') }}" id="name" placeholder="Your Name"/>
                        @error('name')
                            <span style="color: red;" class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="last_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="last_name" value="{{ old('last_name') }}" id="last_name" placeholder="Your Last Name"/>
                        @error('last_name')
                            <span style="color: red;" class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone_number"><i class="zmdi zmdi-phone-in-talk material-icons-name"></i></label>
                        <input type="number" name="phone_number" value="{{ old('phone_number') }}" id="phone_number" placeholder="77 123 456"/>
                        @error('phone_number')
                            <span style="color: red;" class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror 
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="text" name="email" value="{{ old('email') }}" id="email" placeholder="Your Email"/>
                        @error('email')
                            <span style="color: red;" class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="password" placeholder="Password"/>
                        @error('password')
                            <span style="color: red;" class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>    
                    <div class="form-group">
                        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password"/>
                        @error('password_confirmation')
                            <span style="color: red;" class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror 
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="agree_term" id="agree_term" @if(old('agree_term')) checked @endif value="1" class="agree-term" />
                        <label for="agree_term" class="label-agree-term"><span><span></span></span>I agree all statements in Terms of service</label>
                        @error('agree_term')
                            <span style="color: red;" class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group form-button">
                        <input type="hidden" name="role" value="1">
                        <input type="submit" name="submit" id="signup" class="form-submit" value="Register"/>
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="{{ asset('img/signup-image.jpg') }}" alt="sing up image"></figure>
                <a href="{{ route('login') }}" class="signup-image-link">I am already member</a>
            </div>
        </div>
    </div>
</section>
@endsection
