@extends('layouts.app')

@section('content')
@vite('resources/css/app.css')

<!-- MAIN SECTION -->
<article class="container mt-28">
    <h1 class="text-primary-whiteCustom font-montserrat text-xl sm:text-2xl font-semibold">
        Advisors & Mentors
    </h1>
    <p class="text-primary-whiteCustom font-montserrat text-sm sm:text-base font-semibold">
        The pillars of support, providing invaluable mentorship to our delegates.
    </p>

    @if ($advisors->isEmpty())
        <div class="text-center pt-32 text-secondary-whiteCustom font-montserrat font-medium text-sm sm:text-base">
            No advisors found.
        </div>
    @else
        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach ($advisors as $advisor)
                <div class="flex gap-8 bg-transparent p-5 rounded-3xl items-top">
                <div class="animate-blob-blue absolute w-[500px] h-[150px] bg-customBlue mt-5 rounded-full filter blur-md-custom -z-10 opacity-70"></div>

                    <div class="w-32 h-32 relative overflow-hidden rounded-full bg-transparent flex-shrink-0 hover:animate-zoom-in">
                        <img
                            class="absolute inset-0 w-full h-full object-cover object-center"
                            src="{{ asset('storage/' . $advisor->image) }}"
                            alt="{{ $advisor->name }}"
                            onerror="this.src='{{ asset('storage/default-avatar.jpg') }}'"
                        />
                    </div>
                    <div class="font-montserrat">
                        <h3 class="text-base sm:text-lg font-semibold text-primary-whiteCustom">
                            {{ $advisor->name }}
                        </h3>
                        <table class="table-auto sm:table-fixed font-medium text-xs sm:text-sm text-secondary-whiteCustom mt-5">
                            <tbody>
                                <tr>
                                    <td class="w-4 sm:w-28 align-top font-bold">Role</td>
                                    <td class="w-1 sm:w-6 align-top">:</td>
                                    <td class="max-w-xs sm:max-w-md break-words align-top">{{ $advisor->role }}</td>
                                </tr>
                                <tr>
                                    <td class="w-4 sm:w-28 align-top font-bold">Social Media</td>
                                    <td class="w-1 sm:w-6 align-top">:</td>
                                    <td class="max-w-xs sm:max-w-md break-words align-top">{{ $advisor->social_media }}</td>
                                </tr>
                                <tr>
                                    <td class="w-4 sm:w-28 align-top font-bold">Short Bio</td>
                                    <td class="w-1 sm:w-6 align-top">:</td>
                                    <td class="max-w-sm sm:max-w-md break-words align-top">{{ $advisor->short_bio }}</td>
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
        Operational Staff
    </h1>
    <p class="text-primary-whiteCustom font-montserrat text-sm sm:text-base font-semibold">
        Managing day-to-day tasks and providing exceptional support to the organization.
    </p>
    @if ($staffMembers->isEmpty())
        <div class="text-center pt-32 text-secondary-whiteCustom font-montserrat font-medium text-sm sm:text-base mt-10">
            No staff members found.
        </div>
    @else
        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach ($staffMembers as $staff)
                <div class="flex gap-8 bg-transparent p-5 rounded-3xl items-top">
                <div class="animate-blob-blue absolute w-[500px] h-[100px] bg-customBlue mt-5 rounded-full filter blur-md-custom -z-10 opacity-70"></div>

                    <div class="w-32 h-32 relative overflow-hidden rounded-full bg-gray-200 flex-shrink-0 hover:animate-zoom-in">
                        <img
                            class="absolute inset-0 w-full h-full object-cover object-center"
                            src="{{ asset('storage/' . $staff->image) }}"
                            alt="{{ $staff->name }}"
                            onerror="this.src='{{ asset('storage/default-avatar.jpg') }}'"
                        />
                    </div>
                    <div class="font-montserrat">
                        <h3 class="text-base sm:text-lg font-semibold text-primary-whiteCustom">
                            {{ $staff->name }}
                        </h3>
                        <table class="table-auto sm:table-fixed font-medium text-xs sm:text-sm text-secondary-whiteCustom mt-5">
                            <tbody>
                                <tr class="py-12">
                                    <td class="w-4 sm:w-28 align-top font-bold">Role</td>
                                    <td class="w-1 sm:w-6 align-top">:</td>
                                    <td class="max-w-sm sm:max-w-md break-words align-top">{{ $staff->role }}</td>
                                </tr>
                                <tr class="py-12">
                                    <td class="w-4 sm:w-28 align-top font-bold">Social Media</td>
                                    <td class="w-1 sm:w-6 align-top">:</td>
                                    <td class="max-w-sm sm:max-w-md break-words align-top">{{ $staff->social_media }}</td>
                                </tr>
                                <tr class="py-12">
                                    <td class="w-4 sm:w-28 align-top font-bold">Short Bio</td>
                                    <td class="w-1 sm:w-6 align-top">:</td>
                                    <td class="max-w-sm sm:max-w-md break-words align-top">{{ $staff->short_bio }}</td>
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
