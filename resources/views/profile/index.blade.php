@extends('layouts.app')

@section('title', 'Page Profile')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4>My Profile</h4>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <img src="{{ asset('images/user.png') }}" class="rounded-circle" width="150" alt="User Photo">
                        </div>

                        <table class="table table-borderless">
                            <tr>
                                <th width="150">Name</th>
                                <td>John Doe</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>john.doe@example.com</td>
                            </tr>
                            <tr>
                                <th>Bio</th>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae.</td>
                            </tr>
                        </table>

                        <div class="text-end">
                            <a href="#" class="btn btn-warning">Edit Profile</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
