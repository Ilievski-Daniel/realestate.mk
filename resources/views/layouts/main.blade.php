<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>RealEstate.mk | Real Estate Properties Macedonia</title>
    <meta content="Real Estate Properties in North Macedonia" name="description">
    <meta content="real estate north macedonia sale macedonia oh estate listings macedonia homes rent estate agents apartments property macedonia property central macedonia luxury homes estate agency houses skopje jane macedonia macedonian village macedonia rd housing market hills macedonia estate company macedonia ohio open house estate platform office space single family rolling hills party properties view photos oh purchase" name="keywords">
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

    <div class="click-closed"></div>
    <div class="box-collapse">
        <div class="title-box-d">
            <h3 class="title-d">Search Property</h3>
        </div>
        <span class="close-box-collapse right-boxed bi bi-x"></span>
        <div class="box-collapse-wrap form">
            <form action="{{ route('search_properties') }}" class="form-a">
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <div class="form-group mt-3">
                            <label for="agreement">Agreement</label>
                            <select name="agreement" class="form-select" aria-label="agreement">
                                <option value="any">Select type of agreement</option>
                                <option value="Rent" @if (old('agreement') == 'Rent') selected @endif>Rent</option>
                                <option value="Sale" @if (old('agreement') == 'Sale') selected @endif>Sale</option>
                            </select>
                            @error('agreement')
                                <span style="color: red;">
                                    <strong>{{ $message }}</strong><br>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group mt-3">
                            <label for="status">Status</label>
                            <select name="status" class="form-select" aria-label="status">
                                <option value="any">Select status of the property</option>
                                <option value="New"         @if (old('status') == 'New') selected @endif>New</option>
                                <option value="Used"        @if (old('status') == 'Used') selected @endif>Used</option>
                                <option value="Partly used" @if (old('status') == 'Partly used') selected @endif>Partly used</option>
                            </select>
                            @error('status')
                                <span style="color: red;">
                                    <strong>{{ $message }}</strong><br>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group mt-3">
                            <label for="location">Location</label>
                            <select name="location" class="form-select" aria-label="location">
                                <option value="any" selected>Select location</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->name }}"
                                        @if ($city->name == old('location')) selected @endif>{{ $city->name }}</option>
                                @endforeach
                            </select>
                            @error('location')
                                <span style="color: red;">
                                    <strong>{{ $message }}</strong><br>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <button type="submit" class="btn btn-b">Search Property</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false"
                aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand text-brand" href="{{route('index')}}">RealEstate<span class="color-b">.mk</span></a>

            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('index') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('about') }}">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('properties') }}?agreement=sale">Properties for sale</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('properties') }}?agreement=rent">Properties for rent</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>

            <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse"
                data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
                <i class="bi bi-search"></i>
            </button>
            @if (Auth::check()) 
                <a href="{{ route('login') }}" style="margin-left: 2%;">
                    <button type="button"  class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse"
                        data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
                        <i class="bi bi-person-check-fill"></i>
                    </button>
                </a>
            @else 
            <a href="{{ route('login') }}" style="margin-left: 2%;">
                <button type="button"  class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse"
                    data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
                    <i class="bi bi-person-circle"></i>
                </button>
            </a>
            @endif
        </div>
    </nav>

    @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="socials-a">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="bi bi-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="bi bi-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="bi bi-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="bi bi-linkedin" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <nav class="nav-footer">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="{{ route('index') }}">• Home</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ route('about') }}">• About</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ route('properties') }}?agreement=sale">• Properties for sale</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ route('properties') }}?agreement=rent">• Properties for rent</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ route('contact') }}">• Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright-footer">
                        <p class="copyright color-text-a">
                            &copy; Copyright
                            <span class="color-a">RealEstate.mk</span> All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
