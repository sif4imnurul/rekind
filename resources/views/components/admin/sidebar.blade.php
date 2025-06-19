<!-- Sidebar - using flex to create full height layout -->
<div class="flex flex-col h-full">
  <!-- Header -->
  <div class="p-5 bg-[var(--button)]">
    <a href="#" class="text-2xl font-bold text-white flex tracking-wide text-center justify-center">Admin Panel</a>
  </div>

  <!-- Main navigation -->
  <nav class="p-4 flex-grow">
    <ul class="space-y-2 text-sm">
      <!-- Dashboard -->
      <li>
        <a href="/admin/dashboard" class="flex items-center px-4 py-2 rounded-lg transition hover:bg-blue-50 hover:text-[var(--judul)]">
          <svg class="w-5 h-5 mr-3 text-[var(--judul)]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
            <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8v-10h-8v10zm0-18v6h8V3h-8z" />
          </svg>
          Dashboard
        </a>
      </li>

      <!-- User Management -->
      <li>
        <a href="{{ route('admin.users.index') }}" 
           class="flex items-center px-4 py-2 rounded-lg transition hover:bg-blue-50 hover:text-[var(--judul)] {{ (request()->routeIs('admin.users.index') || request()->routeIs('admin.users.create') || request()->routeIs('admin.users.edit')) ? 'bg-blue-50 text-[var(--judul)] font-semibold' : '' }}">
          <svg class="w-5 h-5 mr-3 text-[var(--judul)]" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
          </svg>
          User Management
        </a>
      </li>

      <!-- Reference Menu -->
      <li>
        <div>
          <button type="button" class="cursor-pointer flex items-center w-full px-4 py-2 rounded-lg transition hover:bg-blue-50 hover:text-[var(--judul)] toggle-dropdown">
            <svg class="w-5 h-5 mr-3 text-[var(--judul)]" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M4 4h16v2H4zM4 11h16v2H4zM4 18h16v2H4z" />
            </svg>
            Reference
            <svg class="w-4 h-4 ml-auto transition-transform arrow-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <ul class="ml-8 mt-2 space-y-1 hidden dropdown-menu">
            <li><a href="/admin/reference/annual-report" class="block px-4 py-2 rounded-lg hover:bg-blue-50">Annual Report</a></li>
            <li><a href="/admin/reference/sustain-report" class="block px-4 py-2 rounded-lg hover:bg-blue-50">Sustainability Report</a></li>
            <li><a href="/admin/reference/buku" class="block px-4 py-2 rounded-lg hover:bg-blue-50">Buku Terbitan Corporate</a></li>
            <li><a href="/admin/reference/buletin" class="block px-4 py-2 rounded-lg hover:bg-blue-50">Buletin</a></li>
            <li><a href="/admin/reference/agenda" class="block px-4 py-2 rounded-lg hover:bg-blue-50">Agenda Perusahaan</a></li>
            <li><a href="/admin/reference/media-monitoring" class="block px-4 py-2 rounded-lg hover:bg-blue-50">Media Monitoring</a></li>
            <li><a href="/admin/reference/presentasi" class="block px-4 py-2 rounded-lg hover:bg-blue-50">Template Presentasi</a></li>
            <li><a href="/admin/reference/survey" class="block px-4 py-2 rounded-lg hover:bg-blue-50">Hasil Survey Brand</a></li>
          </ul>
        </div>
      </li>

      <!-- Picture Menu -->
      <li>
        <div>
          <button type="button" class="cursor-pointer flex items-center w-full px-4 py-2 rounded-lg transition hover:bg-blue-50 hover:text-[var(--judul)] toggle-dropdown">
            <svg class="w-5 h-5 mr-3 text-[var(--judul)]" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M18.5 2h-12C4.57 2 3 3.57 3 5.5V22l7-3.5 7 3.5v-9h5V5.5C22 3.57 20.43 2 18.5 2zm1.5 9h-3V5.5c0-.827.673-1.5 1.5-1.5s1.5.673 1.5 1.5V11z"></path>
            </svg>
            Picture
            <svg class="w-4 h-4 ml-auto transition-transform arrow-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <ul class="ml-8 mt-2 space-y-1 hidden dropdown-menu">
            <li><a href="/admin/picture/zoom-background/" class="block px-4 py-2 rounded-lg hover:bg-blue-50">Zoom Background Official</a></li>
            <li><a href="/admin/picture/twibbon/" class="block px-4 py-2 rounded-lg hover:bg-blue-50">Occasional Twibbon</a></li>
            <li><a href="/admin/picture/photo/" class="block px-4 py-2 rounded-lg hover:bg-blue-50">Official Photo</a></li>
            <li><a href="/admin/picture/video/" class="block px-4 py-2 rounded-lg hover:bg-blue-50">Video Stock</a></li>
            <li><a href="/admin/picture/flyer" class="block px-4 py-2 rounded-lg hover:bg-blue-50">Flyer Ucapan</a></li>
          </ul>
        </div>
      </li>

      <!-- CRM Menu -->
      <li>
        <div>
          <button type="button" class="cursor-pointer flex items-center w-full px-4 py-2 rounded-lg transition hover:bg-blue-50 hover:text-[var(--judul)] toggle-dropdown">
            <svg class="w-5 h-5 mr-3 text-[var(--judul)]" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M20 2H8a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm-6 2.5a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zM19 15H9v-.25C9 12.901 11.254 11 14 11s5 1.901 5 3.75V15z"></path><path d="M4 8H2v12c0 1.103.897 2 2 2h12v-2H4V8z"></path>
            </svg>
            CRM
            <svg class="w-4 h-4 ml-auto transition-transform arrow-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <ul class="ml-8 mt-2 space-y-1 hidden dropdown-menu">
            <li><a href="/admin/crm/data-client/" class="block px-4 py-2 rounded-lg hover:bg-blue-50">Data Client</a></li>
            <li><a href="/admin/crm/permohonan/" class="block px-4 py-2 rounded-lg hover:bg-blue-50">Permohonan Akses</a></li>
          </ul>
        </div>
      </li>

    <!-- Edit Profile -->
    <li>
      <a href="{{ route('admin.profile.edit') }}" class="flex items-center px-4 py-2 rounded-lg transition hover:hover:bg-blue-50 hover:text-[var(--judul)]">
      <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
        <path d="m12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M6 7a5 5 0 1 1 10 0A5 5 0 0 1 6 7m5-3a3 3 0 1 0 0 6a3 3 0 0 0 0-6M4.413 17.601c-.323.41-.413.72-.413.899c0 .118.035.232.205.384c.197.176.55.37 1.11.543c1.12.346 2.756.521 4.706.563a1 1 0 1 1-.042 2c-1.997-.043-3.86-.221-5.254-.652c-.696-.216-1.354-.517-1.852-.962C2.347 19.906 2 19.274 2 18.5c0-.787.358-1.523.844-2.139c.494-.625 1.177-1.2 1.978-1.69C6.425 13.695 8.605 13 11 13q.671 0 1.316.07a1 1 0 0 1-.211 1.989Q11.564 15 11 15c-2.023 0-3.843.59-5.136 1.379c-.647.394-1.135.822-1.45 1.222Zm16.8-3.567a2.5 2.5 0 0 0-3.536 0l-3.418 3.417a1.5 1.5 0 0 0-.424.849l-.33 2.308a1 1 0 0 0 1.133 1.133l2.308-.33a1.5 1.5 0 0 0 .849-.424l3.417-3.418a2.5 2.5 0 0 0 0-3.535Zm-2.122 1.414a.5.5 0 0 1 .707.707l-3.3 3.3l-.825.118l.118-.825z"/>
      </svg>
        Edit Profile
      </a>
    </li>
    </ul>
  </nav>

  <!-- Logout button positioned at the bottom of the sidebar -->
  <div class="p-4 mt-auto border-t border-gray-200">
    <form action="{{ route('logout') }}" method="POST" class="m-0">
      @csrf
      <button type="submit" class="cursor-pointer flex w-full items-center px-4 py-2 rounded-lg text-red-600 transition hover:bg-red-50">
        <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M16 13v-2H7V8l-5 4 5 4v-3zM20 3h-8v2h8v14h-8v2h8c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z" />
        </svg>
        Keluar
      </button>
    </form>
  </div>
</div>

<!-- Script -->
<script>
  document.querySelectorAll('.toggle-dropdown').forEach(button => {
    button.addEventListener('click', () => {
      const dropdown = button.nextElementSibling;
      const arrow = button.querySelector('.arrow-icon');

      dropdown.classList.toggle('hidden');
      arrow.classList.toggle('rotate-90'); // tambah rotate saat dropdown dibuka
    });
  });
</script>

<!-- Tailwind tambahan rotate -->
<style>
  .rotate-90 {
    transform: rotate(90deg);
  }
</style>
