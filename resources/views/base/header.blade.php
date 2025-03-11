<!-- Navbar -->
<div x-data="{ open: false }" class="relative flex items-center justify-between pb-10 pt-10 px-6 bg-black text-white">
  <!-- Logo -->
  <a href="/">
    <img src="tansen.png" alt="Logo" width="100" height="60">
  </a>

  <!-- Desktop Menu -->
  <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 gap-x-12">
    <a href="/services" class="text-sm font-semibold hover:text-gray-400">Our Services</a>
    <a href="/brandPartner" class="text-sm font-semibold hover:text-gray-400">Brand Partner</a>
    <a href="/galery" class="text-sm font-semibold hover:text-gray-400">Galery</a>
    <a href="/aboutUs" class="text-sm font-semibold hover:text-gray-400">Contact Us</a>
  </div>

  <!-- Burger Button (Mobile) -->
  <button @click="open = !open" class="md:hidden focus:outline-none">
    <template x-if="!open">
      <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
        <path d="M4 6h16M4 12h16m-16 6h16" stroke="white" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </template>
    <template x-if="open">
      <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
        <path d="M6 6l12 12M6 18L18 6" stroke="white" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </template>
</button>
  

  <!-- Mobile Menu -->
  <div x-show="open" class="absolute top-full left-0 w-full bg-black text-white md:hidden">
    <a href="/services" class="block px-6 py-3 border-b border-gray-700 hover:bg-gray-800">Our Services</a>
    <a href="/brandPartner" class="block px-6 py-3 border-b border-gray-700 hover:bg-gray-800">Brand Partner</a>
    <a href="/galery" class="block px-6 py-3 border-b border-gray-700 hover:bg-gray-800">Galery</a>
    <a href="/aboutUs" class="block px-6 py-3 hover:bg-gray-800">About Us</a>
  </div>
</div>

<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
