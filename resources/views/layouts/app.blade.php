<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body>
<div id="wrapper">

    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        @include('includes.sidebar')
    </nav>

    <div id="page-wrapper">
        @yield('content')
    </div>

</div>

@include('includes.footer')
</body>

</html>
