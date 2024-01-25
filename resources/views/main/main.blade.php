@extends('components.layouts.main')
@section('main')
    <div class="flex flex-col space-y-8 p-4 md:p-8">
        <div class="mx-auto w-full rounded-xl bg-neutral-100 p-6">
            @include('components.header')
            <div
                class="relative flex w-full flex-col items-center space-y-12 overflow-hidden pt-12 text-center md:py-32"
            >
                @if(session()->has('success'))
                    <div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
                        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
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
                <div class="flex max-w-xl flex-col space-y-4">
                    <h1
                        class="text-4xl font-semibold leading-snug tracking-tight md:text-5xl"
                    >
                        Лучший Веб-инструмент для бухгалтера
                    </h1>
                    <p class="text-gray-600">
                        Максимально функциональный, красивый, удобный инструмент <br> с открытым исходным кодом!
                    </p>
                </div>
                <div class="mx-auto max-w-4xl">
                    <img
                        src="{{asset('file/image/screenshots/dashboard.png')}}"
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
                        Кастомизация
                    </h1>
                    <p class="text-neutral-400">
                        Настрой рабочую область как хочешь!
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
                                            Доступна темная/светлая тема
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
                                            Кастомизируй цвета компонентов под себя
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
                                            Кастомные темы
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
                        Технологии
                    </h1>
                    <p class="text-neutral-600">
                        В нашем проекте используются только наилучшие технологии дающие вам высокую производительность,
                        чистый код, возможноть переделать проект именно под вас.
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
                                        Самый популярный серверный язый програмирования.
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-col space-y-2 text-left">
                                <div class="flex max-w-sm flex-col space-y-1">
                                    <p class="font-medium">Laravel</p>
                                    <p class="font-normal text-neutral-600">
                                        это лучший фреймворк веб-приложений с выразительным, элегантным синтаксисом.
                                        <br> |Лучший PHP фреймворк.
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-col space-y-2 text-left">
                                <div class="max-w-sm">
                                    <p class="font-medium">Blade</p>
                                    <p class="font-normal text-neutral-600">
                                        Простой, но мощный движок для создания шаблонов, который входит в состав
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
                                        CSS-фреймворк, который позволяет создавать пользовательские интерфейсы при
                                        помощи набора готовых классов. Он был разработан для ускорения процесса
                                        разработки и облегчения поддержки кода.
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-col space-y-2 text-left">
                                <div class="flex max-w-sm flex-col space-y-1">
                                    <p class="font-medium">Livewire</p>
                                    <p class="font-normal text-neutral-600">
                                        Упрощает создание динамических интерфейсов, используя преимущественно PHP
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-col space-y-2 text-left">
                                <div class="max-w-sm">
                                    <p class="font-medium">FilamentPHP</p>
                                    <p class="font-normal text-neutral-600">
                                        Это панель на Laravel, которая может ускорить процесс разработки веб-приложений.
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
                        Universally loved
                    </h1>
                    <p class="text-neutral-400">
                        Anim aute id magna aliqua ad ad non deserunt sunt.
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
                                    <img
                                        src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=faces&fit=crop&h=100&w=100&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                        class="h-9 w-9 rounded-full" alt=""
                                    />
                                    <div class="ml-4 flex flex-col text-sm text-white">
                                        <div class="font-semibold">Flex Readman</div>
                                        <div
                                            class="text-neutral-400 group-hover:text-neutral-300"
                                        >
                                        </div>
                                    </div>
                                </div>

                                <div class="max-w-sm">
                                    <p class="text-neutral-300">
                                        Just tried out Datagarden and it blew me away!
                                    </p>
                                </div>
                            </div>
                            <div
                                class="group flex w-full cursor-pointer flex-col space-y-2 rounded-2xl bg-neutral-700 p-6 text-left md:w-1/3"
                            >
                                <div class="flex">
                                    <img
                                        src="https://images.unsplash.com/photo-1456327102063-fb5054efe647?ixlib=rb-0.3.5&q=80&fm=jpg&crop=faces&fit=crop&h=200&w=200&s=f05c14dd4db49f08a789e6449604c490"
                                        class="h-9 w-9 rounded-full" alt=""
                                    />
                                    <div class="ml-4 flex flex-col text-sm text-white">
                                        <div class="font-semibold">Eton Trust</div>
                                        <div
                                            class="text-neutral-400 group-hover:text-neutral-300"
                                        >
                                        </div>
                                    </div>
                                </div>

                                <div class="min-w-sm">
                                    <p class="text-neutral-300">
                                        If I had any money left after my last aquisition, i'd
                                        totally buy this!
                                    </p>
                                </div>
                            </div>
                            <div
                                class="group flex w-full cursor-pointer flex-col space-y-2 rounded-2xl bg-neutral-700 p-6 text-left md:w-1/3"
                            >
                                <div class="flex">
                                    <img
                                        src="https://randomuser.me/api/portraits/men/52.jpg"
                                        class="h-9 w-9 rounded-full" alt=""
                                    />
                                    <div class="ml-4 flex flex-col text-sm text-white">
                                        <div class="font-semibold">Go Rogueman</div>
                                        <div
                                            class="text-neutral-400 group-hover:text-neutral-300"
                                        >

                                        </div>
                                    </div>
                                </div>

                                <div class="min-w-sm">
                                    <p class="text-neutral-300">
                                        Amazing stuff! Adding this to my products list for this
                                        year 👏
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
                                    <img
                                        src="https://randomuser.me/api/portraits/men/29.jpg"
                                        class="h-9 w-9 rounded-full" alt=""
                                    />
                                    <div class="ml-4 flex flex-col text-sm text-white">
                                        <div class="font-semibold">Dishy Sunak</div>
                                        <div
                                            class="text-neutral-400 group-hover:text-neutral-300"
                                        >

                                        </div>
                                    </div>
                                </div>

                                <div class="min-w-sm">
                                    <p class="text-neutral-300">
                                        Congratulations to the team at Datagarden on todays
                                        launch!
                                    </p>
                                </div>
                            </div>
                            <div
                                class="group flex cursor-pointer flex-col space-y-2 rounded-2xl bg-neutral-700 p-6 text-left md:w-1/2 md:max-w-[326px]"
                            >
                                <div class="flex">
                                    <img
                                        src="https://randomuser.me/api/portraits/men/1.jpg"
                                        class="h-9 w-9 rounded-full"
                                        alt=""/>
                                    <div class="ml-4 flex flex-col text-sm text-white">
                                        <div class="font-semibold">Dave Hawkins</div>
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
                                        Hey wait this website looks familiar?? Congrats anyhow.
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
                        Обратная связь.
                    </h1>
                    <p class="text-gray-600">
                        Если вы нашли баг или хотите со мной связаться, <br>то напиши те мне в TG: ya_hannes.
                    </p>
                </div>
                <div class="max-4xl flex flex-col space-y-4">
                    <p class="text-neutral-400">Или</p>
                    <form class="flex flex-col space-y-3" method="POST" action="{{route('feedback.create')}}">
                        @csrf
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label><input
                            type="text"
                            id="name" name="name"
                            class="block w-full rounded-md border border-gray-200 py-2.5 px-4 text-base text-gray-900 shadow-sm focus:border-green-500 focus:ring-green-500"
                            placeholder="Zhan"
                            required minlength="2"
                        />
                        <label for="Theme" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Theme</label><input
                            type="text"
                            id="Theme" name="theme"
                            class="block w-full rounded-md border border-gray-200 py-2.5 px-4 text-base text-gray-900 shadow-sm focus:border-green-500 focus:ring-green-500"
                            placeholder="Write your theme..."
                            required minlength="4"
                        />
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Message</label>
                        <textarea id="message" rows="4" name="message" class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your message here..."
                        required minlength="100">
                        </textarea>
                        <label for="social_link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Social link</label><input
                            type="text"
                            id="social_link" name="social_link"
                            class="block w-full rounded-md border border-gray-200 py-2.5 px-4 text-base text-gray-900 shadow-sm focus:border-green-500 focus:ring-green-500"
                            placeholder="TG : @ya_hannes"
                            required
                            minlength="2"
                        />
                        <button
                            type="submit"
                            class="rounded-md bg-green-600 py-2.5 px-8 text-base font-medium text-white hover:bg-green-700"
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
