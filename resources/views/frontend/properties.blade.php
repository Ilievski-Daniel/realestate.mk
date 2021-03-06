@extends('layouts.main')
@section('content')
    <main id="main">
        <section class="intro-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="title-single-box">
                            <h1 class="title-single">Properties listing</h1>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('index') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Properties
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="property-grid grid">
            <div class="container">
                <div class="row">
                    @foreach ($properties as $property)
                    <div class="col-md-4">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img style="height: 35vh !important; display: block; margin-left: auto; margin-right: auto;" src="{{ asset('img/property_images/'.$property->featured_image) }}" alt="{{$property->title}} in {{$property->location}}" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="property/{{$property->id}}">{{$property->title}}</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a"><a href="property/{{$property->id}}" style="color: white;">{{$property->agreement}} | ??? {{$property->price}}/{{$property->payment_duration}}</a></span>
                                        </div>
                                        <a href="property/{{$property->id}}" class="link-a">Location: {{$property->location}}
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
                    </div>
                    @endforeach
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <nav class="pagination-a">
                            <ul class="pagination justify-content-end">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">
                                        <span class="bi"></span>
                                    </a>
                                </li>
                                <li style="margin: auto;" class="page-item mb-2">
                                    {{ $properties->appends(['agreement' => $_GET['agreement']])->links() }}
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection
