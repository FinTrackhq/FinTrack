@extends('components.layouts.main')
@section('main')
    <div class="flex flex-col space-y-8 p-4 md:p-8">
        <div class="mx-auto w-full rounded-xl bg-neutral-100 p-6">
            @include('components.header')
            <div
                class="relative flex w-full flex-col items-center space-y-12 overflow-hidden pt-12 text-center md:py-32"
            >
                <div class="flex max-w-xl flex-col space-y-4">
                    <h1
                        class="text-4xl font-semibold leading-snug tracking-tight md:text-5xl"
                    >
                        The best Web tool for an accountant
                    </h1>
                    <p class="text-gray-600">
                        The most functional, beautiful, user-friendly open source tool!
                    </p>
                </div>
                <div class="mx-auto max-w-4xl">
                    <img
                        src="{{asset('file/image/screenshots/dashboard.php.png')}}"
                        class="relative z-50 rounded-xl md:w-auto" alt=""
                    />
                    <div>
                        <div
                            class="absolute top-[30rem] left-1/2 -ml-[40rem] w-[163.125rem] max-w-none sm:-ml-[37.5rem]"
                        >
                            <svg
                                width="277"
                                height="393"
                                viewBox="0 0 277 393"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M0 0V115.588C0 189.162 29.1838 259.723 81.1314 311.748C133.079 363.773 203.535 393 277 393V277.412C277 203.838 247.816 133.277 195.869 81.252C143.921 29.2272 73.465 0 0 0Z"
                                    fill="url(#paint0_linear_2_172)"
                                />
                                <defs>
                                    <linearGradient
                                        id="paint0_linear_2_172"
                                        x1="-106.596"
                                        y1="-61.57"
                                        x2="184.581"
                                        y2="468.854"
                                        gradientUnits="userSpaceOnUse"
                                    >
                                        <stop
                                            offset="0.0490857"
                                            stop-color="#b8b8b8"
                                            stop-opacity="0"
                                        />
                                        <stop
                                            offset="0.906624"
                                            stop-color="#b8b8b8"
                                            stop-opacity="0.42"
                                        />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <div
                            class="absolute top-[18rem] left-1/2 z-0 -ml-[40rem] w-[163.125rem] max-w-none sm:ml-[17.5rem]"
                        >
                            <svg
                                width="369"
                                height="600"
                                viewBox="0 0 369 600"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M0 369.231V600C97.8649 600 191.721 561.099 260.922 491.855C330.123 422.611 369 328.695 369 230.769V0C271.135 0 177.279 38.901 108.078 108.145C38.8767 177.389 0 271.305 0 369.231Z"
                                    fill="url(#paint0_linear_2_171)"
                                />
                                <defs>
                                    <linearGradient
                                        id="paint0_linear_2_171"
                                        x1="-142"
                                        y1="-94"
                                        x2="333"
                                        y2="661"
                                        gradientUnits="userSpaceOnUse"
                                    >
                                        <stop
                                            offset="0.0490857"
                                            stop-color="#E5E5E5"
                                            stop-opacity="0"
                                        />
                                        <stop
                                            offset="0.906624"
                                            stop-color="#E5E5E5"
                                            stop-opacity="0.42"
                                        />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-auto w-full rounded-xl bg-neutral-800 p-6">
            <div
                class="flex w-full flex-col items-center space-y-12 py-12 text-center md:space-y-24 md:py-32"
            >
                <div class="flex flex-col space-y-2">
                    <h1
                        class="text-3xl font-semibold leading-snug text-white md:text-4xl"
                    >
                        Customization
                    </h1>
                    <p class="text-neutral-400">
                        Customize the workspace as you want!
                    </p>
                </div>
                <div class="flex flex-col space-y-12">
                    <div class="w-full max-w-6xl justify-between">
                        <div
                            class="flex flex-col space-y-12 lg:flex-row lg:space-y-0 lg:space-x-12"
                        >
                            <div
                                class="flex w-full overflow-clip rounded-xl bg-neutral-700 text-white"
                            >
                                <div
                                    class="relative flex h-[300px] w-full flex-col overflow-hidden px-10 py-9 text-left md:h-[408px]"
                                >
                                    <div class="flex flex-col space-y-1">
                                        <h3 class="text-xl font-medium text-white">
                                            A dark/light theme is available
                                        </h3>
                                    </div>
                                    <img
                                        class="7xl:mt-16 absolute mt-24 -ml-4 md:mt-20"
                                        src="{{asset('file/image/screenshots/lighttheme.png')}}" alt=""
                                    />
                                </div>
                            </div>
                            <div
                                class="flex w-full overflow-clip rounded-xl bg-neutral-700 text-white"
                            >
                                <div
                                    class="relative flex h-[300px] w-full flex-col overflow-hidden px-10 py-9 text-left md:h-[408px]"
                                >
                                    <div class="flex flex-col space-y-1">
                                        <h3 class="text-xl font-medium text-white">
                                            Customize the colors of the components for yourself
                                        </h3>
                                    </div>
                                    <img
                                        class="7xl:mt-16 md:mt-18 absolute mt-28 -ml-8 w-full min-w-[700px]"
                                        src="{{asset('file/image/screenshots/primarycolor.png')}}" alt=""
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full max-w-6xl justify-between">
                        <div
                            class="flex flex-col space-y-12 lg:flex-row lg:space-y-0 lg:space-x-12"
                        >
                            <div
                                class="flex w-full overflow-clip rounded-xl bg-neutral-700 text-white"
                            >
                                <div
                                    class="relative flex h-[308px] w-full flex-col overflow-hidden px-10 py-9 text-left"
                                >
                                    <div class="flex flex-col space-y-1">
                                        <h3 class="text-xl font-medium text-white">
                                            Custom themes
                                        </h3>
                                    </div>
                                    <img
                                        class="7xl:mt-16 absolute mt-32 -ml-16 min-w-[800px] md:-ml-4 md:mt-20"
                                        src="{{asset('file/image/screenshots/themes.png')}}" alt=""
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-auto w-full rounded-xl bg-neutral-100 p-6">
            <div
                class="flex w-full flex-col items-center space-y-12 py-12 text-center md:space-y-20 md:py-32"
            >
                <div class="flex max-w-xl flex-col space-y-2">
                    <h1
                        class="text-3xl font-semibold leading-snug text-neutral-900 md:text-4xl"
                    >
                        Technologies
                    </h1>
                    <p class="text-neutral-600">
                        Our project uses only the best technologies that give you high performance,
                        clean code, the ability to redo the project just for you.
                    </p>
                </div>
                <div class="flex flex-col space-y-8 md:space-y-20">
                    <div class="flex max-w-6xl">
                        <div
                            class="flex w-full flex-col justify-between space-y-6 md:flex-row md:space-y-0 md:space-x-12"
                        >
                            <div class="flex flex-col space-y-2 text-left">
                                <div class="max-w-sm">
                                    <p class="font-medium">PHP</p>
                                    <p class="font-normal text-neutral-600">
                                        The most popular server-side programming language.
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-col space-y-2 text-left">
                                <div class="flex max-w-sm flex-col space-y-1">
                                    <p class="font-medium">Laravel</p>
                                    <p class="font-normal text-neutral-600">
                                        It is the best web application framework with expressive, elegant syntax. The best PHP framework.
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-col space-y-2 text-left">
                                <div class="max-w-sm">
                                    <p class="font-medium">Blade</p>
                                    <p class="font-normal text-neutral-600">
                                        A simple but powerful template engine that is included in the
                                        Laravel.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex max-w-6xl">
                        <div
                            class="flex w-full flex-col justify-between space-y-6 md:flex-row md:space-y-0 md:space-x-12"
                        >
                            <div class="flex flex-col space-y-2 text-left">
                                <div class="max-w-sm">
                                    <p class="font-medium">TailwindCSS</p>
                                    <p class="font-normal text-neutral-600">
                                        CSS is a framework that allows you to create user interfaces
                                        using a set of ready-made classes. It was designed to speed up the process
                                        developing and facilitating code support.
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-col space-y-2 text-left">
                                <div class="flex max-w-sm flex-col space-y-1">
                                    <p class="font-medium">Livewire</p>
                                    <p class="font-normal text-neutral-600">
                                        Simplifies the creation of dynamic interfaces using mainly PHP
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-col space-y-2 text-left">
                                <div class="max-w-sm">
                                    <p class="font-medium">FilamentPHP</p>
                                    <p class="font-normal text-neutral-600">
                                        This is a panel on Laravel that can speed up the process of developing web applications.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-auto w-full rounded-xl bg-neutral-800 p-6">
            <div
                class="flex w-full flex-col items-center space-y-12 py-12 text-center md:space-y-24 md:py-32"
            >
                <div class="flex max-w-xl flex-col space-y-2">
                    <h1
                        class="text-3xl font-semibold leading-snug text-white md:text-4xl"
                    >
                        Why us?
                    </h1>
                    <p class="text-neutral-400">
                        5 advantages of our project
                    </p>
                </div>
                <div class="flex flex-col space-y-6 md:space-y-12">
                    <div class="flex max-w-6xl">
                        <div
                            class="flex w-full flex-col justify-between space-y-6 md:flex-row md:space-y-0 md:space-x-12"
                        >
                            <div
                                class="group flex w-full cursor-pointer flex-col space-y-2 rounded-2xl bg-neutral-700 p-6 text-left md:w-1/3"
                            >
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="green" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                    </svg>
                                    <div class="ml-4 flex flex-col text-sm text-white">
                                        <div class="font-semibold">Free AI</div>
                                        <div
                                            class="text-neutral-400 group-hover:text-neutral-300"
                                        >
                                        </div>
                                    </div>
                                </div>

                                <div class="max-w-sm">
                                    <p class="text-neutral-300">
                                        We use GPT 3.5 configured for accountants and it's absolutely free!
                                    </p>
                                </div>
                            </div>
                            <div
                                class="group flex w-full cursor-pointer flex-col space-y-2 rounded-2xl bg-neutral-700 p-6 text-left md:w-1/3"
                            >
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="green" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                    </svg>
                                    <div class="ml-4 flex flex-col text-sm text-white">
                                        <div class="font-semibold">Open source code</div>
                                        <div
                                            class="text-neutral-400 group-hover:text-neutral-300"
                                        >
                                        </div>
                                    </div>
                                </div>

                                <div class="min-w-sm">
                                    <p class="text-neutral-300">
                                        Unlike our competitors, we give access to the basic project absolutely free of charge, as well as provide the code
                                    </p>
                                </div>
                            </div>
                            <div
                                class="group flex w-full cursor-pointer flex-col space-y-2 rounded-2xl bg-neutral-700 p-6 text-left md:w-1/3"
                            >
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="green" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                    </svg>
                                    <div class="ml-4 flex flex-col text-sm text-white">
                                        <div class="font-semibold">Updatability</div>
                                        <div
                                            class="text-neutral-400 group-hover:text-neutral-300"
                                        >

                                        </div>
                                    </div>
                                </div>

                                <div class="min-w-sm">
                                    <p class="text-neutral-300">
                                        We listen to our users and constantly update our project at the request of users
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-auto flex max-w-6xl">
                        <div
                            class="flex w-full flex-col justify-between space-y-6 md:flex-row md:space-y-0 md:space-x-12"
                        >
                            <div
                                class="group flex cursor-pointer flex-col space-y-2 rounded-2xl bg-neutral-700 p-6 text-left md:w-1/2 md:max-w-[326px]"
                            >
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="green" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                    </svg>
                                    <div class="ml-4 flex flex-col text-sm text-white">
                                        <div class="font-semibold">Modern stack</div>
                                        <div
                                            class="text-neutral-400 group-hover:text-neutral-300"
                                        >

                                        </div>
                                    </div>
                                </div>

                                <div class="min-w-sm">
                                    <p class="text-neutral-300">
                                        Our stack is very popular, flexible and extensible. Therefore, your company can very easily find a developer to refine the functionality exactly for you
                                    </p>
                                </div>
                            </div>
                            <div
                                class="group flex cursor-pointer flex-col space-y-2 rounded-2xl bg-neutral-700 p-6 text-left md:w-1/2 md:max-w-[326px]"
                            >
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="green" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                    </svg>
                                    <div class="ml-4 flex flex-col text-sm text-white">
                                        <div class="font-semibold">∞ user - ∞ companies</div>
                                        <div
                                            class="text-neutral-400 group-hover:text-neutral-300"
                                        >
                                            <a href="https://twitter.com/davehawkins"
                                            ></a
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div class="min-w-sm">
                                    <p class="text-neutral-300">
                                        Create as many companies as you want, and connect infinitely many additional users
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-auto w-full rounded-xl bg-neutral-100 p-6">
            <div
                class="flex w-full flex-col items-center space-y-12 py-12 text-center md:py-32"
            >
                <div class="flex max-w-xl flex-col space-y-4">
                    <h1
                        class="text-4xl font-semibold leading-snug tracking-tight md:text-5xl"
                    >
                       Feedback
                    </h1>
                    <p class="text-gray-600">
                        If you find a bug or want to contact me, then write to me at Telegram: ya_hannes.
                    </p>
                </div>
                <div class="max-4xl flex flex-col space-y-4">
                    <p class="text-neutral-400">Or</p>
                    <form class="flex flex-col space-y-3" method="POST" action="{{route('feedback.create')}}">
                        @if(session()->has('success'))
                            <div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow " role="alert">
                                <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg ">
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    <span class="sr-only">Check icon</span>
                                </div>
                                <div class="ms-3 text-sm font-normal">   {{ session()->get('success') }}</div>
                                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
                                    <span class="sr-only">Close</span>
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                </button>
                            </div>
                        @endif
                        @csrf
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label><input
                            type="text"
                            id="name" name="name"
                            class="block w-full rounded-md border border-gray-200 py-2.5 px-4 text-base text-gray-900 shadow-sm focus:border-green-700 focus:ring-green-700"
                            placeholder="Zhan"
                            required minlength="2"
                        />
                        <label for="Theme" class="block mb-2 text-sm font-medium text-gray-900 ">Theme</label><input
                            type="text"
                            id="Theme" name="theme"
                            class="block w-full rounded-md border border-gray-200 py-2.5 px-4 text-base text-gray-900 shadow-sm focus:border-green-700 focus:ring-green-700"
                            placeholder="Write your theme..."
                            required minlength="4"
                        />
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Message</label>
                        <textarea id="message" rows="4" name="message" class="block w-full rounded-md border border-gray-200 py-2.5 px-4 text-base text-gray-900 shadow-sm focus:border-green-700 focus:ring-green-700" placeholder="Write your message here..."
                        required minlength="100">
                        </textarea>
                        <label for="social_link" class="block mb-2 text-sm font-medium text-gray-900 ">Social link</label><input
                            type="text"
                            id="social_link" name="social_link"
                            class="block w-full rounded-md border border-gray-200 py-2.5 px-4 text-base text-gray-900 shadow-sm focus:border-green-700 focus:ring-green-700"
                            placeholder="TG : @ya_hannes"
                            required
                            minlength="2"
                        />
                        <button
                            type="submit"
                            class="rounded-md bg-green-700 py-2.5 px-8 text-base font-medium text-white hover:bg-green-800"
                        >
                            Send feedback
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @include('components.footer')
    </div>
@endsection
