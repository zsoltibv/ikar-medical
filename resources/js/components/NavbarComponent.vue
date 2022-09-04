<template>
  <div class="navbar font-body">
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
                <a href="/en/doctors">Doctors</a>
            </li>
            <li>
                <a href="/ro/departments">Departments</a>
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
