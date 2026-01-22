<!doctype html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', __('ui.app_title'))</title>
</head>
<body>

<nav style="padding: 10px; border-bottom: 1px solid #ddd;">
    <a href="{{ route('home') }}">{{ __('ui.home') }}</a> |
    <a href="{{ route('client.index') }}">{{ __('ui.client') }}</a> |
    <a href="{{ route('employee.index') }}">{{ __('ui.employee') }}</a> |
    <a href="{{ route('admin.dashboard') }}">{{ __('ui.admin') }}</a>

    <span style="float: right;">
        {{ __('ui.fake_user') }} |
        <button disabled>{{ __('ui.logout') }}</button>
    </span>
</nav>

<div style="padding: 20px;">
    @yield('content')
</div>

</body>
</html>

