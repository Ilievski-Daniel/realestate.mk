@extends('layouts.main')
@section('content')
<main id="main">
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">{{$property->title}}</h1>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="property-grid.html">Properties</a>
                </li>
                <p></p>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>

    <section class="property-single nav-arrow-b">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div id="property-single-carousel" class="swiper">
              <div class="swiper-wrapper">
                <div class="carousel-item-b @if (isset($property->second_image) || isset($property->third_image)) swiper-slide @endif mb-2">
                  <img style="height: 60vh !important; display: block; margin-left: auto; margin-right: auto; " src="{{ asset('img/property_images/'.$property->featured_image) }}" alt="">
                </div>
                @if (isset($property->second_image))
                <div class="carousel-item-b swiper-slide mb-2">
                  <img style="height: 60vh !important; display: block; margin-left: auto; margin-right: auto;" src="{{ asset('img/property_images/'.$property->second_image) }}" alt="">
                </div>
                @endif
                @if (isset($property->third_image))
                <div class="carousel-item-b swiper-slide mb-2">
                  <img style="height: 60vh !important; display: block; margin-left: auto; margin-right: auto;" src="{{ asset('img/property_images/'.$property->third_image) }}" alt="">
                </div>
                @endif
                @if (isset($property->fourth_image))
                <div class="carousel-item-b swiper-slide mb-2">
                  <img style="height: 60vh !important; display: block; margin-left: auto; margin-right: auto;" src="{{ asset('img/property_images/'.$property->fourth_image) }}" alt="">
                </div>
                @endif
              </div>
            </div>
            <div class="property-single-carousel-pagination carousel-pagination"></div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">

            <div class="row justify-content-between">
              <div class="col-md-5 col-lg-4">
                <div class="property-price d-flex justify-content-center foo">
                  <div class="card-header-c d-flex">
                    <div class="card-box-ico">
                      <span class="bi bi-cash">$</span>
                    </div>
                    <div class="card-title-c align-self-center">
                      <h5 class="title-c">{{$property->price}}</h5>
                    </div>
                  </div>
                </div>
                
                <div class="property-summary">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="title-box-d section-t4">
                        <h3 class="title-d">Property information</h3>
                      </div>
                    </div>
                  </div>
                  <div class="summary-list">
                    <ul class="list">
                      <li class="d-flex justify-content-between">
                        <strong>Property Type:</strong>
                        <span>{{$property->type}}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Agreement:</strong>
                        <span>{{$property->agreement}}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Area:</strong>
                        <span>{{$property->area}}
                          m<sup>2</sup>
                        </span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Floor:</strong>
                        <span>{{$property->floor}}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Rooms:</strong>
                        <span>{{$property->rooms}}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Bedrooms:</strong>
                        <span>{{$property->bedrooms}}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Bathrooms:</strong>
                        <span>{{$property->bathrooms}}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Status:</strong>
                        <span>{{$property->status}}</span>
                      </li>
                    </ul>
                  </div>
                  
                </div>
                
              </div>
              
              <div class="col-md-7 col-lg-7 section-md-t3">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d mt-3">{{$property->title}}</h3>
                      <h5>Location: {{$property->location}}</h5>
                    </div>
                  </div>
                  <div class="property-description">
                    <p class="description color-text-a">
                         @php echo nl2br($property->description) @endphp <br>
                    </p>
                    <br>
                  </div>
                </div>

                <h3>Other details</h3>
                
                <div class="amenities-list color-text-a">
                  <ul class="list-a ">
                      @if(isset($property->parking))            <li>Parking</li> @endif
                      @if(isset($property->balcony))            <li>Balcony</li> @endif
                      @if(isset($property->air_conditioning))   <li>Air Conditioning</li> @endif
                      @if(isset($property->alarm_system))       <li>Alarm System</li> @endif
                      @if(isset($property->elevator))           <li>Elevator</li> @endif
                      @if(isset($property->garden))             <li>Garden</li> @endif
                      @if(isset($property->barbeque))           <li>Barbeque</li> @endif
                      @if(isset($property->furniture))          <li>Furniture</li> @endif
                      @if(isset($property->cable_tv))           <li>Cable TV</li> @endif
                      @if(isset($property->internet))           <li>Internet</li> @endif
                      @if(isset($property->central_heating))    <li>Central Heating</li> @endif
                      @if(isset($property->pet_friendly))       <li>Pet Friendly</li> @endif
                  </ul>
                </div>
              </div>
            </div>
          </div>
         
          </div>
          <div class="col-md-12 mb-4">
            <div class="row section-t3">
              <div class="col-sm-12">
                <div class="title-box-d">
                  <h3 class="title-d">Contact Agent</h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-4">
                <img style="height: 25vh; border-radius: 50%;" 
                  @if (isset($user->avatar)) src="{{ asset('/img/avatars/'.$user->avatar) }}" @else
                  src="{{ asset('/img/avatars/avatar.png') }}"
                  @endif alt="" class="img-fluid">
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="property-agent">
                  <h4 class="title-agent">{{$user->name}} {{$user->last_name}}</h4>
                  <p class="color-text-a">
                    {{$user->description}}
                  </p>
                  <ul class="list-unstyled">
                    <li class="d-flex justify-content-between">
                      <strong>Phone Number:</strong>
                      <span class="color-text-a">+389 {{$user->phone_number}}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Email:</strong>
                      <span class="color-text-a">{{$user->email}}</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-12 col-lg-4">
                <div class="property-contact">
                  <form class="form-a">
                    <div class="row">
                      <div class="col-md-12 mb-1">
                        <div class="form-group">
                          <input type="text" class="form-control form-control-a" id="inputName" placeholder="Name *">
                        </div>
                      </div>
                      <div class="col-md-12 mb-1">
                        <div class="form-group">
                          <input type="email" class="form-control form-control-a" id="inputEmail1" placeholder="Email *">
                        </div>
                      </div>
                      <div class="col-md-12 mb-1">
                        <div class="form-group">
                          <textarea id="textMessage" class="form-control" placeholder="Message *" name="message" rows="5"></textarea>
                        </div>
                      </div>
                      <div class="col-md-12 mt-2">
                        <button type="submit" class="btn btn-a">Send Message</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Property Single-->

  </main>
@endsection