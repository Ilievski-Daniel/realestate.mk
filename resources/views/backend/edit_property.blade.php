@extends('layouts.sidepanel')
@section('content')
{{-- @php $id = $_GET['id']; @endphp --}}
    <div id="layoutSidenav_content">
        <main style="margin-left: 2.5%; margin-right: 2.5%" class="mt-4 mb-4">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <h2>General information</h2>
            <hr>
            <form action="/update_property/{{$property->id}}" method="post" enctype="multipart/form-data">
                @csrf
                <div >
                    <div class="row mt-4 mb-4">
                        <div class="col-sm-6 col-12 mb-2">
                            <div class="form-group">
                                <label for="title">Property title</label>
                                <input type="text" name="title" value="{{ old('title', $property->title) }}" class="form-control" id="title" aria-describedby="title" placeholder="Family home with garden">
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
                                    <textarea name="description" class="form-control" id="description" rows="3" placeholder="Describe what's great about this property">{{ old('description', $property->description) }}</textarea>
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
                                <input type="text" name="price" value="{{ old('price', $property->price) }}"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '');" class="form-control"
                                    placeholder="12500" aria-label="price">
                                <span class="input-group-text">???</span>
                                <select name="payment_duration" class="form-select" aria-label="payment_duration">
                                    <option value=any>Select payment duration</option>
                                    <option value="One Time"    @if (old('payment_duration') == 'One Time' || $property->payment_duration == 'One Time')     selected @endif>One Time</option>
                                    <option value="Annual"      @if (old('payment_duration') == 'Annual' || $property->payment_duration == 'Annual')       selected @endif>Annual</option>
                                    <option value="Quarterly"   @if (old('payment_duration') == 'Quarterly' || $property->payment_duration == 'Quarterly')    selected @endif>Quarterly</option>
                                    <option value="Monthly"     @if (old('payment_duration') == 'Monthly' || $property->payment_duration == 'Monthly')      selected @endif>Monthly</option>
                                    <option value="Bi-Monthly"  @if (old('payment_duration') == 'Bi-Monthly' || $property->payment_duration == 'Bi-Monthly')   selected @endif>Bi-Monthly</option>
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
                                            @if ($city->name == old('location') || $city->name == $property->location) selected @endif>{{ $city->name }}</option>
                                    @endforeach
                                </select>
                                @error('location')
                                    <span style="color: red;">
                                        <strong>{{ $message }}</strong><br>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 col-md-offset-1 mt-2 mb-2">
                            @if(!isset($property->featured_image))
                                <img src="/img/property_images/{{'default.jpg'}}" style="width:200px; height:200px; margin: auto; display: block; border-radius: 5px;">
                            @else 
                                <img src="/img/property_images/{{$property->featured_image}}" style="width:200px; height:200px; margin: auto; display: block; border-radius: 5px;">
                            @endif
                        </div>
                        <div class="col-lg-4 col-12 col-md-offset-1 mb-3"><br><br><br>
                            <input class="form-control" type="file" name="featured_image">
                            @error('featured_image')
                                <strong style="display: inline-block; color: red;">{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="col-lg-2 col-12 col-md-offset-1 mt-2 mb-2">
                            @if(!isset($property->second_image))
                                <img src="/img/property_images/{{'default.jpg'}}" style="width:200px; height:200px; margin: auto; display: block; border-radius: 5px;">
                            @else 
                                <img src="/img/property_images/{{$property->second_image}}" style="width:200px; height:200px; margin: auto; display: block; border-radius: 5px;">
                            @endif
                        </div>
                        <div class="col-lg-4 col-12 col-md-offset-1 mb-3"><br><br><br>
                            <input class="form-control" type="file" name="second_image">
                            @error('second_image')
                                <strong style="display: inline-block; color: red;">{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="col-lg-2 col-12 col-md-offset-1 mt-2 mb-2">
                            @if(!isset($property->third_image))
                                <img src="/img/property_images/{{'default.jpg'}}" style="width:200px; height:200px; margin: auto; display: block; border-radius: 5px;">
                            @else 
                                <img src="/img/property_images/{{$property->third_image}}" style="width:200px; height:200px; margin: auto; display: block; border-radius: 5px;">
                            @endif
                        </div>
                        <div class="col-lg-4 col-12 col-md-offset-1 mb-3"><br><br><br>
                            <input class="form-control" type="file" name="third_image">
                            @error('third_image')
                                <strong style="display: inline-block; color: red;">{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="col-lg-2 col-12 col-md-offset-1 mt-2 mb-2">
                            @if(!isset($property->fourth_image))
                                <img src="/img/property_images/{{'default.jpg'}}" style="width:200px; height:200px; margin: auto; display: block; border-radius: 5px;">
                            @else 
                                <img src="/img/property_images/{{$property->fourth_image}}" style="width:200px; height:200px; margin: auto; display: block; border-radius: 5px;">
                            @endif
                        </div>
                        <div class="col-lg-4 col-12 col-md-offset-1 mb-3"><br><br><br>
                            <input class="form-control" type="file" name="fourth_image">
                            @error('fourth_image')
                                <strong style="display: inline-block; color: red;">{{ $message }}</strong>
                            @enderror
                        </div>
                        
                        <h2 class="mt-2">Property information</h2>
                        <hr>

                        <div class="col-6 mb-2">
                            <div class="form-group">
                                <label for="propertyType">Property type</label>
                                <input type="text" name="type" value="{{ old('type', $property->type) }}" class="form-control" id="propertyType" aria-describedby="propertyType" placeholder="Apartment">
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
                                    <option value="Rent" @if (old('agreement') == 'Rent' || $property->agreement == 'Rent') selected @endif>Rent</option>
                                    <option value="Sale" @if (old('agreement') == 'Sale' || $property->agreement == 'Sale') selected @endif>Sale</option>
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
                                <input type="text" name="area" value="{{ old('area', $property->area) }}"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '');" class="form-control"
                                    placeholder="340" aria-label="area">
                                <span class="input-group-text">m??</span>
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
                                    <option value="New"         @if (old('status') == 'New' || $property->status == 'New')  selected @endif>New</option>
                                    <option value="Used"        @if (old('status') == 'Used' || $property->status == 'Used') selected @endif>Used</option>
                                    <option value="Partly used" @if (old('status') == 'Partly used' || $property->status == 'Partly used') selected @endif>Partly used</option>
                                </select>
                                @error('status')
                                    <span style="color: red;">
                                        <strong>{{ $message }}</strong><br>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-6 mb-3">
                            <label for="agreement">Rooms</label>

                            <div class="input-group">
                                <input type="text" name="rooms" value="{{ old('rooms', $property->rooms) }}"
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
                            <label for="agreement">Bathrooms</label>

                            <div class="input-group">
                                <input type="text" name="bathrooms" value="{{ old('bathrooms', $property->bathrooms) }}"
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
                            <label for="agreement">Bedrooms</label>

                            <div class="input-group">
                                <input type="text" name="bedrooms" value="{{ old('bedrooms', $property->bedrooms) }}"
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
                            <label for="agreement">Floor</label>

                            <div class="input-group">
                                <input type="text" name="floor" value="{{ old('floor', $property->floor) }}"
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
                                <input type="checkbox" name="parking" value="1" @if(old('parking', $property->parking)) checked @endif class="form-check-input" id="parking">
                                <label class="form-check-label" for="parking">Parking</label>
                            </div>
                        </div>

                        <div class="col-2 mb-2">
                            <div class="form-group form-check">
                                <input type="checkbox" name="balcony" value="1" @if(old('balcony', $property->balcony)) checked @endif class="form-check-input" id="balcony">
                                <label class="form-check-label" for="balcony">Balcony</label>
                            </div>
                        </div>

                        <div class="col-2 mb-2">
                            <div class="form-group form-check">
                                <input type="checkbox" name="air_conditioning" value="1" @if(old('air_conditioning', $property->air_conditioning)) checked @endif class="form-check-input" id="air_conditioning">
                                <label class="form-check-label" for="air_conditioning">Air Conditioning</label>
                            </div>
                        </div>

                        <div class="col-2 mb-2">
                            <div class="form-group form-check">
                                <input type="checkbox" name="alarm_system" value="1" @if(old('alarm_system', $property->alarm_system)) checked @endif class="form-check-input" id="alarm_system">
                                <label class="form-check-label" for="alarm_system">Alarm System</label>
                            </div>
                        </div>

                        <div class="col-2 mb-2">
                            <div class="form-group form-check">
                                <input type="checkbox" name="elevator" value="1" @if(old('elevator', $property->elevator)) checked @endif class="form-check-input" id="elevator">
                                <label class="form-check-label" for="elevator">Elevator</label>
                            </div>
                        </div>

                        <div class="col-2 mb-2">
                            <div class="form-group form-check">
                                <input type="checkbox" name="garden" value="1" @if(old('garden', $property->garden)) checked @endif class="form-check-input" id="garden">
                                <label class="form-check-label" for="garden">Garden</label>
                            </div>
                        </div>

                        <div class="col-2 mb-2">
                            <div class="form-group form-check">
                                <input type="checkbox" name="barbeque" value="1" @if(old('barbeque', $property->barbeque)) checked @endif class="form-check-input" id="barbeque">
                                <label class="form-check-label" for="barbeque">Barbeque</label>
                            </div>
                        </div>

                        <div class="col-2 mb-2">
                            <div class="form-group form-check">
                                <input type="checkbox" name="furniture" value="1" @if(old('furniture', $property->furniture)) checked @endif class="form-check-input" id="furniture">
                                <label class="form-check-label" for="furniture">Furniture</label>
                            </div>
                        </div>

                        <div class="col-2 mb-2">
                            <div class="form-group form-check">
                                <input type="checkbox" name="cable_tv" value="1" @if(old('cable_tv', $property->cable_tv)) checked @endif class="form-check-input" id="cable_tv">
                                <label class="form-check-label" for="cable_tv">Cable TV</label>
                            </div>
                        </div>

                        <div class="col-2 mb-2">
                            <div class="form-group form-check">
                                <input type="checkbox" name="internet" value="1" @if(old('internet', $property->internet)) checked @endif class="form-check-input" id="internet">
                                <label class="form-check-label" for="internet">Internet</label>
                            </div>
                        </div>

                        <div class="col-2 mb-2">
                            <div class="form-group form-check">
                                <input type="checkbox" name="central_heating" value="1" @if(old('central_heating', $property->central_heating)) checked @endif class="form-check-input" id="central_heating">
                                <label class="form-check-label" for="central_heating">Central Heating</label>
                            </div>
                        </div>

                        <div class="col-2 mb-2">
                            <div class="form-group form-check">
                                <input type="checkbox" name="pet_friendly" value="1" @if(old('pet_friendly', $property->pet_friendly)) checked @endif class="form-check-input" id="pet_friendly">
                                <label class="form-check-label" for="pet_friendly">Pet Friendly</label>
                            </div>
                        </div>

                        <input type="hidden" name="id" value={{$property->id}}>

                        <input type="submit" value="Submit" class="btn btn-primary mt-2" name="submit">
                    </div>
                </div>
            </form>
        </main>
    </div>
    </div>
@endsection
