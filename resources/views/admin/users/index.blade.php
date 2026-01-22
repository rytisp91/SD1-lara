@extends('layouts.app')

@section('title', __('ui.user_management'))

@section('content')
    <h1 class="mb-3">{{ __('ui.user_management') }}</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>{{ __('ui.first_name') }}</th>
            <th>{{ __('ui.last_name') }}</th>
            <th>{{ __('ui.email') }}</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user['id'] }}</td>
                <td>{{ $user['first_name'] }}</td>
                <td>{{ $user['last_name'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td class="text-end">
                    <a class="btn btn-sm btn-primary"
                       href="{{ route('admin.users.edit', ['id' => $user['id']]) }}">
                        {{ __('ui.edit') }}
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
