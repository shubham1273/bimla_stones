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
          <form id="jobApplyForm" enctype="multipart/form-data">
              @csrf
              <div id="jobAlert"></div>

              <div class="row">
                  <div class="col-lg-6">
                      <input type="text" name="name" class="form-control mb-3 fs-16" placeholder="Full Name *" required />
                  </div>
                  <div class="col-lg-6">
                      <input type="text" name="phone_number" class="form-control mb-3 fs-16" placeholder="Phone Number* (with country code)" required />
                  </div>
                  <div class="col-lg-6">
                      <input type="email" name="email" class="form-control mb-3 fs-16" placeholder="Email ID" required />
                  </div>
                  <div class="col-lg-6">
                      <div class="dropdown mb-3">
                          <button class="form-control dropdown-toggle d-flex justify-content-between align-items-center fs-16 fw-normal" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Position Applying For
                          </button>
                          <div class="dropdown-menu p-2" style="max-height: 200px; overflow-y: auto;">
                              @foreach ([
                                  'Frontend Developer',
                                  'Backend Developer',
                                  'Designer',
                                  'Marketing',
                                  'Export Manager'
                              ] as $position)
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="position[]" value="{{ $position }}" id="position_{{ Str::slug($position) }}" />
                                      <label class="form-check-label fs-16 fw-normal text-gray-600" for="position_{{ Str::slug($position) }}">
                                          {{ $position }}
                                      </label>
                                  </div>
                              @endforeach
                          </div>
                      </div>
                  </div>
              </div>

              <textarea name="cover_letter_message" class="form-control mb-3 fs-16" placeholder="Cover Letter / Message" rows="4"></textarea>

              <div class="file-upload-box d-flex justify-content-center flex-column gap-3" onclick="document.getElementById('resumeFile').click();">
                  <div class="text-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                          <g clip-path="url(#clip0_583_537)">
                              <path d="M15.1761 3.93732L15.1667 24.5213..." fill="white" />
                              <path d="M29.8333 23.1666V28.4999..." fill="white" />
                          </g>
                          <defs>
                              <clipPath id="clip0_583_537">
                                  <rect width="32" height="32" fill="white" transform="translate(0.5 0.5)" />
                              </clipPath>
                          </defs>
                      </svg>
                  </div>
                  <p class="fs-16 text-gray-600 fw-normal mb-0">Upload Resume</p>
                  <input type="file" name="resume" id="resumeFile" class="d-none" required>
              </div>

              <div class="text-center">
                  <button class="btn btn-primary-bg border-0 text-white w-100 fs-16 mt-1" type="submit">Submit</button>
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

  <script>
    document.getElementById('jobApplyForm').addEventListener('submit', function(e) {
        e.preventDefault();

        let form = e.target;
        let formData = new FormData(form);

        fetch("{{ route('job.apply') }}", {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            let alertBox = document.getElementById('jobAlert');
            if (data.success) {
                alertBox.innerHTML = `<div class="alert alert-success">${data.message}</div>`;
                form.reset();
            } else {
                alertBox.innerHTML = `<div class="alert alert-danger">${data.message || 'Something went wrong.'}</div>`;
            }
        })
        .catch(error => {
            console.error(error);
            document.getElementById('jobAlert').innerHTML = `<div class="alert alert-danger">An error occurred while submitting the form.</div>`;
        });
    });
</script>

@endsection
