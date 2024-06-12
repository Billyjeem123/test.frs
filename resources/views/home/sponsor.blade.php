@include('home.includes.header')

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        @include('home.includes.nav')


        <!-- Page Header End -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">Sponsor Us</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Sponsor Us</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


            <!-- Sponsor Registration Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Become a Sponsor</h1>
            <p>Join us in making a difference in the lives of children by becoming a valued sponsor. Fill out the form below to register your interest.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="wow fadeInUp" data-wow-delay="0.3s">
                    <form action="{{ route('submit_sponsor') }}" method="POST" class="bg-light p-5 rounded shadow">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter your full name" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email address" required>
                        </div>
                        <div class="mb-4">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Enter your phone number" required>
                        </div>
                        <div class="mb-4">
                            <label for="company" class="form-label">Company Name</label>
                            <input type="text" id="company" name="company" class="form-control" placeholder="Enter your company name">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="form-label">Message</label>
                            <textarea id="message" name="message" class="form-control" rows="4" placeholder="Tell us why you want to be a sponsor"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary py-3 px-5">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sponsor Registration End -->

<style>
/* Additional CSS for the Sponsor Registration Form */
.container-xxl {
    background-color: #f9f9f9; /* Light background color for contrast */
    padding: 60px 0; /* Ensure there is enough padding around the form */
}

.form-control {
    border-radius: 0.25rem; /* Rounded corners for inputs */
    border: 1px solid #ced4da; /* Light grey border */
    box-shadow: none; /* Remove default input shadow */
}

.form-label {
    font-weight: 600; /* Make labels bold for emphasis */
}

.btn-primary {
    background-color: #007bff; /* Standard Bootstrap primary color */
    border-color: #007bff;
    transition: background-color 0.3s ease;
}

.btn-primary:hover {
    background-color: #0056b3; /* Darker shade on hover */
}

.bg-light {
    background-color: #ffffff !important; /* Ensure the form background is white */
    border-radius: 0.5rem; /* Slightly rounded corners for the form */
}

.shadow {
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important; /* Light shadow for depth */
}

@media (max-width: 768px) {
    .container-xxl {
        padding: 30px 0; /* Reduce padding on smaller screens */
    }

    .form-control {
        margin-bottom: 15px; /* Space out form elements on smaller screens */
    }
}
</style>



        @include('home.includes.footer')
