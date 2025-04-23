<html lang="en">
@vite('resources/css/app.css')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Database</title>
</head>
<body>
    @if(session('Success'))
        <div id='notif'>{{session('Success')}}</div>
    @endif
    <header>
        <h1>Employee Database</h1>
    </header>
    <div class="tab">
        <a href="{{route('employees.index')}}">Database</a>
        <a href="{{route('employees.summary')}}">Summary</a>
    </div>
    <main class="container">
        {{$slot}}
    </main>


</body>
</html>