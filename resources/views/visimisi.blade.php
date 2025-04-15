@extends('layouts.app')
@section('content')
@vite('resources/css/app.css')

    <!-- MAIN SECTION -->
    <article class="container mt-28">
      <h1
        class="text-primary-whiteCustom font-montserrat text-xl sm:text-2xl font-semibold"
      >
        Our Puspose
      </h1>
      <p
        class="text-primary-whiteCustom text-sm sm:text-base font-montserrat font-semibold"
      >
      Building a Better Tomorrow Together
      </p>

      <div class="relative grid grid-cols-1 sm:grid-cols-2 gap-15 my-15 mb-20">
        <!-- VISI Section -->
        <div class="space-y-3">
          <h3
            class="font-montserrat text-base sm:text-lg font-semibold text-primary-whiteCustom text-center"
          >
            VISION
          </h3>
          <div class="pe-8 text-sm sm:text-base font-semibold font-montserrat text-secondary-whiteCustom uppercase"> 
            {!! $visi ?? '"No Data Available"' !!}
          </div>
        </div>

        <!-- Blue Separator Between VISI and MISI (Positioned Absolutely) -->
        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-1 h-full bg-customBlue rounded-full my-6"></div>
        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-1 h-full bg-customBlue blur-xl rounded-full my-6"></div>

        <!-- MISI Section -->
        <div class="space-y-3">
          <h2
            class="font-montserrat text-base sm:text-lg font-semibold text-primary-whiteCustom text-center"
          >
            MISION
          </h2>
          <ol
            class="pl-8 leading-loose font-montserrat font-semibold text-secondary-whiteCustom text-sm sm:text-base text-justify"
          >
            {!! $misi ?? '"No Data Available"' !!}
          </ol>
        </div>
      </div>

      <div
        class="grid grid-cols-1 sm:grid-cols-3 bg-transparent rounded-3xl overflow-hidden"
      >
        <!-- Background Animasi Blob -->
        <div class="animate-blob-blue absolute w-[1080px] h-[450px] bg-customBlue mt-7 rounded-full filter blur-md-custom -z-10 opacity-40"></div>
        <div class="p-[30px]">
          <h2
            class="text-base sm:text-lg font-semibold text-primary-whiteCustom font-montserrat"
          >
          Inovatif
          </h2>
          <p
            class="font-montserrat font-medium mt-4 text-primary-whiteCustom text-xs sm:text-sm"
          >
          We empower youth with the knowledge, skills, and opportunities to become leaders in sustainability and social change. Education is the foundation for informed action, enabling youth to make a lasting impact.        </div>
        <div>
            @if(isset($visimisiImg[0]))
              <div class="p-[30px] sm:col-span-5 relative overflow-hidden rounded-3xl">
                <img src="{{ asset('storage/'. $visimisiImg[0]) }}" alt="Inovatif" class="w-full object-cover rounded-2xl" />
              </div>
            @else
                <p class="text-secondary-whiteCustom">No Image Available</p>
            @endif
        </div>
        <div class="p-[30px]">
          <h2
            class="text-base sm:text-lg font-semibold text-primary-whiteCustom font-montserrat"
          >
          Collaboration
          </h2>
          <p
            class="font-montserrat font-medium mt-4 text-primary-whiteCustom text-xs sm:text-sm"
          >
          We believe that by working together, we can create solutions that tackle global challenges. Collaboration enables us to bridge differences, foster innovation, and amplify our collective impact.
          </p>
        </div>
        <div>
            @if(isset($visimisiImg[1]))
              <div class="p-[30px] sm:col-span-5 relative overflow-hidden">
                <img src="{{ asset('storage/'. $visimisiImg[1]) }}" alt="Inovatif" class="w-full object-cover rounded-2xl" />
              </div>            
            @else
                <p class="text-secondary-whiteCustom">No Image Available</p>
            @endif
        </div>
        <div class="p-[30px]">
          <h2
            class="text-base sm:text-lg font-semibold text-primary-whiteCustom font-montserrat"
          >
          Action for Change
          </h2>
          <p
            class="font-montserrat font-medium mt-4 text-primary-whiteCustom text-xs sm:text-sm"
          >
          Through impactful projects and events, we enable youth to take action and drive real change. Small actions lead to significant results, creating positive impacts in their communities and beyond.
          </p>
        </div>
        <div>
            @if(isset($visimisiImg[2]))
              <div class="p-[30px] sm:col-span-5 relative overflow-hidden rounded-3xl">
                  <img src="{{ asset('storage/'. $visimisiImg[2]) }}" alt="Inovatif" class="w-full object-cover rounded-2xl" />
              </div>            
            @else
                <p class="text-secondary-whiteCustom">No Image Available</p>
            @endif
        </div>
      </div>
    </article>
@endsection
