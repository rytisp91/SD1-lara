@extends('layouts.app')

@section('title', __('ui.employee_conferences'))

@section('content')
    <h1 class="mb-3">{{ __('ui.employee_conferences') }}</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>{{ __('ui.title') }}</th>
            <th>{{ __('ui.date') }}</th>
            <th>{{ __('ui.time') }}</th>
            <th class="text-end">{{ __('ui.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($conferences as $conf)
            <tr>
                <td>{{ $conf['title'] }}</td>
                <td>{{ $conf['date'] }}</td>
                <td>{{ $conf['time'] }}</td>
                <td class="text-end">
                    <a class="btn btn-sm btn-primary"
                       href="{{ route('employee.conferences.show', ['id' => $conf['id']]) }}">
                        {{ __('ui.view') }}
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


