@extends('layouts.app')

@section('title', __('ui.user_management'))

@section('content')
    <h1 class="mb-3">{{ __('ui.user_management') }}</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ route('admin.users.update', ['id' => $user['id']]) }}" class="card p-3">
        @csrf

        <div class="mb-3">
            <label class="form-label">{{ __('ui.first_name') }}</label>
            <input type="text"
                   name="first_name"
                   value="{{ old('first_name', $user['first_name']) }}"
                   class="form-control @error('first_name') is-invalid @enderror">
            @error('first_name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('ui.last_name') }}</label>
            <input type="text"
                   name="last_name"
                   value="{{ old('last_name', $user['last_name']) }}"
                   class="form-control @error('last_name') is-invalid @enderror">
            @error('last_name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('ui.email') }}</label>
            <input type="email"
                   name="email"
                   value="{{ old('email', $user['email']) }}"
                   class="form-control @error('email') is-invalid @enderror">
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="text-end">
            <button class="btn btn-success" type="submit">{{ __('ui.save') }}</button>
        </div>
    </form>
@endsection

