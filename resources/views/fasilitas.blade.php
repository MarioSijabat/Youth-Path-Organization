
@extends('layouts.app')
@section('content')
@vite('resources/css/app.css')

    <!-- MAIN SECTION -->
    <article class="container mt-28">
      <h1
        class="text-primary-whiteCustom font-montserrat text-xl sm:text-2xl font-semibold"
      >
        Facilities
      </h1>
      <p
        class="text-primary-whiteCustom font-montserrat text-sm sm:text-base font-semibold"
      >
      From workshops to mentorship, discover how we support our community.
      </p>


        @if ($facilities->isEmpty())
            <div class="text-center pt-32 text-secondary-whiteCustom font-montserrat font-medium text-sm sm:text-base">
                No Data Available
            </div>
        @else
            @foreach ($facilities as $facility)
                <div class="grid grid-cols-1 sm:grid-cols-12 gap-15 my-15 mb-25">
                    <img
                    src="{{ asset('storage/' . $facility->image) }}"
                    alt="Laboratorium Sistem dan Teknologi Informasi"
                    class="w-full h-fit object-cover rounded-[30px] sm:col-span-5 drop-shadowBlue-custom-sm hover:animate-zoom-in"
                    />
                    <div class="sm:col-span-7">
                        {!! $facility->content !!}
                    </div>
                </div>
            @endforeach
        @endif

        <style>
            /* Gaya untuk heading dalam article */
            article h1, article h2, article h3, article h4, article h5, article h6 {
                color: #C5C5C5;
                font-family: 'Montserrat', sans-serif;
                font-weight: bold;
                line-height: 2;
            }
    
            /* Atur ukuran font spesifik untuk masing-masing level heading dalam article */
            article h1 {
                font-size: 1.5em; /* Ukuran font terbesar */
            }
            article h2 {
                font-size: 1.2em;
            }
            article h3 {
                font-size: 1em;
            }
            article h4 {
                font-size: 1em;
            }
            article h5 {
                font-size: 1em;
            }
            article h6 {
                font-size: 1em;
            }
    
            /* Gaya untuk numbering dan bullet list dalam article */
            article ul {
                list-style-type: disc; /* Menggunakan bullet */
                padding-left: 20px;
                margin-bottom: 1em;
            }
    
            article ol {
                list-style-type: decimal; /* Menggunakan numbering */
                padding-left: 20px;
                margin-bottom: 1em;
            }
    
            article li {
                margin-bottom: 0.5em;
            }
    
            article p {
                margin-bottom: 1em;
                color: #C5C5C5;
            }
    
        </style>
    </article>
@endsection
