<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/santize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__log">PiGLy</div>
        <nav>
            <ul class="header__nav">
                <li>
                    <a href="/wight_logs/goal_setting">
                        <button class="header__nav-goal">目標体重</button>
                    </a>
                </li>
                <li>
                    <form action="/logout" method="post">
                        <button class="header__nav-logout">
                            @csrf
                            ログアウト
                        </button>
                    </form>
                </li>
            </ul>
        </nav>        
    </header>

    <main>
        @yield('content')
    </main>    
</body>
</html>