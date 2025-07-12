<!-- footer -->
@php
    use App\Helper;
@endphp
 <div class="pt-80">
  <footer class="px-12px">
    <div class="container">
      <div class="d-flex mb-3 flex-column flex-lg-row gap-4">
        <div class="d-flex gap-3 gap-sm-5 flex-row flex-lg-column footer-col-1">
          <div class="footer-logo">
            <a  href="{{ route('home') }}"
              class="fs-40 fw-bold text-white text-decoration-none mb-3 mb-lg-4 d-block d-block">Bimla Stones</a>
            <p class="fs-20 text-gray fw-normal mb-3 mb-lg-4">Trusted suppliers of premium black granite and custom
              stone solutions.</p>
            <a href="https://maps.app.goo.gl/cNVomenpET45vFEu6" class="btn btn-primary-bg border-0 text-white w-100 fs-16 get-location">Get Location</a>
          </div>
          <div class="footer-details-width">
            <div class="d-flex gap-3 align-items-center social-icon mb-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="Currentcolor">
                <path
                  d="M19.4561 15.178L16.6651 12.3869C15.6683 11.3901 13.9737 11.7889 13.575 13.0847C13.2759 13.9819 12.2791 14.4803 11.382 14.2809C9.38839 13.7825 6.69701 11.1908 6.1986 9.09746C5.89956 8.2003 6.49765 7.20349 7.39477 6.90448C8.69062 6.50576 9.08934 4.81119 8.09254 3.81438L5.30148 1.02332C4.50403 0.325559 3.30786 0.325559 2.6101 1.02332L0.716166 2.91726C-1.17777 4.91087 0.915528 10.1939 5.60052 14.8789C10.2855 19.5639 15.5686 21.7569 17.5622 19.7633L19.4561 17.8694C20.1539 17.0719 20.1539 15.8757 19.4561 15.178Z"
                  fill="Currentcolor" />
              </svg>
              <a href="tel:+91 9972651397" class="text-decoration-none fs-20 fw-normal break-all">+91 9972651397</a>
            </div>
            <div class="d-flex gap-3 align-items-center social-icon mb-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="Currentcolor">
                <path
                  d="M11.6714 12.7536C11.1739 13.0853 10.5959 13.2606 10 13.2606C9.40414 13.2606 8.82617 13.0853 8.32859 12.7536L0.133164 7.28977C0.0876953 7.25945 0.0433984 7.22785 0 7.19535V16.1484C0 17.1748 0.833008 17.9895 1.84113 17.9895H18.1588C19.1853 17.9895 20 17.1565 20 16.1484V7.19531C19.9565 7.22789 19.9121 7.25957 19.8665 7.28992L11.6714 12.7536Z"
                  fill="Currentcolor" />
                <path
                  d="M0.783203 6.31414L8.97863 11.778C9.28887 11.9848 9.64441 12.0882 9.99996 12.0882C10.3555 12.0882 10.7111 11.9848 11.0214 11.778L19.2168 6.31414C19.7072 5.98738 20 5.44051 20 4.85027C20 3.83539 19.1743 3.00977 18.1595 3.00977H1.84051C0.825664 3.0098 0 3.83543 0 4.85125C0 5.44051 0.292812 5.98738 0.783203 6.31414Z"
                  fill="Currentcolor" />
              </svg>
              <a href="mailto:info@bimlastone.com"
                class="text-decoration-none fs-20 fw-normal break-all">info@bimlastone.com</a>
            </div>
            <div class="d-flex gap-3 align-items-start social-icon mb-0">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="Currentcolor">
                <g clip-path="url(#clip0_482_41)">
                  <path
                    d="M10 0.5C5.865 0.5 2.5 3.88833 2.5 8.05417C2.5 13.9733 9.295 20.085 9.58417 20.3417C9.70333 20.4475 9.85167 20.5 10 20.5C10.1483 20.5 10.2967 20.4475 10.4158 20.3425C10.705 20.085 17.5 13.9733 17.5 8.05417C17.5 3.88833 14.135 0.5 10 0.5ZM10 12.1667C7.7025 12.1667 5.83333 10.2975 5.83333 8C5.83333 5.7025 7.7025 3.83333 10 3.83333C12.2975 3.83333 14.1667 5.7025 14.1667 8C14.1667 10.2975 12.2975 12.1667 10 12.1667Z"
                    fill="Currentcolor" />
                </g>
                <defs>
                  <clipPath id="clip0_482_41">
                    <rect width="20" height="20" fill="white" transform="translate(0 0.5)" />
                  </clipPath>
                </defs>
              </svg>
              <a href="https://maps.app.goo.gl/cNVomenpET45vFEu6" class="text-decoration-none fs-20 fw-normal">"Chamarajanagar" check the spelling, and Chamarajanagar itself is a district then why mysore is included. And same in bottom most section also</a>
            </div>
          </div>
        </div>
        <div class="footer-col-2 w-100 mx-auto">
          <h2 class="fs-20 fw-bold text-white mb-3 text-center text-lg-start">Quick Links</h2>
          <div class="d-flex w-100 justify-content-lg-between flex-wrap justify-content-center footer-link-mobile">
            <div
              class="d-flex d-lg-block align-items-center justify-content-center gap-3 gap-sm-4 flex-wrap row-gap-3">
              <a href="{{ route('home') }}"
              class="footer-link fs-20 mb-0 mb-lg-3 fw-normal text-decoration-none d-block text-nowrap">Home</a>
            <a href="{{ route('about_us') }}"
              class="footer-link fs-20 mb-0 mb-lg-3 fw-normal text-decoration-none d-block text-nowrap">About Us</a>
            <a href="{{ route('manufacture_process') }}"
              class="footer-link fs-20 mb-0 mb-lg-3 fw-normal text-decoration-none d-block text-nowrap">Our Process</a>
            <a href="{{ route('products') }}"
              class="footer-link fs-20 mb-0 mb-lg-3 fw-normal text-decoration-none d-block text-nowrap">Products</a>
            <a href="{{ route('gallery') }}"
              class="footer-link fs-20 mb-0 mb-lg-3 fw-normal text-decoration-none d-block text-nowrap">Gallery</a>
            <a href="{{ route('blog') }}"
              class="footer-link fs-20 mb-0 mb-lg-3 fw-normal text-decoration-none d-block d-lg-none text-nowrap">Blog</a>
            <a href="{{ route('contact_us') }}"
              class="footer-link fs-20 mb-0 mb-lg-3 fw-normal text-decoration-none d-block d-lg-none text-nowrap">Contact
              US</a>
              <a href="{{ route('career') }}"
                class="footer-link fs-20 mb-0 mb-lg-3 fw-normal text-decoration-none d-block d-lg-none text-nowrap">Career</a>
            </div>
            <div class="d-none d-lg-block align-items-center gap-3 gap-sm-4">
              <a href="{{ route('blog') }}"
                class="footer-link fs-20 mb-3 fw-normal text-decoration-none d-block text-nowrap">Blog</a>
              <a href="{{ route('contact_us') }}"
                class="footer-link fs-20 mb-3 fw-normal text-decoration-none d-block text-nowrap">Contact US</a>
              <a href="{{ route('career_page') }}"
                class="footer-link fs-20 mb-3 fw-normal text-decoration-none d-block text-nowrap">Career</a>
            </div>
          </div>
        </div>
      </div>
      <p class="fs-20 text-gray-600 fw-normal mb-0">We proudly operate a <span class="fw-bold">solar-powered, water-recycling factory setup.</span></p>
      <p class="fs-20 text-gray-600 fw-normal mb-40">Sustainability and quality go hand in hand here.  </p>

      <div class="copyright-container">
        <div class="d-flex w-100 justify-content-between align-items-center gap-3">
          <div>
            <p class="fs-18 text-gray fw-normal mb-2">© 2025 Bimla Stone LLP. All Rights Reserved.</p>
            <p class="fs-18 text-gray fw-normal mb-0"> Website created with care to reflect the stone we stand behind.
            </p>
          </div>
          <div>
            <div class="social-icons-button d-flex align-items-center">
              <a href="https://www.linkedin.com/in/bimla-stone-llp-683a24372/">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path
                    d="M20.7273 0H3.27273C2.40475 0 1.57232 0.344804 0.95856 0.95856C0.344804 1.57232 0 2.40475 0 3.27273L0 20.7273C0 21.5953 0.344804 22.4277 0.95856 23.0414C1.57232 23.6552 2.40475 24 3.27273 24H20.7273C21.5953 24 22.4277 23.6552 23.0414 23.0414C23.6552 22.4277 24 21.5953 24 20.7273V3.27273C24 2.40475 23.6552 1.57232 23.0414 0.95856C22.4277 0.344804 21.5953 0 20.7273 0ZM8.18182 18.9927C8.182 19.0593 8.16904 19.1252 8.1437 19.1867C8.11836 19.2483 8.08112 19.3042 8.03412 19.3513C7.98713 19.3985 7.9313 19.4359 7.86983 19.4614C7.80836 19.4869 7.74246 19.5 7.67591 19.5H5.52C5.45333 19.5002 5.38729 19.4872 5.32566 19.4618C5.26404 19.4363 5.20804 19.399 5.1609 19.3518C5.11376 19.3047 5.0764 19.2487 5.05097 19.1871C5.02555 19.1254 5.01255 19.0594 5.01273 18.9927V9.95455C5.01273 9.82001 5.06617 9.69098 5.1613 9.59585C5.25644 9.50072 5.38546 9.44727 5.52 9.44727H7.67591C7.81021 9.44763 7.93889 9.50124 8.03372 9.59633C8.12856 9.69142 8.18182 9.82024 8.18182 9.95455V18.9927ZM6.59727 8.59091C6.19272 8.59091 5.79725 8.47095 5.46088 8.24619C5.12451 8.02143 4.86234 7.70197 4.70752 7.32822C4.5527 6.95446 4.5122 6.54319 4.59112 6.14641C4.67005 5.74963 4.86486 5.38516 5.15092 5.0991C5.43698 4.81304 5.80145 4.61823 6.19822 4.5393C6.595 4.46038 7.00628 4.50089 7.38003 4.6557C7.75379 4.81052 8.07325 5.07269 8.29801 5.40906C8.52276 5.74543 8.64273 6.1409 8.64273 6.54545C8.64273 7.08794 8.42723 7.60821 8.04363 7.99181C7.66003 8.37541 7.13976 8.59091 6.59727 8.59091ZM19.4509 19.0282C19.4511 19.0895 19.4391 19.1502 19.4158 19.2069C19.3924 19.2635 19.3581 19.315 19.3147 19.3584C19.2714 19.4017 19.2199 19.436 19.1632 19.4594C19.1066 19.4828 19.0458 19.4947 18.9845 19.4945H16.6664C16.6051 19.4947 16.5443 19.4828 16.4877 19.4594C16.431 19.436 16.3795 19.4017 16.3362 19.3584C16.2929 19.315 16.2585 19.2635 16.2351 19.2069C16.2118 19.1502 16.1998 19.0895 16.2 19.0282V14.7941C16.2 14.1614 16.3855 12.0232 14.5459 12.0232C13.1209 12.0232 12.8305 13.4864 12.7732 14.1436V19.0336C12.7732 19.1562 12.725 19.2738 12.639 19.361C12.553 19.4483 12.4361 19.4982 12.3136 19.5H10.0745C10.0134 19.5 9.95279 19.4879 9.89628 19.4645C9.83978 19.441 9.78846 19.4066 9.74526 19.3633C9.70206 19.32 9.66784 19.2686 9.64455 19.212C9.62126 19.1554 9.60937 19.0948 9.60955 19.0336V9.915C9.60937 9.85382 9.62126 9.79321 9.64455 9.73663C9.66784 9.68006 9.70206 9.62864 9.74526 9.58531C9.78846 9.54199 9.83978 9.50762 9.89628 9.48416C9.95279 9.46071 10.0134 9.44864 10.0745 9.44864H12.3136C12.4373 9.44864 12.5559 9.49777 12.6434 9.58523C12.7309 9.67269 12.78 9.79131 12.78 9.915V10.7032C13.3091 9.90818 14.0932 9.29727 15.7664 9.29727C19.4727 9.29727 19.4482 12.7582 19.4482 14.6591L19.4509 19.0282Z"
                    fill="CurrentColor" />
                </svg>
              </a>
              <a href="">
                <svg xmlns="9972651397" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path
                    d="M12.003 0H11.997C5.3805 0 0 5.382 0 12C0 14.625 0.846 17.058 2.2845 19.0335L0.789 23.4915L5.4015 22.017C7.299 23.274 9.5625 24 12.003 24C18.6195 24 24 18.6165 24 12C24 5.3835 18.6195 0 12.003 0ZM18.9855 16.9455C18.696 17.763 17.547 18.441 16.6305 18.639C16.0035 18.7725 15.1845 18.879 12.4275 17.736C8.901 16.275 6.63 12.6915 6.453 12.459C6.2835 12.2265 5.028 10.5615 5.028 8.8395C5.028 7.1175 5.9025 6.279 6.255 5.919C6.5445 5.6235 7.023 5.4885 7.482 5.4885C7.6305 5.4885 7.764 5.496 7.884 5.502C8.2365 5.517 8.4135 5.538 8.646 6.0945C8.9355 6.792 9.6405 8.514 9.7245 8.691C9.81 8.868 9.8955 9.108 9.7755 9.3405C9.663 9.5805 9.564 9.687 9.387 9.891C9.21 10.095 9.042 10.251 8.865 10.47C8.703 10.6605 8.52 10.8645 8.724 11.217C8.928 11.562 9.633 12.7125 10.671 13.6365C12.0105 14.829 13.0965 15.21 13.485 15.372C13.7745 15.492 14.1195 15.4635 14.331 15.2385C14.5995 14.949 14.931 14.469 15.2685 13.9965C15.5085 13.6575 15.8115 13.6155 16.1295 13.7355C16.4535 13.848 18.168 14.6955 18.5205 14.871C18.873 15.048 19.1055 15.132 19.191 15.2805C19.275 15.429 19.275 16.1265 18.9855 16.9455Z"
                    fill="CurrentColor" />
                </svg>
              </a>
              <a href="https://www.instagram.com/bimla_stone/">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <g clip-path="url(#clip0_482_70)">
                    <path
                      d="M17.9996 0H5.99985C2.70023 0 0 2.70023 0 5.99985V18.0001C0 21.2989 2.70023 24 5.99985 24H17.9996C21.2992 24 23.9994 21.2989 23.9994 18.0001V5.99985C23.9994 2.70023 21.2992 0 17.9996 0ZM21.9994 18.0001C21.9994 20.2051 20.2057 22 17.9996 22H5.99985C3.79461 22 2.00005 20.2051 2.00005 18.0001V5.99985C2.00005 3.79432 3.79461 2.00005 5.99985 2.00005H17.9996C20.2057 2.00005 21.9994 3.79432 21.9994 5.99985V18.0001Z"
                      fill="CurrentColor" />
                    <path
                      d="M18.5 6.99993C19.3284 6.99993 19.9999 6.32837 19.9999 5.49996C19.9999 4.67156 19.3284 4 18.5 4C17.6716 4 17 4.67156 17 5.49996C17 6.32837 17.6716 6.99993 18.5 6.99993Z"
                      fill="CurrentColor" />
                    <path
                      d="M12 6C8.68564 6 6.00012 8.68581 6.00012 11.9999C6.00012 15.3127 8.68564 18.0003 12 18.0003C15.3134 18.0003 17.9998 15.3127 17.9998 11.9999C17.9998 8.68581 15.3134 6 12 6ZM12 16.0002C9.7911 16.0002 8.00017 14.2093 8.00017 11.9999C8.00017 9.7904 9.7911 8.00005 12 8.00005C14.2088 8.00005 15.9998 9.7904 15.9998 11.9999C15.9998 14.2093 14.2088 16.0002 12 16.0002Z"
                      fill="CurrentColor" />
                  </g>
                  <defs>
                    <clipPath id="clip0_482_70">
                      <rect width="24" height="24" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
  <!-- script -->
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/slick.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/index.js') }}"></script>
  <script>
    // home page slider
    $(".clients-slider").slick({
      arrows: false,
      infinite: true,
      dots: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      responsive: [{
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 400,
        settings: {
          slidesToShow: 1,
        },
      },],
    });
    $(".video-slider").slick({
      arrows: false,
      infinite: true,
      dots: false,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      responsive: [{
        breakpoint: 575,
        settings: {
          dots: true,
        },
      },],
    });
    $(".work-with-slider").slick({
      arrows: false,
      infinite: true,
      dots: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
    });

    // product slider
    $(".offer-product-slider").slick({
        arrows: false,
        infinite: true,
        dots: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                    dots: true,
                },
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                    dots: true,
                },
            },],
    });
    $(".categories-slider-2").slick({
        arrows: true,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        infinite: true,
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
    });

    // about us slider
    $(".production-slider").slick({
      arrows: false,
      infinite: true,
      dots: false,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
            dots: true,
          },
        },
        {
          breakpoint: 575,
          settings: {
            slidesToShow: 1,
            dots: true,
            centerMode: true,

          },
        },],
    });
    $(".leadership-slider").slick({
      arrows: false,
      infinite: true,
      dots: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      responsive: [{
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 400,
        settings: {
          slidesToShow: 1,
        },
      },],
    });

    // blog slider
    // document.querySelectorAll('.video-container').forEach(container => {
    //   const video = container.querySelector('.my-video');
    //   const videoImg = container.querySelector('.video-thumbnail');
    //   const playBtn = container.querySelector('.play-button');
    //   const playIcon = playBtn.querySelector('i');
    //   let started = false;

    //   playBtn.addEventListener('click', () => {
    //     if (!started) {
    //       videoImg.style.display = 'none';
    //       video.style.display = 'block';
    //       video.play();
    //       container.classList.add('video-started');
    //       started = true;
    //       playIcon.classList.remove('fa-play');
    //       playIcon.classList.add('fa-pause');
    //     } else {
    //       if (video.paused) {
    //         video.play();
    //         playIcon.classList.remove('fa-play');
    //         playIcon.classList.add('fa-pause');
    //       } else {
    //         video.pause();
    //         playIcon.classList.remove('fa-pause');
    //         playIcon.classList.add('fa-play');
    //       }
    //     }
    //   });
    // });

    // career slider
    $(".job-slider").slick({
      arrows: false,
      infinite: true,
      dots: false,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      responsive: [{
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          dots: true,
        },
      },
      {
        breakpoint: 400,
        settings: {
          slidesToShow: 1,
          dots: true,
        },
      },],
    });

    // contact us slider
    $(".founders-slider").slick({
      arrows: false,
      infinite: true,
      dots: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      responsive: [{
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 400,
        settings: {
          slidesToShow: 1,
        },
      },],
    });

    // product page slider
    $(".categories-slider").slick({
      arrows: true,
      prevArrow: $('.prev'),
      nextArrow: $('.next'),
      infinite: true,
      dots: false,
      slidesToShow: 1,
      slidesToScroll: 1,
    });
    $(".process-video-slider").slick({
      arrows: false,
      infinite: true,
      dots: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay:true,
    });
  </script>

  <script>
