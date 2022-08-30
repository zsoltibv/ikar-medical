<div class="top-bar border-b py-2 hidden md:block">
  <div class="container mx-auto px-4 font-body flex justify-between">
    <div class="location flex items-center">
      <div class="lang-switcher">
          {{-- Start --}}
          <div class="max-w-lg mx-auto">
            <button class="uppercase text-gray-900 border-2 font-semibold font-body text-sm px-4 py-2 text-center inline-flex items-center" type="button" data-dropdown-toggle="dropdown">{{app()->getLocale()}}<svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <!-- Dropdown menu -->
            <div class="hidden bg-white text-base z-50 list-none divide-y divide-gray-100 rounded shadow my-4" id="dropdown">
                <ul class="py-1" aria-labelledby="dropdown">
                  <li class="flex items-center justify-center hover:bg-gray-300 py-1.5 px-7">
                    <a href="{{ route(Route::currentRouteName(), 'ro') }}" class="">RO</a>
                  </li>
                  <li class="flex items-center justify-center hover:bg-gray-300 py-1.5 px-7">
                    <a href="{{ route(Route::currentRouteName(), 'en') }}" class="">EN</a>
                  </li>
                </ul>
            </div>
          </div>
          {{-- End --}}
        </div>
    </div>
    <div class="info flex divide-x">
      <div class="flex items-center pr-3.5">
        <div class="mr-2 flex items-center">
          <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-green-800 opacity-75"></span>
          <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
        </div>
        <p class="text-blue-800 font-semibold">Contact Center +40 771 028 028</p>
      </div>
      <div class="phone flex items-center pl-3">
          <p class="text-blue-800 font-semibold">Str. Zizinului nr. 641, Tarlungeni. jud. Brasov</p>
      </div>
    </div>
  </div>
</div>