<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="{{ mix('js/app.js') }}" async></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                /*height: 100vh;*/
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        @if (session('user'))
            <nav class="navbar navbar-light bg-light fixed-top px-3">
                <div>
                    <a class="navbar-brand mr-auto" href="/">Todo</a>
                </div>
                <div>
                    <div class="rounded-circle d-flex justify-content-center align-items-center"
                         style="height: 40px; width: 40px; background-color: white; color: gray; cursor: pointer;"
                         data-toggle="dropdown">
                        {{mb_substr(mb_strtoupper(session('user')['name']), 0, 1)}}
                    </div>
                    <form name="logoutForm" method="post" action="{{ route('auth.logout') }}">@csrf</form>
                    <ul class="dropdown-menu dropdown-menu-right mr-3">
                        <li><span class="dropdown-item-text">{{session('user')['email']}}</span></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="javascript:void(0);"
                               onclick="document.logoutForm.submit();">ログアウト</a></li>
                    </ul>
                </div>
            </nav>
        @endif
        <main style="min-height: 100vh; display: flex; align-items: center; justify-content: center;">
            <div style="padding: 100px 0; text-align: center;">
                @if ($errors->any())
                    <h4 style="color: #ff5e5e">{{$errors->first()}}</h4>
                @endif
                @yield('content')
            </div>
        </main>
    </body>
</html>
