@extends('layouts.app')
@section('content')
@vite('resources/css/app.css')

    <!-- MAIN SECTION -->
    <article class="container mt-28">
      <h1
        class="text-primary-whiteCustom font-montserrat text-xl sm:text-2xl font-semibold"
      >
        Our Journey
      </h1>
      <p
        class="text-primary-whiteCustom font-montserrat text-sm sm:text-base font-semibold"
      >
      From Humble Beginnings to Where We Are Today
      </p>

        @if ($historys->isEmpty())
            <div class="text-center text-secondary-whiteCustom pt-32 font-montserrat font-medium text-sm sm:text-base">
                No Data Available
            </div>
        @else
        <div class="grid grid-cols-1 sm:grid-cols-12 gap-8 my-15">
            @foreach ($historys as $history)
            <div class="w-full h-[600px] sm:col-span-5 relative overflow-hidden rounded-3xl drop-shadowBlue-custom-sm hover:animate-zoom-in">
                <img
                src="{{ asset('storage/' . $history->image) }}"
                alt="Sejarah B-University"
                class="inset-0 w-full h-full object-cover rounded-3xl"
                />
            </div>
            <div
            class="font-montserrat font-medium text-sm sm:text-base text-justify sm:col-span-7 text-secondary-whiteCustom"
            >
                {!! $history->content !!}
            </div>
            @endforeach
        </div>
        @endif
    </article>

@endsection
