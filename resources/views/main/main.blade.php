@extends('components.layouts.main')
@section('main')
    <div class="hero min-h-screen" style="background-image: url('{{asset('file/image/screenshots/bg.jpg')}}');">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center text-neutral-content">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">FinTrack</h1>
                <p class="mb-5">The most functional, beautiful, user-friendly open source tool!</p>
                <a href="{{route('filament.dashboard.auth.login')}}" class="btn btn-primary">Get Started</a>
            </div>
        </div>
    </div>
    <div class="stats shadow flex py-8">
        <div class="stat place-items-center">
            <div class="stat-title"><a href="https://github.com/FinTrackhq/FinTrack" class="link">GitHub Stars</a></div>

            <div class="stat-value">{{$response}}</div>
        </div>

        <div class="stat place-items-center">
            <div class="stat-title"><a href="https://github.com/FinTrackhq/FinTrack/graphs" class="link">Clones</a></div>
            <div class="stat-value text-value">100+</div>
        </div>

        <div class="stat place-items-center">
            <div class="stat-title"><a href="{{route('Home.Page')}}" class="link">Created companies</a></div>
            <div class="stat-value">20+</div>
        </div>
    </div>
    <x-landing.project-device-support></x-landing.project-device-support>
    <x-landing.why-us></x-landing.why-us>
    <x-landing.project-stack ></x-landing.project-stack>
    <x-landing.faqs></x-landing.faqs>
    <x-landing.feedback></x-landing.feedback>

@endsection
