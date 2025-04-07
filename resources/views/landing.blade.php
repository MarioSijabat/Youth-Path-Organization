@extends('layouts.app')
@section('content')
@vite('resources/css/app.css')

    <!-- HERO SECTION -->
    <section class="relative container mx-0 mt-0">
      <div
        id="hero-1"
        class="absolute top-0 left-0 w-full h-full flex flex-col lg:flex-row lg:portrait:flex-col items-center justify-center rounded-[30px]"
      >
        <div class="px-4 md:pl-12 w-full lg:w-1/2 lg:portrait:w-full">
          <h1
            class="text-4xl font-semibold font-montserrat md:text-5xl/[60px] text-primary-whiteCustom mb-7"
          >
            Menyatukan Ilmu dan Iman untuk Masa Depan Cerah
          </h1>
          <span
            class="text-lg md:text-xl text-secondary-whiteCustom font-montserrat font-medium"
            >Kami berkomitmen mendidik generasi unggul yang menjunjung tinggi
            nilai agama dan kecemerlangan akademik.</span
          >
        </div>
        <img
          src="../assets/images/hero-4.png"
          class="mr-12 sm:-mr-12 z-0 w-full lg:w-1/2 lg:portrait:w-4/5 rounded-3xl"
          alt="Hero Image"
        />
        <div class="animate-blob-blue opacity-50 absolute rotate-170 w-[550px] h-[200px] bg-customBlue rounded-full filter blur-md-custom mt-12 -z-10 right-0"></div>

      </div>
    </section>
    <!-- END OF HERO SECTION -->

    <div class="sm:block w-full h-2 bg-customBlue blur-xl rounded-full"></div>
    <div class="sm:block w-full h-1 bg-customBlue rounded-full"></div>

    <!-- ABOUT SECTION -->
    <section class="w-full overflow-hidden pt-[120px] pb-[120px]">
      <!-- Elemen Biru dan Hijau -->
      @if (!empty($abouts->content) || isset($abouts->image[0]) || isset($abouts->image[1]) || isset($abouts->image[2]))
        <div class="animate-blob-blue opacity-50 absolute w-[600px] h-[500px] bg-customBlue rounded-full filter blur-md-custom -z-10 left-50"></div>
        <div class="animate-blob-blue opacity-50 absolute w-[450px] h-[500px] bg-customBlue rounded-full filter blur-md-custom -z-10 right-60"></div>
      @endif

      <div class="container grid grid-cols-1 md:grid-cols-2 items-start gap-4 relative z-10">
        <!-- Konten Kiri -->
        <div class="space-y-4 bg-transparent backdrop-blur-custom p-8 rounded-3xl drop-shadow-custom">
          <h3 class="text-primary-blackCustom font-bold text-xl sm:text-2xl font-montserrat">
            ABOUT US
          </h3>

          <!-- Check if both content and images are empty -->
          @if (empty($abouts->content) && empty($abouts->image))
            <p class="font-montserrat text-lg sm:text-lg text-secondary-blackCustom">
              No data available
            </p>
          @else
            <p class="font-montserrat text-2xl text-primary-blackCustom sm:text-4xl font-semibold max-w-full break-words">
              Shaping future leaders with
              <span class="text-secondary-purple">purpose</span>, 
              <span class="text-secondary-coralRed">passion</span> , and
              <span class="text-secondary-deepBlue">impact.</span>
            </p>
            <hr class="border border-black border-3 rounded-full" />
            <p class="text-base sm:text-lg font-semibold text-secondary-blackCustom font-montserrat max-w-full break-words">
              {{ $abouts->content }}
            </p>
            <a
              href="{{ route('sejarah') }}"
              class="px-6 py-1 font-montserrat hover:animate-zoom-in bg-buttonTransparent border border-3 w-fit text-lg font-semibold border-customBlue text-customBlue rounded-full flex gap-[10px]"
            >
              <span>About Us</span>
              <i class="bi bi-arrow-right text-2xl font-bold text-customBlue"></i>
            </a>
          @endif
        </div>

        <!-- Konten Kanan -->
        <div class="relative bg-transparent backdrop-blur-custom p-4 rounded-3xl drop-shadow-custom">
          <div class="grid grid-cols-2 gap-4 w-fit item-center">
            <!-- Check for the presence of images -->
            @if (isset($abouts->image[0]))
              <img class="img-248x184" src="{{ asset('storage/'. $abouts->image[0]) }}" alt="Illustration 1" />
            @endif
            @if (isset($abouts->image[1]))
              <img class="img-248x184" src="{{ asset('storage/'. $abouts->image[1]) }}" alt="Illustration 2" />
            @endif
            @if (isset($abouts->image[2]))
              <img class="col-span-2 img-501x239" src="{{ asset('storage/'. $abouts->image[2]) }}" alt="Illustration 3" />
            @endif
          </div>
        </div>
      </div>
    </section>
    <!-- END OF ABOUT SECTION -->

    <!-- COOPERATION SECTION -->
    <section class="w-full pt-[50px] pb-[50px]">
      <div class="container overflow-hidden rounded-3xl py-5 sm:mx-auto -mx-32 z-10 relative">
        <h3 class="text-xl sm:text-2xl text-primary-whiteCustom text-center w-full font-semibold font-montserrat">
          Supported By :
        </h3>

        <div class="flex flex-wrap justify-center gap-6 py-12 px-9">
          @if($cooperationImg->isEmpty())
            <p class="text-center text-secondary-whiteCustom font-montserrat text-lg w-full">
              No data available
            </p>
          @else
            @foreach ($cooperationImg as $cooperation)
              <div class="relative flex items-center gap-3 px-4 py-2 shadow-md rounded-2xl hover:animate-zoom-in bg-transparent">
                <!-- Background element inside the container, adjusts with content height -->
                <div class="absolute inset-0 w-full h-full bg-customBlue rounded-full filter blur-xl opacity-50 -z-10"></div>

                <!-- Cooperation Content -->
                <img class="w-12 h-12 object-contain rounded-xl" src="{{ asset('storage/' . $cooperation->image) }}" alt="Cooperation Logo" />
                <span class="text-lg font-montserrat font-semibold text-gray-800">
                  {{ $cooperation->name ?? 'Partner Name' }}
                </span>
              </div>
            @endforeach
          @endif
        </div>
      </div>
    </section>
    <!-- END OF COOPERATION SECTION -->

    <!-- NEWS SECTION -->
    <section id="news-section" class="container relative pt-[120px] pb-[120px]">
      <div class="mb-10 flex flex-col sm:flex-row justify-between items-center">
        <div class="w-full sm:w-1/2 mb-6 sm:mb-0">
          <h3 class="font-semibold text-xl sm:text-2xl font-montserrat text-primary-whiteCustom">
            News
          </h3>
          <p class="text-sm sm:text-base font-montserrat text-secondary-whiteCustom font-semibold">
            Stay Updated with Our Latest News
          </p>
        </div>
        <div class="sm:block w-3 h-40 bg-customBlue blur-xl rounded-full"></div>
        <div class="sm:block w-3 h-40 bg-customBlue rounded-full"></div>
        <div class="w-full sm:w-1/2 ps-4">
          <p class="text-sm sm:text-base font-montserrat text-secondary-whiteCustom font-semibold">
            Explore the most recent developments, events, and announcements within our community. Stay connected and informed about the latest initiatives, programs, and opportunities to get involved in making a positive impact on the world.          </p>
        </div>
      </div>

      <!-- Card Berita dan Tombol Navigasi -->
      <div class="relative flex items-center">
        <!-- Left Button (Previous) -->
        <div class="absolute w-32 h-16 left-0 group"> 
          @if($news->onFirstPage())
            <button disabled class="absolute left-[-25px] bg-blackCustom border border-3 border-customBlue w-13 h-16 rounded-2xl flex justify-center items-center opacity-50 invisible group-hover:visible transition-all duration-300">
              <img src="/assets/icons/short-arrow-left.png" alt="Previous" class="w-8 h-8" />
            </button>
          @else
            <a href="{{ $news->previousPageUrl() }}#news-section" class="absolute left-[-25px] hover:animate-zoom-in bg-blackCustom drop-shadowBlue-custom border border-3 border-customBlue hover:bg-customBlue w-13 h-16 rounded-2xl flex justify-center items-center invisible group-hover:visible transition-all duration-300">
              <img src="/assets/icons/short-arrow-left.png" alt="Previous" class="w-8 h-8" />
            </a>
          @endif
        </div>

        @if($news->isEmpty())
          <div class="text-center text-secondary-whiteCustom font-montserrat text-lg w-full">
            No data available
          </div>
        @else
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full">
            @foreach ($news as $newslist)
              <div class="p-4 rounded-3xl bg-transparent drop-shadow-custom">
                <div class="animate-blob-blue absolute w-120 h-[150px] mt-15 bg-customBlue rounded-full filter blur-md-custom -z-10"></div>
                
                <div class="max-h-[214px] rounded-2xl overflow-hidden">
                  <img
                    src="{{ asset('storage/' . $newslist->image) }}"
                    alt="{{ $newslist->title }}"
                    class="w-full h-full object-cover"
                  />
                </div>
                <a 
                  href="{{ route('berita.show', $newslist->slug) }}" 
                  class="block text-lg font-montserrat font-semibold text-primary-blackCustom mt-2 line-clamp-2 overflow-hidden text-ellipsis whitespace-normal"
                >
                  {{ $newslist->title }}
                </a>
                <p class="font-montserrat text-xs sm:text-sm font-semibold text-secondary-blackCustom ps-3 mt-3 mb-2">
                  {{ \Carbon\Carbon::parse($newslist->created_at)->format('d/m/y') }}
                </p>
              </div>
            @endforeach
          </div>
        @endif

        <!-- Right Button (Next) -->
        <div class="absolute right-0 w-48 h-16 group"> 
        @if($news->hasMorePages())
          <a href="{{ $news->nextPageUrl() }}#news-section" class="absolute right-[-25px] bg-blackCustom hover:animate-zoom-in drop-shadowBlue-custom border border-3 border-customBlue hover:bg-customBlue w-13 h-16 rounded-2xl flex justify-center items-center invisible group-hover:visible transition-all duration-300">
            <img src="/assets/icons/short-arrow-right.png" alt="Next" class="w-8 h-8" />
          </a>
        @else
          <button disabled class="absolute right-[-25px] bg-blackCustom border border-3 border-customBlue w-13 h-16 rounded-2xl flex justify-center items-center opacity-50 invisible group-hover:visible transition-all duration-300">
            <img src="/assets/icons/short-arrow-right.png" alt="Next" class="w-8 h-8" />
          </button>
        @endif
      </div>

      <!-- Pagination Links (Optional) -->
      <div class="flex justify-center mt-4">
        {{ $news->links() }}
      </div>
    </section>
    <!-- END OF NEWS SECTION -->

    <!-- RECTOR SECTION -->
    <section class="container pt-[120px] pb-[120px]">
      <div class="animate-blob-blue absolute w-[1100px] h-[200px] bg-customBlue rounded-full filter blur-md-custom mt-40 -z-10 left-53 opacity-80"></div>
      <div class="flex justify-between items-center mb-10">
        <div class="w-full sm:w-1/2">
          <h3 class="font-montserrat font-semibold text-primary-whiteCustom text-xl sm:text-2xl">
            The Leaders
          </h3>
          <p class="text-sm sm:text-base font-montserrat text-secondary-whiteCustom font-semibold">
            Powered by purpose, driven by passion.          </p>
        </div>

        <div>
          <a
            href="{{ route('sdm') }}"
            class="group px-6 py-1 font-montserrat bg-buttonTransparent hover:animate-zoom-in border border-3 w-auto hover:border-white hover:text-white text-lg font-semibold border-customBlue text-customBlue rounded-full flex gap-2 items-center"
          >
            <span>See</span>
            <span class="ml-1">All</span>
            <!-- Apply hover effect to the icon when parent (group) is hovered -->
            <i class="bi bi-arrow-right text-2xl font-bold text-customBlue group-hover:text-white"></i>
          </a>        
        </div>
        
      </div>

      <!-- Expert Cards -->
      <div class="flex justify-center gap-20 mt-10 px-[62px] py-9 bg-transparent rounded-3xl drop-shadow-custom">
        @if ($rectors->isEmpty())
          <div class="text-center text-secondary-blackCustom font-montserrat text-lg w-full">
            No data available
          </div>
        @else
          @foreach ($rectors as $rektor)
            <div class="flex flex-col items-center w-40 rounded-3xl">
              <div class="rounded-full overflow-hidden w-[175px] h-[175px] mb-2">
                <img
                  src="{{ asset('storage/' . $rektor->image) }}"
                  alt="{{ $rektor->nama }}"
                  class="w-full h-full object-cover"
                />
              </div>
              <p class="mb-1 text-sm sm:text-base text-primary-blackCustom text-justify font-semibold font-montserrat">
                {{ $rektor->nama }}
              </p>
              <p class="text-xs sm:text-sm text-secondary-blackCustom text-center font-medium font-montserrat">
                {{ $rektor->jabatan }}
              </p>
            </div>
          @endforeach
        @endif
      </div>
    </section>
    <!-- END OF RECTOR SECTION -->

    <!-- ANNOUNCEMENT SECTION -->
    <section id="announcement-section" class="x-announcement w-full pt-12">
      <div class="container pt-[80px]">
        <div class="mb-10 flex justify-between items-center">
          <!-- Title Section -->
          <div>
            <h3 class="font-semibold text-xl sm:text-2xl font-montserrat text-primary-whiteCustom">
              Announchement
            </h3>
            <p class="font-montserrat text-sm sm:text-base text-secondary-whiteCustom font-semibold">
              Keep track of the latest developments in our community!
            </p>
          </div>
          <!-- View All Button -->
          <div>
            <a href="{{ route('pengumuman') }}" class="group px-6 py-1 font-montserrat hover:animate-zoom-in text-neutral-0 bg-buttonTransparent border border-3 w-auto text-lg font-semibold hover:border-white hover:text-white border-customBlue text-customBlue rounded-full flex gap-2 items-center">
              View All Announcements
              <i class="bi bi-arrow-right text-2xl font-bold text-customBlue group-hover:text-white"></i>
            </a>
          </div>
        </div>

        <!-- Announcement Cards Section (3 kolom dengan kartu) -->
        @if ($announcements->isEmpty())
          <div class="text-center text-secondary-whiteCustom font-montserrat text-lg w-full">
            No data available
          </div>
        @else
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3">
            <!-- Loop through the announcements if data exists -->
            @foreach($announcements as $announcement)
              <div class="relative py-[26px] px-6 bg-transparent rounded-3xl drop-shadow-custom">
                <!-- Background Animasi Blob -->
                <div class="animate-blob-blue absolute w-[400px] h-[60px] bg-customBlue rounded-full filter blur-md-custom -z-10 opacity-100"></div>

                <!-- Konten Pengumuman -->
                <a href="{{ route('pengumuman.show', $announcement->slug) }}" class="text-base sm:text-lg font-montserrat font-semibold text-primary-blackCustom max-h-[5em] line-clamp-2 overflow-hidden whitespace-normal mb-4">
                  {{ $announcement->title }}
                </a>
                <p class="block font-montserrat text-xs sm:text-sm font-semibold text-secondary-blackCustom overflow-hidden text-ellipsis whitespace-normal">
                  {{ strip_tags(html_entity_decode($announcement->content)) }}
                </p>
                <p class="font-montserrat text-xs font-semibold text-secondary-blackCustom">
                  {{ \Carbon\Carbon::parse($announcement->created_at)->format('d/m/y') }}
                </p>
              </div>
            @endforeach
          </div>
        @endif

        <!-- Navigation Buttons Below the Cards -->
        <div class="flex justify-center gap-5 items-center mt-4">
          <!-- Previous Button -->
          @if ($announcements->onFirstPage())
            <button disabled class="bg-buttonTransparent border border-3 hover:bg-buttonTransparent border-customBlue hover:bg-xneutral-400 w-17 h-12 rounded-2xl flex justify-center items-center opacity-30">
              <img src="/assets/icons/blue-short-arrow-left.png" alt="Previous" class="w-8 h-8" />
            </button>
          @else
            <a href="{{ $announcements->previousPageUrl() }}#announcement-section" class="bg-buttonTransparent border hover:animate-zoom-in hover:drop-shadowBlue-custom border-3 hover:bg-buttonTransparent border-customBlue hover:bg-xneutral-400 w-17 h-12 rounded-2xl flex justify-center items-center">
              <img src="/assets/icons/blue-short-arrow-left.png" alt="Previous" class="w-8 h-8" />
            </a>
          @endif

          <!-- Next Button -->
          @if ($announcements->hasMorePages())
            <a href="{{ $announcements->nextPageUrl() }}#announcement-section" class="bg-buttonTransparent border border-3 hover:animate-zoom-in hover:drop-shadowBlue-custom hover:bg-buttonTransparent border-customBlue hover:bg-xneutral-400 w-17 h-12 rounded-2xl flex justify-center items-center">
              <img src="/assets/icons/blue-short-arrow-right.png" alt="Next" class="w-8 h-8" />
            </a>
          @else
            <button disabled class="bg-buttonTransparent border border-3 hover:bg-buttonTransparent border-customBlue hover:bg-xneutral-400 w-17 h-12 rounded-2xl flex justify-center items-center opacity-30">
              <img src="/assets/icons/blue-short-arrow-right.png" alt="Next" class="w-8 h-8" />
            </button>
          @endif
        </div>

        <!-- Pagination Links (Optional) -->
        <div class="flex justify-center mt-4">
          {{ $announcements->links() }}
        </div>
      </div>
    </section>  
    <!-- END OF ANNOUNCEMENT SECTION -->

@endsection
