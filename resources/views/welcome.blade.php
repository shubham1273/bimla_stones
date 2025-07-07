<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bimla Stones</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    </head>
    <body class="">
        <div class="p-4 m-4 border border-secondary">
            <h4>Contact Us</h4>
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                    <label>
                    Name:
                    <input type="text" name="name" required>
                    </label>
                    <br><br>

                    <label>
                    Email:
                    <input type="email" name="email" required>
                    </label>
                    <br><br>

                    <label>
                    Phone Number:
                    <input type="tel" name="phone" required>
                    </label>
                    <br><br>

                    <label>
                    Company Name:
                    <input type="text" name="company">
                    </label>
                    <br><br>

                    <label>
                    Country / Location:
                    <input type="text" name="location">
                    </label>
                    <br><br>

                    <label>
                    <input type="checkbox" name="consent" required>
                    I consent to Bimla Stone using my information to respond to my query
                    </label>
                    <br><br>

                    <button type="submit">Submit Your Enquiry</button>
            </form>
        </div>

        <div class="p-4 m-4 border border-secondary">
            <h4>Get in Touch</h4>

            <!-- Button trigger modal -->
            <div class="text-center">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#getInTouchModal">
                Get In Touch
                </button>
            </div>

            <!-- Modal -->
            <div class="modal modal-dialog modal-dialog-scrollable" id="getInTouchModal" tabindex="-1" aria-labelledby="getInTouchModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="getInTouchModalLabel">Get In Touch</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="{{ route('get_in_touch.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="modal-body">
                        <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="full_name" class="form-label">Full Name *</label>
                            <input type="text" class="form-control" id="full_name" name="full_name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone Number* (with country code)</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>
                        </div>

                        <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="company_name" class="form-label">Company Name (Optional)</label>
                            <input type="text" class="form-control" id="company_name" name="company_name">
                        </div>
                        <div class="col-md-6">
                            <label for="looking_for" class="form-label">What are you looking for?</label>
                            <select class="form-select" id="looking_for" name="looking_for">
                            <option selected disabled>Select an option</option>
                            <option value="blocks">Blocks</option>
                            <option value="slabs">Slabs (2cm–30cm)</option>
                            <option value="cut_to_size">Cut-to-Size Orders / Project Supply</option>
                            <option value="tiles">Tiles</option>
                            <option value="cobble_stones">Cobble Stones</option>
                            <option value="monuments">Monuments</option>
                            <option value="export_inquiry">Export Inquiry</option>
                            <option value="other">Other</option>
                            </select>
                        </div>
                        </div>

                        <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email ID *</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="location" class="form-label">Your Location</label>
                            <input type="text" class="form-control" id="location" name="location">
                        </div>
                        </div>

                        <div class="mb-3">
                        <label for="details" class="form-label">Any specific details, sizes, or queries?</label>
                        <textarea class="form-control" id="details" name="details" rows="4"></textarea>
                        </div>

                        <div class="mb-3">
                        <label for="reference_image" class="form-label">Upload a reference image (if any)</label>
                        <input class="form-control" type="file" id="reference_image" name="reference_image" accept="image/*">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit Enquiry</button>
                    </div>
                    </form>
                </div>
                </div>
            </div>

        </div>


        <div class="p-4 m-4 border border-secondary">
            <h4>Get a Quote</h4>

            <div class="text-center">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#quoteModal">
                  Get a Quote
                </button>
            </div>


            <!-- Modal -->
                <div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="quoteModalLabel">Get A Quote</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form action="{{ route('quote.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="modal-body">
                            <div class="row">
                            <!-- Form Fields -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                                </div>

                                <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                </div>

                                <div class="mb-3">
                                <label for="number" class="form-label">Number</label>
                                <input type="tel" class="form-control" id="number" name="phone_number" required>
                                </div>

                                <div class="mb-3">
                                <label for="product_type" class="form-label">Product Type</label>
                                <select class="form-select" id="product_type" name="product_type">
                                    <option selected disabled>Choose Product Type</option>
                                    <option value="blocks">Blocks</option>
                                    <option value="slabs">Slabs (2cm–30cm)</option>
                                    <option value="cut_to_size">Cut-to-Size Orders / Project Supply</option>
                                    <option value="tiles">Tiles</option>
                                    <option value="cobble_stones">Cobble Stones</option>
                                    <option value="monuments">Monuments</option>
                                    <option value="export_inquiry">Export Inquiry</option>
                                    <option value="other">Other</option>
                                </select>
                                </div>

                                <button type="submit" class="btn btn-dark w-100">Submit</button>
                            </div>

                            <!-- Image Preview -->
                            <div class="col-md-6 text-center">
                                <img src="https://via.placeholder.com/300x300.png?text=Product+Image" alt="Preview" class="img-fluid rounded">
                            </div>
                            </div>

                            <!-- Checkbox Dropdown (Optional block) -->
                            <div class="mt-4">
                            <p class="mb-2"><strong>Product Options</strong></p>
                            <div class="row row-cols-2">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="options[]" value="blocks" id="blocks">
                                <label class="form-check-label" for="blocks">BLOCKS</label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="options[]" value="slabs" id="slabs">
                                <label class="form-check-label" for="slabs">SLABS (2cm–30cm)</label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="options[]" value="cut_to_size" id="cut_to_size">
                                <label class="form-check-label" for="cut_to_size">CUT-TO-SIZE ORDERS / PROJECT SUPPLY</label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="options[]" value="tiles" id="tiles">
                                <label class="form-check-label" for="tiles">TILES</label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="options[]" value="cobble" id="cobble">
                                <label class="form-check-label" for="cobble">COBBLE STONES</label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="options[]" value="monuments" id="monuments">
                                <label class="form-check-label" for="monuments">MONUMENTS</label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="options[]" value="export" id="export">
                                <label class="form-check-label" for="export">EXPORT INQUIRY</label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="options[]" value="other" id="other">
                                <label class="form-check-label" for="other">OTHER</label>
                                </div>
                            </div>
                            </div>

                        </div>
                        </form>
                    </div>
                    </div>
                </div>

        </div>

        <div class="container py-5">
            <h2 class="text-center mb-4">Job Application Form</h2>
            <form action="{{ route('job.apply') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                    </div>

                    <div class="col-md-6">
                        <input type="tel" name="phone_number" class="form-control" placeholder="Phone Number" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <input type="email" name="email" class="form-control" placeholder="Email ID" required>
                    </div>

                    <div class="col-md-6">
                        <select name="position" class="form-select" required>
                            <option selected disabled>Position Applying For</option>
                            <option>Frontend Developer</option>
                            <option>Backend Developer</option>
                            <option>Designer</option>
                            <option>Marketing</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <textarea name="cover_letter_message" class="form-control" rows="5" placeholder="Cover Letter / Message"></textarea>
                </div>

                <div class="mb-3 text-center">
                    <label for="resumeUpload" class="form-label d-block">Upload Resume</label>
                    <input class="form-control" type="file" name="resume" id="resumeUpload" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-light px-5">Submit</button>
                </div>
            </form>

          </div>


    </body>
</html>
