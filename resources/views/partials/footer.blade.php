<!-- FOOTER SECTION -->
<footer id="footer" class="w-full mt-48 pt-12 bg-transparent drop-shadow-custom">
  <div class="animate-blob-blue absolute w-full h-[150px] bg-customBlue rounded-full filter blur-md-custom -z-10 left-0 opacity-30"></div>

  <div
    class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 pl-20 gap-12 lg:gap-36 container"
  >
    <div>
      <img
        class="rounded-2xl"
        src="{{$datafooter->image ? Storage::url($datafooter->image) : asset('assets/images/ypo-logo.png')}}"
        alt="Logo PYO"
      />
    </div>
    <div>
      <h4
        class="font-poppins font-semibold text-lg text-primary-whiteCustom mb-4"
      >
        Contact us
      </h4>
      <div class="space-y-6">
        <div class="flex gap-4">
          <i class="bi bi-geo-alt-fill text-primary-whiteCustom"></i>
          <p class="font-poppins text-primary-whiteCustom text-sm">
            {{$datafooter->alamat ?? 'null'}}
          </p>
        </div>
        <div class="flex gap-4">
          <i class="bi bi-envelope text-primary-whiteCustom "></i>
          <p class="font-poppins text-primary-whiteCustom text-sm">
            {{$datafooter->email ?? 'null'}}
          </p>
        </div>
        <div class="flex gap-4">
          <i class="bi bi-whatsapp text-primary-whiteCustom"></i>
          <p class="font-poppins text-primary-whiteCustom text-sm">
            {{$datafooter->wa ?? 'null'}}
          </p>
        </div>
      </div>
    </div>
    <div>
      <h4
        class="font-poppins font-semibold text-lg text-primary-whiteCustom mb-4"
      >
        Our Social Media
      </h4>
      <div class="flex items-center gap-4">
        <a href="{{ $datafooter->link_facebook ?? '#' }}" class="w-8 h-8 grid rounded-full">
          <i class="bi bi-facebook text-2xl text-white hover:animate-zoom-in"></i>
        </a>
        <a href="{{ $datafooter->link_instagram ?? '#' }}" class="w-8 h-8 grid rounded-xl">
          <i class="bi bi-instagram text-2xl text-white hover:animate-zoom-in"></i>
        </a>
        <a href="{{ $datafooter->link_linkedin ?? '#' }}" class="w-8 h-8 grid rounded-full">
          <i class="bi bi-linkedin text-2xl text-white hover:animate-zoom-in"></i>
        </a>
        <a href="{{ $datafooter->link_youtube ?? '#' }}" class="w-8 h-8 grid rounded-full">
          <i class="bi bi-youtube text-2xl text-white hover:animate-zoom-in"></i>
        </a>
      </div>
    </div>
  </div>
  <div class="container">
    <hr class="mt-10 border-2 border-xneutral-300" />
    <p class="text-center py-2 font-poppins text-secondary-whiteCustom">
      Copyright © 2025 | Youth Path Organization | All Rights Reserved
    </p>
  </div>
</footer>
<!-- END OF FOOTER SECTION -->