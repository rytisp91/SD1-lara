@extends('layouts.app')

@section('title', __('ui.home'))

@section('content')
    <h1>{{ __('ui.home_title') }}</h1>

    <p>{{ __('ui.student_info') }}</p>

    <ul>
        <li><a href="{{ route('client.conferences.index') }}">{{ __('ui.client_subsystem') }}</a></li>
        <li><a href="{{ route('employee.conferences.index') }}">{{ __('ui.employee_subsystem') }}</a></li>
        <li><a href="{{ route('admin.dashboard') }}">{{ __('ui.admin_subsystem') }}</a></li>
    </ul>
@endsection



