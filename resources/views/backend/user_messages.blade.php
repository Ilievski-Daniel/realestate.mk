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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $count = 1 ?>
                                @foreach($messageUsers as $messageUser)
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>{{ $messageUser->name }}</td>
                                    <td>{{ $messageUser->email}}</td>
                                    <td>{{ $messageUser->message}}</td>
                                    <td>
                                        <form method="POST" action='/delete_message_user/{{ $messageUser->id }}'>
                                            @csrf
                                                <button style="border: none; background-color: white;" type="submit" class="submitbtn" name="delete"><i style="color: red;" class="fa fa-trash" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    
    @endsection
