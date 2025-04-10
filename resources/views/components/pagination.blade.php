    <!-- pagination -->
    <div class="w-full py-6 flex justify-center items-center gap-6 overflow-x-auto sm:gap-4 md:gap-6 lg:gap-8">
        <!-- Left Arrow -->
        <div class="text-[var(--button)] min-w-[24px]">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                <path d="m12.707 7.707-1.414-1.414L5.586 12l5.707 5.707 1.414-1.414L8.414 12z"></path>
                <path d="M16.293 6.293 10.586 12l5.707 5.707 1.414-1.414L13.414 12l4.293-4.293z"></path>
            </svg>
        </div>

        <!-- Garis kecil -->
        <div class="text-[var(--button)] min-w-[24px]">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
            </svg>
        </div>

        <!-- Page 1 (active) -->
        <div class="relative w-[36px] h-[36px] flex items-center justify-center">
            <div class="w-[28px] h-[28px] bg-[var(--button)] rounded-full text-white text-[14px] font-montserrat leading-[28px] tracking-[0.2px] flex items-center justify-center">
                1
            </div>
        </div>

        <!-- Page 2 (selalu tampil bersama 1 di mobile) -->
        <div class="w-[28px] h-[28px] text-center text-[#1D3A6D] text-[14px] font-montserrat leading-[28px] tracking-[0.2px] flex items-center justify-center">
            2
        </div>

        <!-- Tambahan halaman (disembunyikan di mobile) -->
        <div class="hidden sm:flex w-[28px] h-[28px] text-center text-[#1D3A6D] text-[14px] font-montserrat leading-[28px] tracking-[0.2px] items-center justify-center">3</div>
        <div class="hidden sm:flex w-[28px] h-[28px] text-center text-[#1D3A6D] text-[14px] font-montserrat leading-[28px] tracking-[0.2px] items-center justify-center">4</div>

        <!-- Ellipsis -->
        <div class="w-[28px] h-[28px] text-center text-[#1D3A6D] text-[14px] font-montserrat leading-[28px] tracking-[0.2px] flex items-center justify-center">
            ...
        </div>

        <!-- Garis kanan -->
        <div class="text-[var(--button)] min-w-[24px]">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
            </svg>
        </div>

        <!-- Double arrow kanan -->
        <div class="text-[var(--button)] min-w-[24px]">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                <path d="M10.296 7.71 14.621 12l-4.325 4.29 1.408 1.42L17.461 12l-5.757-5.71z"></path>
                <path d="M6.704 6.29 5.296 7.71 9.621 12l-4.325 4.29 1.408 1.42L12.461 12z"></path>
            </svg>
        </div>
    </div>