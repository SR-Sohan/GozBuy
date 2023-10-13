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

    <div 
        id="loader"
        class="fixed left-0 top-0 z-999999 flex h-screen w-screen items-center justify-center bg-white dark:bg-black">
        <div class="h-16 w-16 animate-spin rounded-full border-4 border-solid border-blue-500 border-t-transparent"></div>
    </div>

    <div class="flex h-screen overflow-hidden">
        <aside class="w-72 bg-black-gray">
            <div class="flex justify-center px-6 py-2 lg:py-3">
                <a href="#">
                    <img src="{{asset("assets/images/aa.jpg")}}" alt="">
                </a>
            </div>
        </aside>
        <div class="w-10/12">
            <header>
                Header Area
            </header>
            <main>
                @yield('admincontent')
            </main>
        </div>
    </div>

  
</body>
</html>