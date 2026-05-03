@vite('resources/css/app.css')

<!-- NAVIGATION -->
<header id="navigator" class="w-full backdrop-blur-custom drop-shadow-custom fixed top-0 bg-transparent z-100">
  <nav class="container flex justify-between py-2 items-center">
    <div class="flex ml-5">
      <a href="{{route('landing')}}">
        <img
          src="{{asset('assets/images/ypo-logo.png')}}"
          height="50"
          class="max-h-[60px]"
          alt="YPO Logo"
        />
      </a>
    </div>
    <div class="flex ml-auto mr-12">
      <ul class="md:flex items-center gap-9 list-none font-montserrat hidden">
        <li class="relative h-full flex items-center group">
          <div
            class="flex items-center gap-1.5 x-dropdown-button cursor-pointer peer"
          >
            <span class="font-semibold text-primary-whiteCustom">About Us</span>
            <i
              class="bi bi-chevron-down text-primary-whiteCustom group-hover:rotate-180 transition-all"
            ></i>
          </div>
          <div
            class="hidden peer-hover:block hover:block group-hover:block absolute rounded-xl overflow-hidden top-full w-fit shadow-xl"
          >
            <div class="pt-12">
              <ul class="bg-dropdown list-disc text-nowrap pl-8 p-3 rounded-xl">
                <li>
                  <a href="{{route('history')}}" class="w-full block pl-2 pr-8 py-1 text-primary-whiteCustom"
                    >Our Journey</a
                  >
                </li>
                <li>
                  <a href="{{route('vision-mission')}}" class="w-full block pl-2 pr-8 py-1 text-primary-whiteCustom"
                    >Our Purpose</a
                  >
                </li>
                <li>
                  <a href="{{route('greeting')}}" class="w-full block pl-2 pr-8 py-1 text-primary-whiteCustom"
                    >From The Leaders</a
                  >
                </li>
                <li>
                  <a href="{{route('facilities')}}" class="w-full block pl-2 pr-8 py-1 text-primary-whiteCustom"
                    >Facilities</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </li>
        <li>
          <a href="{{route('staff')}}" class="font-semibold text-primary-whiteCustom">Meet The Team</a>
        </li>
        <li>
          <a href="{{route('gallery')}}" class="font-semibold text-primary-whiteCustom">Gallery</a>
        </li>
        <li>
          <a href="{{route('announcements.index')}}" class="font-semibold text-primary-whiteCustom">Announcements</a>
        </li>
      </ul>
    </div>
    <div class="hidden md:flex">
      <a
      href="{{ route('application.index')}}"
      class="relative px-9 py-1 mr-7 text-primary-whiteCustom hover:drop-shadowBlue-custom font-bold text-lg text-customBlue border border-customBlue border-4 hover:animate-zoom-in rounded-full"
    >Join</a>
    
    </div>

    <!-- Mobile menu toggle -->
    <button
      type="button"
      class="relative inline-flex md:hidden items-center justify-center rounded-md p-2 text-xneutral-300 hover:bg-xneutral-100 hover:text-xneutral-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
      aria-controls="mobile-menu"
      aria-expanded="false"
    >
      <span class="absolute -inset-0.5"></span>
      <span class="sr-only">Open main menu</span>
      <svg
        class="block h-6 w-6"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        aria-hidden="true"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
        />
      </svg>
      <svg
        class="hidden h-6 w-6"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        aria-hidden="true"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M6 18L18 6M6 6l12 12"
        />
      </svg>
    </button>
  </nav>

  <!-- Mobile Menu -->
  <div class="hidden shadow-xl" id="mobile-menu">
    <ul class="space-y-2 px-4 pb-3 pt-2 text-primary-whiteCustom font-montserrat">
      <li class="h-full w-full">
        <div
          class="flex items-center w-full justify-between gap-1.5 x-dropdown-button cursor-pointer"
          data-target="menu1"
        >
          <span class="font-semibold">About Us</span>
          <i class="bi bi-chevron-down transition-all"></i>
        </div>
        <div class="hidden x-dropdown-menu" id="menu1">
          <div>
            <ul class="bg-gray-800 text-nowrap px-3 rounded-xl">
              <li>
                <a href="{{route('history')}}" class="w-full block pl-2 pr-8 py-1"
                  >Our Journey</a
                >
              </li>
              <li>
                <a href="{{route('vision-mission')}}" class="w-full block pl-2 pr-8 py-1"
                  >Our Purpose</a
                >
              </li>
              <li>
                <a href="{{route('greeting')}}" class="w-full block pl-2 pr-8 py-1"
                  >From The Leaders</a
                >
              </li>
              <li>
                <a href="{{route('facilities')}}" class="w-full block pl-2 pr-8 py-1"
                  >Facilities</a
                >
              </li>
            </ul>
          </div>
        </div>
      </li>
      <li>
        <a href="{{route('staff')}}" class="font-semibold">Meet The Team</a>
      </li>
      <li>
        <a href="{{route('gallery')}}" class="font-semibold">Gallery</a>
      </li>
      <li>
        <a href="{{route('announcements.index')}}" class="font-semibold">Announcements</a>
      </li>
      <li class="pt-4">
        <a href="{{route('application.index')}}" class="block w-full text-center py-2 bg-customBlue text-primary-blackCustom rounded-full font-bold">Join Now</a>
      </li>
    </ul>
  </div>
</header>
<!-- END OF NAVIGATION -->