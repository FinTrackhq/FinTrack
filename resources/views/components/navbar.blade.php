<div
    class="flex w-full flex-col items-center justify-between md:flex-row"
>
    <div class="flex w-full flex-row justify-between md:w-1/4">
        <img src="{{asset('file/image/logo/svg/logo.svg')}}" class="size-10" alt="">
    </div>

    <div
        class="mt-4 w-full rounded-t-md bg-white md:mt-0 md:w-auto md:bg-neutral-100"
    >
        <nav id="nav" class="hidden w-full px-4 py-4 md:flex">
            <ul
                class="flex flex-col space-y-1 text-base font-medium text-gray-900 md:flex-row md:space-x-8 md:space-y-0"
            >
                <li><a class="hover:text-gray-500" href="#">Product</a></li>
                <li><a class="hover:text-gray-500" href="#">About</a></li>
                <li><a class="hover:text-gray-500" href="#">Blog</a></li>
                <li><a class="hover:text-gray-500" href="#">Contact</a></li>
            </ul>
        </nav>
    </div>
    <div
        id="buttons"
        class="hidden w-full flex-col justify-end space-y-2 space-x-0 rounded-b-md bg-white px-3 pb-4 md:flex md:w-1/4 md:flex-row md:space-y-0 md:space-x-4 md:bg-neutral-100 md:px-0 md:pb-0"
    >
        <a
            class="w-full rounded-md border border-gray-200 px-3 py-1.5 text-base font-medium hover:text-gray-500 md:w-auto"
            href="{{route('filament.dashboard.auth.login')}}"
        >
            Log In
        </a>
        <a
            class="w-full rounded-md bg-black px-3 py-1.5 text-base font-medium text-white hover:bg-gray-800 md:w-auto"
            href="{{route('filament.dashboard.auth.register')}}"

        >
            Sign up
        </a>
    </div>
</div>
