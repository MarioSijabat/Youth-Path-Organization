@extends('layouts.app')
@section('content')
@vite('resources/css/app.css')

<article class="container mt-28">
    <h1 class="text-primary-whiteCustom font-montserrat text-xl sm:text-2xl font-semibold">
        Announcements
    </h1>
    <p class="text-primary-whiteCustom text-sm sm:text-base font-montserrat font-semibold">
        Stay Updated with Our Announcements
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 pt-8">
        @forelse($announcements as $announcement)
        <div class="py-[26px] px-6 rounded-3xl bg-transparent drop-shadow-custom">
            <div class="animate-blob-blue absolute w-[400px] h-[60px] bg-customBlue rounded-full filter blur-md-custom -z-10 opacity-60"></div>

            <a href="{{ route('pengumuman.show', $announcement->slug) }}"
                class="text-base sm:text-lg font-montserrat font-semibold text-primary-whiteCustom max-h-[5em] line-clamp-2 overflow-hidden whitespace-normal mb-4">
                {{ $announcement->title }}
            </a>
            <p class="font-montserrat text-xs sm:text-sm font-semibold text-secondary-whiteCustom mb-1.5 text-ellipsis whitespace-normal">
                {{ Str::limit(strip_tags(html_entity_decode($announcement->content)), 100, '...') }}
            </p>
            <p class="font-montserrat text-xs font-semibold text-secondary-whiteCustom">
                {{ \Carbon\Carbon::parse($announcement->created_at)->format('d/m/Y') }}
            </p>
        </div>
        @empty
        <div class="py-[26px] px-7">
            <p class="font-montserrat text-base pt-32 font-semibold text-secondary-whiteCustom">
                No data available
            </p>
        </div>
        @endforelse
    </div>
</article>

@endsection
