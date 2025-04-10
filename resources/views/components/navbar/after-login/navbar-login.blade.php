<!-- Navbar -->
<nav x-data="{ open: false }" class="bg-white px-6 flex items-center justify-between z-50 relative">
  <!-- Logo -->
  <a href="{{ route('homepage.index') }}">
    <div class="py-4">
      <img src="{{ asset('img/logo.jpg') }}" alt="Logo" class="w-[45px] h-[50px]">
    </div>
  </a>

  <!-- Burger icon (Mobile) -->
  <button @click="open = !open" class="md:hidden focus:outline-none">
    <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M4 6h16M4 12h16M4 18h16" />
    </svg>
  </button>

  <!-- Menu -->
  <div :class="open ? 'block' : 'hidden'" class="absolute top-full left-0 w-full bg-[var(--6)] px-6 md:static md:flex md:items-center md:gap-20 md:p-0 md:w-auto">
    
    <!-- DROPDOWN 1 -->
    <div x-data="{ dropdownOpen: false }" class="w-full md:relative">
      <button
        @click="dropdownOpen = !dropdownOpen"
        :class="dropdownOpen ? 'text-[var(--button)]' : 'text-[var(--sub-text)]'"
        class="w-full text-left py-2 md:py-4 text-[18px] font-semibold font-[Poppins] md:w-auto"
      >
        Reference
      </button>
      <div
        x-show="dropdownOpen"
        x-transition
        @click.away="dropdownOpen = false"
        class="bg-[var(--6)] py-2 md:absolute md:left-0 md:top-full md:mt-0 md:w-48 md:shadow-lg"
      >
        <a href="{{ route('annual.grid') }}" class="block px-4 py-2 text-sm text-[var(--sub-text)] hover:bg-[var(--highlight-text-box)] hover:text-[var(--judul)]">Annual Report & Sustainability Report</a>
        <a href="#" class="block px-4 py-2 text-sm text-[var(--sub-text)] hover:bg-[var(--highlight-text-box)] hover:text-[var(--judul)]">Buletin</a>
        <a href="{{ route('compro.index') }}" class="block px-4 py-2 text-sm text-[var(--sub-text)] hover:bg-[var(--highlight-text-box)] hover:text-[var(--judul)]">Company Profile</a>
        <a href="{{ route('buku.grid') }}" class="block px-4 py-2 text-sm text-[var(--sub-text)] hover:bg-[var(--highlight-text-box)] hover:text-[var(--judul)]">Buku Terbitan Coorporate</a>
        <a href="#" class="block px-4 py-2 text-sm text-[var(--sub-text)] hover:bg-[var(--highlight-text-box)] hover:text-[var(--judul)]">Hasil Survey Brand</a>
        <a href="#" class="block px-4 py-2 text-sm text-[var(--sub-text)] hover:bg-[var(--highlight-text-box)] hover:text-[var(--judul)]">Agenda Perusahaan</a>
        <a href="{{ route('presentasi.index') }}" class="block px-4 py-2 text-sm text-[var(--sub-text)] hover:bg-[var(--highlight-text-box)] hover:text-[var(--judul)]">Template Presentasi</a>
      </div>
    </div>

    <!-- DROPDOWN 2 -->
    <div x-data="{ dropdownOpen: false }" class="w-full md:relative">
      <button
        @click="dropdownOpen = !dropdownOpen"
        :class="dropdownOpen ? 'text-[var(--button)]' : 'text-[var(--sub-text)]'"
        class="w-full text-left py-2 md:py-4 text-[18px] font-semibold font-[Poppins] md:w-auto"
      >
        Picture
      </button>
      <div
        x-show="dropdownOpen"
        x-transition
        @click.away="dropdownOpen = false"
        class="bg-[var(--6)] py-2 md:absolute md:left-0 md:top-full md:mt-0 md:w-48 md:shadow-lg"
      >
        <a href="{{ route('zoom.background') }}" class="block px-4 py-2 text-sm text-[var(--sub-text)] hover:bg-[var(--highlight-text-box)] hover:text-[var(--judul)]">Zoom Background Official</a>
        <a href="{{ route('twibbon.index') }}" class="block px-4 py-2 text-sm text-[var(--sub-text)] hover:bg-[var(--highlight-text-box)] hover:text-[var(--judul)]">Occasional Twibon</a>
        <a href="{{ route('logo.index') }}" class="block px-4 py-2 text-sm text-[var(--sub-text)] hover:bg-[var(--highlight-text-box)] hover:text-[var(--judul)]">Official Logo</a>
        <a href="{{ route('dokumentasi.index') }}" class="block px-4 py-2 text-sm text-[var(--sub-text)] hover:bg-[var(--highlight-text-box)] hover:text-[var(--judul)]">Official Photo & Video Stock</a>
        <a href="#" class="block px-4 py-2 text-sm text-[var(--sub-text)] hover:bg-[var(--highlight-text-box)] hover:text-[var(--judul)]">Flyer Ucapan</a>
      </div>
    </div>

    <!-- DROPDOWN 3 -->
    <div x-data="{ dropdownOpen: false }" class="w-full md:relative">
      <button
        @click="dropdownOpen = !dropdownOpen"
        :class="dropdownOpen ? 'text-[var(--button)]' : 'text-[var(--sub-text)]'"
        class="w-full text-left py-2 md:py-4 text-[18px] font-semibold font-[Poppins] md:w-auto"
      >
        CRM
      </button>
      <div
        x-show="dropdownOpen"
        x-transition
        @click.away="dropdownOpen = false"
        class="bg-[var(--6)] py-2 md:absolute md:left-0 md:top-full md:mt-0 md:w-48 md:shadow-lg"
      >
        <div x-data="{ showAlert: false }">
          <a href="{{ route('crm.index') }}" @click="showAlert = true" class="block px-4 py-2 text-sm text-[var(--sub-text)] hover:bg-[var(--highlight-text-box)] hover:text-[var(--judul)]">Data Client</a>
            <!-- ALERT POPUP -->
            <div x-show="showAlert" class="fixed inset-0 bg-black/50 flex items-center justify-center z-50">
                <div class="w-full max-w-[500px] p-8 bg-white rounded-[20px] outline-1 outline-[var(--highlight-text-box)] space-y-5">
                    <!-- Judul -->
                    <div class="text-center text-[#1D3A6D] text-2xl font-bold leading-[22px]">
                        PERINGATAN !
                    </div>

                    <!-- Isi pesan -->
                    <div class="text-[#1D3A6D] text-base leading-[22px]">
                        Anda tidak punya hak akses untuk menu ini. Hubungi Corporate Communication Department atau isi form permohonan akses jika anda hendak mengaksesnya.
                    </div>

                    <!-- Tombol OK -->
                    <div class="flex justify-center">
                        <button @click="showAlert = false"
                            class="px-8 py-3 bg-[#7BB7D1] text-white text-lg font-semibold rounded-xl hover:bg-[#68a5c2] transition">
                            OK
                        </button>
                        <a href="{{ route('crm.permohonan') }}"></a>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="block px-4 py-2 text-sm text-[var(--sub-text)] hover:bg-[var(--highlight-text-box)] hover:text-[var(--judul)]">Upload/Update Data Client</a>
        <!-- kalau gada punya akses tampilin ini -->
        <a href="{{ route('crm.permohonan') }}" class="block px-4 py-2 text-sm text-[var(--sub-text)] hover:bg-[var(--highlight-text-box)] hover:text-[var(--judul)]">Permohonan Akses</a>
      </div>
    </div>

    <!-- Avatar Dropdown -->
    <div x-data="{ dropdownOpen: false }" class="relative mt-2 md:mt-0">
      <button @click="dropdownOpen = !dropdownOpen" class="w-[50px] h-[50px] rounded-full flex justify-center items-center text-[var(--button)] focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current" viewBox="0 0 24 24" width="28" height="28">
          <path
            d="M12 2C6.579 2 2 6.579 2 12s4.579 10 10 10 10-4.579 10-10S17.421 2 12 2zm0 5c1.727 0 3 1.272 3 3s-1.273 3-3 3c-1.726 0-3-1.272-3-3s1.274-3 3-3zm-5.106 9.772c.897-1.32 2.393-2.2 4.106-2.2h2c1.714 0 3.209.88 4.106 2.2C15.828 18.14 14.015 19 12 19s-3.828-.86-5.106-2.228z">
          </path>
        </svg>
      </button>

      <div
        x-show="dropdownOpen"
        x-transition
        @click.away="dropdownOpen = false"
        class="absolute right-0 mt-2 w-36 bg-white shadow-lg py-2 z-50"
      >
        <form method="POST" action="#">
          @csrf
          <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-[var(--sub-text)] hover:text-[var(--judul)] hover:bg-[var(--highlight-text-box)]">
            Logout
          </button>
        </form>
      </div>
    </div>
  </div>
</nav>
