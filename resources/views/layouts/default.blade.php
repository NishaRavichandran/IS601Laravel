<!doctype html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body>
<div class="container">
    <header>
        @include('includes.header')
    </header>

    <main role="'main">
        @yield('content')
        </main>

    @include('includes.jsfooter')

        <footer class="row">
            @include('includes.footer')
        </footer>

      </div>
</body>
</html>
