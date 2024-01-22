@extends('components.layouts.app')
@section('main')
    <main class="py-6 px-4 sm:p-6 md:py-10 md:px-8">
        <div class="max-w-4xl mx-auto grid grid-cols-1 lg:max-w-5xl lg:gap-x-20 lg:grid-cols-2">
            <div class="relative p-3 col-start-1 row-start-1 flex flex-col-reverse rounded-lg bg-gradient-to-t from-black/75 via-black/0 sm:bg-none sm:row-start-2 sm:p-0 lg:row-start-1">
                <h1 class="mt-1 text-lg font-semibold text-white sm:text-slate-900 md:text-2xl dark:sm:text-white">Beach House in Collingwood</h1>
                <p class="text-sm leading-4 font-medium text-white sm:text-slate-500 dark:sm:text-slate-400">Entire house</p>
            </div>
            <div class="grid gap-4 col-start-1 col-end-3 row-start-1 sm:mb-6 sm:grid-cols-4 lg:gap-6 lg:col-start-2 lg:row-end-6 lg:row-span-6 lg:mb-0">
                <img src="/beach-house.jpg" alt="" class="w-full h-60 object-cover rounded-lg sm:h-52 sm:col-span-2 lg:col-span-full" loading="lazy">
                <img src="/beach-house-interior-1.jpg" alt="" class="hidden w-full h-52 object-cover rounded-lg sm:block sm:col-span-2 md:col-span-1 lg:row-start-2 lg:col-span-2 lg:h-32" loading="lazy">
                <img src="/beach-house-interior-2.jpg" alt="" class="hidden w-full h-52 object-cover rounded-lg md:block lg:row-start-2 lg:col-span-2 lg:h-32" loading="lazy">
            </div>
            <dl class="mt-4 text-xs font-medium flex items-center row-start-2 sm:mt-1 sm:row-start-3 md:mt-2.5 lg:row-start-2">
                <dt class="sr-only">Reviews</dt>
                <dd class="text-indigo-600 flex items-center dark:text-indigo-400">
                    <svg width="24" height="24" fill="none" aria-hidden="true" class="mr-1 stroke-current dark:stroke-indigo-500">
                        <path d="m12 5 2 5h5l-4 4 2.103 5L12 16l-5.103 3L9 14l-4-4h5l2-5Z"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>4.89 <span class="text-slate-400 font-normal">(128)</span></span>
                </dd>
                <dt class="sr-only">Location</dt>
                <dd class="flex items-center">
                    <svg width="2" height="2" aria-hidden="true" fill="currentColor" class="mx-3 text-slate-300">
                        <circle cx="1" cy="1" r="1" />
                    </svg>
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-1 text-slate-400 dark:text-slate-500" aria-hidden="true">
                        <path d="M18 11.034C18 14.897 12 19 12 19s-6-4.103-6-7.966C6 7.655 8.819 5 12 5s6 2.655 6 6.034Z" />
                        <path d="M14 11a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z" />
                    </svg>
                    Collingwood, Ontario
                </dd>
            </dl>
            <div class="mt-4 col-start-1 row-start-3 self-center sm:mt-0 sm:col-start-2 sm:row-start-2 sm:row-span-2 lg:mt-6 lg:col-start-1 lg:row-start-3 lg:row-end-4">
                <button type="button" class="bg-indigo-600 text-white text-sm leading-6 font-medium py-2 px-3 rounded-lg">Check availability</button>
            </div>
            <p class="mt-4 text-sm leading-6 col-start-1 sm:col-span-2 lg:mt-6 lg:row-start-4 lg:col-span-1 dark:text-slate-400">
                This sunny and spacious room is for those traveling light and looking for a comfy and cosy place to lay their head for a night or two. This beach house sits in a vibrant neighborhood littered with cafes, pubs, restaurants and supermarkets and is close to all the major attractions such as Edinburgh Castle and Arthur's Seat.
            </p>
        </div>
        <div class="bg-white">
            <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
                <div>
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Technical Specifications</h2>
                    <p class="mt-4 text-gray-500">The walnut wood card tray is precision milled to perfectly fit a stack of Focus cards. The powder coated steel divider separates active cards from new ones, or can be used to archive important task lists.</p>

                    <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Origin</dt>
                            <dd class="mt-2 text-sm text-gray-500">Designed by Good Goods, Inc.</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Material</dt>
                            <dd class="mt-2 text-sm text-gray-500">Solid walnut base with rare earth magnets and powder coated steel card cover</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Dimensions</dt>
                            <dd class="mt-2 text-sm text-gray-500">6.25&quot; x 3.55&quot; x 1.15&quot;</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Finish</dt>
                            <dd class="mt-2 text-sm text-gray-500">Hand sanded and finished with natural oil</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Includes</dt>
                            <dd class="mt-2 text-sm text-gray-500">Wood card tray and 3 refill packs</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Considerations</dt>
                            <dd class="mt-2 text-sm text-gray-500">Made from natural materials. Grain and color vary with each item.</dd>
                        </div>
                    </dl>
                </div>
                <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-01.jpg" alt="Walnut card tray with white powder coated steel divider and 3 punchout holes." class="rounded-lg bg-gray-100">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-02.jpg" alt="Top down view of walnut card tray with embedded magnets and card groove." class="rounded-lg bg-gray-100">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-03.jpg" alt="Side of walnut card tray with card groove and recessed card area." class="rounded-lg bg-gray-100">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-04.jpg" alt="Walnut card tray filled with cards and card angled in dedicated groove." class="rounded-lg bg-gray-100">
                </div>
            </div>
        </div>
    </main>
@endsection
