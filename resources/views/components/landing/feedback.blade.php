<div>
    <div class="hero ">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="text-center lg:text-left">
                <h1 class="text-5xl font-bold" data-aos="zoom-in">Feedback</h1>
                <p class="py-6" data-aos="zoom-in">If you find a bug or want to contact me, then write to me at Telegram: @ya_hannes.</p>
            </div>
            <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
                <form class="card-body" method="POST" action="{{route('feedback.create')}}">
                    @if(session()->has('success'))
                        <div role="alert" class="alert alert-success">
                            <x-heroicon-m-check-circle class="stroke-current shrink-0 h-6 w-6"/>
                            <span> {{ session()->get('success') }}</span>
                        </div>
                    @endif
                    @csrf
                    <label class="input input-bordered flex items-center input-primary gap-2" data-aos="fade-right">
                        <x-heroicon-s-user class="w-4 h-4 opacity-70"/>
                        <input type="text" class="grow border-0" placeholder="Name" id="name" name="name"/>
                    </label>
                    <label class="input input-bordered flex items-center input-primary gap-2" data-aos="fade-right">
                        <x-heroicon-s-envelope-open class="w-4 h-4 opacity-70"/>
                        <input type="text" class="grow border-0" placeholder="Theme"  id="theme" name="theme"/>
                    </label>
                    <textarea class="textarea textarea-primary" placeholder="Message" id="message" name="message" data-aos="fade-right"></textarea>
                    <label class="input input-bordered flex items-center input-primary gap-2" data-aos="fade-right">
                        <x-heroicon-c-link class="w-4 h-4 opacity-70"/>
                        <input type="text" class="grow border-0" placeholder="Social link" id="social_link" name="social_link"/>
                    </label>

                    <div class="form-control mt-6" data-aos="zoom-in">
                        <button class="btn btn-primary" type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
