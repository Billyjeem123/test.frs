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
                <h1 class="display-2 text-white animated slideInDown mb-4">Events</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Event</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Facilities (Gallery) Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Events</h1>
                    <p>Update of Upcoming events at FRC.</p>
                </div>
                <div class="row g-4">
                    @foreach($events as $gallery)
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="gallery-item">
                                <img src="{{ asset($gallery->image) }}" alt="Gallery Image" class="img-fluid rounded" style="width: 100%; height: 200px; object-fit: cover; object-position: center;">
                            </div>
                        </div>
                    @endforeach
                    <br> <br>
                    @if($events->count() > 0 )

                        <!-- Pagination Section -->
                        <div class="pagination-section">
                            <div class="d-flex justify-content-center " style="margin-top: 30px">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-center flex-wrap">
                                        @if ($events->onFirstPage())
                                            <li class="page-item disabled"><span class="page-link">Prev</span></li>
                                        @else
                                            <li class="page-item"><a class="page-link" href="{{ $events->previousPageUrl() }}">Prev</a></li>
                                        @endif

                                        @foreach ($events->getUrlRange(1, $events->lastPage()) as $page => $url)
                                            <li class="page-item {{ ($page == $events->currentPage()) ? 'active' : '' }}">
                                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                            </li>
                                        @endforeach

                                        @if ($events->hasMorePages())
                                            <li class="page-item"><a class="page-link" href="{{ $events->nextPageUrl() }}">Next</a></li>
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
        <!-- Team End -->

        @include('home.includes.footer')
