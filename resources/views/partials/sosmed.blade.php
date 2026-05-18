@vite('resources/css/app.css')

<!-- resources/views/partials/sidebar.blade.php -->
<div id="social-media" class="fixed top-0 left-0 h-full z-40 flex flex-col justify-center gap-4 p-1">
  <div class="flex flex-col items-center gap-4">
    <a href="{{ $datafooter->link_facebook ?? '#' }}" class="w-8 h-8 grid place-content-center rounded-full transition-colors">
      <i class="bi bi-facebook text-2xl text-white hover:animate-zoom-in"></i>
    </a>
    <a href="{{ $datafooter->link_instagram ?? '#' }}" class="w-8 h-8 grid place-content-center rounded-xl hover:bg-black transition-colors">
      <i class="bi bi-instagram text-2xl text-white hover:animate-zoom-in"></i>
    </a>
    <a href="{{ $datafooter->link_linkedin ?? '#' }}" class="w-8 h-8 grid place-content-center rounded-full transition-colors">
      <i class="bi bi-linkedin text-2xl text-white hover:animate-zoom-in"></i>
    </a>
    <a href="{{ $datafooter->link_youtube ?? '#' }}" class="w-8 h-8 grid place-content-center rounded-full transition-colors">
      <i class="bi bi-youtube text-2xl text-white hover:animate-zoom-in"></i>
    </a>
  </div>
</div>
