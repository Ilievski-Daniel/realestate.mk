@extends('layouts.sidepanel')
@section('content')
    <style>
        body {
            overflow-x: hidden;
            overflow-y: hidden;
        }
    </style>
    <div id="layoutSidenav_content">
        <main style="margin-left: 2.5%; margin-right: 2.5%" class="mt-4 mb-4">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <h2>General information</h2>
            <hr>
            <form action="{{ route('store_property') }}" method="post">
                @csrf
                <div >
                    <div class="row mt-4 mb-4">
                        <div class="col-6 mb-2">
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

                        <h2>Property information</h2>
                        <hr>

                        <div class="col-6 mb-3">
                            <label for="agreement">Rooms</label>

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

                        <input type="submit" value="Submit" class="btn btn-primary" name="submit">
                    </div>
                </div>
            </form>
        </main>
    </div>
    </div>
@endsection
