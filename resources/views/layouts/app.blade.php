<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/schedule_table',
            type: 'GET',
            success: function(response) {
                var content = '';
                $.each( response, function( key, value ) {
                    content += '<button class="alert alert-success delete_schedule" data-id="' + value['id'] + '"><p>' + value['name'] + '</p><p>' + value['start_date'] + '</p><p>' + value['end_date'] + '</p></button>';
                });
                $('#schedule_list').html(content);
            }
        });
        $('#add_schedule').click(function(){
            var name = '123';
            var start_date = '2019-08-01';
            var end_date = '2019-08-03';
            $.ajax({
                url: '/schedule_table',
                type: 'POST',
                data: {
                    'name': name,
                    'start_date': start_date,
                    'end_date': end_date
                },
                success: function(response) {
                    location.reload();
                }
            });
        });
        $('#schedule_list').on('click', '.delete_schedule',function(){
            var id = $(this).data('id');
            $.ajax({
                url: '/schedule_table/' + id,
                type: 'DELETE',
                success: function(response) {
                    location.reload();
                }
            });
        });
        $.ajax({
            url: '/schedule_table/card',
            type: 'GET',
            success: function(response) {
                var content = '';
                $.each( response, function( key, value ) {
                    content += '<button class="alert alert-success delete_schedule_card" data-id="' + value['id'] + '"><p>' + value['title'] + '</p><p>' + value['describe'] + '</p><p>' + value['article_url'] + '</p><p>' + value['article_content'] + '</p><p>' + value['image_url'] + '</p></button>';
                });
                $('#schedule_card_list').html(content);
            }
        });
        $('#add_schedule_card').click(function(){
            var title = '666';
            var describe = '777';
            var article_url = '888';
            var article_content = '999';
            var image_url = '000';
            $.ajax({
                url: '/schedule_table/card',
                type: 'POST',
                data: {
                    'title': title,
                    'describe': describe,
                    'article_url': article_url,
                    'article_content': article_content,
                    'image_url': image_url
                },
                success: function(response) {
                    location.reload();
                }
            });
        });
        $('#schedule_card_list').on('click', '.delete_schedule_card',function(){
            var id = $(this).data('id');
            $.ajax({
                url: '/schedule_table/card/' + id,
                type: 'DELETE',
                success: function(response) {
                    location.reload();
                }
            });
        });
        $.ajax({
            url: '/store_card',
            type: 'GET',
            success: function(response) {
                var content = '';
                $.each( response, function( key, value ) {
                    content += '<button class="alert alert-success delete_store_card" data-id="' + value['id'] + '"><p>' + value['title'] + '</p><p>' + value['describe'] + '</p><p>' + value['article_url'] + '</p><p>' + value['article_content'] + '</p><p>' + value['image_url'] + value['owner_id'] + '</p></button>';
                });
                $('#store_card_list').html(content);
            }
        });
        $('#add_store_card').click(function(){
            var card_id = '1';
            $.ajax({
                url: '/store_card',
                type: 'POST',
                data: {
                    'card_id': card_id,
                },
                success: function(response) {
                    location.reload();
                }
            });
        });
        $('#store_card_list').on('click', '.delete_store_card',function(){
            var id = $(this).data('id');
            $.ajax({
                url: '/store_card/' + id,
                type: 'DELETE',
                success: function(response) {
                    location.reload();
                }
            });
        });
    });
    </script>
</body>
</html>
