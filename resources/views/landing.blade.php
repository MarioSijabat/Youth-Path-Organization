@extends('layouts.app')
@section('content')
@vite('resources/css/app.css')

    <!-- HERO SECTION -->
    <section class="relative container mx-0 mt-0">
      <div
        id="hero-1"
        class="absolute top-0 left-0 w-full h-full flex flex-col lg:flex-row lg:portrait:flex-col items-center justify-start rounded-[30px]"
      >
        <div class="md:pl-12 w-full lg:w-1/2 lg:portrait:w-full">
          <h1
            class="text-4xl font-semibold font-montserrat md:text-5xl/[60px] text-primary-whiteCustom mb-7"
          >
          Connecting Youth for a Sustainable Future
          </h1>
          <span
            class="text-lg md:text-xl text-secondary-whiteCustom font-montserrat font-medium"
            >We are a global community uniting young people from diverse backgrounds to take action together for social change.</span
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

    <!-- ABOUT SECTION -->
    <section class="w-full overflow-hidden pt-[120px] pb-[120px]">
      @if (!empty($profile->content) || isset($profile->image[0]) || isset($profile->image[1]) || isset($profile->image[2]))
        <div class="animate-blob-blue opacity-30 absolute w-[600px] h-[500px] bg-customBlue rounded-full filter blur-md-custom -z-10 left-50"></div>
        <div class="animate-blob-blue opacity-30 absolute w-[450px] h-[500px] bg-customBlue rounded-full filter blur-md-custom -z-10 right-60"></div>
      @endif

      <div class="container grid grid-cols-1 md:grid-cols-2 items-start gap-4 relative z-10">
        <div class="space-y-4 bg-transparent backdrop-blur-custom p-8 rounded-3xl drop-shadow-custom">
          <h3 class="text-primary-whiteCustom font-bold text-xl sm:text-2xl font-montserrat">
            ABOUT US
          </h3>

          @if (empty($profile->content) && empty($profile->image))
            <p class="font-montserrat text-lg sm:text-lg text-secondary-whiteCustom">
              No data available
            </p>
          @else
            <p class="font-montserrat text-2xl text-primary-whiteCustom sm:text-4xl font-semibold max-w-full break-words">
              Shaping future leaders with
              <span class="text-secondary-purple">purpose</span>, 
              <span class="text-secondary-coralRed">passion</span> , and
              <span class="text-secondary-deepBlue">impact.</span>
            </p>
            <hr class="border border-white border-3 rounded-full" />
            <p class="text-base sm:text-lg font-semibold text-secondary-whiteCustom font-montserrat max-w-full break-words">
              {{ $profile->content }}
            </p>
            <a
              href="{{ route('history') }}"
              class="px-6 py-2 font-montserrat hover:animate-zoom-in bg-buttonTransparent border border-3 w-fit text-lg font-semibold border-customBlue text-customBlue rounded-full flex gap-[10px]"
            >
              <span>About Us</span>
              <i class="bi bi-arrow-right text-2xl font-bold text-customBlue"></i>
            </a>
          @endif
        </div>

        <div class="relative bg-transparent backdrop-blur-custom p-4 rounded-3xl drop-shadow-custom ">
          <div class="grid grid-cols-2 gap-4 w-fit item-center">
            @if (isset($profile->image[0]))
              <img class="img-248x184" src="{{ asset('storage/'. $profile->image[0]) }}" alt="Illustration 1" />
            @endif
            @if (isset($profile->image[1]))
              <img class="img-248x184" src="{{ asset('storage/'. $profile->image[1]) }}" alt="Illustration 2" />
            @endif
            @if (isset($profile->image[2]))
              <img class="col-span-2 img-501x239" src="{{ asset('storage/'. $profile->image[2]) }}" alt="Illustration 3" />
            @endif
          </div>
        </div>
      </div>
    </section>
    <!-- END OF ABOUT SECTION -->

    <!-- PARTNERSHIP SECTION -->
    <section class="w-full pt-[200px] pb-[120px]">
      <div class="container overflow-hidden rounded-3xl py-5 sm:mx-auto -mx-32 z-10 relative">
        <h3 class="text-xl sm:text-2xl text-primary-whiteCustom text-center w-full font-semibold font-montserrat">
          Supported By :
        </h3>

        <div class="flex flex-wrap justify-center gap-6 py-12 px-9">
          @if($partnerships->isEmpty())
            <p class="text-center text-secondary-whiteCustom font-montserrat text-lg w-full">
              No data available
            </p>
          @else
            @foreach ($partnerships as $partnership)
              <div class="relative flex items-center gap-3 px-4 py-2 shadow-md rounded-2xl hover:animate-zoom-in bg-transparent">
                <div class="absolute inset-0 w-full h-full bg-customBlue rounded-full filter blur-xl opacity-20 -z-10"></div>
                <img class="w-12 h-12 object-contain rounded-xl" src="{{ asset('storage/' . $partnership->image) }}" alt="Partner Logo" />
                <span class="text-lg font-montserrat font-semibold text-primary-whiteCustom">
                  {{ $partnership->name ?? 'Partner' }}
                </span>
              </div>
            @endforeach
          @endif
        </div>
      </div>
    </section>
    <!-- END OF PARTNERSHIP SECTION -->

    <!-- NEWS SECTION -->
    <section id="news-section" class="container relative pt-[200px] pb-[120px]">
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
        <div class="sm:block w-2 h-40 bg-customBlue rounded-full"></div>
        <div class="w-full sm:w-1/2 ps-4">
          <p class="text-sm sm:text-base font-montserrat text-secondary-whiteCustom font-semibold">
            Explore the most recent developments, events, and news in our community. Stay informed about the latest initiatives and opportunities to get involved.
          </p>
        </div>
      </div>

      <div class="relative flex items-center">
        <div class="absolute w-32 h-16 left-0 group"> 
          @if($news->onFirstPage())
            <button disabled class="absolute left-[-25px] bg-whiteCustom border border-3 border-customBlue w-13 h-16 rounded-2xl flex justify-center items-center opacity-50 invisible group-hover:visible transition-all duration-300">
              <img src="/assets/icons/short-arrow-left.png" alt="Previous" class="w-8 h-8" />
            </button>
          @else
            <a href="{{ $news->previousPageUrl() }}#news-section" class="absolute left-[-25px] hover:animate-zoom-in bg-whiteCustom drop-shadowBlue-custom border border-3 border-customBlue hover:bg-customBlue w-13 h-16 rounded-2xl flex justify-center items-center invisible group-hover:visible transition-all duration-300">
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
            @foreach ($news as $article)
              <div class="p-4 rounded-3xl bg-transparent drop-shadow-custom">
                <div class="animate-blob-blue absolute w-120 h-[150px] mt-15 bg-customBlue rounded-full filter blur-md-custom -z-10"></div>
                
                <div class="max-h-[214px] rounded-2xl overflow-hidden">
                  <img
                    src="{{ asset('storage/' . $article->image) }}"
                    alt="{{ $article->title }}"
                    class="w-full h-full object-cover"
                  />
                </div>
                <a 
                  href="{{ route('news.show', $article->slug) }}" 
                  class="block text-lg font-montserrat font-semibold text-primary-whiteCustom mt-2 line-clamp-2 overflow-hidden text-ellipsis whitespace-normal"
                >
                  {{ $article->title }}
                </a>
                <p class="font-montserrat text-xs sm:text-sm font-semibold text-secondary-whiteCustom ps-3 mt-3 mb-2">
                  {{ \Carbon\Carbon::parse($article->created_at)->format('d/m/y') }}
                </p>
              </div>
            @endforeach
          </div>
        @endif

        <div class="absolute right-0 w-48 h-16 group"> 
          @if($news->hasMorePages())
            <a href="{{ $news->nextPageUrl() }}#news-section" class="absolute right-[-25px] bg-whiteCustom hover:animate-zoom-in drop-shadowBlue-custom border border-3 border-customBlue hover:bg-customBlue w-13 h-16 rounded-2xl flex justify-center items-center invisible group-hover:visible transition-all duration-300">
              <img src="/assets/icons/short-arrow-right.png" alt="Next" class="w-8 h-8" />
            </a>
          @else
            <button disabled class="absolute right-[-25px] bg-whiteCustom border border-3 border-customBlue w-13 h-16 rounded-2xl flex justify-center items-center opacity-50 invisible group-hover:visible transition-all duration-300">
              <img src="/assets/icons/short-arrow-right.png" alt="Next" class="w-8 h-8" />
            </button>
          @endif
        </div>
      </div>

      <div class="flex justify-center mt-4">
        {{ $news->links() }}
      </div>
    </section>
    <!-- END OF NEWS SECTION -->

    <!-- DIRECTORS SECTION -->
    <section class="container pt-[200px] pb-[120px]">
      <div class="animate-blob-blue absolute w-[1100px] h-[200px] bg-customBlue rounded-full filter blur-md-custom mt-40 -z-10 left-53 opacity-40"></div>
      <div class="flex justify-between items-center mb-10">
        <div class="w-full sm:w-1/2">
          <h3 class="font-montserrat font-semibold text-primary-whiteCustom text-xl sm:text-2xl">
            The Leaders
          </h3>
          <p class="text-sm sm:text-base font-montserrat text-secondary-whiteCustom font-semibold">
            Powered by purpose, driven by passion.
          </p>
        </div>

        <div>
          <a
            href="{{ route('staff') }}"
            class="group px-6 py-1 font-montserrat bg-buttonTransparent hover:animate-zoom-in border border-3 w-auto hover:border-white hover:text-white text-lg font-semibold border-customBlue text-customBlue rounded-full flex gap-2 items-center"
          >
            <span>See</span>
            <span class="ml-1">All</span>
            <i class="bi bi-arrow-right text-2xl font-bold text-customBlue group-hover:text-white"></i>
          </a>        
        </div>
      </div>

      <div class="flex justify-center gap-20 mt-10 px-[62px] py-9 bg-transparent rounded-3xl drop-shadow-custom">
        @if ($directors->isEmpty())
          <div class="text-center text-secondary-whiteCustom font-montserrat text-lg w-full">
            No data available
          </div>
        @else
          @foreach ($directors as $director)
            <div class="flex flex-col items-center w-40 rounded-3xl">
              <div class="rounded-full overflow-hidden w-[175px] h-[175px] mb-2">
                <img
                  src="{{ asset('storage/' . $director->image) }}"
                  alt="{{ $director->name }}"
                  class="w-full h-full object-cover"
                />
              </div>
              <p class="mb-1 text-sm sm:text-base text-primary-whiteCustom text-justify font-semibold font-montserrat">
                {{ $director->name }}
              </p>
              <p class="text-xs sm:text-sm text-secondary-whiteCustom text-center font-medium font-montserrat">
                {{ $director->short_bio }}
              </p>
            </div>
          @endforeach
        @endif
      </div>
    </section>
    <!-- END OF DIRECTORS SECTION -->

    <!-- ANNOUNCEMENT SECTION -->
    <section id="announcement-section" class="x-announcement w-full">
      <div class="container pt-[200px]">
        <div class="mb-10 flex justify-between items-center">
          <div>
            <h3 class="font-semibold text-xl sm:text-2xl font-montserrat text-primary-whiteCustom">
              Announcements
            </h3>
            <p class="font-montserrat text-sm sm:text-base text-secondary-whiteCustom font-semibold">
              Keep track of the latest developments in our community!
            </p>
          </div>
          <div>
            <a href="{{ route('announcements.index') }}" class="group px-6 py-1 font-montserrat hover:animate-zoom-in text-neutral-0 bg-buttonTransparent border border-3 w-auto text-lg font-semibold hover:border-white hover:text-white border-customBlue text-customBlue rounded-full flex gap-2 items-center">
              View All Announcements
              <i class="bi bi-arrow-right text-2xl font-bold text-customBlue group-hover:text-white"></i>
            </a>
          </div>
        </div>

        @if ($announcements->isEmpty())
          <div class="text-center text-secondary-whiteCustom font-montserrat text-lg w-full">
            No data available
          </div>
        @else
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3">
            @foreach($announcements as $announcement)
              <div class="relative py-[26px] px-6 bg-transparent rounded-3xl drop-shadow-custom">
                <div class="animate-blob-blue absolute w-[400px] h-[60px] bg-customBlue rounded-full filter blur-md-custom -z-10 opacity-70"></div>

                <a href="{{ route('announcements.show', $announcement->slug) }}" class="text-base sm:text-lg font-montserrat font-semibold text-primary-whiteCustom max-h-[5em] line-clamp-2 overflow-hidden whitespace-normal mb-4">
                  {{ $announcement->title }}
                </a>
                <p class="block font-montserrat text-xs sm:text-sm font-semibold text-secondary-whiteCustom overflow-hidden text-ellipsis whitespace-normal">
                  {{ strip_tags(html_entity_decode($announcement->content)) }}
                </p>
                <p class="font-montserrat text-xs font-semibold text-secondary-whiteCustom">
                  {{ \Carbon\Carbon::parse($announcement->created_at)->format('d/m/y') }}
                </p>
              </div>
            @endforeach
          </div>
        @endif

        <div class="flex justify-center gap-5 items-center mt-6">
          @if ($announcements->onFirstPage())
            <button disabled class="bg-buttonTransparent border border-3 hover:bg-buttonTransparent border-customBlue hover:bg-xneutral-400 w-17 h-12 rounded-2xl flex justify-center items-center opacity-30">
              <img src="/assets/icons/blue-short-arrow-left.png" alt="Previous" class="w-8 h-8" />
            </button>
          @else
            <a href="{{ $announcements->previousPageUrl() }}#announcement-section" class="bg-buttonTransparent border hover:animate-zoom-in hover:drop-shadowBlue-custom border-3 hover:bg-buttonTransparent border-customBlue hover:bg-xneutral-400 w-17 h-12 rounded-2xl flex justify-center items-center">
              <img src="/assets/icons/blue-short-arrow-left.png" alt="Previous" class="w-8 h-8" />
            </a>
          @endif

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

        <div class="flex justify-center mt-4">
          {{ $announcements->links() }}
        </div>
      </div>
    </section>  
    <!-- END OF ANNOUNCEMENT SECTION -->

@endsection
