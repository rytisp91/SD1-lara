@extends('layouts.app')

@section('title', 'Admin')

@section('content')
    <h1>Admin subsystem</h1>

    <ul>
        <li><a href="{{ route('admin.users.index') }}">User management</a></li>
        <li><a href="{{ route('admin.conferences.index') }}">Conference management</a></li>
    </ul>
@endsection


