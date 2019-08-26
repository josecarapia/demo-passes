<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Operation BOT - HIP</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
</head>
<body>

    <div id="app">
        <div class="form">
            <div class="thumbnail">
                <img src="{{ asset('images/TrigenLogoWht.png') }}"/>
<span class="white">HIP</span><br>
                <i class="white"> by <a href="http://operationbot.com" class="white">
                    TrigenResults LLC</a></i>
                </div>
<br><br>

                @if ($errors->has('email'))
                    <span class="white">{{ $errors->first('email') }}</span>
                @endif
                @if ($errors->has('password'))
                    <span class="white">{{ $errors->first('password') }}</span>
                @endif

                <form action="{{ route('login') }}" method="POST">
                    {{ csrf_field() }}
                    <input id="email" name="email" type="text" value="{{ old('email') }}" required autofocus placeholder="Email">
                    <input id="password" name="password" type="password" placeholder="Password" required>
                    <input type="submit" class="btn" value="Login">
                </form>
            </div>
        </div>  
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>