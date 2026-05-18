@extends('layouts.app')

@section('content')
@vite('resources/css/app.css')

<!-- MAIN SECTION -->
<article class="container mt-28">
    <h1 class="text-primary-whiteCustom font-montserrat text-xl sm:text-2xl font-semibold">
        Leadership Team
    </h1>
    <p class="text-primary-whiteCustom font-montserrat text-sm sm:text-base font-semibold">
        the pillars of support, providing invaluable mentorship
    </p>

    @if ($elders->isEmpty())
        <div class="text-center pt-32 text-secondary-whiteCustom font-montserrat font-medium text-sm sm:text-base">
            No Data Available
        </div>
    @else
        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach ($elders as $elder)
                <div class="flex gap-8 bg-transparent p-5 rounded-3xl items-top">
                <!-- Background Animasi Blob -->
                <div class="animate-blob-blue absolute w-[500px] h-[150px] bg-customBlue mt-5 rounded-full filter blur-md-custom -z-10 opacity-70"></div>

                    <!-- Gambar Dosen -->
                    <div class="w-32 h-32 relative overflow-hidden rounded-full bg-transparent flex-shrink-0 hover:animate-zoom-in">
                        <img
                            class="absolute inset-0 w-full h-full object-cover object-center"
                            src="{{ asset('storage/' . $elder->image) }}"
                            alt="{{ $elder->nama }}"
                            onerror="this.src='{{ asset('storage/default-avatar.jpg') }}'"
                        />
                    </div>
                    <!-- Informasi Dosen -->
                    <div class="font-montserrat">
                        <h3 class="text-base sm:text-lg font-semibold text-primary-200">
                            {{ $elder->nama }}
                        </h3>
                        <table class="table-auto sm:table-fixed font-medium text-xs sm:text-sm text-xneutral-300 mt-5">
                            <tbody>
                                <tr>
                                    <td class="w-4 sm:w-28 align-top">Role</td>
                                    <td class="w-1 sm:w-6 align-top">:</td>
                                    <td class="max-w-xs sm:max-w-md break-words align-top">{{ $elder->role }}</td>
                                </tr>
                                <tr>
                                    <td class="w-4 sm:w-28 align-top">Social Media</td>
                                    <td class="w-1 sm:w-6 align-top">:</td>
                                    <td class="max-w-xs sm:max-w-md break-words align-top">{{ $elder->social_media }}</td>
                                </tr>
                                <tr>
                                    <td class="w-4 sm:w-28 align-top">Short Bio</td>
                                    <td class="w-1 sm:w-6 align-top">:</td>
                                    <td class="max-w-sm sm:max-w-md break-words align-top">{{ $elder->short_bio }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</article>

<article class="container mt-52">
    <h1 class="text-primary-whiteCustom font-montserrat text-xl sm:text-2xl font-semibold">
        Suport and Operational Team
    </h1>
    <p class="text-primary-whiteCustom font-montserrat text-sm sm:text-base font-semibold">
        managing day-to-day tasks to providing exceptional support
    </p>
    @if ($teams->isEmpty())
        <div class="text-center pt-32 text-secondary-whiteCustom font-montserrat font-medium text-sm sm:text-base mt-10">
            No Data Available
        </div>
    @else
        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach ($teams as $team)
                <div class="flex gap-8 bg-transparent p-5 rounded-3xl items-top">
                  <!-- Background Animasi Blob -->
                <div class="animate-blob-blue absolute w-[500px] h-[100px] bg-customBlue mt-5 rounded-full filter blur-md-custom -z-10 opacity-80"></div>

                    <!-- Gambar Tendik -->
                    <div class="w-32 h-32 relative overflow-hidden rounded-full bg-gray-200 flex-shrink-0 hover:animate-zoom-in">
                        <img
                            class="absolute inset-0 w-full h-full object-cover object-center"
                            src="{{ asset('storage/' . $team->image) }}"
                            alt="{{ $team->nama }}"
                            onerror="this.src='{{ asset('storage/default-avatar.jpg') }}'"
                        />
                    </div>
                    <!-- Informasi Tendik -->
                    <div class="font-montserrat">
                        <h3 class="text-base sm:text-lg font-semibold text-primary-200">
                            {{ $team->nama }}
                        </h3>
                        <table class="table-auto sm:table-fixed font-medium text-xs sm:text-sm text-xneutral-300 mt-5">
                            <tbody>
                                <tr class="py-12">
                                    <td class="w-4 sm:w-28 align-top">Role</td>
                                    <td class="w-1 sm:w-6 align-top">:</td>
                                    <td class="max-w-sm sm:max-w-md break-words align-top">{{ $team->role }}</td>
                                </tr>
                                <tr class="py-12">
                                    <td class="w-4 sm:w-28 align-top">Social Media</td>
                                    <td class="w-1 sm:w-6 align-top">:</td>
                                    <td class="max-w-sm sm:max-w-md break-words align-top">{{ $team->social_media }}</td>
                                </tr>
                                <tr class="py-12">
                                    <td class="w-4 sm:w-28 align-top">Short Bio</td>
                                    <td class="w-1 sm:w-6 align-top">:</td>
                                    <td class="max-w-sm sm:max-w-md break-words align-top">{{ $team->short_bio }}</td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</article>

<!-- END MAIN SECTION -->
@endsection
