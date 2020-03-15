<!DOCTYPE html>
<html lang="en">
    <head>
         @include('frontend.includes.head')
         @yield('style')
    </head>
    <body class="<?php if(isset($page)){ echo $page; }?>" data-spy="scroll" data-target=".main_menu" data-offset="100">
        <div id="wrapper">
           <!-- Header -->
            @include('frontend.includes.header')
            <!-- Main Section -->
            @yield('content')
            <!-- Footer -->
            @include('frontend.includes.footer')
        </div>
        @include('frontend.includes.js_script')
        @yield('script')
    </body>
</html>
