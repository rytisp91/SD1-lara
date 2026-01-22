@extends('layouts.app')

@section('title', __('ui.conference_management'))

@section('content')
    <h1>{{__('ui.conference_management')}}</h1>
    <p>{{__('ui.conferences_list_placeholder')}}</p>
    <button type="button" class="btn btn-primary" onclick="Swal.fire('OK', 'SweetAlert2 veikia', 'success')">
        JS test
    </button>
@endsection

