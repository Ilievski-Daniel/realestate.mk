@extends('layouts.main')
@section('content')
    <main id="main">
        <section class="intro-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="title-single-box">
                            <h1 class="title-single">Where Dreams Come Home</h1>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('index') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    About
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-about mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 position-relative">
                        <div class="about-img-box">
                            <img src="{{ asset('img/about-img.jpg') }}" alt="Real Estate In Macedonia" class="img-fluid">
                        </div>
                        <div class="sinse-box">
                            <h3 class="sinse-title">RealEstate.mk
                                <span></span>
                                <br> Sinse 2022
                            </h3>
                        </div>
                    </div>
                    <div class="col-md-12 section-t8 position-relative">
                        <div class="row">
                            <div class="col-md-6 col-lg-5">
                                <img src="{{ asset('img/about-1.jpg') }}" alt="Real Estate Properties in Macedonia" class="img-fluid">
                            </div>
                            <div class="col-lg-2  d-none d-lg-block position-relative">
                                <div class="title-vertical d-flex justify-content-start">
                                    <span>RealEstate.mk About us</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-5 section-md-t3">
                                <div class="title-box-d">
                                    <h3 class="title-d">What is 
                                        <span class="color-d">RealEstate</span>.mk ?
                                    </h3>
                                </div>
                                <p class="color-text-a">
                                    RealEstate.mk is a platform that connects agents with customers.<br>
                                    Our mission includes both sides to be happy with their decission, how do we manage to do that?
                                </p>
                                <div class="title-box-d">
                                  <h3 class="title-d">What does our
                                      <span class="color-d">Agents</span>
                                      get ?
                                  </h3>
                                </div>
                                <p class="color-text-a">
                                  We offer our agents a beautiful, easy-to-use real estate platform 
                                  over which they have complete control. <br>
                                  All their properties, including a real-life chat with customers and
                                  analytics that show how many views does that particular property has. 
                                </p>
                                <div class="title-box-d">
                                  <h3 class="title-d">What does our
                                      <span class="color-d">Customers</span>
                                      get ?
                                  </h3>
                                </div>
                                <p class="color-text-a">
                                  We offer our customers a clear, easy-to-use search filter to find 
                                  exactly what kind of property they are looking for. <br>
                                  Every property has a complete view of where it is located, what
                                  features does it have, option to ask questions about the property 
                                  and a unique feature to request to us exactly what you are looking for
                                  so our team can help you and do the reaserch for you!
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
