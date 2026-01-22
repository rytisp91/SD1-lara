@extends('layouts.app')

@section('title', __('ui.employee_conferences'))

@section('content')
    <h1 class="mb-3">{{ $conference['title'] }}</h1>

    <div class="card p-3 mb-3">
        <p><strong>{{ __('ui.description') }}:</strong> {{ $conference['description'] }}</p>
        <p><strong>{{ __('ui.speakers') }}:</strong> {{ $conference['speakers'] }}</p>
        <p><strong>{{ __('ui.date') }}:</strong> {{ $conference['date'] }}</p>
        <p><strong>{{ __('ui.time') }}:</strong> {{ $conference['time'] }}</p>
        <p><strong>{{ __('ui.address') }}:</strong> {{ $conference['address'] }}</p>
    </div>

    <h2 class="h4">{{ __('ui.registered_clients') }}</h2>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>{{ __('ui.name') }}</th>
            <th>{{ __('ui.email') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($conference['registrations'] as $reg)
            <tr>
                <td>{{ $reg['name'] }}</td>
                <td>{{ $reg['email'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a class="btn btn-secondary" href="{{ route('employee.conferences.index') }}">{{ __('ui.back') }}</a>
@endsection