document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById('quickContactForm');
  const alertBox = document.getElementById('quickContactAlert');

  form.addEventListener('submit', function (e) {
    e.preventDefault();

    const formData = new FormData(form);

    fetch("{{ route('contact.store') }}", {
      method: "POST",
      headers: {
        "X-CSRF-TOKEN": "{{ csrf_token() }}",
      },
      body: formData
    })
    .then(response => {
      if (!response.ok) throw response;
      return response.json();
    })
    .then(data => {
      alertBox.classList.remove('d-none', 'alert-danger');
      alertBox.classList.add('alert', 'alert-success');
      alertBox.innerText = data.message;
      form.reset();
    })
    .catch(async (error) => {
      let message = 'An error occurred.';
      if (error.json) {
        const err = await error.json();
        if (err.message) message = err.message;
      }
      alertBox.classList.remove('d-none', 'alert-success');
      alertBox.classList.add('alert', 'alert-danger');
      alertBox.innerText = message;
    });
  });
});
</script>


<!-- Ajax Script -->
<script>
$(document).ready(function () {
  $('#getInTouchForm').on('submit', function (e) {
    e.preventDefault();

    const form = this;
    const formData = new FormData(form);

    $.ajax({
      url: "{{ route('get_in_touch.store') }}",
      method: "POST",
      data: formData,
      processData: false,
      contentType: false,
      beforeSend: function () {
        $('#getInTouchAlert').html('');
      },
      success: function (response) {
        $('#getInTouchAlert').html(`
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            ${response.message}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
        `);
        form.reset();
      },
      error: function (xhr) {
        let errors = xhr.responseJSON?.errors;
        let messages = '';
        if (errors) {
          messages = Object.values(errors).map(e => `<li>${e}</li>`).join('');
        } else {
          messages = '<li>Something went wrong. Please try again.</li>';
        }

        $('#getInTouchAlert').html(`
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="mb-0">${messages}</ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
        `);
      }
    });
  });
});
</script>
