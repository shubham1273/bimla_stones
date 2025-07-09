@extends('layouts.website')
@section('title', 'Bimla Stones - Products')
@section('content')
<section class="stands-section pt-80">
    <div class="px-12px">
      <div class="container">
        <div class="w-100 mx-auto mb-60">
          <h3 class="fs-40 fw-bold text-center text-white mb-0">{{$section2->title}}</h3>
        </div>
        <div class="row stands-row overflow-hidden mx-0">
          <div class="col-lg-5 bg-black ps-0 pe-0">
            <div class="choose-img w-100 h-100">
              <img src="{{ asset('uploads/career/' . $section2->media) }}" alt="images" class="w-100 h-100 object-fit-cover" />
            </div>
          </div>
          <div class="col-lg-7 bg-black">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="py-4 pe-3 text-white">
                {!! $section2->description !!}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-80 job-opening-section">
    <div class="px-12px">
      <div class="container">
        <h3 class="text-center mb-60 text-white fs-40">Open Positions / Job Listings</h3>
        <div class="job-slider">
          @foreach($jobs as $job)
            <div>
              <div class="jobs-card">
                <div class="text-center">
                  <div class="mb-3 mb-lg-4 text-white">
                    <h3 class="fs-24 fw-bold text-white mb-2">{{$job->title}}</h3>
                    {!! $job->description !!}
                  </div>
                  <a href="#"
                    class="btn btn-primary-bg border-0 text-white w-100 fs-16 d-block text-decoration-none">Apply Now</a>
                </div>
              </div>
            </div>
          @endforeach
          
        </div>
      </div>
    </div>
  </section>
  <div class="pt-80">
    <div class="px-12px">
      <div class="container">
        <div class="job-application-section">
          <h3 class="text-center text-white fw-bold fs-40 mb-60">Job Application Form</h3>
          <form>
            <div class="row">
              <div class="col-lg-6">
                <input type="text" class="form-control mb-3 fs-16" placeholder="Full Name *" required />
              </div>
              <div class="col-lg-6">
                <input type="text" class="form-control mb-3 fs-16" placeholder="Phone Number* (with country code)"
                  required />
              </div>
              <div class="col-lg-6">
                <input type="text" class="form-control mb-3 fs-16" placeholder="Email ID" required />
              </div>
              <div class="col-lg-6">
                <div class="dropdown mb-3">
                  <button
                    class="form-control dropdown-toggle d-flex justify-content-between align-items-center fs-16 fw-normal"
                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Position Applying For
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="getQuote_9" />
                      <label class="form-check-label fs-16 fw-normal text-gray-600" for="getQuote_9">
                        Export Manager
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="getQuote_10" />
                      <label class="form-check-label fs-16 fw-normal text-gray-600" for="getQuote_10">
                        Export Manager
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="getQuote_11" />
                      <label class="form-check-label fs-16 fw-normal text-gray-600" for="getQuote_11">
                        Export Manager
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="getQuote_12" />
                      <label class="form-check-label fs-16 fw-normal text-gray-600" for="getQuote_12">
                        Export Manager
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="getQuote_13" />
                      <label class="form-check-label fs-16 fw-normal text-gray-600" for="getQuote_13">
                        Export Manager
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <textarea class="form-control mb-3 fs-16" placeholder="Cover Letter / Message" rows="4"></textarea>
            <div class="file-upload-box d-flex justify-content-center flex-column gap-3"
              onclick="document.getElementById('myFile').click();">
              <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                  <g clip-path="url(#clip0_583_537)">
                    <path
                      d="M15.1761 3.93732L15.1667 24.5213C15.1667 24.8749 15.3072 25.2141 15.5573 25.4641C15.8073 25.7142 16.1465 25.8547 16.5001 25.8547C16.8537 25.8547 17.1928 25.7142 17.4429 25.4641C17.6929 25.2141 17.8334 24.8749 17.8334 24.5213L17.8427 3.95999L21.7254 7.84399C21.9754 8.09395 22.3145 8.23437 22.6681 8.23437C23.0216 8.23437 23.3607 8.09395 23.6107 7.84399C23.8607 7.59395 24.0011 7.25488 24.0011 6.90132C24.0011 6.54777 23.8607 6.20869 23.6107 5.95866L19.3294 1.67199C18.9579 1.30029 18.5169 1.00542 18.0314 0.804239C17.5459 0.60306 17.0256 0.499512 16.5001 0.499512C15.9746 0.499512 15.4542 0.60306 14.9687 0.804239C14.4833 1.00542 14.0422 1.30029 13.6707 1.67199L9.3894 5.95466C9.13944 6.20469 8.99902 6.54377 8.99902 6.89732C8.99902 7.25088 9.13944 7.58995 9.3894 7.83999C9.63944 8.08995 9.97852 8.23037 10.3321 8.23037C10.6856 8.23037 11.0247 8.08995 11.2747 7.83999L15.1761 3.93732Z"
                      fill="white" />
                    <path
                      d="M29.8333 23.1666V28.4999C29.8333 28.8535 29.6929 29.1927 29.4428 29.4427C29.1928 29.6928 28.8536 29.8333 28.5 29.8333H4.5C4.14638 29.8333 3.80724 29.6928 3.55719 29.4427C3.30714 29.1927 3.16667 28.8535 3.16667 28.4999V23.1666C3.16667 22.813 3.02619 22.4738 2.77614 22.2238C2.52609 21.9737 2.18696 21.8333 1.83333 21.8333C1.47971 21.8333 1.14057 21.9737 0.890524 22.2238C0.640476 22.4738 0.5 22.813 0.5 23.1666L0.5 28.4999C0.5 29.5608 0.921427 30.5782 1.67157 31.3283C2.42172 32.0785 3.43913 32.4999 4.5 32.4999H28.5C29.5609 32.4999 30.5783 32.0785 31.3284 31.3283C32.0786 30.5782 32.5 29.5608 32.5 28.4999V23.1666C32.5 22.813 32.3595 22.4738 32.1095 22.2238C31.8594 21.9737 31.5203 21.8333 31.1667 21.8333C30.813 21.8333 30.4739 21.9737 30.2239 22.2238C29.9738 22.4738 29.8333 22.813 29.8333 23.1666Z"
                      fill="white" />
                  </g>
                  <defs>
                    <clipPath id="clip0_583_537">
                      <rect width="32" height="32" fill="white" transform="translate(0.5 0.5)" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <p class="fs-16 text-gray-600 fw-normal mb-0">Upload Resume</p>
              <input type="file" id="myFile" name="filename" hidden>
            </div>
            <div class="text-center">
              <button class="btn btn-primary-bg border-0 text-white w-100 fs-16 mt-1" type="submit"> Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="pt-80">
    <div class="px-12px">
      <div class="container">
        <h3 class="text-center text-white fw-bold fs-40 mb-60">FAQs</h3>
        <div class="p-3 p-sm-4 bg-black-200 faq-main-section">
          <div class="accordion" id="accordionExample">
            @foreach($faqs as $faq)
              <div class="accordion-item border-0 bg-transparent">
                <h2 class="accordion-header" id="heading{{ $loop->index }}">
                  <button class="accordion-button fs-16 {{ $loop->first ? '' : 'collapsed' }}" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapse{{ $loop->index }}"
                    aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                    aria-controls="collapse{{ $loop->index }}">
                    {{ $faq->title }}
                  </button>
                </h2>
                <div id="collapse{{ $loop->index }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                  aria-labelledby="heading{{ $loop->index }}" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p class="fs-16 text-gray-600 fw-normal mb-0">{{ $faq->description }}</p>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- team-section -->
  <section class="pt-80">
    <div class="team-section">
      <div class="container">
        <div class="text-center">
          <h2 class="fs-40 fw-bold text-white mb-3 mb-lg-4">Join Our Team</h2>
          <p class="fs-18 fw-normal text-gray-600 mb-3 mb-lg-4">Interested in joining our team?  <br>
            We’re always open to skilled professionals who share our passion for granite, design, and excellent service.
            Whether you’re an experienced architect, a craftsperson, or someone who genuinely loves the art of natural
            stones, we’d love to hear from you.</p>
          <p class="fs-18 fw-normal text-gray-600 mb-3 mb-lg-4">At Bimla Stone, it’s not just about the products, it’s
            about people, creativity, and building something beautiful together.</p>
          <p class="fs-18 fw-bold text-gray-600 mb-3 mb-lg-4">Drop us a message or your resume here at</p>
          <a href="mailto:info@bimlastone.com"
            class="btn btn-primary-bg border-0 text-white w-100 fs-16 mb-3 break-all text-decoration-underline">info@bimlastone.com</a>
          <p class="fs-18 fw-bold text-gray-600 mb-0">Let’s create something timeless.</p>
        </div>
      </div>
    </div>
  </section>
@endsection
