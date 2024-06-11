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
                <h1 class="display-2 text-white animated slideInDown mb-4">About Us</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-4">The Family Resource Center</h1>
                        <p>The Family Resource Center was founded with a mission to address the crucial need for early childhood development support in Newfoundland and Labrador. Over the years, we have grown into a trusted community resource, serving families across the province with dedication and passion.</p>

                    </div>
                    <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img class="img-fluid w-75 rounded-circle bg-light p-3" src="img/about-1.jpg" alt="">
                            </div>
                            <div class="col-6 text-start" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="img/about-2.jpg" alt="">
                            </div>
                            <div class="col-6 text-end" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="img/about-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->




        @include('home.includes.footer')
