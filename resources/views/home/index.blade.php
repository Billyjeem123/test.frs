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
        <!-- Navbar End -->

        @if (session('message'))
    <div class="alert alert-danger">
        {{ session('message') }}
    </div>
@endif



        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="/assets/img/carousel-1.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .2);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-2 text-white animated slideInDown mb-4">Free learning and development programs for children ages 0-6 years </h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                    <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="/assets/img/carousel-2.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .2);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-2 text-white animated slideInDown mb-4">Make A Brighter Future For Your Child</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                    <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Learn More</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Facilities Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Facilities</h1>
                    <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="facility-item">
                            <div class="facility-icon bg-primary">
                                <span class="bg-primary"></span>
                                <i class="fa fa-bus-alt fa-3x text-primary"></i>
                                <span class="bg-primary"></span>
                            </div>
                            <div class="facility-text bg-primary">
                                <h3 class="text-primary mb-3">Facility</h3>
                                <p class="mb-0">Eirmod sed ipsum dolor sit rebum magna erat lorem kasd vero ipsum sit</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="facility-item">
                            <div class="facility-icon bg-success">
                                <span class="bg-success"></span>
                                <i class="fa fa-futbol fa-3x text-success"></i>
                                <span class="bg-success"></span>
                            </div>
                            <div class="facility-text bg-success">
                                <h3 class="text-success mb-3">Facility</h3>
                                <p class="mb-0">Eirmod sed ipsum dolor sit rebum magna erat lorem kasd vero ipsum sit</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="facility-item">
                            <div class="facility-icon bg-warning">
                                <span class="bg-warning"></span>
                                <i class="fa fa-home fa-3x text-warning"></i>
                                <span class="bg-warning"></span>
                            </div>
                            <div class="facility-text bg-warning">
                                <h3 class="text-warning mb-3">Facility</h3>
                                <p class="mb-0">Eirmod sed ipsum dolor sit rebum magna erat lorem kasd vero ipsum sit</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="facility-item">
                            <div class="facility-icon bg-info">
                                <span class="bg-info"></span>
                                <i class="fa fa-chalkboard-teacher fa-3x text-info"></i>
                                <span class="bg-info"></span>
                            </div>
                            <div class="facility-text bg-info">
                                <h3 class="text-info mb-3">Facility</h3>
                                <p class="mb-0">Eirmod sed ipsum dolor sit rebum magna erat lorem kasd vero ipsum sit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facilities End -->






        <!-- Facilities (Gallery) Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Gallery</h1>
            <p>Explore the vibrant moments and engaging activities at our centers through our gallery.</p>
        </div>

        <div class="row g-4">
            @foreach($galleries as $gallery)
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="gallery-item">
                        <img src="{{ asset($gallery->image) }}" alt="Gallery Image" class="img-fluid rounded" style="width: 100%; height: 200px; object-fit: cover; object-position: center;">
                    </div>
                </div>
            @endforeach
                <br> <br>
                @if($galleries->count() > 0 )

                    <!-- Pagination Section -->
                    <div class="pagination-section">
                        <div class="d-flex justify-content-center " style="margin-top: 30px">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center flex-wrap">
                                    @if ($galleries->onFirstPage())
                                        <li class="page-item disabled"><span class="page-link">Prev</span></li>
                                    @else
                                        <li class="page-item"><a class="page-link" href="{{ $galleries->previousPageUrl() }}">Prev</a></li>
                                    @endif

                                    @foreach ($galleries->getUrlRange(1, $galleries->lastPage()) as $page => $url)
                                        <li class="page-item {{ ($page == $galleries->currentPage()) ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endforeach

                                    @if ($galleries->hasMorePages())
                                        <li class="page-item"><a class="page-link" href="{{ $galleries->nextPageUrl() }}">Next</a></li>
                                    @else
                                        <li class="page-item disabled"><span class="page-link">Next</span></li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                @endif
        </div>



    </div>
</div>
<!-- Facilities (Gallery) End -->

<style>
/* Additional CSS for the Gallery */
.gallery-item img {
    width: 100%;
    height: auto;
    transition: transform 0.3s ease;
}

.gallery-item img:hover {
    transform: scale(1.05);
}
</style>




        <!-- Facilities Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow " data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Our Sponsors</h1>
                    <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="facility-item">
                            <div class="facility-icon bg-primary position-relative" style="position: relative; width: 100px; height: 100px; border-radius: 50%; overflow: hidden; display: flex; justify-content: center; align-items: center;">
                                <span class="bg-primary"></span>
                                <!-- Replace the icon with an image -->
                                <img src="http://127.0.0.1:8000/storage/uploads/1718175974_7.jpeg" alt="Sponsor Logo" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                                <span class="bg-primary"></span>
                            </div>
                            <div class="facility-text bg-primary">
                                <h3 class="text-primary mb-3">SPONSOR LOGO</h3>
                                <p class="mb-0">Eirmod sed ipsum dolor sit rebum magna erat lorem kasd vero ipsum sit</p>
                            </div>
                        </div>
                    </div>





                    <div class="row g-4">
                        @foreach($galleries as $gallery)
                            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="gallery-item">
                                    <img src="{{ asset($gallery->image) }}" alt="Gallery Image" class="img-fluid rounded" style="width: 100%; height: 200px; object-fit: cover; object-position: center;">
                                </div>
                            </div>
                        @endforeach
                        <br> <br>
                        @if($galleries->/count() > 0 )

                            <!-- Pagination Section -->
                            <div class="pagination-section">
                                <div class="d-flex justify-content-center " style="margin-top: 30px">
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination justify-content-center flex-wrap">
                                            @if ($galleries->onFirstPage())
                                                <li class="page-item disabled"><span class="page-link">Prev</span></li>
                                            @else
                                                <li class="page-item"><a class="page-link" href="{{ $galleries->previousPageUrl() }}">Prev</a></li>
                                            @endif

                                            @foreach ($galleries->getUrlRange(1, $galleries->lastPage()) as $page => $url)
                                                <li class="page-item {{ ($page == $galleries->currentPage()) ? 'active' : '' }}">
                                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                                </li>
                                            @endforeach

                                            @if ($galleries->hasMorePages())
                                                <li class="page-item"><a class="page-link" href="{{ $galleries->nextPageUrl() }}">Next</a></li>
                                            @else
                                                <li class="page-item disabled"><span class="page-link">Next</span></li>
                                            @endif
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        @endif
                    </div>





                </div>
            </div>
        </div>
        <!-- School End -->



<header></header>



        <!-- Testimonial Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Testimonials</h1>
                    <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-light rounded p-5">
                        <p class="fs-5">Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>
                        <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 90px; height: 90px;">
                            <div class="ps-3">
                                <h3 class="mb-1">Client Name</h3>
                                <span>Profession</span>
                            </div>
                            <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-5">
                        <p class="fs-5">Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>
                        <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 90px; height: 90px;">
                            <div class="ps-3">
                                <h3 class="mb-1">Client Name</h3>
                                <span>Profession</span>
                            </div>
                            <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-5">
                        <p class="fs-5">Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>
                        <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 90px; height: 90px;">
                            <div class="ps-3">
                                <h3 class="mb-1">Client Name</h3>
                                <span>Profession</span>
                            </div>
                            <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        @include('home.includes.footer')
