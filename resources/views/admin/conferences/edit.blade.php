@extends('layouts.app')

@section('title', __('ui.edit_conference'))

@section('content')
    <h1 class="mb-3">{{ __('ui.edit_conference') }}</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
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

    <form method="post" action="{{ route('admin.conferences.update', ['id' => $conference['id']]) }}" class="card p-3">
        @csrf
        @include('admin.conferences._form', ['conference' => $conference])
        <div class="text-end">
            <button class="btn btn-success" type="submit">{{ __('ui.save') }}</button>
        </div>
    </form>

    <div class="mt-3">
        <a class="btn btn-secondary" href="{{ route('admin.conferences.index') }}">{{ __('ui.back') }}</a>
        <a class="btn btn-primary" href="{{ route('admin.conferences.show', ['id' => $conference['id']]) }}">{{ __('ui.view') }}</a>
    </div>
@endsection
