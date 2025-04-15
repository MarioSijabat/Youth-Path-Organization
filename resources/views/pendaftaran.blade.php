@extends('layouts.app')
@section('content')
@vite('resources/css/app.css')

<!-- Sertakan jQuery dan jQuery UI -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<!-- MAIN SECTION -->
<article class="container mt-28">
  <h1 class="text-primary-whiteCustom font-montserrat text-xl sm:text-2xl font-semibold">
    Join Us
  </h1>
  <p class="text-primary-whiteCustom font-montserrat text-sm sm:text-base font-semibold">
    Take the first step towards joining our community by completing the application form. We’ll get in touch with you soon
  </p>

  @if (session('success'))
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Success!',
      text: '{{ session('success') }}',
      timer: 3000,
      showConfirmButton: false
    });
  </script>
  @endif

  @if ($errors->any())
  <div class="bg-red-500 text-white p-4 rounded mb-4">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <form
    action="{{ route('pendaftaran.store') }}"
    method="post"
    enctype="multipart/form-data"
    class="space-y-6 mt-15"
  >
    @csrf
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-12 md:gap-[124px] font-montserrat">
      <div class="space-y-10">
        <div class="flex flex-col gap-3">
          <label for="full_name" class="font-semibold text-sm text-secondary-whiteCustom">
            Full Name
            <span class="text-secondary-error">*</span>
          </label>
          <input
            type="text"
            id="full_name"
            name="full_name"
            value="{{ old('full_name') }}"
            placeholder="Enter Your Full Name"
            required
            class="border text-primary-whiteCustom placeholder:text-whiteCustom hover:drop-shadowBlue-custom border-xneutral-100 py-3 px-6 rounded-2xl"
          />
        </div>

        <div class="flex flex-col gap-3">
          <label for="date_of_birth" class="font-semibold text-sm text-secondary-whiteCustom">
            Date of Birth
            <span class="text-secondary-error">*</span>
          </label>
          <input
            type="date"
            id="date_of_birth"
            name="date_of_birth"
            value="{{ old('date_of_birth') }}"
            required
            class="border text-primary-whiteCustom placeholder:text-whiteCustom hover:drop-shadowBlue-custom border-xneutral-100 py-3 px-6 rounded-2xl"
          />
        </div>

        <div class="flex flex-col gap-3">
          <label for="gender" class="font-semibold text-sm text-secondary-whiteCustom">
            Gender
            <span class="text-secondary-error">*</span>
          </label>
          <div class="flex items-center">
            <select
              id="gender"
              name="gender"
              required
              class="border w-full peer appearance-none text-primary-whiteCustom hover:drop-shadowBlue-custom placeholder:text-whiteCustom border-xneutral-100 py-3 px-6 rounded-2xl"
            >
              <option value="" class="bg-gray-800" {{ old('gender') == '' ? 'selected' : '' }}>Select Gender</option>
              <option value="male" class="bg-gray-800" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
              <option value="female" class="bg-gray-800" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
              <option value="other" class="bg-gray-800" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
            </select>
            <i class="bi bi-chevron-down pointer-events-none -ml-8 peer-focus:rotate-180 transition-all"></i>
          </div>
        </div>

        <div class="flex flex-col gap-3">
          <label for="email" class="font-semibold text-sm text-secondary-whiteCustom">
            Email Address
            <span class="text-secondary-error">*</span>
          </label>
          <input
            type="email"
            id="email"
            name="email"
            value="{{ old('email') }}"
            placeholder="Enter Your Email Address"
            required
            class="border text-primary-whiteCustom hover:drop-shadowBlue-custom placeholder:text-whiteCustom border-xneutral-100 py-3 px-6 rounded-2xl"
          />
        </div>
      </div>

      <div class="space-y-10">
        <div class="flex flex-col gap-3">
          <label for="phone_number" class="font-semibold text-sm text-secondary-whiteCustom">
            Phone Number
            <span class="text-secondary-error">*</span>
          </label>
          <input
            type="tel"
            id="phone_number"
            name="phone_number"
            value="{{ old('phone_number') }}"
            placeholder="Enter Your Phone Number"
            required
            class="border text-primary-whiteCustom hover:drop-shadowBlue-custom placeholder:text-whiteCustom border-xneutral-100 py-3 px-6 rounded-2xl"
          />
        </div>

        <div class="flex flex-col gap-3">
          <label for="country" class="font-semibold text-sm text-secondary-whiteCustom">
            Country
            <span class="text-secondary-error">*</span>
          </label>
          <div class="flex items-center">
            <input 
              type="text" 
              id="country" 
              name="country" 
              value="{{ old('country') }}"
              required 
              class="border w-full py-3 px-6 hover:drop-shadowBlue-custom rounded-2xl text-primary-whiteCustom placeholder:text-whiteCustom border-xneutral-100"
              placeholder="Search for a country..."
            />
          </div>
        </div>

        <div class="flex flex-col gap-3">
          <label for="motivation" class="font-semibold text-sm text-secondary-whiteCustom">
            Why do you want to join this organization?
            <span class="text-secondary-error">*</span>
          </label>
          <textarea
            id="motivation"
            name="motivation"
            placeholder="Enter your motivation"
            required
            class="border text-primary-whiteCustom hover:drop-shadowBlue-custom placeholder:text-whiteCustom border-xneutral-100 py-3 px-6 rounded-2xl min-h-[100px]"
          >{{ old('motivation') }}</textarea>
        </div>

        <div class="flex flex-col gap-3">
          <label for="source" class="font-semibold text-sm text-secondary-whiteCustom">
            How did you hear about this organization?
            <span class="text-secondary-error">*</span>
          </label>
          <div class="flex items-center">
            <select
              id="source"
              name="source"
              required
              class="border w-full peer appearance-none hover:drop-shadowBlue-custom text-primary-whiteCustom placeholder:text-whiteCustom border-xneutral-100 py-3 px-6 rounded-2xl"
            >
              <option value="" class="bg-gray-800" {{ old('source') == '' ? 'selected' : '' }}>Select Source</option>
              <option value="social_media" class="bg-gray-800" {{ old('source') == 'social_media' ? 'selected' : '' }}>Social Media</option>
              <option value="friend" class="bg-gray-800" {{ old('source') == 'friend' ? 'selected' : '' }}>Friend/Family</option>
              <option value="website" class="bg-gray-800" {{ old('source') == 'website' ? 'selected' : '' }}>Website</option>
              <option value="other" class="bg-gray-800" {{ old('source') == 'other' ? 'selected' : '' }}>Other</option>
            </select>
            <i class="bi bi-chevron-down pointer-events-none -ml-8 peer-focus:rotate-180 transition-all"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-12 md:gap-[124px] !mt-[90px]">
      <a
        href="/"
        class="px-3 py-4 text-center font-montserrat hover:animate-zoom-in hover:drop-shadowBlue-custom text-primary-whiteCustom bg-transparent text-lg font-semibold border-primary-200 text-primary-200 rounded-full"
      >
        Back To Homepage
      </a>
      <button
        type="submit"
        class="px-3 py-4 text-center font-montserrat text-neutral-0 hover:animate-zoom-in hover:drop-shadowBlue-custom bg-customBlue text-lg font-semibold text-primary-blackCustom rounded-full"
      >
        Send Request
      </button>
    </div>
  </form>
</article>
<!-- END MAIN SECTION -->

@endsection