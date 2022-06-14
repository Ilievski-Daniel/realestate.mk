@extends('layouts.main')
@section('content')
    <div class="intro intro-carousel swiper position-relative">

        <div class="swiper-wrapper">

            <div class="swiper-slide carousel-item-a intro-item bg-image"
                style="background-image: url({{ asset('img/slide-2.jpg') }}">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <h1 class="intro-title-top">📍 North Macedonia
                                            <br>
                                        </h1>
                                        <h1 class="intro-title mb-4 ">
                                            <span class="color-b">204 </span> Properties
                                            <br> For Sale
                                        </h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="{{ route('properties') }}?agreement=sale"><span class="price-a">Properties for sale</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide carousel-item-a intro-item bg-image"
                style="background-image: url({{ asset('img/slide-1.jpg') }}">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <h1 class="intro-title-top">📍 North Macedonia</h1>
                                        <h1 class="intro-title mb-4">
                                            <span class="color-b">204 </span> Properties
                                            <br> For Rent
                                        </h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="{{ route('properties') }}?agreement=rent"><span class="price-a">Properties for rent</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide carousel-item-a intro-item bg-image"
                style="background-image: url({{ asset('img/carousel-1.jpg') }}">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <h1 class="intro-title-top">📍 North Macedonia</h1>
                                        <h1 class="intro-title mb-4">
                                            <span class="color-b">Need Help? </span>
                                            <br> We are here!
                                        </h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="{{ route('contact') }}"><span class="price-a">Contact us</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <main id="main">

        <!-- ======= Services Section ======= -->
        <section class="section-services section-t8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Something for everyone</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-box-c foo">
                            <div class="card-header-c d-flex">
                                <div class="card-box-ico">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" fill="black"
                                        class="bi bi-house-heart" viewBox="0 0 16 16">
                                        <path d="M8 6.982C9.664 5.309 13.825 8.236 8 12 2.175 8.236 6.336 5.309 8 6.982Z" />
                                        <path
                                            d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.707L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.646a.5.5 0 0 0 .708-.707L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                                    </svg>
                                </div>
                                <div class="card-title-c align-self-center">
                                    <h2 class="title-c">New home</h2>
                                </div>
                            </div>
                            <div class="card-body-c">
                                <p class="content-c">
                                    Your new home in North Macedonia awaits. <br>
                                    We have plenty of options just for you!
                                </p>
                            </div>
                            <div class="card-footer-c">
                                <a href="{{ route('properties') }}?agreement=any" class="link-c link-icon">Search all properties
                                    <span class="bi bi-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-box-c foo">
                            <div class="card-header-c d-flex">
                                <div class="card-box-ico">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" fill="black"
                                        class="bi bi-card-checklist" viewBox="0 0 16 16">
                                        <path
                                            d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                        <path
                                            d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                                    </svg>
                                </div>
                                <div class="card-title-c align-self-center">
                                    <h2 class="title-c">Sell Or Rent</h2>
                                </div>
                            </div>
                            <div class="card-body-c">
                                <p class="content-c">
                                    Do you have a property for sale or rent? <br>
                                    Our platform can offer you the best expirience!
                                </p>
                            </div>
                            <div class="card-footer-c">
                                <a href="#" class="link-c link-icon">Register as an agent
                                    <span class="bi bi-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-box-c foo">
                            <div class="card-header-c d-flex">
                                <div class="card-box-ico">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="black"
                                        class="bi bi-patch-question" viewBox="0 0 16 16">
                                        <path
                                            d="M8.05 9.6c.336 0 .504-.24.554-.627.04-.534.198-.815.847-1.26.673-.475 1.049-1.09 1.049-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.71 1.71 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745z" />
                                        <path
                                            d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z" />
                                        <path d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0z" />
                                    </svg>
                                </div>
                                <div class="card-title-c align-self-center">
                                    <h2 class="title-c">Not sure?</h2>
                                </div>
                            </div>
                            <div class="card-body-c">
                                <p class="content-c">
                                    Still not sure how things work? <br>
                                    Feel free to contact us at any time!
                                </p>
                            </div>
                            <div class="card-footer-c">
                                <a href="{{ route('contact') }}" class="link-c link-icon">Get in touch
                                    <span class="bi bi-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-property section-t8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Latest Properties</h2>
                            </div>
                            <div class="title-link">
                                <a href="{{ route('properties') }}?agreement=any">All Properties
                                    <span class="bi bi-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="property-carousel" class="swiper">
                    <div class="swiper-wrapper">
                        @foreach($properties as $property)
                        <div class="carousel-item-b swiper-slide">
                            <div class="card-box-a card-shadow">
                                <div class="img-box-a">
                                    <img src="{{ asset('img/property-6.jpg') }} "
                                        alt="Real Estate For Sale Or Rent In North Macedonia" class="img-a img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-a-content">
                                        <div class="card-header-a">
                                            <h2 class="card-title-a">
                                                <h1 style="color: white; font-size: 2rem;" href="property-single.html">{{$property->title}}
                                                </h1>
                                            </h2>
                                        </div>
                                        <div class="card-body-a">
                                            <div class="price-box d-flex">
                                                <span class="price-a">{{$property->agreement}} | € {{ $property->price}}/{{$property->payment_duration}}</span>
                                            </div>
                                            <a href="property-single.html" class="link-a">Location: {{$property->location}}
                                                <span class="bi bi-chevron-right"></span>
                                            </a>
                                        </div>
                                        <div class="card-footer-a">
                                            <ul class="card-info d-flex justify-content-around">
                                                <li>
                                                    <h4 class="card-info-title">Area</h4>
                                                    <span>{{$property->area}}
                                                        m<sup>2</sup>
                                                    </span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Type</h4>
                                                    <span>{{$property->type}}</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Rooms</h4>
                                                    <span>{{$property->rooms}}</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Status</h4>
                                                    <span>{{$property->status}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End carousel item -->
                        @endforeach
                    </div>
                </div>
                <div class="propery-carousel-pagination carousel-pagination mb-2"></div>
            </div>
        </section>
    </main>
@endsection
