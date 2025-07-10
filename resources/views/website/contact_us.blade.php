@extends('layouts.website')
@section('title', 'Bimla Stones - Products')
@section('content')
<!-- visit-section -->
  <section class="visit-section pt-80">
    <div class="px-12px">
      <div class="container">
        <div class="section-heading w-100 mx-auto mb-60">
          <h3 class="fs-40 fw-bold text-center text-white mb-0">Visit Our Factory</h3>
        </div>
        <div class="row row-gap-4">
          <div class="col-lg-6">
            <div class="map-iframe w-100 h-100">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d249763.5119471339!2d76.8181749!3d12.0052719!3m2!1i1024!2i768!4f13.1!2m1!1sAddress%20SY%20NO%20100-1%20101-1%20Badanguppe%20Village%20Kasba%20Hobli%20chamarajanagar%20Mysore%20Taluk%20%26%20District%20Karnataka%20571313%20India!5e0!3m2!1sen!2sin!4v1751885793583!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="ps-0 ps-lg-4">
              <h3 class="fs-32 fw-normal text-white">{{$section3->value}}</h3>
              <div class="mb-40">
                <p class="text-gray-600 fw-normal fs-18 mb-0"> Address: </p>
                <p class="text-gray-600 fw-normal fs-18 mb-0"> {{$section4->value}}</p>
              </div>
              <p class="fs-24 fw-normal text-white mb-2">Factory Hours</p>
              <p class="text-gray-600 fw-normal fs-18 mb-2 mt-1">{{$section5->value}}</p>
              <p class="text-gray-600 fw-normal fs-18 mb-0 mt-1">Visitors and founders are always welcome.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- founders-section -->
  <section class="founders-section pt-80">
    <div class="container">
      <div class="px-12px">
        <div class="section-heading w-100 mx-auto mb-60">
          <h3 class="fs-40 fw-bold text-center text-white mb-3">Talk to Our Founders</h3>
          <p class="text-center text-gray-600 fw-normal mb-0 fs-18">For enquiries, partnerships, or export
            collaborations:</p>
        </div>
        <div class="founders-slider">

          @foreach($founders as $founder)
          <div>
            <div class="founders-card">
              <div class="founders-img rounded-circle h-100 w-100 mx-auto mb-3">
                <img src="{{ asset('uploads/founders/'. $founder->image) }}" alt="images"
                  class="h-100 w-100 object-fit-cover rounded-circle" />
              </div>
              <h2 class="fs-18 text-black-100 fw-bold mb-3">{{$founder->name}}</h2>
              <p class="fs-18 fw-normal mb-0 text-black">{{$founder->description}}</p>
              <a href="tel:+91 9448051397"
                class="d-flex align-items-center gap-2 fs-18 text-black fw-normal text-decoration-none">
                <img src="{{ asset('assets/images/phone.svg') }}" alt="phone-svg" />
                {{$founder->phone_number}}</a>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>
  </section>
  <!-- Exports -->
  <section class="pt-80">
    <div class="px-12px">
      <div class="container">
        <div class="exports-section">
          <div class="section-heading w-100 mx-auto">
            <h3 class="fs-40 fw-bold text-center text-white mb-4">Logistics & Exports</h3>
            <p class="text-center text-gray-600 fw-normal mb-60 fs-18">We deliver PAN-India and to global destinations
              with complete quality assurance, export packaging, and trusted shipping support.</p>
            <div class="d-flex justify-content-center">
              <a href="#" class="btn btn-primary-bg border-0 text-white w-100 fs-16">Send Us a Message</a>
            </div>
          </div>
        </div>
        <p class="text-gray-600 fs-18 fw-normal text-center mb-0 pt-80">Have a question or request? Fill out the form
          below and our team will get in touch with you shortly.</p>
      </div>
    </div>
  </section>
  <!-- contact-section -->
  <section class="contact-section pt-80">
    <div class="container">
      <div class="px-12px">
        <div class="d-flex gap-50">
          <div class="contact-form">
            <h2 class="fs-18 fw-bold text-gray-600 mb-20">Contact Form</h2>
            <p class="fs-40 fw-bold text-white mb-20">We’d love to hear from you.</p>
            <p class="fs-18 fw-normal text-gray-600 mb-20">Just fill in the form below and our team will reach out
              shortly.</p>
            <form>
              <div class="mb-40">
                <input type="text" class="form-control w-100 mb-2 mb-sm-3 mb-lg-4 text-white fw-normal fs-16"
                  placeholder="Name" required />
                <input type="text" class="form-control w-100 mb-2 mb-sm-3 mb-lg-4 text-white fw-normal fs-16"
                  placeholder="Email" required />
                <input type="text" class="form-control w-100 mb-2 mb-sm-3 mb-lg-4 text-white fw-normal fs-16"
                  placeholder="Phone Number" required />
                <input type="text" class="form-control w-100 mb-2 mb-sm-3 mb-lg-4 text-white fw-normal fs-16"
                  placeholder="Company Name" required />
                <input type="text" class="form-control w-100 text-white fw-normal fs-16"
                  placeholder="Your Country / Location" required />
              </div>
              <h3 class="fs-16 fw-semibold text-white mb-3">Consent & Submit*</h3>
              <div class="mb-40 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label fs-16 text-gray-600 fw-normal" for="exampleCheck1">I consent to Bimla
                  Stone using my information to respond to my query</label>
              </div>
              <button type="submit" class="btn btn-primary-bg border-0 text-white w-100 fs-16 mt-0 mt-lg-4">Submit Your
                Enquiry</button>
            </form>
          </div>
          <div class="position-relative contact-images w-100">
            <div class="contact-bg-1 position-absolute w-100 h-100">
              <img src="{{ asset('assets/images/contact-bg-1.jpg') }}" alt="images" class="h-100 w-100 object-fit-cover" />
            </div>
            <div class="contact-bg-2 ms-auto w-100 h-100">
              <img src="{{ asset('assets/images/contact-bg-2.jpg') }}" alt="images" class="h-100 w-100 object-fit-cover" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Stronger-section -->
  <section class="pt-80">
    <div class="stronger-section">
      <div class="container">
        <div class="section-heading w-100 mx-auto text-white">
          <h3 class="fs-40 fw-normal text-center text-white mb-4">{{$section2->title}}</h3>
          <p class="text-center text-gray-600 fw-normal mb-0 fs-18">{!! $section2->description !!}</p>
        </div>
      </div>
    </div>
  </section>
@endsection
