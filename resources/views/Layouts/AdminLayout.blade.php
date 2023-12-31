<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GozBuy-Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>


  @include('components.common.Loader')

    <div class="flex h-screen overflow-hidden">
            @include('components.admin.sidebar')

        <div class="">
           @include('components.admin.header')
            <main>
                @yield('admincontent')
            </main>
        </div>
    </div>

  
</body>
</html>