<!doctype html>

<html>
    <head>

        <!-- Meta tags -->
        <meta charset="utf-8">

        <!-- Style sheets CSS -->
        {{ HTML::style('css/style.css') }}
        {{ HTML::style('css/media-queries.css') }}

        <!-- Javascript -->
        {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', array('media' => 'screen')) }}



        {{ HTML::style('css/style.css') }}



    </head>
    <body>
    <div class="bg_elements"></div>
        <div class="container-general clearfix">
            <!--<div class="left_column"></div>-->

            @yield('content')
           <!-- <div style="clear: both;"></div>-->
        </div>



        @yield('js_code')

    </body>
</html>