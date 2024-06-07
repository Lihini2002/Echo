<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your App')</title>
    <!-- Add your common stylesheets, scripts, etc. here -->
</head>
<body>
    <!-- Common header -->
    <header>
        <h1>The default thing</h1>
    </header>

    <!-- Content section -->
    <div class="content">
        @yield('content')
        @include('sweetalert::alert')
    </div>

    <!-- Common footer -->
    <footer>
        <p>Your App Footer</p>
    </footer>

    <!-- Add your common scripts, etc. here -->
</body>
</html>

