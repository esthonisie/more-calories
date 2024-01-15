<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More Calories! | @yield('title', 'Home Page')</title>
    <link rel="stylesheet" href="/css/index.css"> 
    <link rel="stylesheet" href="/css/form.css">
</head>
<body>
    <div class="wrapper-main">
        <nav>
            <ul>
                <li><a href="{{ route('subjects.index') }}">Home</a></li>
                <li><a href="{{ route('subjects.create') }}">Add new Subject</a></li>
                <li><a href="#">Search Subject</a></li>
            </ul>
        </nav>
        @yield('content')
    </div>
</body>
</html>