@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Pagrindinis puslapis</h1>

    <p>Vardas Pavardė, Grupė XXX</p>

    <ul>
        <li><a href="{{ route('client.index') }}">Client subsystem</a></li>
        <li><a href="{{ route('employee.index') }}">Employee subsystem</a></li>
        <li><a href="{{ route('admin.dashboard') }}">Admin subsystem</a></li>
    </ul>
@endsection

