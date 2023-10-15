<aside class="w-72 bg-black-gray">
    {{-- logo s --}}
    <div class="flex justify-center px-6 py-2 lg:py-3">
        <a href="#">
            <img src="{{asset("assets/images/aa.jpg")}}" alt="">
        </a>
    </div>

    <div class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear">
        <nav   class="mt-5 py-4 px-4 lg:mt-9 lg:px-6">
            <ul class="flex flex-1 flex-col gap-2">
                <li><a class="flex text-white items-center" href="/admin">
                    <i class="fa-solid fa-house"></i>
                    <span class="text-base lg:text-lg ml-4">Dashboard</span>
                </a></li>
                <li><a class="flex text-white items-center" href="/admin/categories">
                    <i class="fa-regular fa-calendar-plus"></i>
                    <span class="text-base lg:text-lg ml-4">Categories</span>
                </a></li>
            </ul>
        </nav>
    </div>

</aside>