<!doctype html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'SD1')</title>
</head>
<body>

<nav style="padding: 10px; border-bottom: 1px solid #ddd;">
    <a href="{{ route('home') }}">Home</a> |
    <a href="{{ route('client.index') }}">Client</a> |
    <a href="{{ route('employee.index') }}">Employee</a> |
    <a href="{{ route('admin.dashboard') }}">Admin</a>

    <span style="float: right;">
        John Doe |
        <button disabled>Logout</button>
    </span>
</nav>

<div style="padding: 20px;">
    @yield('content')
</div>

</body>
</html>

