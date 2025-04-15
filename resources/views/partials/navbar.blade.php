@vite('resources/css/app.css')

<!-- NAVIGATION -->
<header id="navigator" class="w-full backdrop-blur-custom drop-shadow-custom fixed top-0 bg-transparent z-100">
  <nav class="container flex justify-between py-2 items-center">
    <div class="flex ml-5">
      <a href="{{route('/')}}">
        <img
          src="{{asset('assets/images/ypo-logo.png')}}"
          height="50"
          class="max-h-[60px]"
          alt=""
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
                  <a href="{{route('sejarah')}}" class="w-full block pl-2 pr-8 py-1 text-primary-whiteCustom"
                    >Our Journey</a
                  >
                </li>
                <li>
                  <a href="{{route('visimisi')}}" class="w-full block pl-2 pr-8 py-1 text-primary-whiteCustom"
                    >Our Purpose</a
                  >
                </li>
                <li>
                  <a href="{{route('sambutan')}}" class="w-full block pl-2 pr-8 py-1 text-primary-whiteCustom"
                    >From The Leaders</a
                  >
                </li>
                <li>
                  <a href="{{route('fasilitas')}}" class="w-full block pl-2 pr-8 py-1 text-primary-whiteCustom"
                    >Facilities</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </li>
        <li>
          <a href="{{route('sdm')}}" class="font-semibold text-primary-whiteCustom">Meet The Team</a>
        </li>
        <li>
          <a href="{{route('gallery')}}" class="font-semibold text-primary-whiteCustom">Gallery</a>
        </li>
        <li>
          <a href="{{route('pengumuman')}}" class="font-semibold text-primary-whiteCustom">Announchement</a>
        </li>
      </ul>
    </div>
    <div class="hidden md:flex">
      <a
      href="{{ route('pendaftaran')}}"
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
    <ul class="space-y-2 px-4 pb-3 pt-2">
      <li class="h-full w-full">
        <div
          class="flex items-center w-full justify-between gap-1.5 x-dropdown-button cursor-pointer"
          data-target="menu1"
        >
          <span class="font-semibold">Tentang Kami</span>
          <i class="bi bi-chevron-down transition-all"></i>
        </div>
        <div class="hidden x-dropdown-menu" id="menu1">
          <div>
            <ul class="bg-white text-nowrap px-3 rounded-xl">
              <li>
                <a href="{{route('sejarah')}}" class="w-full block pl-2 pr-8 py-1"
                  >Sejarah</a
                >
              </li>
              <li>
                <a href="{{route('visimisi')}}" class="w-full block pl-2 pr-8 py-1"
                  >Visi & Misi</a
                >
              </li>
              <li>
                <a href="{{route('sambutan')}}" class="w-full block pl-2 pr-8 py-1"
                  >Sambutan Rektor</a
                >
              </li>
              <li>
                <a href="{{route('fasilitas')}}" class="w-full block pl-2 pr-8 py-1"
                  >Fasilitas</a
                >
              </li>
            </ul>
          </div>
        </div>
      </li>
      <li>
        <a href="{{route('sdm')}}" class="font-semibold">SDM</a>
      </li>
      <li class="h-full w-full">
        <div
          class="flex items-center w-full justify-between gap-1.5 x-dropdown-button cursor-pointer"
          data-target="menu2"
        >
          <span class="font-semibold">Akademik</span>
          <i class="bi bi-chevron-down transition-all"></i>
        </div>
        <div class="hidden w-full x-dropdown-menu mt-4" id="menu2">
          <div class="space-y-4">
            <div class="pl-3">
              <span
                class="flex justify-between mb-3 font-semibold text-nowrap x-dropdown-button"
                data-target="menu-ilmu-kesehatan"
                >ILMU KESEHATAN
                <i class="bi bi-chevron-down transition-all"></i
              ></span>
              <ul
                id="menu-ilmu-kesehatan"
                class="hidden x-dropdown-menu space-y-1 text-nowrap"
              >
                <li>
                  <a href="#" class="w-full block pl-2 pr-8 py-1"
                    >S1 KEPERAWATAN</a
                  >
                </li>
                <li>
                  <a href="#" class="w-full block pl-2 pr-8 py-1"
                    >S1 KEBIDANAN</a
                  >
                </li>
                <li>
                  <a href="#" class="w-full block pl-2 pr-8 py-1"
                    >S1 FARMASI</a
                  >
                </li>
                <li>
                  <a href="#" class="w-full block pl-2 pr-8 py-1"
                    >S1 ADMINISTRASI RUMAH SAKIT</a
                  >
                </li>
                <li>
                  <a href="#" class="w-full block pl-2 pr-8 py-1"
                    >D3 KEBIDANAN</a
                  >
                </li>
                <li>
                  <a href="#" class="w-full block pl-2 pr-8 py-1"
                    >D3 FISIOTERAPI</a
                  >
                </li>
                <li>
                  <a href="#" class="w-full block pl-2 pr-8 py-1"
                    >D3 FARMASI</a
                  >
                </li>
              </ul>
            </div>
            <div class="pl-3">
              <span
                class="flex justify-between mb-3 font-semibold text-nowrap x-dropdown-button"
                data-target="menu-ekonomi-bisnis"
                >EKONOMI DAN BISNIS
                <i class="bi bi-chevron-down transition-all"></i
              ></span>
              <ul
                id="menu-ekonomi-bisnis"
                class="x-dropdown-menu hidden space-y-1 text-nowrap"
              >
                <li>
                  <a href="#" class="w-full block pl-2 pr-8 py-1"
                    >S1 MANAJEMEN</a
                  >
                </li>
                <li>
                  <a href="#" class="w-full block pl-2 pr-8 py-1"
                    >S1 AKUNTANSI</a
                  >
                </li>
                <li>
                  <a href="#" class="w-full block pl-2 pr-8 py-1"
                    >S1 EKONOMI SYARIAH</a
                  >
                </li>
                <li>
                  <a href="#" class="w-full block pl-2 pr-8 py-1"
                    >S1 KEWIRAUSAHAAN</a
                  >
                </li>
              </ul>
            </div>
            <div class="pl-3">
              <span
                class="flex justify-between mb-3 font-semibold text-nowrap x-dropdown-button"
                data-target="menu-saintekdik"
                >SAINS, TEKNOLOGI, DAN PENDIDIKAN
                <i class="bi bi-chevron-down transition-all"></i
              ></span>
              <ul
                id="menu-saintekdik"
                class="x-dropdown-menu hidden text-nowrap space-y-1"
              >
                <li>
                  <a href="#" class="w-full block pl-2 pr-8 py-1"
                    >S1 PENDIDIKAN GURU SD</a
                  >
                </li>
                <li>
                  <a href="#" class="w-full block pl-2 pr-8 py-1"
                    >S1 BIOLOGI</a
                  >
                </li>
                <li>
                  <a href="#" class="w-full block pl-2 pr-8 py-1"
                    >S1 FISIKA</a
                  >
                </li>
                <li>
                  <a href="#" class="w-full block pl-2 pr-8 py-1"
                    >S1 TEKNIK KOMPUTER</a
                  >
                </li>
                <li>
                  <a href="#" class="w-full block pl-2 pr-8 py-1"
                    >S1 TEKNIK INDUSTRI</a
                  >
                </li>
                <li>
                  <a href="#" class="w-full block pl-2 pr-8 py-1"
                    >S1 TEKNIK INFORMATIKA</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </li>
      <li>
        <a href="{{route('pengumuman')}}" class="font-semibold">Pengumuman</a>
      </li>
    </ul>
  </div>
</header>
<!-- END OF NAVIGATION -->