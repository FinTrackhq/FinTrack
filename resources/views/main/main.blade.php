@extends('components.layouts.main')
@section('main')
   <x-landing.hero></x-landing.hero>
    <div class="stats shadow flex py-8 text-sm lg:text-lg">
        <div class="stat place-items-center">
            <div class="stat-title"><a href="https://github.com/FinTrackhq/FinTrack" class="link">GitHub Stars</a></div>

            <div class="stat-value text-2xl lg:text-4xl">27</div>
        </div>

        <div class="stat place-items-center">
            <div class="stat-title"><a href="https://github.com/FinTrackhq/FinTrack/graphs" class="link">Clones</a></div>
            <div class="stat-value text-value text-2xl lg:text-4xl">100+</div>
        </div>

        <div class="stat place-items-center">
            <div class="stat-title"><a href="{{route('Home.Page')}}" class="link">Created companies</a></div>
            <div class="stat-value text-2xl lg:text-4xl">20+</div>
        </div>
    </div>
    <x-landing.project-device-support></x-landing.project-device-support>
    <x-landing.why-us></x-landing.why-us>
    <x-landing.project-stack ></x-landing.project-stack>
    <x-landing.faqs></x-landing.faqs>
    <x-landing.feedback></x-landing.feedback>

@endsection
