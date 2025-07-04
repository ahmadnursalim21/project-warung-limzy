<!-- resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'hai')

@section('content')
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
        </tr>
        @foreach ($user as $r)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $r->name }}</td>
                <td>{{ $r->email }}</td>
                <td>{{ $r->password }}</td>
            </tr>
        @endforeach
    </table>
@endsection
