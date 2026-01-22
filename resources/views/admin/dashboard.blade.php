@extends('layouts.app')

@section('title', __('ui.admin'))

@section('content')
    <h1>{{__('ui.admin_dashboard')}}</h1>

    <ul>
        <li><a href="{{ route('admin.users.index') }}">{{__('ui.user_management')}}</a></li>
        <li><a href="{{ route('admin.conferences.index') }}">{{__('ui.conference_management')}}</a></li>
    </ul>
@endsection


