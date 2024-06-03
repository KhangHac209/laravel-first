<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<style>
    main {
        display: flex;
    }

    aside {
        margin: 0 50px;
    }
</style>

<body>
    @include('blocks.header')
    <main>
        <aside>
            @section('sidebar')
                Sidebar Parent
            @show
        </aside>
        <div class="content">
            @yield('content')
        </div>
    </main>
    @include('blocks.footer')
</body>

</html>
