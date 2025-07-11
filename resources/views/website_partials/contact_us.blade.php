<form id="quickContactForm">
              <div class="mb-40">
                <label class="fs-14 text-white fw-normal mb-2">Full Name <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control w-100 mb-2 mb-sm-3 mb-lg-4 text-white fw-normal fs-16"
                  placeholder="Please enter your first and last name" required />

                <label class="fs-14 text-white fw-normal mb-2">Email Address <span class="text-danger">*</span></label>
                <input type="email" name="email" class="form-control w-100 mb-2 mb-sm-3 mb-lg-4 text-white fw-normal fs-16"
                  placeholder="We'll use this to get back to you" required />

                <label class="fs-14 text-white fw-normal mb-2">Phone Number <span class="text-danger">*</span></label>
                <input type="text" name="phone" class="form-control w-100 mb-2 mb-sm-3 mb-lg-4 text-white fw-normal fs-16"
                  placeholder="Include country code if you're outside India" />

                <label class="fs-14 text-white fw-normal mb-2">Company Name <span class="text-danger">*</span></label>
                <input type="text" name="company" class="form-control w-100 mb-2 mb-sm-3 mb-lg-4 text-white fw-normal fs-16"
                  placeholder="Optional – if you’re contacting on behalf of a business" />

                <label class="fs-14 text-white fw-normal mb-2">Your Country / Location <span class="text-danger">*</span></label>
                <input type="text" name="location" class="form-control w-100 text-white fw-normal fs-16"
                  placeholder="This helps us understand export/delivery needs" />
              </div>

              <h3 class="fs-16 fw-semibold text-white mb-3">Consent & Submit*</h3>
              <div class="mb-40 form-check">
                <input type="checkbox" name="consent" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label fs-16 text-gray-600 fw-normal" for="exampleCheck1">
                  I consent to Bimla Stone using my information to respond to my query
                </label>
              </div>

              <div id="quickContactAlert" class="alert d-none"></div>

              <button type="submit" class="btn btn-primary-bg border-0 text-white w-100 fs-16 mt-0 mt-lg-4">
                Submit Your Enquiry
              </button>
            </form>
