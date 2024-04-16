<header>
<div class="navbar z-50 fixed glass rounded-btn mt-3">
    <div class="navbar-start">
        <a class="btn btn-ghost" href="https://github.com/FinTrackhq/FinTrack">
            <img src="{{asset('file/image/logo/svg/github-mark-white.svg')}}" class="w-8 rounded" alt="GitHub">
        </a>
        <div class="dropdown dropdown-hover">
            <div tabindex="0" role="button" class="btn-ghost btn m-1 bg-primary">V0.3</div>
            <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-stone-800 rounded-box w-52">
                <li><a>Russian localization</a></li>
                <li><a>Improved optimization</a></li>
                <li><a>New Functions</a></li>
                <li><a>Fixing bugs and more!</a></li>
            </ul>
        </div>
        <a class="btn btn-error hidden lg:flex" href="https://opencollective.com/fintrack">
            <x-heroicon-m-heart class="w-6  opacity-70" />
            Donate
        </a>
    </div>
    <div class="navbar-center">
       <img src="{{asset('file/image/logo/svg/logo.svg')}}" class="w-8 rounded" alt="FinTrack">
    </div>

    <div class="navbar-end">
        @if(auth()->guest())
        <a class="btn btn-ghost" href="{{route('filament.dashboard.auth.login')}}">
        Sign in
       </a>
        <a class="btn btn-ghost" href="{{route('filament.dashboard.auth.register')}}">
                Sign up
        </a>
        @else
            <form method="POST" action="{{route('LogOut')}}">
                @csrf
                <button class="btn btn-ghost" type="submit">
                    Log out
                </button>
            </form>
        @endif
    </div>
</div>
</header>