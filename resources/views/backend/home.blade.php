@extends('layouts.sidepanel')
@section('content')
<?php $count = 0 ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Agent Control Panel</li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">My properties count: 
                                {{($propertyCount)}}
                             </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="{{ route('create_property') }}">Create new property</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">Messages count: {{$messageUsersCount}}</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="{{ route('create_property') }}">View all messages</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        My properties list
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Location</th>
                                    <th>Area</th>
                                    <th>View</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $count = 1 ?>
                                @foreach($userProperties as $userProperty)
                                @if($userProperty->user_id == auth()->user()->id)
                                @foreach($properties as $property)
                                @if($property->id == $userProperty->property_id)

                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>{{ $property->title }}</td>
                                    <td>{{ $property->location}}</td>
                                    <td>{{ $property->area}}m²</td>
                                    <td><a href="{{'property/'.$property->id}}">
                                        <i class="fa fa-eye" aria-hidden="true"></i>    
                                    </a></td>
                                    <td>
                                        <form method="GET" action='/edit_property/{{ $property->id }}'>
                                            @csrf
                                                <button style="border: none; background-color: white;" type="submit" class="submitbtn" name="edit"><i style="color: green;" class="fas fa-edit"></i></button>
                                        </form>
                                    </td>
                                    <td>
                                        <form method="POST" action='/property/{{ $property->id }}'>
                                            @csrf
                                                <button style="border: none; background-color: white;" type="submit" class="submitbtn" name="delete"><i style="color: red;" class="fa fa-trash" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    
    @endsection
