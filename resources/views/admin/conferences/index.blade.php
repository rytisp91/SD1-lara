@extends('layouts.app')

@section('title', __('ui.conference_management'))

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h1 class="mb-0">{{ __('ui.conference_management') }}</h1>

        <a class="btn btn-success" href="{{ route('admin.conferences.create') }}">
            {{ __('ui.create') }}
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>{{ __('ui.title') }}</th>
            <th>{{ __('ui.date') }}</th>
            <th>{{ __('ui.time') }}</th>
            <th>{{ __('ui.address') }}</th>
            <th class="text-end">{{ __('ui.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($conferences as $conf)
            <tr>
                <td>{{ $conf['id'] }}</td>
                <td>
                    <a href="{{ route('admin.conferences.show', ['id' => $conf['id']]) }}">
                        {{ $conf['title'] }}
                    </a>
                </td>
                <td>{{ $conf['date'] }}</td>
                <td>{{ $conf['time'] }}</td>
                <td>{{ $conf['address'] }}</td>
                <td class="text-end">
                    <a class="btn btn-sm btn-secondary"
                       href="{{ route('admin.conferences.edit', ['id' => $conf['id']]) }}">
                        {{ __('ui.edit') }}
                    </a>

                    <form method="post"
                          action="{{ route('admin.conferences.destroy', ['id' => $conf['id']]) }}"
                          class="d-inline"
                          onsubmit="return confirm('{{ __('ui.delete_confirm') }}')">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger">
                            {{ __('ui.delete') }}
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="mt-3">
        <button type="button" class="btn btn-primary"
                onclick="Swal.fire('OK', 'SweetAlert2 veikia', 'success')">
            JS test
        </button>
    </div>
@endsection
