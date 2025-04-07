@extends('layouts.app')
@section('content')
@vite('resources/css/app.css')

<article class="container mt-28">
    <h1 class="text-primary-whiteCustom font-montserrat text-xl sm:text-2xl font-semibold">
        Gallery
    </h1>
    <p class="text-primary-whiteCustom font-montserrat text-sm sm:text-base font-semibold">
      Browse Through the Transformative Actions of Our Community
    </p>

    @if ($galeries->isEmpty())
        <div class="text-center text-secondary-whiteCustom pt-32 font-montserrat font-medium text-sm sm:text-base">
            No Data Available
        </div>
    @else
        <div class="my-15">
            @foreach ($galeries as $gallery)
                <!-- Title for each gallery -->
                <div class="mb-24">
                    <h2 class="text-center pb-6 font-montserrat text-xl sm:text-2xl font-semibold text-primary-whiteCustom">
                        {{ $gallery->title }}
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 ">
                        <!-- Loop through the images of the gallery -->
                        @foreach ($gallery->image as $image)
                            <div class="w-full h-[200px] relative overflow-hidden rounded-2xl hover:animate-zoom-in hover:drop-shadowBlue-custom">
                                <img
                                    src="{{ asset('storage/' . $image) }}"
                                    alt="{{ $gallery->title }}"
                                    class="w-full h-full object-cover rounded-3xl"
                                />
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</article>

@endsection