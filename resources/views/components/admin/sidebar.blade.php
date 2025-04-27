<!-- Sidebar -->
<div class="p-5 bg-[var(--button)]">
  <a href="#" class="text-2xl font-bold text-white flex tracking-wide text-center justify-center">Admin Panel</a>
</div>

<nav class="p-4">
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

    <!-- Reference Menu -->
    <li>
      <div>
        <button type="button" class="flex items-center w-full px-4 py-2 rounded-lg transition hover:bg-blue-50 hover:text-[var(--judul)] toggle-dropdown">
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
          <li><a href="/admin/reference/agenda" class="block px-4 py-2 rounded-lg hover:bg-blue-50">Agenda Perusahaan</a></li>
          <li><a href="/admin/reference/presentasi" class="block px-4 py-2 rounded-lg hover:bg-blue-50">Template Presentasi</a></li>
        </ul>
      </div>
    </li>

    <!-- Picture Menu -->
    <li>
      <div>
        <button type="button" class="flex items-center w-full px-4 py-2 rounded-lg transition hover:bg-blue-50 hover:text-[var(--judul)] toggle-dropdown">
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
        <button type="button" class="flex items-center w-full px-4 py-2 rounded-lg transition hover:bg-blue-50 hover:text-[var(--judul)] toggle-dropdown">
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

    <!-- Keluar -->
    <li>
      <a href="#" class="flex items-center px-4 py-2 rounded-lg text-red-600 transition hover:bg-red-50">
        <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M16 13v-2H7V8l-5 4 5 4v-3zM20 3h-8v2h8v14h-8v2h8c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z" />
        </svg>
        Keluar
      </a>
    </li>

  </ul>
</nav>

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