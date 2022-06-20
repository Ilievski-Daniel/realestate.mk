@extends('layouts.sidepanel')
@section('content')
    <div id="layoutSidenav_content">
        <main style="margin-left: 2.5%; margin-right: 2.5%" class="mt-4 mb-4">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <h2>Profile information</h2>
            <hr>
            <form action="{{ route('update_profile') }}" method="post">
                @csrf
                <div >
                    <div class="row mt-4 mb-4">
                        <div class="col-6 mb-2">
                            <div class="form-group">
                                <label for="name">First name</label>
                                <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="name" aria-describedby="name" placeholder="Your first name..">
                                @error('name')
                                    <span style="color: red;">
                                        <strong>{{ $message }}</strong><br>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-6 mb-2">
                            <div class="form-group">
                                <label for="last_name">Last name</label>
                                <input type="text" name="last_name" value="{{ $user->last_name }}" class="form-control" id="last_name" aria-describedby="last_name" placeholder="Your last name..">
                                @error('last_name')
                                    <span style="color: red;">
                                        <strong>{{ $message }}</strong><br>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-6 mb-2">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" class="form-control" id="description" rows="3" placeholder="Describe who you are and what you do..">{{$user->description}}</textarea>
                                </div>
                                @error('description')
                                    <span style="color: red;">
                                        <strong>{{ $message }}</strong><br>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-6 mb-3">
                            <label for="phone_number">Phone Number</label>

                            <div class="input-group">
                                <input type="text" id="phone_number" name="phone_number" value="{{ $user->phone_number }}"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '');" class="form-control"
                                    placeholder="77123456" aria-label="phone_number">
                            </div>
                            <small class="form-text text-muted">Only Macedonian (+389) phone numbers  are accepted.</small><br>

                            @error('phone_number')
                                <span style="color: red;">
                                    <strong>{{ $message }}</strong><br>
                                </span>
                            @enderror
                        </div>

                        <div class="col-6 mb-2">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" value="{{ $user->email }}" class="form-control" id="email" aria-describedby="email" placeholder="Your email address..">
                                @error('email')
                                    <span style="color: red;">
                                        <strong>{{ $message }}</strong><br>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-6 mb-2 mt-4">
                            <div class="form-group">
                                <a href="{{ route('password.request') }}" class="link-primary">Change your password</a>
                            </div>
                        </div>

                        <input type="hidden" name="id" value="{{auth()->user()->id}}">

                        <input type="submit" value="Submit" class="btn btn-primary mt-2" name="submit">
                    </div>
                </div>
            </form>
        </main>
    </div>
    </div>
@endsection
