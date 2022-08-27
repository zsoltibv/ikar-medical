<template>
  <div class="navbar font-body">
    <div class="top-bar border-b py-3 hidden md:block">
      <div class="container mx-auto px-4 font-body flex justify-between">
        <div class="location flex">
          <div class="w-3 h-3 mr-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"/></svg>
          </div>
          <p class="text-blue-800 font-semibold">Str. Zizinului nr. 641, Tarlungeni. jud. Brasov</p>
        </div>
        <div class="location flex">
          <div class="w-2 h-2 mr-6">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20 22.621l-3.521-6.795c-.008.004-1.974.97-2.064 1.011-2.24 1.086-6.799-7.82-4.609-8.994l2.083-1.026-3.493-6.817-2.106 1.039c-7.202 3.755 4.233 25.982 11.6 22.615.121-.055 2.102-1.029 2.11-1.033z"/></svg>
          </div>
          <p class="text-blue-800 font-semibold">+40 771 028 028</p>
        </div>
      </div>
    </div>
    <div class="navbar-wrap">
      <div
        class="navbar container mx-auto py-2 md:py-4 flex justify-between items-center px-4"
      >
        <a href="/" class="overflow-hidden">
          <img src="/img/logo.svg" class="logo md:h-12 h-11" alt="" />
        </a>
        <div class="menu overflow-hidden">
          <ul
            class="hidden text-gray-500 md:flex space-x-10 text-lg font-semibold"
          >
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="/">Doctors</a>
            </li>
            <li>
                <a href="/">Departments</a>
            </li>
            <li>
                <a href="/">Appointments</a>
            </li>
             <li>
                <a href="/">Contact</a>
            </li>
          </ul>
        </div>
        <button
          class="mobile-menu-button outline-none md:hidden overflow-hidden"
          @click="showMobileMenu = !showMobileMenu"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            class="w-6 h-6 text-gray-500 fill-current"
            x-show="!showMenu"
          >
            <path fill="none" d="M0 0h24v24H0z" />
            <path d="M3 4h18v2H3V4zm6 7h12v2H9v-2zm-6 7h18v2H3v-2z" />
          </svg>
        </button>
      </div>
    </div>
    <div class="">
      <div
        class="absolute md:hidden flex justify-left mobile-menu z-50 bg-white w-full h-fit-content border-b"
        v-if="showMobileMenu"
      >
        <div class="container mx-auto px-3 mt-3 mb-3">
          <ul
            class="text-gray-500 text-md space-y-3 font-heading-2 flex flex-col font-bold ml-2"
          >
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="/">Doctors</a>
            </li>
            <li>
                <a href="/">Departments</a>
            </li>
            <li>
                <a href="/">Appointments</a>
            </li>
             <li>
                <a href="/">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      showMobileMenu: false,
    };
  },
};
</script>
