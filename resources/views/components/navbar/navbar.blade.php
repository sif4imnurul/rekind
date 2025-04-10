<div class="w-full px-6 md:px-20 py-4 md:py-5 bg-white flex justify-between items-center">
    <img class="w-10 md:w-12 h-12 md:h-14" src="{{ asset('img/logo.jpg') }}" alt="Logo">
    <div class="flex items-center gap-4 md:gap-16">
        <a href="{{ route('login.index') }}">
            <div class="px-6 py-2 md:px-8 md:py-3 bg-[var(--button)] rounded-xl flex justify-center items-center">
                <span class="text-white text-sm md:text-lg font-semibold font-poppins">Login</span>
            </div>
        </a>
    </div>
</div>