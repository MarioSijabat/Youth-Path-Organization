@extends('layouts.app')
@section('content')
@vite('resources/css/app.css')

    <!-- MAIN SECTION -->
    <article class="container mt-28">
      <h1
        class="text-primary-whiteCustom font-montserrat text-xl sm:text-2xl font-semibold"
      >
        News
      </h1>
      <p
        class="text-primary-whiteCustom text-sm sm:text-base font-montserrat font-semibold"
      >
      Stay Updated with Our Latest News
      </p>

      <div class="my-15">
        <div class="space-y-1 mb-3">
          <h2
            class="uppercase font-montserrat font-semibold text-primary-whiteCustom text-[22px] sm:text-3xl"
          >
            {{ $berita->title }}
          </h2>
          <div
            class="flex items-center gap-[18px] font-montserrat text-xs text-primary-whiteCustom font-semibold"
          >
            <div class="flex gap-[10px] items-center">
              <img src="/assets/images/profile-picture.png" alt="Admin" />
              <span>by <span class="text-xneutral-400">{{$berita->user->name}}</span></span>
            </div>
            <span>{{\Carbon\Carbon::parse($berita->created_at)->format('d F Y') }}</span>
          </div>
        </div>
        <div
        class="max-h-[430px] rounded-3xl overflow-hidden object-cover w-full mt-4 mb-8"
      >
        <img src="{{asset('storage/' . $berita->image)}}" alt="{{$berita->title}}" alt="Berita" />
      </div>
        <div
          class="font-montserrat font-medium text-sm sm:text-base text-justify sm:col-span-8 text-secondary-whiteCustom prose prose-invert prose-blockquote:italic prose-blockquote:text-xneutral-400 prose-blockquote:my-6"
        >
          {!! $berita->content !!}
        </div>
      </div>

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
            font-size: 1.75em; /* Slightly larger for prominence */
            letter-spacing: 0.05em;
        }
        article h2 {
            font-size: 1.5em;
            margin-bottom: 0.75em;
        }
        article h3 {
            font-size: 1.25em;
        }
        article h4, article h5, article h6 {
            font-size: 1em;
        }

        /* Gaya untuk paragraph */
        article p {
            margin-bottom: 1.5em;
            color: #C5C5C5;
            line-height: 1.8; /* Increased for readability */
        }

        /* Gaya untuk numbering dan bullet list dalam article */
        article ul {
            list-style-type: disc;
            padding-left: 25px;
            margin-bottom: 1.5em;
        }

        article ol {
            list-style-type: decimal;
            padding-left: 25px;
            margin-bottom: 1.5em;
        }

        article li {
            margin-bottom: 0.75em;
            line-height: 1.6;
        }

        /* Blockquote styling */
        article blockquote {
            margin: 1.5em 0;
            padding: 1em 1.5em;
            border-left: 4px solid #C5C5C5;
            background-color: rgba(197, 197, 197, 0.1);
            font-style: italic;
            color: #C5C5C5;
            line-height: 1.7;
        }

        /* Responsive adjustments */
        @media (min-width: 640px) {
            article h1 {
                font-size: 2em;
            }
            article h2 {
                font-size: 1.875em;
            }
        }
    </style>
    </article>
    <!-- END OF MAIN SECTION -->
  @endsection
