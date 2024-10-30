if (document.querySelectorAll(".our-clients-slider")) {
  const clientSlider = new Swiper(".our-clients-slider", {
    speed: 400,
    spaceBetween: 15,
    slidesPerView: 1,
    loop: true,
    navigation: {
      nextEl: ".our-clients-prev",
      prevEl: ".our-clients-next",
    },
    autoplay: {
      delay: 2000,
    },
    breakpoints: {
      800: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 4,
      },
    },
  });
}

if (document.querySelector(".newsletter-email input")) {
  const newsLetterForm = document.querySelector(".input-field");
  newsLetterForm.onsubmit = async function (e) {
    e.preventDefault();
    const form_data = new FormData(this);
    const req = await fetch(ajaxData.ajax_url, {
      method: "POST",
      body: form_data,
    });
    const res = await req.json();
    if (res) {
      Swal.fire({
        title: newsLetterForm.getAttribute("data-succ"),
        icon: "success",
        confirmButtonText: newsLetterForm.getAttribute("data-ok"),
      });
    } else {
      Swal.fire({
        title: newsLetterForm.getAttribute("data-failed"),
        icon: "error",
        confirmButtonText: newsLetterForm.getAttribute("data-ok"),
      });
    }
    document.querySelector(".newsletter-email input[type=email]").value = "";
  };
}

if (document.getElementById("admin-settings")) {
  const adminBtn = document.getElementById("admin-settings");
  document.body.onkeydown = (e) => {
    if (e.ctrlKey) {
      adminBtn.classList.toggle("d-none");
    }
  };
}
