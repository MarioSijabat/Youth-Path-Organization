document.addEventListener("DOMContentLoaded", function () {
  const menuToggleButton = document.querySelector(
    'button[aria-controls="mobile-menu"]'
  );

  const mobileMenu = document.getElementById("mobile-menu");

  menuToggleButton.addEventListener("click", function () {
    mobileMenu.classList.toggle("hidden");
    const isExpanded =
      menuToggleButton.getAttribute("aria-expanded") === "true";
    menuToggleButton.setAttribute("aria-expanded", !isExpanded);
    const [menuIcon, closeIcon] = menuToggleButton.querySelectorAll("svg");
    menuIcon.classList.toggle("hidden");
    closeIcon.classList.toggle("hidden");
  });

  const dropdownMenuToggleButtons =
    document.querySelectorAll(".x-dropdown-button");

  dropdownMenuToggleButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const targetMenuId = button.getAttribute("data-target");
      const dropdownMenu = document.getElementById(targetMenuId);
      if (dropdownMenu) {
        dropdownMenu.classList.toggle("hidden");

        const dropdownIcons = button.querySelectorAll("i");
        dropdownIcons.forEach((icon) => {
          icon.classList.toggle("rotate-180");
        });
      }
    });
  });

  const socialMedia = document.getElementById('social-media');
  const footer = document.getElementById('footer');

  if (socialMedia && footer) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            // Footer is in view, hide the social media icons with smooth fade-out
            socialMedia.style.transition = 'opacity 1s ease-out, visibility 0s ease 0.5s'; // Add smooth transition
            socialMedia.style.opacity = '0';
            socialMedia.style.visibility = 'hidden';
          } else {
            // Footer is not in view, show the social media icons again
            socialMedia.style.transition = 'opacity 1s ease-out, visibility 0s ease 0s'; // Reset transition timing
            socialMedia.style.opacity = '1';
            socialMedia.style.visibility = 'visible';
          }
        });
      },
      {
        threshold: 0.1 // Trigger when 10% of the footer is visible
      }
    );

    observer.observe(footer);
  }

  // Memuat daftar negara secara dinamis dari API
  fetch('https://restcountries.com/v3.1/all')
    .then(response => response.json())
    .then(data => {
      // Menyiapkan array untuk autocomplete
      const countries = data.map(country => country.name.common); // Ambil nama negara 
      
      // Inisialisasi jQuery UI Autocomplete
      $("#country").autocomplete({
        source: countries, // Sumber data untuk autocomplete
        minLength: 2,      // Mulai mencocokkan setelah 2 karakter diketik
        autoFocus: true,   // Fitur untuk memfokuskan hasil pertama

        // Customizing the suggestion list using the open event
        open: function(event, ui) {
          // Apply custom Tailwind classes to the suggestion items
          $(this).autocomplete("widget")
            .find(".ui-menu-item")
            .addClass("bg-gray-800 text-white");
        }
      });
    });

    


});
