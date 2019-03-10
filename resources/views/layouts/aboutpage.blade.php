<!doctype html>
<html lang="en">

<head>
    @include('includes.abouthead')
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
            @include('includes.aboutpagefooter')
        </footer>

      </div>
</body>
</html>
