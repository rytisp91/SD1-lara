@extends('layouts.app')

@section('title', __('ui.conference_management'))

@section('content')
    <h1 class="mb-3">{{ $conference['title'] }}</h1>

    <div class="card p-3">
        <p><strong>{{ __('ui.description') }}:</strong> {{ $conference['description'] }}</p>
        <p><strong>{{ __('ui.speakers') }}:</strong> {{ $conference['speakers'] }}</p>
        <p><strong>{{ __('ui.date') }}:</strong> {{ $conference['date'] }}</p>
        <p><strong>{{ __('ui.time') }}:</strong> {{ $conference['time'] }}</p>
        <p><strong>{{ __('ui.address') }}:</strong> {{ $conference['address'] }}</p>
    </div>

    <div class="mt-3">
        <a class="btn btn-secondary" href="{{ route('admin.conferences.index') }}">{{ __('ui.back') }}</a>
        <a class="btn btn-primary" href="{{ route('admin.conferences.edit', ['id' => $conference['id']]) }}">{{ __('ui.edit') }}</a>
    </div>
@endsection
