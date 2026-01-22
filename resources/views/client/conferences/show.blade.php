@extends('layouts.app')

@section('title', __('ui.client_conferences'))

@section('content')
    <h1 class="mb-3">{{ $conference['title'] }}</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card p-3">
        <p><strong>{{ __('ui.description') }}:</strong> {{ $conference['description'] }}</p>
        <p><strong>{{ __('ui.speakers') }}:</strong> {{ $conference['speakers'] }}</p>
        <p><strong>{{ __('ui.date') }}:</strong> {{ $conference['date'] }}</p>
        <p><strong>{{ __('ui.time') }}:</strong> {{ $conference['time'] }}</p>
        <p><strong>{{ __('ui.address') }}:</strong> {{ $conference['address'] }}</p>
    </div>

    <div class="mt-3 d-flex gap-2">
        <a class="btn btn-secondary" href="{{ route('client.conferences.index') }}">{{ __('ui.back') }}</a>

        <form method="post" action="{{ route('client.conferences.register', ['id' => $conference['id']]) }}">
            @csrf
            <button type="submit" class="btn btn-success">{{ __('ui.register') }}</button>
        </form>
    </div>
@endsection

