@extends('layouts.main')
@section('content')
    <main id="main">
        <section class="intro-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="title-single-box">
                            <h1 class="title-single">Contact US</h1>
                            <span class="color-text-a">
                                Do you have any issues using our platform, want to ask something or have some offer to
                                improve the expirience to our users? Please feel free to contact us any time!
                            </span>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('index') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Contact
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-md-7">
                                @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        {{Session::get('success')}}
                                    </div>
                                @endif
                                <form action="{{ route('contact_us') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input type="text" name="name" value="{{ old('name') }}"
                                                    class="form-control form-control-lg form-control-a"
                                                    placeholder="Your Name">
                                            </div>
                                            @error('name')
                                                <div style="color: red">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input type="text" name="email" value="{{ old('email') }}"
                                                    class="form-control form-control-lg form-control-a"
                                                    placeholder="Your Email">
                                            </div>
                                            @error('email')
                                                <div style="color: red">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <input type="text" name="subject" value="{{ old('subject') }}"
                                                    class="form-control form-control-lg form-control-a"
                                                    placeholder="Subject">
                                            </div>
                                            @error('subject')
                                                <div style="color: red">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 my-3">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" name="message" cols="45" rows="8" placeholder="Message">{{old('message')}}</textarea>
                                            </div>
                                        </div>
                                        @error('message')
                                            <div class="mb-2" style="color: red">{{ $message }}</div>
                                        @enderror
                                        <div class="col-md-12 text-center">
                                            <input type="submit" value="Send Message" name="submit" class="btn btn-a">
                                        </div>
                                        @if(session()->has('message'))
                                            <div class="alert alert-success mb-2 mt-3">
                                                <center>{{ session()->get('message') }}</center>
                                            </div>
                                        @endif
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-5 section-md-t3">
                                <div class="icon-box section-b2">
                                    <div class="icon-box-icon">
                                        <span class="bi bi-envelope"></span>
                                    </div>
                                    <div class="icon-box-content table-cell">
                                        <div class="icon-box-title">
                                            <h4 class="icon-title">Say Hello</h4>
                                        </div>
                                        <div class="icon-box-content">
                                            <p class="mb-1">Email.
                                                <span class="color-a">
                                                    <a href="mailto:contact@realestate.mk">contact@realestate.mk</a>
                                                </span>
                                            </p>
                                            <p class="mb-1">Phone.
                                                <span class="color-a">
                                                    <a href="tel:+38977895280">+389 77 895 280</a>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-box">
                                    <div class="icon-box-icon">
                                        <span class="bi bi-share"></span>
                                    </div>
                                    <div class="icon-box-content table-cell">
                                        <div class="icon-box-title">
                                            <h4 class="icon-title">Social networks</h4>
                                        </div>
                                        <div class="icon-box-content">
                                            <div class="socials-footer">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="#" class="link-one">
                                                            <i class="bi bi-facebook" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#" class="link-one">
                                                            <i class="bi bi-twitter" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#" class="link-one">
                                                            <i class="bi bi-instagram" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#" class="link-one">
                                                            <i class="bi bi-linkedin" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mt-3 mb-3">
                        <div class="contact-map box">
                            <div id="map" class="contact-map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1538979.5015674615!2d21.114963821484316!3d41.11663648865571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1354159f70bc4809%3A0xe0f25ad6c81fc5b1!2sNorth%20Macedonia!5e0!3m2!1sen!2smk!4v1654854954939!5m2!1sen!2smk"
                                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
