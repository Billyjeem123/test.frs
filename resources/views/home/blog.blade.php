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
                <h1 class="display-2 text-white animated slideInDown mb-4">Blog</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Facilities (Gallery) Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Blog News</h1>
                    <p>Know what is trending in our community.</p>
                </div>
                <div class="row g-4">
                    <!-- Gallery Item 1 -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="gallery-item">
                            <img src="/assets/img/carousel-1.jpg" alt="Gallery Image 1" class="img-fluid rounded">
                        </div>
                    </div>
                    <!-- Gallery Item 2 -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="gallery-item">
                            <img src="/assets/img/carousel-1.jpg" alt="Gallery Image 2" class="img-fluid rounded">
                        </div>
                    </div>
                    <!-- Gallery Item 3 -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="gallery-item">
                            <img src="/assets/img/carousel-1.jpg" alt="Gallery Image 3" class="img-fluid rounded">
                        </div>
                    </div>
                    <!-- Gallery Item 4 -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="gallery-item">
                            <img src="/assets/img/carousel-1.jpg" alt="Gallery Image 4" class="img-fluid rounded">
                        </div>
                    </div>
                    <!-- Additional Gallery Items -->
                    <!-- Add more .col-lg-3 .col-sm-6 blocks for more images as needed -->
                </div>
            </div>
        </div>
        <!-- Facilities (Gallery) End -->
        <!-- Team End -->

        @include('home.includes.footer')