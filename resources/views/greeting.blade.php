@extends('layouts.app')
@section('content')
@vite('resources/css/app.css')

    <!-- MAIN SECTION -->
    <article class="container mt-28">
      <h1
        class="text-primary-whiteCustom font-montserrat text-xl sm:text-2xl font-semibold"
      >
      Message from the Leaders
      </h1>
      <p
        class="text-primary-whiteCustom text-sm sm:text-base font-montserrat font-semibold"
      >
      Words from our leaders on shaping the future together.
      </p>
        @if ($greetings->isEmpty())
            <div class="text-center pt-32 text-secondary-whiteCustom font-montserrat font-medium text-sm sm:text-base">
                No Data Available
            </div>
        @else

        @foreach ($greetings as $greeting)
            <div class="grid grid-cols-1 sm:grid-cols-12 gap-8 my-15">
                <img
                src="{{ asset('storage/' . $greeting->image) }}"
                alt="Rektor B-University"
                class="w-full h-fit object-cover rounded-[30px] sm:col-span-4 hover:animate-zoom-in drop-shadowBlue-custom-sm"
                />
                <div
                class="font-montserrat font-medium text-sm sm:text-base text-justify sm:col-span-8 text-primary-whiteCustom"
                >
                    {!! $greeting->content !!}
                </div>
            </div>
        @endforeach

        @endif

    </article>

@endsection
