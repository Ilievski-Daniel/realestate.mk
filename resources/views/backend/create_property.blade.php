@extends('layouts.sidepanel')
@section('content')
    <div id="layoutSidenav_content">
        <main style="margin-left: 2.5%; margin-right: 2.5%" class="mt-4 mb-4">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <h2>General information</h2>
            <hr>
            <form action="{{ route('store_property') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div >
                    <div class="row mt-4 mb-4">
                        <div class="col-sm-6 col-12 mb-2">
                            <div class="form-group">
                                <label for="title">Property title</label>
                                <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="title" aria-describedby="title" placeholder="Family home with garden">
                                @error('title')
                                    <span style="color: red;">
                                        <strong>{{ $message }}</strong><br>
                                    </span>
                                @enderror
                                <small id="title" class="form-text text-muted">Try to explain what your property is with as few words as possible.</small><br>
                                
                            </div>
                        </div>

                        <div class="col-sm-6 col-12 mb-2">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" class="form-control" id="description" rows="3" placeholder="Describe what's great about this property">{{ old('description') }}</textarea>
                                </div>
                                @error('description')
                                    <span style="color: red;">
                                        <strong>{{ $message }}</strong><br>
                                    </span>
                                @enderror
                                
                            </div>
                        </div>

                        <div class="col-sm-6 col-12 mb-3">
                            <label for="price">Price</label>

                            <div class="input-group">
                                <input type="text" name="price" value="{{ old('price') }}"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '');" class="form-control"
                                    placeholder="12500" aria-label="price">
                                <span class="input-group-text">€</span>
                                <select name="payment_duration" class="form-select" aria-label="payment_duration">
                                    <option value=any>Select payment duration</option>
                                    <option value="One Time"    @if (old('payment_duration') == 'One Time')     selected @endif>One Time</option>
                                    <option value="Annual"      @if (old('payment_duration') == 'Annual')       selected @endif>Annual</option>
                                    <option value="Quarterly"   @if (old('payment_duration') == 'Quarterly')    selected @endif>Quarterly</option>
                                    <option value="Monthly"     @if (old('payment_duration') == 'Monthly')      selected @endif>Monthly</option>
                                    <option value="Bi-Monthly"  @if (old('payment_duration') == 'Bi-Monthly')   selected @endif>Bi-Monthly</option>
                                </select>    
                            </div>
                            @error('price')
                                <strong style="display: inline-block; color: red;">{{ $message }}</strong>
                            @enderror

                            @error('payment_duration')
                                <strong style="display: inline-block; color: red;">{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="col-sm-6 col-12 mb-3">
                            <div class="form-group">
                                <label for="location">Location</label>
                                <select name="location" class="form-select" aria-label="location">
                                    <option value="any" selected>Select where the property is located</option>
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

                        {{-- <div class="col-lg-2 col-12 col-md-offset-1 mt-2">
                            <img src="/img/avatars/{{ 'avatar.png' }}" style="width:150px; height:150px; margin: auto; display: block;">
                        </div>
                        <div class="col-lg-4 col-12 col-md-offset-1 mb-3"><br><br><br>
                            <input class="form-control" type="file">
                        </div> --}}

                        <div class="col-sm-6 col-12 mb-2 mt-2">
                            <label for="featured_image" class="form-label">Featured property image</label>
                            <input name="featured_image" class="form-control" id="featured_image" type="file">
                            @error('featured_image')
                                <strong style="display: inline-block; color: red;">{{ $message }}</strong>
                            @enderror
                        </div>
                        

                        <div class="col-sm-6 col-12 mb-2 mt-2">
                            <label for="second_image" class="form-label">Second property image</label>
                            <input name="second_image" class="form-control" id="second_image" type="file">
                            @error('second_image')
                                <strong style="display: inline-block; color: red;">{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="col-sm-6 col-12 mb-2 mt-2">
                            <label for="third_image" class="form-label">Third property image</label>
                            <input name="third_image" class="form-control" id="third_image" type="file">
                            @error('third_image')
                                <strong style="display: inline-block; color: red;">{{ $message }}</strong>
                            @enderror
                        </div>
                        

                        <div class="col-sm-6 col-12 mb-2 mt-2">
                            <label for="fourth_image" class="form-label">Fourth property image</label>
                            <input name="fourth_image" class="form-control" id="fourth_image" type="file">
                            @error('fourth_image')
                                <strong style="display: inline-block; color: red;">{{ $message }}</strong>
                            @enderror
                        </div>
                        
                        <h2 class="mt-2">Property information</h2>
                        <hr>

                        <div class="col-6 mb-2">
                            <div class="form-group">
                                <label for="propertyType">Property type</label>
                                <input type="text" name="type" value="{{ old('type') }}" class="form-control" id="propertyType" aria-describedby="propertyType" placeholder="Apartment">
                                @error('type')
                                    <span style="color: red;">
                                        <strong>{{ $message }}</strong><br>
                                    </span>
                                @enderror
                                <small id="propertyType" class="form-text text-muted">Put what best describes the type of property you plan to post.</small>
                            </div>
                        </div>

                        <div class="col-6 mb-3">
                            <div class="form-group">
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

                        <div class="col-6 mb-3">
                            <label for="area">Area</label>

                            <div class="input-group">
                                <input type="text" name="area" value="{{ old('area') }}"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '');" class="form-control"
                                    placeholder="340" aria-label="area">
                                <span class="input-group-text">m²</span>
                            </div>
                            @error('area')
                                <span style="color: red;">
                                    <strong>{{ $message }}</strong><br>
                                </span>
                            @enderror
                        </div>

                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" class="form-select" aria-label="status">
                                    <option value="any">Select the status of the property</option>
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

                        <div class="col-6 mb-3">
                            <label for="rooms">Rooms</label>

                            <div class="input-group">
                                <input type="text" name="rooms" value="{{ old('rooms') }}"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '');" class="form-control"
                                    placeholder="10" aria-label="rooms">
                            </div>
                            @error('rooms')
                                <span style="color: red;">
                                    <strong>{{ $message }}</strong><br>
                                </span>
                            @enderror
                        </div>

                        <div class="col-6 mb-3">
                            <label for="bathrooms">Bathrooms</label>

                            <div class="input-group">
                                <input type="text" name="bathrooms" value="{{ old('bathrooms') }}"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '');" class="form-control"
                                    placeholder="2" aria-label="bathrooms">
                            </div>
                            @error('bathrooms')
                                <span style="color: red;">
                                    <strong>{{ $message }}</strong><br>
                                </span>
                            @enderror
                        </div>

                        <div class="col-6 mb-3">
                            <label for="bedrooms">Bedrooms</label>

                            <div class="input-group">
                                <input type="text" name="bedrooms" value="{{ old('bedrooms') }}"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '');" class="form-control"
                                    placeholder="5" aria-label="bedrooms">
                            </div>
                            @error('bedrooms')
                                <span style="color: red;">
                                    <strong>{{ $message }}</strong><br>
                                </span>
                            @enderror
                        </div>

                        <div class="col-6 mb-3">
                            <label for="floor">Floor</label>

                            <div class="input-group">
                                <input type="text" name="floor" value="{{ old('floor') }}"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '');" class="form-control"
                                    placeholder="5" aria-label="floor">
                            </div>
                            @error('floor')
                                <span style="color: red;">
                                    <strong>{{ $message }}</strong><br>
                                </span>
                            @enderror
                        </div>

                        <h2>Other details</h2>
                        <hr>

                        <div class="col-2 mb-2">
                            <div class="form-group form-check">
                                <input type="checkbox" name="parking" value="1" @if(old('parking')) checked @endif class="form-check-input" id="parking">
                                <label class="form-check-label" for="parking">Parking</label>
                            </div>
                        </div>

                        <div class="col-2 mb-2">
                            <div class="form-group form-check">
                                <input type="checkbox" name="balcony" value="1" @if(old('balcony')) checked @endif class="form-check-input" id="balcony">
                                <label class="form-check-label" for="balcony">Balcony</label>
                            </div>
                        </div>

                        <div class="col-2 mb-2">
                            <div class="form-group form-check">
                                <input type="checkbox" name="air_conditioning" value="1" @if(old('air_conditioning')) checked @endif class="form-check-input" id="air_conditioning">
                                <label class="form-check-label" for="air_conditioning">Air Conditioning</label>
                            </div>
                        </div>

                        <div class="col-2 mb-2">
                            <div class="form-group form-check">
                                <input type="checkbox" name="alarm_system" value="1" @if(old('alarm_system')) checked @endif class="form-check-input" id="alarm_system">
                                <label class="form-check-label" for="alarm_system">Alarm System</label>
                            </div>
                        </div>

                        <div class="col-2 mb-2">
                            <div class="form-group form-check">
                                <input type="checkbox" name="elevator" value="1" @if(old('elevator')) checked @endif class="form-check-input" id="elevator">
                                <label class="form-check-label" for="elevator">Elevator</label>
                            </div>
                        </div>

                        <div class="col-2 mb-2">
                            <div class="form-group form-check">
                                <input type="checkbox" name="garden" value="1" @if(old('garden')) checked @endif class="form-check-input" id="garden">
                                <label class="form-check-label" for="garden">Garden</label>
                            </div>
                        </div>

                        <div class="col-2 mb-2">
                            <div class="form-group form-check">
                                <input type="checkbox" name="barbeque" value="1" @if(old('barbeque')) checked @endif class="form-check-input" id="barbeque">
                                <label class="form-check-label" for="barbeque">Barbeque</label>
                            </div>
                        </div>

                        <div class="col-2 mb-2">
                            <div class="form-group form-check">
                                <input type="checkbox" name="furniture" value="1" @if(old('furniture')) checked @endif class="form-check-input" id="furniture">
                                <label class="form-check-label" for="furniture">Furniture</label>
                            </div>
                        </div>

                        <div class="col-2 mb-2">
                            <div class="form-group form-check">
                                <input type="checkbox" name="cable_tv" value="1" @if(old('cable_tv')) checked @endif class="form-check-input" id="cable_tv">
                                <label class="form-check-label" for="cable_tv">Cable TV</label>
                            </div>
                        </div>

                        <div class="col-2 mb-2">
                            <div class="form-group form-check">
                                <input type="checkbox" name="internet" value="1" @if(old('internet')) checked @endif class="form-check-input" id="internet">
                                <label class="form-check-label" for="internet">Internet</label>
                            </div>
                        </div>

                        <div class="col-2 mb-2">
                            <div class="form-group form-check">
                                <input type="checkbox" name="central_heating" value="1" @if(old('central_heating')) checked @endif class="form-check-input" id="central_heating">
                                <label class="form-check-label" for="central_heating">Central Heating</label>
                            </div>
                        </div>

                        <div class="col-2 mb-2">
                            <div class="form-group form-check">
                                <input type="checkbox" name="pet_friendly" value="1" @if(old('pet_friendly')) checked @endif class="form-check-input" id="pet_friendly">
                                <label class="form-check-label" for="pet_friendly">Pet Friendly</label>
                            </div>
                        </div>

                        <input type="submit" value="Submit" class="btn btn-primary mt-2" name="submit">
                    </div>
                </div>
            </form>
        </main>
    </div>
    </div>
@endsection
